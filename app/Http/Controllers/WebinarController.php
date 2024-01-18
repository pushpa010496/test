<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Webinar;
use App\Models\WebinarData;
use \DB;
use \Mail;
use App\Models\Page;
use App\Models\SeoPage;
use SEOMeta;
use OpenGraph;

class WebinarController extends HomeController
{


	public function index()
    {
          $time = \Carbon\Carbon::now()->format('Y-m-d');
          $banners = $this->banners;
          $this->seoTools(request()->segment(1));  
          $upcome=Webinar::where('active_flag',1)->where('webinar_date', '>=' , $time)->orderBy('webinar_date','desc')->get();
          $complete=Webinar::where('active_flag',1)->where('webinar_date', '<' , $time)->orderBy('webinar_date','desc')->get();
          $data = Webinar::where('active_flag',1)->orderBy('webinar_date','desc')->get();     
        return view('webinars.index',compact('banners','data','upcome','complete'));
    }


    public function zebraHealthcareWebinar(Request $request)
    {

    	$countries = DB::table('countries')->get();
    	if(\Request::isMethod('post')){    		

    		$form = new WebinarData();
    		request()->validate([
    			'firstname' => 'required',
    			'lastname' => 'required',
    			'email' => 'email',
    			'phone' =>'required|max:20',
    			'company'=>'required',                        			
    			'job_title'=>'required', 
    		]);

    		$form->firstname = $request->firstname;
    		$form->lastname = $request->lastname;
    		$form->email = $request->email;
    		$form->phone = $request->phone;
    		$form->job_title = $request->job_title;
    		$form->country = $request->country;
    		$form->company = $request->company;
    		$form->type = $request->type;
    		$form->trafic = $request->traficfrom;    					
    		$form->save();

    		/*Send email admin*/  
    		
    		$data = [
    			'name'=> $request->firstname .' '.$request->lastname,
    			'email'=>$request->email,        
    			'phone'=>$request->phone,
    			'company'=>$request->company,
    			'site_name'=>'Europeanhhm',
    			'job_title'=>$request->job_title,
    			'type' => $request->type,
    			'country'=>$request->country,
    			'trafic'=>$request->traficfrom,
    			'subject_client' =>'Zebra Healthcare Webinar | Registration Successful',
    			'subject_admin' => $request->email." | Zebra Webinar Video Access",
    			      
    		];
    		/*Admin mail*/
    		Mail::send('emails.webinars.zebra.admin', $data, function($message) use ($data) {
    			$message->to('omplenquiry@ochre-media.com');
           // $message->to('nagaraj@ochre-media.com');
    			$message->subject($data['subject_admin']);
    		});
    		/*Client Mail*/            
    		// Mail::send('emails.webinars.zebra.client', $data, function($message) use ($data) {
    		// 	$message->to($data['email']);
    		// 	$message->subject($data['subject_client']);
    		// });
            return view('webinars.zebra.videosuccess',compact('countries'));
            
    		// return redirect()->route('zebraHealthcareWebinar.success')->with(['thank_message'=>'success']); 
    	}    
    	return view('webinars.zebra.index',compact('countries'));
    }
public function qualtricsHealthcare(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
//return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>  $request->type,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your Interest in Qualtrics Healthcare Webinar.',
                'subject_admin' => "Qualtrics Healthcare Webinar registrations |".$request->email." | Europeanhhm - Webinars",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.qualtrics-client', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

         return redirect()->route('qualtricshealthcare.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.qualtrics.index',compact('countries'));
    }

          public function integratedDigital(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
//return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           // $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>  $request->type,                            
                'country'=>$request->country,                
                //'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your Interest in on demand webinar video',
                'subject_admin' => "Registration for on demand webinar video |".$request->email." | Europeanhhm - Webinars",                      
            ]; 
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));     
               //$message->to('bhavani@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.digital-client', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

         //return redirect()->route('integrateddigital.success')->with(['thank_message'=>$request->input('thank_message')]);

            return view('webinars.integrateddigital.videosuccess')->with(['thank_message'=>'success']);
        }    
        return view('webinars.integrateddigital.index',compact('countries'));
    }

       public function hylandMedical(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();

             $callfrom=$request->callfrom;
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
//return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           // $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;  
            $form->callfrom = $request->callfrom;                  
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>  $request->type,                            
                'country'=>$request->country,  
                'callfrom'=>$request->callfrom,               
                //'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your Interest in Hyland Webinar registrations',
                'subject_admin' => "Hyland Webinar registrations |".$request->email." | Europeanhhm - Webinars",                      
            ]; 
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
              //$message->to(trans('bhavani@ochre-media.com'));                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.hylandmedical-client', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);
if($callfrom=='hyland-medical-imaging-webinar'){

 return view('webinars.hylandmedical.videosuccess',compact('countries'));
 //return redirect()->route('hylandmedical.success')->with(['thank_message'=>$request->input('thank_message')]);

}

if($callfrom=='hyland-medical-imaging-webinar-hyland'){

return redirect()->route('hylandmedicaltag.success')->with(['thank_message'=>$request->input('thank_message')]);

}
        


        }    
        return view('webinars.hylandmedical.index',compact('countries'));
    }

    public function resmedWebinar(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();

          
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
//return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           // $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;  
           // $form->callfrom = $request->callfrom;                  
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>  $request->type,                            
                'country'=>$request->country,  
               // 'callfrom'=>$request->callfrom,               
                //'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message, 

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Registration for  resmed webinar series',
                'subject_admin' => "Resmed webinar series |".$request->email." | Europeanhhm - Webinars",                      
            ]; 
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
              // $message->to(trans('bhavani@ochre-media.com'));                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);


return redirect()->route('resmedwebinar.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.resmed.index',compact('countries'));
    }

    public function advanTech(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();

          
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
//return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;  
           // $form->callfrom = $request->callfrom;                  
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>  $request->type,                            
                'country'=>$request->country,  
               // 'callfrom'=>$request->callfrom,               
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message, 

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Registration for Advantech',
                'subject_admin' => "Registration for Advantech |".$request->email." | Europeanhhm - Webinars",                      
            ]; 
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
              //$message->to(trans('bhavani@ochre-media.com'));                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);


return redirect()->route('advantech.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.advantech.index',compact('countries'));
    }

    public function resmedhomesleep(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();

          
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);


            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           // $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;  
           // $form->callfrom = $request->callfrom;                  
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>  $request->type,                            
                'country'=>$request->country,  
               // 'callfrom'=>$request->callfrom,               
                //'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message, 

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Registration for Resmed Webinar Home Sleep Testing',
                'subject_admin' => "Registrations for Resmed Webinar Home Sleep Testing |".$request->email." | Client Retention Projects.",                      
            ]; 
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
               //$message->to('ravi@ochre-media.com');                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

      return redirect()->route('resmedhomesleep.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.resmed-home-sleep.index',compact('countries'));
    }

  public function resmed4thwebinarseries(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();

          
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);

           // return 'page under construction';

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           // $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;  
           // $form->callfrom = $request->callfrom;                  
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'type'=>$request->type,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>  $request->type,                            
                'country'=>$request->country,
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message, 

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your interest in Resmed Webinar',
                'subject_admin' => "Thank you for your interest in Resmed Webinar |".$request->email." | Client Retention Projects.",                      
            ]; 
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
               //$message->to('srinivas.i@ochre-media.com');                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

      return redirect()->route('resmed4thwebinarseries.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.resmed-series-4.index',compact('countries'));
    }

    // thermofisherWebinar webinar
   
    public function equinixWebinar(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    

            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);


            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();
        
            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type . ' - Modernizing GC Sampling Solution to Serve Productivity in Pharmaceutical Laboratories',                            
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
               
                /*'subject_client' =>'Thermofisher Webinar | Registration Successful',*/
                'subject_client' =>'Thank you for your interest in Equinix Webinar 2020 Video.',
                'subject_admin' => "Equinix Webinar | video Subscriber | Europeanhhm ", 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
               // $message->to('ravi@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.equinix-webinar-2020', $data, function($message) use ($data) {               
           $message->to($data['email']);
              $message->subject($data['subject_client']);
            });       
            return view('webinars.equinixwebinar.videosuccess')->with(['thank_message'=>'success']); 
        }    
        return view('webinars.equinixwebinar.index',compact('countries'));
           
    }
    //End thermofisherWebinar

    public function advanTechHealthCareOnDemand(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();

          
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
        // return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;  
           // $form->callfrom = $request->callfrom;                  
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>  $request->type,                            
                'country'=>$request->country,  
               // 'callfrom'=>$request->callfrom,               
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message, 

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>' Advantech Healthcare Telehealth Today',
                'subject_admin' => "Registration Successful | Advantech Healthcare   |".$request->email." | Europeanhhm - Webinars",                      
            ]; 
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
            //$message->to(trans('srinivas.i@ochre-media.com'));                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       
         return redirect()->route('advantech-healthcare-on-demand-telehealth-today.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.advantech-telehealth.index',compact('countries'));
    }
    
    public function advanTechHealthCareOnDemandVideoSuccess()
    {
        return view('webinars.advantech-telehealth.videosuccess');
    }

    public function resmedWebinarSeries3(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
            //return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           // $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;  
           // $form->callfrom = $request->callfrom;                  
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>  $request->type,                            
                'country'=>$request->country,  
               // 'callfrom'=>$request->callfrom,               
                //'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message, 

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Registrations for  RESMED WEBINAR - TELEMONITORING HOME NIV PATIENTS',
                'subject_admin' => "Registrations for  RESMED WEBINAR - TELEMONITORING HOME NIV PATIENTS |".$request->email." | Europeanhhm - Webinars",                      
            ]; 
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
               //$message->to(trans('ravi@ochre-media.com'));                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       
         return redirect()->route('resmed-webinar-series3-telemonitoring-home-niv-patients.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.resmed-3-telemonitoring.index',compact('countries'));
    }

    public function modernHealthcareOrganisations(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    

            $formtype=$request->type;
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
           // return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type =$formtype;
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>$formtype,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'IT Predictions 2021 - ANZ Edition Webinar | Registration Successful',
                'subject_admin' => "IT Predictions 2021 - ANZ Edition Webinar |".$request->email." | Europeanhhm - Webinars",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                 $message->to(trans('messages.adminemail')); 
               // $message->to(trans('ravi@ochre-media.com'));                   
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.freshworks-client', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
             return view('webinars.healthcare-organisations.videosuccess',compact('countries'));

         
        }    
        return view('webinars.healthcare-organisations.index',compact('countries'));
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

     //seo for view
    public function seoToolsView($id){
    
        $data = Interview::find($id);        
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


    public function barcoNioFusion(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    

            $formtype=$request->type;
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
           //return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->address1 =$request->discription;
            $form->zip =$request->postal_code;
            $form->type =$formtype;
            $form->email_updates = $request->criteria;   
            $form->quotation = $request->followup;   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'address'=>$request->discription,
                'zip'=>$request->postal_code,
                'type' =>$formtype,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',           
                'criteria' => $request->criteria,
                'followup' => $request->followup,
                'subject_client' =>'Registrations for Barco Nio Fusion 12MP - On-demand Webinar.',
                'client_message'=>'Thank you for your interest in Barco Nio Fusion 12MP"s on-demand video.',
                'subject_admin' => "Registrations for Barco Nio Fusion 12MP - On-demand Webinar. |".$request->email." | Europeanhhm - Webinars",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail')); 
                //$message->to('srinivas.i@ochre-media.com');                   
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       
           return view('webinars.barco-nio-fusion.videosuccess')->with(['thank_message'=>'success']);
        }    
        return view('webinars.barco-nio-fusion.index',compact('countries'));
    }



      public function avaluehealthcare(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    

            $formtype=$request->type;
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
           // return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type =$formtype;
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>$formtype,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your interest in Avalue Healthcare. | Registration Successful',
                'subject_admin' => "Thank you for your interest in Avalue Healthcare. |".$request->email." | Europeanhhm - Webinars",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail')); 
               //$message->to(trans('ravi@ochre-media.com'));                   
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.avalue-client', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
             return view('webinars.avaluehealthcare.videosuccess',compact('countries'));

         
        }    
        return view('webinars.avaluehealthcare.index',compact('countries'));
    }

    public function remoteItEnabledTools(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
           // return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;       
            $form->company = $request->company;
            $form->type =$request->type;
            $form->save();
            /*Send email admin*/ 
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,       
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>$request->type,                            
                'country'=>$request->country, 
                'path'=>'https://industry.europeanhhm.com/webinars/digitechhealthcare/orthoclinicaldiagnostics.mp4',               
                'client_message'=>'We appreciate your interest in the  Ortho Clinical Diagnostics on-demand webinar',
                'subject_client' =>'Registration for Ortho Clinical Diagnostics On-demand Webinar',
                'subject_admin' => "Registration for Ortho Clinical Diagnostics On-demand Webinar |".$request->email." | Europeanhhm - Webinars",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                 $message->to(trans('messages.adminemail')); 
               // $message->to(trans('srinivas.i@ochre-media.com'));                   
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
             return view('webinars.remote-it-enabled-tools.videosuccess')->with(['thank_message'=>'success']);
        }    
        return view('webinars.remote-it-enabled-tools.index',compact('countries'));
    }

    public function ensuringUninterruptedServiceDelivery(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $formtype=$request->type;
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
           // return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type =$formtype;
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>$formtype,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'subject_client' =>'IT Predictions 2021 - ANZ Edition Webinar | Registration Successful',
                'subject_admin' => "IT Predictions 2021 - ANZ Edition Webinar |".$request->email." | Europeanhhm - Webinars",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                 $message->to(trans('messages.adminemail')); 
               // $message->to(trans('ravi@ochre-media.com'));                   
                $message->subject($data['subject_admin']);
            });      
           /*Client mail*/
            Mail::send('emails.webinars.freshworks-client', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
             return view('webinars.healthcare-organisations.videosuccess',compact('countries'));
        }    
        return view('webinars.healthcare-organisations.index',compact('countries'));
    }

    public function newCareModelsAndTheFutureofHealthcare(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $formtype=$request->type;
            $form = new WebinarData();

           // return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;         
            $form->company = $request->company;
            $form->type =$formtype;
            $form->save();
            /*Send email admin*/   
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>$formtype,                            
                'country'=>$request->country,                
                'path'=>'https://industry.europeanhhm.com/webinars/digitechhealthcare/varian.mp4', 
                'client_message'=>$request->client_message,
                'subject_client' =>'Varian Medical Systems On demand Webinar',
                'subject_admin' => "Varian Medical Systems on demand Webinar |".$request->email." | Europeanhhm - Webinars",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                 $message->to(trans('messages.adminemail')); 
               // $message->to(trans('srinivas.i@ochre-media.com'));                   
                $message->subject($data['subject_admin']);
            });      
           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
             return view('webinars.new-care-models.videosuccess',compact('countries'));
        }    
        return view('webinars.new-care-models.ortho',compact('countries'));
    }

    public function digitalHealthUsingTechnology(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $formtype=$request->type;
            $form = new WebinarData();
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type =$formtype;
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,
                'type' =>$formtype,                            
                'country'=>$request->country,                
                'path'=> "https://industry.europeanhhm.com/webinars/digitechhealthcare/iqvia.mp4",
                'client_message'=>$request->client_message,
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'subject_client' =>'Digital Health: Using technology to engage with patients On-demand Webinar | Registration Successful',
                'subject_admin' => "Digital Health: Using technology to engage with patients On-demand Webinar |".$request->email." | Europeanhhm - Webinars",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                 $message->to(trans('messages.adminemail')); 
               // $message->to(trans('ravi@ochre-media.com'));                   
                $message->subject($data['subject_admin']);
            });      
           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
             return view('webinars.digital-health-using-technology.videosuccess',compact('countries'));
        }    
        return view('webinars.digital-health-using-technology.index',compact('countries'));
    }

    public function dataDrivenHealthcare(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $formtype=$request->type;
            $form = new WebinarData();
           // return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;       
            $form->company = $request->company;
            $form->type =$formtype;
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,                          
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'path'=>"https://industry.europeanhhm.com/webinars/digitechhealthcare/docdoc.mp4",
                'client_message'=>$request->client_message,
                'subject_client' =>'Data-driven Healthcare on-demand Webinar | Registration Successful',
                'subject_admin' => "Data-driven Healthcare on-demand Webinar |".$request->email." | Europeanhhm - Webinars",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                 $message->to(trans('messages.adminemail')); 
               // $message->to(trans('srinivas.i@ochre-media.com'));                   
                $message->subject($data['subject_admin']);
            });      
           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
             return view('webinars.data-driven-healthcare.videosuccess',compact('countries'));
        }    
        return view('webinars.data-driven-healthcare.index',compact('countries'));
    }


    public function smartHealthcareWebinar(Request $request){
        $countries = DB::table('countries')->get();
          if(\Request::isMethod('post')){    
            
            $form = new WebinarData();
           // return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;       
            $form->company = $request->company;
            $form->type = $request->type;
           
            
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,                          
                'country'=>$request->country,                
                'type'=>$request->type,   
                'path'=>"https://industry.europeanhhm.com/webinars/smart-healthcare/smart-healthcare.mp4",
                'client_message'=>$request->client_message,
                'subject_client' =>'Registration for  Avalue smart healthcare On Demand webinar video | Registration Successful',
                'subject_admin' => " Avalue smart healthcare On Demand webinar video |".$request->email." | Europeanhhm - Webinars",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                 $message->to(trans('messages.adminemail')); 
                //$message->to(trans('pushpalatha@ochre-media.com'));                   
                $message->subject($data['subject_admin']);
            });      
           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
             return view('webinars.smart-healthcare.videosuccess',compact('countries'));
        }    
          return view('webinars.smart-healthcare-webinar',compact('countries'));
    }

    public function uniphoreRcmWebinar(Request $request){
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            
            $form = new WebinarData();
           // return "page is under development";
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;       
            $form->company = $request->company;
            $form->type = $request->type;
           
            
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=> $request->firstname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Europeanhhm',
                'job_title'=>$request->job_title,                          
                'country'=>$request->country,                
                'type'=>$request->type,   
                // 'path'=>"https://industry.europeanhhm.com/webinars/smart-healthcare/smart-healthcare.mp4",
                'client_message'=>$request->client_message,
                'subject_client' =>'Uniphore RCM webinar | Registration Successful',
                'subject_admin' => " Registrations for Uniphore RCM webinar |".$request->email." | Europeanhhm - Webinars",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
            $message->to(trans('messages.adminemail')); 
               // $message->to(trans('pushpalatha@ochre-media.com'));                   
                $message->subject($data['subject_admin']);
            });      
           /*Client mail*/
            Mail::send('emails.webinars.client-all-webinar', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
           return redirect()->route('uniphoreRcmWebinar.success')->with(['thank_message'=>$request->input('thank_message')]); 
            // return view('webinars.smart-healthcare.videosuccess',compact('countries'));
        }    
        return view('webinars.uniphore-rcm.uniphore-rcm-webinar',compact('countries'));
    }
}
