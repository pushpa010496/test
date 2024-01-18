<?php
namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;

use App\Models\Form;
use Auth;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use \Session;
use \DB;
use \Mail;
use App\Models\Country;
use App\Http\Requests\CommanRequest;
use App\Models\Download;
use App\Models\Subscriber;
use App\Models\Register;
use App\Models\Event;
use App\Models\SeoPage;
use App\Models\Page;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Models\MagazineSubscribe;
use Response;

class FormController extends HomeController
{


    public function mediapacks(CommanRequest $request)
    {
        $banners = $this->banners; 
         $this->seoTools(request()->segment(1));
        $countries =  Country::pluck('title','title')->prepend('-- Select country* --','');
         if(\Request::isMethod('post')){
             if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
            if($this->checkgooglecaptha($captcha)==true){
            $form = new Download();
            $form->fullname = $request->firstname .' '.$request->lastname;
            $form->firstname=$request->firstname;
            $form->lastname=$request->lastname;
            $form->email = $request->email;
            $form->telephone = $request->mobile;
            $form->company = $request->company;
            $form->country_name = $request->country;
            $form->designation = $request->cf_leads_jobtitle;
            $form->description = $request->description;
            $form->type = 'mediapack';
            $form->whom = $request->whom;  
            $form->save();

             /*Send email admin*/  
        $data = [
            'name'=> $request->firstname .' '.$request->lastname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->mobile,
            'job_title' =>$request->cf_leads_jobtitle,  
            'description' =>$request->description, 
            'country'=>$request->country,           
            'type' => 'Mediapack Download', 
            'whom' => $request->whom,           
            'subject_client' => trans('messages.mediapacks_client'),
            'subject_admin' => 'Media Pack Download -' .$request->email .trans('messages.mediapacks_admin'),
         ];
        //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
          $message->to(trans('messages.advert-email'));
            
         //$message->to('ravi@ochre-media.com');
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.mediapack.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });
           return redirect()->route('mediapacks.success')->with(['status'=>'true']);
           }else{
             return redirect()->to('/');
           }
        }else{   
                
            return view('magazine.mediapack.index',compact('banners','countries'));
       }          
    }

    public function mediapackDownload()
    {
         $this->seoTools(request()->segment(1));
         if (session('status') == 'true'){
                return view('magazine.mediapack.success');
             }else{
                return redirect()->route('mediapacks');
             }   

    }

    public function mediapackdwnlink(Request $request)
    {
        $pdf =  config('app.url')."mediapack/pdf/pharmafocus-asia-mediapack.pdf";
        return ($pdf);
    }

    
    public function eNewsletter(CommanRequest $request)
    {
         $this->seoTools(request()->segment(1));  
        $banners = $this->banners; 
        if(\Request::isMethod('post')){
            if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
            if($this->checkgooglecaptha($captcha)==true){
            $form = new Subscriber();
            $form->fullname = $request->fullname ;
            $form->email = $request->email;
            $form->telephone = $request->mobile;
            $form->fax = $request->fax;            
            $form->company = $request->company;
            $form->designation = $request->cf_leads_jobtitle;
            
            $form->type = 'e-newsletter-subscribe';
            $form->save();

             /*Send email admin*/  
        $data = [
            'name'=> $request->fullname,
            'first_name'=>$request->fullname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->mobile,
            'fax'=>$request->fax,
            'job_title' =>$request->cf_leads_jobtitle,   
            'type' => 'E-Newsletter subscribe',            
            'subject_client' => trans('messages.enewsletter-subscribe_client'),            
            'subject_admin' => trans('messages.enewsletter-subscribe_admin'),
         ];
         //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.subscribe-email'));
            
        // $message->to(trans('messages.adminemail'));
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.enewsletter.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });
          return redirect()->route('enewsletter.success')->with(['status'=>'true']);
         }else{
            return redirect()->to('/');
         }
        }else{            
        
            return view('forms.enewsletter.index',compact('banners'));
        }          
    }
    public function editorialCalendar(CommanRequest $request)
    {
        $banners = $this->banners; 
        $this->seoTools(request()->segment(1)); 
        if(\Request::isMethod('post')){
             if (isset($_POST['g-recaptcha-response'])) {
         
             $captcha = $_POST['g-recaptcha-response'];
            } else {
            
                 $captcha = false;
            }
            if($this->checkgooglecaptha($captcha)==true){
            $form = new Download();
            $form->fullname = $request->firstname .' '.$request->lastname;
            $form->email = $request->email;
            $form->telephone = $request->mobile;
            $form->company = $request->company;
            $form->designation = $request->cf_leads_jobtitle;
            $form->description = $request->description;
            $form->type = 'editorial-calender';
            $form->save();

             /*Send email admin*/  
        $data = [
            'name'=> $request->firstname .' '.$request->lastname,
            'first_name'=>$request->firstname,
            'last_name'=>$request->lastname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->mobile,
            'job_title' =>$request->cf_leads_jobtitle,  
            'description' =>$request->description,            
            'type' => 'Editorial Calender',            
            'subject_client' => trans('messages.editorial-calendar_client'),            
            'subject_admin' => ucfirst($form->fullname).trans('messages.editorial-calendar_admin'),
         ];
        //$this->bitrixLeadApi($data);
        /*Admin mail*/
       Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.subscribe-email'));
                   
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.editorialcalendar.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });


        // return view('magazine.mediapack.success')->with('status','status');
           return redirect()->route('editorialcalendar.success')->with(['status'=>'true']);
           }else{
             return redirect()->to('/');
           }
        }else{  
        
            return view('magazine.editorialcalendar.index',compact('banners'));
        }          
    }

    public function editorialCalendarSuccess(Request $request)
    {        

             if (session('status') == 'true'){
                 return view('magazine.editorialcalendar.success');
             }else{
                return redirect()->route('editorialcalendar');
             }        
    }

    public function editorialCalendardwnlink(Request $request)
    {
       
         // $data =  Authorguideline::where('active_flag',1)->orderBy('id','desc')->first();

         // $pdf= config('app.url').'authorguideline/'.$data->pdf; 
        //$pdf =  trans('messages.editorial_calendar_pdf');
        $pdf = config('app.url').'calendar/pdf/EuropeanHHM-Final-Editorial-Calendar.pdf';

         return redirect($pdf);

    }



     public function registration(CommanRequest $request)
    {
        $countries =  Country::pluck('title','title')->prepend('-- Select Country* --','');
        $banners = $this->banners; 
        $this->seoTools(request()->segment(1)); 
        if(\Request::isMethod('post')){
            $form = new Register();
            $form->fullname = $request->fullname ;
            $form->email = $request->email;
            $form->telephone = $request->mobile;                
            $form->company = $request->company;
            $form->designation = $request->cf_leads_jobtitle;
            $form->description = $request->description;
            $form->magazine_de = $request->magazine_de;
            $form->current_newsletter = $request->current_newsletter;
            $form->content_newsletter = $request->content_newsletter;
            $form->special_offers = $request->special_offers;
            $form->type = 'subscribe';
            $form->save();

             /*Send email admin*/  
        $data = [
            'name'=> $request->fullname,
            'first_name'=>$request->fullname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->mobile,
            'description'=>$request->description,           
            'job_title' =>$request->cf_leads_jobtitle,  
            'magazine_de' =>$request->magazine_de,  
            'current_newsletter' =>$request->current_newsletter,  
            'content_newsletter' =>$request->content_newsletter,  
            'special_offers' =>$request->special_offers,  
            'type' => 'Subscribe',            
            'subject_client' => trans('messages.registration_client'),
            'subject_admin' =>  trans('messages.registration_admin'),
         ];
         //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.subscribe-email'));
            
        // $message->to(trans('messages.adminemail'));
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
       /*  Mail::send('emails.registration.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });*/
            
            return redirect()->route('registration.success')->with(['status'=>'true','banners'=>$banners,'countries'=>$countries]);          

        }else{            
            return view('forms.register.index',compact('banners','countries'));
        }          
    }

    //POST EVENT
    public function postEvent(CommanRequest $request)
    {
        $this->seoTools(request()->segment(1));
        $banners = $this->banners; 
        if(\Request::isMethod('post')){
            
            if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
            if($this->checkgooglecaptha($captcha)==true){
            $event = new Event();
            $event->title = $request->title ;
            $event->email = $request->email;
            $event->start_date = $request->start_date;
            $event->end_date = $request->end_date;
            $event->event_organiser = $request->event_organiser;            
            $event->web_link = $request->web_link;
            $event->venue = $request->venue;
            $event->address = $request->address;
            $event->save();
            /*Send email admin*/  
            $data = [
                'event_name'=> $request->title,
                'email'=> $request->email,
                'start_date'=> $request->start_date,
                'end_date'=>$request->end_date,
                'event_organiser'=>$request->event_organiser,
                'web_link' =>$request->web_link,  
                'venue' =>$request->venue,  
                'address' =>$request->address,  
                'type' => 'post-event',            
                'subject_client' => trans('messages.postevent_client'),
                'subject_admin' => trans('messages.postevent_admin'),
            ];
            /*Admin mail*/
            Mail::send('emails.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.subscribe-email'));
                $message->subject($data['subject_admin']);
            });
            /*Client Mail*/
           Mail::send('emails.postevent.client', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('postevent.success')->with(['status'=>'true']);
           }else{
            return redirect()->to('/');
           }
        }else{   
                 
            return view('forms.postevent.index',compact('banners'));
        }          
    }
  


public function magazineSubscribe(){


        $countries =  Country::pluck('title','title')->prepend('-- Select Country* --','');

        $banners = $this->banners; 

        $this->seoTools(request()->segment(1));  





    return view('forms.subscribe.index',compact('banners','countries'));
  }



    public function magazineSubscribepost(Request $request)
  {
    // return $request->all();
   

      $subscribe = new MagazineSubscribe();
      if($request->type=="ebook"){

     @$interested=implode(",",$request->interest);
     @$acceptance=implode(",",$request->accept);

      }

     if ($request->type=="magazine") {
    
      @$interested=implode(",",$request->int);
      @$acceptance=implode(",",$request->acceptt);

       }
     // @$interested=implode(",",$request->interest);


    

     $subscribe->name = $request->name;
     $subscribe->telephone = $request->telephone;
     $subscribe->mobile = $request->mobile;
     $subscribe->email = $request->email;
     $subscribe->fax = $request->fax;
     $subscribe->address = $request->address;
     $subscribe->type = $request->type;
     $subscribe->zipcode = $request->zipcode;
      $subscribe->whom = $request->whom;  
      @$subscribe->magazine_validity=$request->issue_packk;
     $subscribe->country = $request->country;
     if ($request->job_title =="Others") {

          $subscribe->job_title = $request->job_title1;
         
     }else{

          $subscribe->job_title =$request->job_title;
     }
    // $subscribe->job_title = isset($request->job_title) ? $request->job_title1:'';
    // $subscribe->company_type = isset($request->company_type)? $request->company_type1:'';
     $subscribe->company_type = $request->company_type;
     $subscribe->turnover = $request->turnover;
     $subscribe->purchasing_role = $request->your_role;  
     @$subscribe->intrested = $interested;
     @$subscribe->acceptance = $acceptance;
     $subscribe->message = $request->message;
     $subscribe->save();

      /*Send email admin*/  
            $data = [
               'name' => $request->name,
               'first_name'=>$request->name,
               'phone' => $request->telephone,
               'mobile' => $request->mobile,
               'email' => $request->email,
               'fax' => $request->fax,
               'address' => $request->address,
               'type' => $request->type,
               'zipcode' => $request->zipcode,   
               'whom' => $request->whom,
               'subject_client' =>'Subscription for digital version successful',
            ];
            //$this->bitrixLeadApi($data);

if($request->type=="ebook"){


  Mail::send('emails.subscribe.admin', $data, function($message) use ($data) {
       //$message->to('info@plantautomation-technology.com');
   // $message->to('bhavani@ochre-media.com');
    $message->to(trans('messages.subscribe-email'));
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
    $message->subject($data['name'].' | '." Subscribed for PFA Digital Version" );
  });
  /*Client Mail*/
 Mail::send('emails.subscribe.digital-client', $data, function($message) use ($data) {
    $message->to($data['email']);

     $message->subject("EuropeanHHM ".$data['type']. "– Magazine Subscription"  );

    });


   return redirect()->route('magazinesubscribe.success')->with(['status'=>'true']);  

 

}


if($request->type=="magazine") {


  Mail::send('emails.subscribe.admin', $data, function($message) use ($data) {
       //$message->to('info@plantautomation-technology.com');
   //$message->to('omplenquiry@ochre-media.com');

    $message->to(trans('messages.subscribe-email'));


        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
   $message->subject($data['name'].' | '." Subscribed for PFA Print Version" );
 });
  /*Client Mail*/
 Mail::send('emails.subscribe.print-client', $data, function($message) use ($data) {
    $message->to($data['email']);

     $message->subject("EuropeanHHM " .$data['type']. "– Magazine Subscription");

        //$message->subject('Sign-up Success'.'|'.$data['company'] ." as Manufacturer" );

    

});
   return redirect()->route('magazinesubscribe.success')->with(['status'=>'true']);
  }

  if($request->type=="mailing"){

    Mail::send('emails.subscribe.admin', $data, function($message) use ($data) {
       //$message->to('info@plantautomation-technology.com');
     //$message->to('omplenquiry@ochre-media.com');

        $message->to(trans('messages.subscribe-email'));

        
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
     $message->subject($data['name'].' | '." has updated their mailing address" );
   });
 
    Mail::send('emails.subscribe.mailing-client', $data, function($message) use ($data) 
    {
      $message->to($data['email']);

    $message->subject("EuropeanHHM ".$data['type']. "– Magazine Subscription");

        //$message->subject('Sign-up Success'.'|'.$data['company'] ." as Manufacturer" );
  }
  );
    return redirect()->route('magazinesubscribe.success')->with(['status'=>'true']); 
}
  }
     public function cmpmediapacks(CommanRequest $request)
    {
        $countries =  Country::pluck('title','title')->prepend('-- Select country* --','');
        if(\Request::isMethod('post')){

            $form = new Download();
            $form->fullname = $request->firstname;
            $form->email = $request->email;
            $form->telephone = $request->mobile;
            $form->company = $request->company;
            $form->country_name = $request->country;
            $form->designation = $request->job_title;
            $form->description = $request->description;
            $form->type = 'mediapack';
            $form->whom = $request->whom;  
            $form->save();

             /*Send email admin*/  
        $data = [
            'name'=> $request->firstname,
            'first_name'=>$request->firstname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->mobile,
            'job_title' =>$request->job_title,  
            'description' =>$request->description, 
            'country'=>$request->country,           
            'type' => ' cmp-Mediapack Download', 
            'whom' => $request->whom,           
            'subject_client' => 'CMP- Media Pack Download Success',
            'subject_admin' => 'CMP- Media Pack Download -' .$request->email,
         ];
        //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.mediapack.admin-cmp', $data, function($message) use ($data) {
       $message->to(trans('messages.advert-email'));
            
         //$message->to('bhavani@ochre-media.com');
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.mediapack.client-cmp', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });
           return redirect()->route('cmpmediapacks.success')->with(['status'=>'true']);

        }else{            
            return view('forms.mediapack.mediapack-cmp',compact('banners','countries'));
        }          
    }
    public function getPublished(CommanRequest $request)
    {

      $banners = $this->banners; 
    $this->seoTools(request()->segment(1));
  
     $countries =  Country::pluck('title','title')->prepend('-- Select country* --','');
    
     if(\Request::isMethod('post')){
      return $request;
          if (isset($_POST['g-recaptcha-response'])) {
          $captcha = $_POST['g-recaptcha-response'];
         } else {
              $captcha = false;
         }
         @$interested=implode(",",$request->interest);
       //  if($this->checkgooglecaptha($captcha)==true){
         $form = new Subscriber();
         $form->fullname = $request->firstname .' '.$request->lastname;
        // $form->firstname=$request->firstname;
        // $form->lastname=$request->lastname;
         $form->email = $request->email;
         $form->telephone = $request->telephone;
         $form->company = $request->company;
         $form->country_name = $request->country;
         $form->designation = $request->designation;
        // isset($request->interested) ? $request->job_title1:'';
         @$form->intrested = $interested ?? ' ';
         $form->organisation = $request->organisation;
         $form->type = 'Get Published';
        $form->save();

          /*Send email admin*/  
     $data = [
         'name'=> $request->firstname .' '.$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->telephone,
         'job_title' =>$request->designation,  
         'organisation' =>$request->organisation, 
         'country'=>$request->country,           
         'type' => 'Get Published', 
         'intrested'=> $interested ?? ' ',
         //'whom' => $request->whom,           
         'subject_client' => trans('messages.getpublished_client'),
         'subject_admin' => 'Get Published -' .$request->email .trans('messages.getpublished_admin'),
      ];
     //$this->bitrixLeadApi($data);
     /*Admin mail*/
     Mail::send('emails.getpublished.admin', $data, function($message) use ($data) {
     $message->to(trans('messages.advert-email'));
         
      //$message->to('bhavani@ochre-media.com');
     $message->subject($data['subject_admin']);
     });
     /*Client Mail*/
      Mail::send('emails.getpublished.client', $data, function($message) use ($data) {
     $message->to($data['email']);
     $message->subject($data['subject_client']);
     });
        return redirect('get-published-success');
      // return view('forms.get-published.success');
    //     }else{
    //       return redirect()->to('/');
    //     }
    //  }else{    
            
         return view('forms.get-published.index',compact('banners','countries'));
     }          
       
    }
     public function audiencebg(){
      
    
      $path ="https://industry.europeanhhm.com/promotions/pdf/Europeanhhm-Audience-breakdown.doc" ;
      
       return Response::make(file_get_contents($path), 200, [
          'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
           'Content-Disposition' => 'inline; filename="'."Europeanhhm-Audience-breakdown.doc".'"'
       ]);
    
     
    }
    public function seoTools($page)
    {
        $page = Page::where('title',$page)->first();
        $data = SeoPage::where('page_id',$page->id)->first();        
        SEOMeta::setTitle($data->meta_title);
        SEOMeta::setDescription($data->meta_description);
        SEOMeta::addMeta('Project:published_time', $data->created_at->toW3CString(), 'property');
        SEOMeta::addKeyword($data->meta_keywords);
        OpenGraph::setDescription($data->og_description);
        OpenGraph::setTitle($data->og_title);
        OpenGraph::setUrl(url()->current());
        SEOMeta::setCanonical(url()->current());
        OpenGraph::addProperty('keyword', $data->og_keywords);
        OpenGraph::addProperty('type', 'Project');
        OpenGraph::addProperty('locale', 'en_GB');
        OpenGraph::addImage([$data->og_image, 'size' => 300]);
    }

    public function checkgooglecaptha($token)
    {
        $secretKey = '6LepWukgAAAAAGDea15pwt0sI_GG9rgufeExlgwR';
          $url = 'https://www.google.com/recaptcha/api/siteverify';
          $data = ['secret'=>$secretKey,'response'=>$token];
          $options = [
              'http'=>[
                'header'=> 'Content-Type: application/x-www-form-urlencoded\r\n',
                'method'=>'POST',
                'content'=>http_build_query($data)
              ]
          ];
          $context = stream_context_create($options);
          $result = file_get_contents($url, false, $context);
          $resultJson = json_decode($result);
          return $resultJson->success;
          print_r($request);
    }
}
