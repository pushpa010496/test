<?php
namespace App\Http\Controllers\magazine;

use App\Http\Controllers\HomeController;
use App\Models\Form;
use Auth;
use App\Models\Banner;
use App\Models\Authorguideline;
use App\Models\AdvaisoryBoard;
use App\Models\Testimonial;
use App\Models\CmsPage;
use App\Models\Download;
use App\Models\Ebook;
use App\Http\Requests\CommanRequest;
use Illuminate\Http\Request;
use \Session;
use \DB;
use \Mail;
use App\Models\SeoPage;
use App\Models\Page;
// use Request;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Models\Country;
use App\Models\Subscriber;
class CmsController extends HomeController
{


  public function guidelines()
  { 

    $guideline = Authorguideline::where('active_flag', 1)->orderBy('id', 'desc')->select('description')->get();
    // $time = \Carbon\Carbon::now()->format('Y-m-d');     
    // $banners = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->get();
     $banners = $this->banners;
    $this->seoTools(request()->segment(1));  
    return view('magazine.authorguidelines.index' ,compact('guideline','banners'));
  }  

  public function guidelineDownload()
  { 
    
    $banners = $this->banners;
    return view('magazine.authorguidelines.download' ,compact('banners'));

  }  

  public function advisoryBoard()
  {       
   $advisoryboard = AdvaisoryBoard::where('active_flag', 1)->orderBy('id', 'desc')->select('description','title_tag','title','image')->get()->take(10);
   $banners = $this->banners;
   $data_count  = AdvaisoryBoard::where('active_flag', 1)->count();
   $this->seoTools(request()->segment(1)); 
   return view('magazine.advisoryboard.index' ,compact('advisoryboard','banners','data_count'));
 }  

public function advisoryboardMore($offset){
    
    $data = AdvaisoryBoard::where('active_flag',1)->orderBy('id','desc') ->offset($offset)->limit(10)->select('description','title_tag','title','image')->get();
    return response(view('magazine.advisoryboard.loadmore', compact('data'))->render());

  }


 public function testimonials()
 {       

  $testimonials = Testimonial::where('active_flag', 1)->orderBy('id', 'desc')->select('description','name','company','designation')->get()->take(10);
  $banners = $this->banners;  
 $data_count  = Testimonial::where('active_flag', 1)->count();
  $this->seoTools(request()->segment(1)); 
  return view('magazine.testimonials.index' ,compact('testimonials','banners','data_count'));
}  

public function testimonialsMore($offset){
    
    $data = Testimonial::where('active_flag',1)->orderBy('id','desc') ->offset($offset)->limit(10)->select('description','name','company','designation')->get();
    return response(view('magazine.testimonials.loadmore', compact('data'))->render());

  }


public function forthcomingIssue()
{     

   $cmspage = Cmspage::where('url', 'forthcoming-issue')->where('active_flag',1)->select('description')->first();
  $banners = $this->banners;  
   $this->seoTools(request()->segment(1)); 
  return view('magazine.fourthcoming-issue' ,compact('cmspage','banners'));
}  

public function termsConditions()
{     

  $cmspage = Cmspage::where('url', 'terms-conditions')->where('active_flag',1)->first();
  $banners = $this->banners;  
    $this->seoTools(request()->segment(1)); 
  // $slug = 'terms-conditions';
  // $this->seoTools($slug); 
  return view('cms.terms-conditions' ,compact('cmspage','banners'));
}  

public function contactUs()
{     

  $cmspage = Cmspage::where('url', 'contactus')->where('active_flag',1)->first();
  $banners = $this->banners; 
  $slug = 'contactus';
  $this->seoTools(request()->segment(1)); 
  return view('cms.contactus' ,compact('cmspage','banners'));
}  

public function aboutUs()
{     

   $cmspage = Cmspage::where('url', 'aboutus')->where('active_flag',1)->first();
  $banners = $this->banners;  
  $this->seoTools(request()->segment(1)); 
  return view('cms.aboutus' ,compact('cmspage','banners'));
} 

  public function printAds( CommanRequest $request )
  {     
   $this->seoTools('print'); 
        if(\Request::isMethod('post')){             
           $form = new Download();
           $form->fullname = $request->fullname;
           $form->email = $request->email;
           $form->telephone = $request->telephone;
           $form->company = $request->company;           
           $form->description = $request->description;
           $form->type = 'print-ads';
           $form->save();

           /*Send email admin*/  
           $data = [
            'name'=> $request->fullname,
            'first_name'=>$request->fullname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->telephone,            
            'description' =>$request->description,            
            'type' => 'Print Ads',   
            'lead' =>$request->lead,        
            'subject_client' => trans('messages.printads_client'),
            'subject_admin' => trans('messages.printads_admin'),
          ];
         //$this->bitrixLeadApi($data);

        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.adminemail'));
            
        // $message->to('nagaraj@ochre-media.com');
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.printads.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });
          return view('cms.printadvertise.success')->with('status','true');
           // return redirect()->back()->with(['status'=>'true']);
        }else{            
            return view('cms.printadvertise.index');
        }     

}
        //Advertise paeg

        public function advertise( CommanRequest $request )
        {     
          $this->seoTools('advertise');  
            $banners = $this->banners; 
          if(\Request::isMethod('post')){
              if (isset($_POST['g-recaptcha-response'])) {
               $captcha = $_POST['g-recaptcha-response'];
              } else {
                   $captcha = false;
              }
            if($this->checkgooglecaptha($captcha)==true){         
           $form = new Download();
           $form->fullname = $request->firstname.' '.$request->lastname;
           $form->firstname = $request->firstname;
           $form->lastname = $request->lastname;
           $form->email = $request->email;
           $form->telephone = $request->mobile;
           $form->company = $request->company;  
           $form->designation = $request->cf_leads_jobtitle;         
           $form->description = $request->description;
           $form->whom = $request->whom;  
           $form->type = 'Advertise';
           $form->save();
  
           /*Send email admin*/  
           $data = [
            'name'=> $request->firstname.' '.$request->lastname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->mobile, 
            'job_title' =>$request->cf_leads_jobtitle,             
            'description' =>$request->description,   
            'whom' => $request->whom,           
            'type' => 'Advertise',            
            'subject_client' => trans('messages.advertise_client'),
            'subject_admin' => $request->email.trans('messages.advertise_admin'),
          ];
          /*Admin mail*/
          Mail::send('emails.admin', $data, function($message) use ($data) {
            $message->to(trans('messages.advert-email'));
            $message->subject($data['subject_admin']);
          });
          /*Client Mail*/
          Mail::send('emails.mediapack.client', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
          });
            
            return redirect()->route('magazinemediapack')->with(['status'=>'true']);
           }
        }else{      
          $issues = Ebook::where('active_flag',1)->orderBy('id','desc')->get()->take(5);
          return view('forms.advertise.index',compact('banners','issues'));
        }               
  
      }  
    public function mediapackdwnlink(Request $request)
    {            
      if(session('status') == true){
        $banners = $this->banners; 
        echo "<script>setTimeout(function(){ window.location.href = https://industry.pharmafocusasia.com/mediapack/pdf/pharmafocus-asia-mediapack.pdf'; }, 3000);</script>";
         return view('forms.advertise.success',compact('banners'));
      }else{
        return redirect('/');
      }

    }

  public function register(){
       $this->seoTools(request()->segment(1)); 
      return view('forms.register');
    }

  public function bannerAdvertisement( CommanRequest $request){
     $this->seoTools('print'); 
        if(\Request::isMethod('post')){             
           $form = new Download();
           $form->fullname = $request->fullname;
           $form->email = $request->email;
           $form->telephone = $request->telephone;
           $form->company = $request->company;           
           $form->description = $request->description;
           $form->type = 'banner-advertising';
           $form->save();

           /*Send email admin*/  
           $data = [
            'name'=> $request->fullname,
            'first_name'=>$request->fullname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->telephone,            
            'description' =>$request->description,            
            'type' => 'banner-advertising',   
            'lead' =>$request->lead,        
            'subject_client' => trans('messages.bannerads_client'),
            'subject_admin' => trans('messages.bannerads_admin'),
          ];
           //$this->bitrixLeadApi($data);

        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.adminemail'));
            
        // $message->to('nagaraj@ochre-media.com');
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.banner-ads.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });


          return view('cms.banner-advertisement.success')->with('status','true');
           // return redirect()->back()->with(['status'=>'true']);

        }else{

       return view('cms.banner-advertisement.index');
     }
    }

 public function banerdwnlinks(Request $request)
    {
         // $data =  Authorguideline::where('active_flag',1)->orderBy('id','desc')->first();

         // $pdf= config('app.url').'authorguideline/'.$data->pdf; 
        $pdf =  config('app.url')."mediapack/pdf/pharmafocus-asia-mediapack.pdf";

        return redirect($pdf);

    }

     public function emailMarketing( CommanRequest $request){
        $this->seoTools('print'); 
        if(\Request::isMethod('post')){             
           $form = new Download();
           $form->fullname = $request->fullname;
           $form->email = $request->email;
           $form->telephone = $request->telephone;
           $form->company = $request->company;           
           $form->description = $request->description;
           $form->type = 'emailmarketing';
           $form->save();

           /*Send email admin*/  
           $data = [
            'name'=> $request->fullname,
            'first_name'=>$request->fullname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->telephone,            
            'description' =>$request->description,            
            'type' => 'emailmarketing',   
            'lead' =>$request->lead,        
            'subject_client' => trans('messages.emailMarketing_client'),
            'subject_admin' => trans('messages.emailMarketing_admin'),
          ];
         //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.adminemail'));
            
        // $message->to('nagaraj@ochre-media.com');
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.emailmarketing.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });


          return view('cms.emailmarketing.success')->with('status','true');
           // return redirect()->back()->with(['status'=>'true']);

        }else{

       return view('cms.emailmarketing.index');
     }
    }

    public function newslettermarketing( CommanRequest $request){
      $this->seoTools('print'); 
      if(\Request::isMethod('post')){             
       $form = new Download();
       $form->fullname = $request->fullname;
       $form->email = $request->email;
       $form->telephone = $request->telephone;
       $form->company = $request->company;           
       $form->description = $request->description;
       $form->type = 'enewslettermarketing';
       $form->save();

       /*Send email admin*/  
       $data = [
        'name'=> $request->fullname,
        'first_name'=>$request->fullname,
        'email'=> $request->email,
        'company'=> $request->company,
        'phone'=>$request->telephone,            
        'description' =>$request->description,            
        'type' => 'E-Newsletter Marketing',   
        'lead' =>$request->lead,        
        'subject_client' => trans('messages.enewslettermarketing_client'),
        'subject_admin' => trans('messages.enewslettermarketing_admin'),
      ];
      //$this->bitrixLeadApi($data);

      /*Admin mail*/
      Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.adminemail'));

        // $message->to('nagaraj@ochre-media.com');
        $message->subject($data['subject_admin']);
      });
      /*Client Mail*/
      Mail::send('emails.newslettermarketing.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
      });


      return view('cms.newslettermarketing.success')->with('status','true');
           // return redirect()->back()->with(['status'=>'true']);

    }else{

     return view('cms.newslettermarketing.index');
   }
 }

  public function newslettermarketingDownloadForm( CommanRequest $request){
      $this->seoTools('print'); 
      if(\Request::isMethod('post')){             
       $form = new Download();
       $form->fullname = $request->fullname;
       $form->email = $request->email;
       $form->telephone = $request->telephone;
       $form->company = $request->company;           
       $form->description = $request->description;
       $form->type = 'enewslettermarketing';
       $form->save();

       /*Send email admin*/  
       $data = [
        'name'=> $request->fullname,
        'first_name'=>$request->fullname,
        'email'=> $request->email,
        'company'=> $request->company,
        'phone'=>$request->telephone,            
        'description' =>$request->description,            
        'type' => 'E-Newsletter Marketing',   
        'lead' =>$request->lead,        
        'subject_client' => trans('messages.mediapacks_client'),
        'subject_admin' => trans('messages.mediapacks_admin'),
      ];
      //$this->bitrixLeadApi($data);

      /*Admin mail*/
      Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.adminemail'));

        // $message->to('nagaraj@ochre-media.com');
        $message->subject($data['subject_admin']);
      });
      /*Client Mail*/
      Mail::send('emails.mediapack.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
      });


      return view('cms.newslettermarketing.success2')->with('status','true');
           // return redirect()->back()->with(['status'=>'true']);

    }else{

     return view('cms.newslettermarketing.index');
   }
 }

   public function magazineSubscription( Request $request )
   {        
    $this->seoTools('magazine-subscription');  
    $banners = $this->banners; 
    $countries =  Country::select('title')->get();

    if(\Request::isMethod('post')){     
     
     request()->validate([
      'name' => 'required',
      'email' => 'required|email',      
      'designation'=>'required',
      'industry'=>'required',
      'country'=>'required',
      'phone' =>'required'
    ]);

     $form = new Subscriber();
     $form->fullname = $request->name;
     $form->designation = $request->designation;
     $form->industry = $request->industry;           
     $form->telephone = $request->phone;
     $form->country_name = $request->country;
     $form->email = $request->email;
     $form->address = $request->address;
     $form->type =  $request->type .' - '.$request->book_type;
     $form->save();

     /*Send email admin*/  
     $data = [
      'name'=> $request->name,
      'first_name'=>$request->name,
      'email'=> $request->email,
      'company'=> $request->company,
      'phone'=>$request->phone,            
      'job_title' =>$request->designation,            
      'industry' => $request->industry, 
      'country' => $request->country, 
      'type' => $request->type .' - '.$request->book_type,   
      'address'=> $request->address,
      'opt' =>   $request->opt,
      'lead' => $request->email .' '.$request->lead,
      'subject_client' => $request->client_subject,
      'subject_admin' => $request->email.' |  successfully subscribed for Magazine',
    ];
   //$this->bitrixLeadApi($data);
    /*Admin mail*/
    Mail::send('emails.admin', $data, function($message) use ($data) {
      $message->to(trans('messages.subscribe-email'));
        // $message->to('nagaraj@ochre-media.com');
      $message->subject($data['subject_admin']);
    });
    /*Client Mail*/
    Mail::send('emails.ebook.magazine_subscribe', $data, function($message) use ($data) {
      $message->to($data['email']);
      $message->subject($data['subject_client']);
    });


    return redirect()->route('magazine.subscription.success')->with(['thank_message'=>$request->input('thank_message')]); 
            // return view('forms.advertise.success')->with(['status'=>'true']);
                     // return redirect()->back()->with(['status'=>'true']);

  }else{      
    $issues = Ebook::where('active_flag',1)->orderBy('id','desc')->get()->take(5);
    return view('forms.magn-subscribe.index',compact('banners','issues','countries'));
  }               

}  

public function emirates()
  {
    return view('cms.right-banner-adv');
  }


   public function seoTools($page){
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
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
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