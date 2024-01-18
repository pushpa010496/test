<?php

namespace App\Http\Controllers\Promotion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use App\Flatpage;

class FlatPagesController extends Controller
{
    public function horizonChosourceCho1Adcc(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "https://industry.pharmafocusasia.com/promotions/pdf/chosource-chok1-adcc-cell-line-poster.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;            
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->zip_code = $request->zip_code;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'zipcode'=>$request->zip_code,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
                'pdf'=> $pdf          
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_horizon_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('horizonChosourceCho1Adcc.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/horizon-chosource-cho1-adcc',compact('countries'));
    }
    
    public function horizonChosourceCho1AdccCellLine(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "https://pharmafocusasia.com/promotions/pdf/horizon-chosource-cho1-adcc-cell-line.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->company = $request->company;
            $form->declaration = $request->declaration;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,   
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                 $form->declaration = $request->declaration,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
                'pdf'=> $pdf          
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_horizon_cellline_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('horizonChosourceCho1AdccCellLine.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/horizon-chosource-cho1-adcc-cell-line',compact('countries'));
    }

    public function borapharmaWhitepaper(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
                request()->validate([
                    'firstname' => 'required', 
                    'lastname'=>'required',                  
                    'country'=>'required',
                    'company'=>'required',                               
                    'country'=>'required',
                    'email' => 'required',
                ]);
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->message = $request->message;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/borapharma-whitepaper-formulatons.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('borapharmaWhitepaper.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/borapharma-whitepaper-formulatons',compact('countries'));
    }

    public function oracleEmbraceVirtualTrials(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->zip_code = $request->zip_code;
            $form->pdf_language = $request->pdf_language;
            $form->headquarters = $request->headquarters;
            $form->subscribe_type = $request->subscribe_type ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/oracle-embrace-virtual-trials.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'zipcode'=>$request->zip_code,
                'country'=>$request->country,
                'headquarters'=>$request->headquarters,
                'pdf_language'=>$request->pdf_language,
                'subscribe_type'=>$request->subscribe_type ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                //    $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('oracleEmbraceVirtualTrials.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/oracle-embrace-virtual-trials',compact('countries'));
    }

    public function safelyAcceleratingDrugDevelopmentForBrighterOutcomes(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->quotation = $request->quotation ?? 'No';
            $form->representative = $request->representative ?? 'No';
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/safely-accelerating-drug-development-for-brighter-outcomes.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' => $request->email_updates ?? 'No',
                'quotation' => $request->quotation ?? 'No',
                'representative' => $request->representative ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                //    $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('safelyAcceleratingDrugDevelopmentForBrighterOutcomes.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/safely-accelerating-drug-development-for-brighter-outcomes',compact('countries'));
    }

    public function oracleEdcKeptup(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if (isset($_POST['g-recaptcha-response'])) {
         $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if(\Request::isMethod('post') && $this->checkgooglecaptha($captcha)==true){                        
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->zip_code = $request->zip_code;
            $form->pdf_language = $request->pdf_language;
            $form->headquarters = $request->headquarters;
            $form->subscribe_type = $request->subscribe_type ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/oracle-edc-keptup.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'headquarters'=>$request->headquarters,
                'pdf_language'=>$request->pdf_language,
                'zipcode'=>$request->zip_code,
                'subscribe_type'=>$request->subscribe_type ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('oracleEdcKeptup.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/oracle-edc-keptup',compact('countries'));
    }

    public function oracleExploreClinicaltrial(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
       if (isset($_POST['g-recaptcha-response'])) {
         $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if(\Request::isMethod('post') && $this->checkgooglecaptha($captcha)==true){                        
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->zip_code = $request->zip_code;
            $form->pdf_language = $request->pdf_language;
            $form->headquarters = $request->headquarters;
            $form->subscribe_type = $request->subscribe_type ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/oracle-explore-clinicaltrial.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'headquarters'=>$request->headquarters,
                'zipcode'=>$request->zip_code,
                'pdf_language'=>$request->pdf_language,
                'subscribe_type'=>$request->subscribe_type ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('oracleExploreClinicaltrial.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/oracle-explore-clinicaltrial',compact('countries'));
    }
    
    public function eppendorfLabchannel(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/borapharma-whitepaper-formulatons.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return view('flatpages/pharma-focus-asia-lab-channel-2021.videosuccess');
            // return redirect()->route('eppendorfLabchannel.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/pharma-focus-asia-lab-channel-2021.index',compact('countries'));
    }
    
    public function nsfGMPregulatory(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->message = $request->description;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/borapharma-whitepaper-formulatons.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'description' =>$request->description,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('nsfGMPregulatory.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/nsf-gmp-regulatory',compact('countries'));
    }
    
    public function nsfRemediationproject(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->message = $request->description;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/borapharma-whitepaper-formulatons.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'description' =>$request->description,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('nsfRemediationproject.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/nsf-remediation-project',compact('countries'));
    }


    public function oracleEdcKeptupKorean(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->zip_code = $request->zip_code;
            $form->pdf_language = $request->pdf_language;
            $form->headquarters = $request->headquarters;
            $form->subscribe_type = $request->subscribe_type ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/oracle-edc-keptup-korean.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'headquarters'=>$request->headquarters,
                'pdf_language'=>$request->pdf_language,
                'zipcode'=>$request->zip_code,
                'subscribe_type'=>$request->subscribe_type ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('oracleEdcKeptupKorean.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/oracle-edc-keptup-korean',compact('countries'));
    }

    public function oracleEmbraceVirtualTrialsKorean(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
       if (isset($_POST['g-recaptcha-response'])) {
         $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if(\Request::isMethod('post') && $this->checkgooglecaptha($captcha)==true){                        
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->zip_code = $request->zip_code;
            $form->pdf_language = $request->pdf_language;
            $form->headquarters = $request->headquarters;
            $form->subscribe_type = $request->subscribe_type ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/oracle-embrace-virtual-trials-korean.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'zipcode'=>$request->zip_code,
                'country'=>$request->country,
                'headquarters'=>$request->headquarters,
                'pdf_language'=>$request->pdf_language,
                'subscribe_type'=>$request->subscribe_type ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                //    $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('oracleEmbraceVirtualTrialsKorean.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/oracle-embrace-virtual-trials-korean',compact('countries'));
    }
    
    
     public function oracleExploreClinicaltrialKorean(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->zip_code = $request->zip_code;
            $form->pdf_language = $request->pdf_language;
            $form->headquarters = $request->headquarters;
            $form->subscribe_type = $request->subscribe_type ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/oracle-explore-clinical-trials-korean.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'zipcode'=>$request->zip_code,
                'country'=>$request->country,
                'headquarters'=>$request->headquarters,
                'pdf_language'=>$request->pdf_language,
                'subscribe_type'=>$request->subscribe_type ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                //    $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('oracleExploreClinicaltrialKorean.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/oracle-explore-clinicaltrial-korean',compact('countries'));
    }

    public function horizonChosourceExpressionPlatrform(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "https://www.pharmafocusasia.com/promotions/pdf/horizon-chosource-expression-platrform.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->message = $request->description;            
            // $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->zip_code = $request->zip_code;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->representative  = $request->representative ?? 'No';
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'description'=>$request->description,
                // 'zipcode'=>$request->zip_code,
                'type' => $request->type,
                // 'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'representative' =>$request->representative ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
                'pdf'=> $pdf          
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_horizon_chosource_expression_platrform_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('horizonChosourceExpressionPlatrform.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/horizon-chosource-expression-platrform',compact('countries'));
    }
    
    public function euiVdrRegulation2017(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->message = $request->description;            
            $form->country = $request->country;
            $form->title = $request->job_title;
            $form->declaration  = $request->declaration ?? 'No';
            $form->working=implode(",",$request->working);
            $form->development=implode(",",$request->development);
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'description'=>$request->description,
                'type' => $request->type,
                'country'=>$request->country,
                'declaration'  => $request->declaration ?? 'No',
                'working'=>implode(",",$request->working),
                'development'=>implode(",",$request->development),
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,         
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('euiVdrRegulation2017.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/euivdregulation2017-746',compact('countries'));
    }
    
    public function transferStrategies(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "https://www.pharmafocusasia.com/promotions/pdf/thermo-transfer-strategies-for-pharmaceutical-product.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;            
            $form->country = $request->country;
            $form->city = $request->city;
            $form->address = $request->address;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'city' => $request->city,
                'address' => $request->address,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
                'pdf'=> $pdf          
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('transferStrategies.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/transfer-strategies-for-pharmaceutical-product',compact('countries'));
    }
    
    public function ystralJetstreamAgitator(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
    
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;            
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->email_updates = $request->email_updates ?? 'No' ;
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('ystralJetstreamAgitator.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/ystral-jetstream-mixer-versus-agitator-webinar',compact('countries'));
    }
    public function rightFilterIntegrity(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "https://www.pharmafocusasia.com/promotions/pdf/how-to-select-the-right-filter-integrity-test-instrument-an-en.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;            
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->message = $request->description;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->representative  = $request->representative ?? 'No';
            $form->declaration  = $request->declaration ?? 'No';
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'pdf'=>$pdf,
                'description' =>$request->description,
                'email_updates'  => $request->email_updates ?? 'No',
                'representative'  => $request->representative ?? 'No',
                'declaration'  => $request->declaration ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_pall_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('rightFilterIntegrity.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/how-to-select-the-right-filter-integrity-test-instrument',compact('countries'));
    }
    
    public function nsfFdaInspectionsRecommencing(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->message = $request->description;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/nsf-fda-inspections-recommencing.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'description' =>$request->description,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('nsfFdaInspectionsRecommencing.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/nsf-fda-inspections-recommencing',compact('countries'));
    }
    public function watersGenotoxicImpuritiesWebinar(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
         if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->zip_code = $request->zip_code;
            $form->city = $request->city;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->areas_of_interest = $request->areas_of_interest;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/nsf-fda-inspections-recommencing.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'email_updates' =>$request->email_updates ?? 'No',
                'areas_of_interest' =>$request->areas_of_interest,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                  $message->to('omplenquiry@ochre-media.com');
                    // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('watersGenotoxicImpuritiesWebinar.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/waters-genotoxic-impurities-webinar',compact('countries'));
    }

    public function acceleratingMrna(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
         if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->zip_code = $request->zip_code;
            $form->City = $request->City;
            $form->address = $request->address;
            $form->message = $request->message;
            $form->intrested = $request->intrested;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->industry = $request->industry;
            $form->company = $request->company;
            $form->declaration = $request->declaration;
            $form->type = $request->type;
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/nsf-fda-inspections-recommencing.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'intrested' => $request->intrested,
                'description' =>$request->message,
                'industry' => $request->industry,
                'country'=>$request->country,
                'pincode'=>$request->zip_code,
                'city'=>$request->City,
                'address'=>$request->address,
                'declaration'=>$request->declaration,
                'email_updates' =>$request->email_updates ?? 'No',
                'areas_of_interest' =>$request->areas_of_interest,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                  $message->to('omplenquiry@ochre-media.com');
                    // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('acceleratingMrna.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/accelerating-mrna-research-and-manufacturing',compact('countries'));
    }

    public function thermoFisherScientific(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
         if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->working=implode(",",$request->working);
            $form->areas_of_interest = implode(",",$request->areas_of_interest);
            $form->products_interest = implode(",",$request->products_interest);
            $form->company = $request->company;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->declaration = $request->declaration ?? 'No';
            $form->type = $request->type;
            $form->save();
           
             $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/Interactive-Brochure-mAbs-Process-Playbook-December-2021.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'intrested' => $request->intrested,
                'working'=>implode(",",$request->working),
                'areas_of_interest' => implode(",",$request->areas_of_interest),
                'products_interest' => implode(",",$request->products_interest),
                'declaration' => $request->declaration ?? 'No',
                'description' => $request->message,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                  $message->to('omplenquiry@ochre-media.com');
                    // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('thermoFisherScientific.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/thermo-fisher-scientific',compact('countries'));
    }

    public function twistBioscienceWebinar(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
         if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/twist-bioscience-webinar.mp4"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'video'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                  $message->to('omplenquiry@ochre-media.com');
                     //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('twistBioscienceWebinar.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/twist-bioscience-webinar',compact('countries'));
    }
    
    public function biocontinuumPlatform(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/mk-BR5438EN-v2.0-convergent-bioprocessing-ebook.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'description' => $request->message,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
               $message->to('omplenquiry@ochre-media.com');
                    //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatform.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/biocontinuum-platform',compact('countries'));
    }
    public function biocontinuumPlatformExploreBiocontinuum(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        return view('flatpages/explore-biocontinuum-platform',compact('countries'));
    }
    public function biocontinuumPlatformContinuousProcessing(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/bio-continuum-platform_infographic_mk_BR2733EN_v1.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'description' => $request->message,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                $message->to('omplenquiry@ochre-media.com');
                    // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('ContinuousProcessing.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 

        return view('flatpages/continuous-processing-market-trends-drivers',compact('countries'));
    }

    public function biocontinuumPlatformAdvanceDigitize(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->City,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'description' => $request->message,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                  $message->to('omplenquiry@ochre-media.com');
                     //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_biocontinuum_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatformAdvanceDigitize.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 

        return view('flatpages/advance-digitize-your-bioprocess',compact('countries'));
    }

    public function biocontinuumPlatformContactUs(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        return view('flatpages/contact-us ',compact('countries'));
    }

    public function biocontinuumPlatformAutomationAnalytics(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/mk_bio4C_processpad_CPV_eBook_final.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'description' => $request->message,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
                    // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatformAutomationAnalytics.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/automation-analytics ',compact('countries'));
    }

    public function biocontinuumPlatformProcessAnalytical(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
                if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
           // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/continuous-in-line-virus-inactivation-for-next-generation-bioprocessing_ps1111en-mk.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'description' => $request->message,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                //'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
           // $message->to('omplenquiry@ochre-media.com');
              $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatformProcessAnalytical.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/process-analytical-technology ',compact('countries'));
    }
    public function biocontinuumPlatformSeedTrain(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            //$pdf =  "http://promotions.pharmafocusasia.com/public/pdf/continuous-in-line-virus-inactivation-for-next-generation-bioprocessing_ps1111en-mk.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'description' => $request->message,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
               // 'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
            //$message->to('omplenquiry@ochre-media.com');
              $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatformSeedTrain.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/seed-train',compact('countries'));
    }
    public function biocontinuumPlatformVirusInactivation(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/continuous-in-line-virus-inactivation-for-next-generation-bioprocessing_ps1111en-mk.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'description' => $request->message,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
             // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatformVirusInactivation.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/virus-inactivation',compact('countries'));
    }



    public function checkgooglecaptha($token)
    {
        $secretKey = '6Ld3Ni0aAAAAAHR6NjfdegbMGe1rSYhVaJVnAFW1';
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
    public function AdvanceOligonucleotideTherapeutics(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            //  $pdf =  "#"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'phone'=>$request->phone, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                //  'video'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                  $message->to('omplenquiry@ochre-media.com');
                    // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('AdvanceOligonucleotideTherapeutics.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/advance-oligonucleotide-therapeutics',compact('countries'));
    }

    public function AdaptdoseAnInnovativePlatform(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
 if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/adaptdose-an-innovative-platform.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
                    // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('AdaptdoseAnInnovativePlatform.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
      return view('flatpages/adaptdose-an-innovative-platform',compact('countries'));
    }


    public function PreInspectionAuditsforRegulatoryInspections(Request $request){

        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/pre-inspection-audits-can-help-you-prepare-for-regulatory-inspections.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                $message->to('omplenquiry@ochre-media.com');
                    //   $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('PreInspectionAuditsforRegulatoryInspections.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/pre-inspection-audits-for-regulatory-inspections',compact('countries'));
    }


    public function TrilinkCleanCap(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/trilink-cleancap',compact('countries'));
    }
    public function TrilinkCleanCapJapan(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/trilink-cleancap-japan',compact('countries'));
    }
    public function GmpReagentsJapan(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/trilink-gmp-reagents-japan',compact('countries'));
    }
    public function TrilinkCleanCapReagentsJapan(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/trilink-cleancap-reagents-japan',compact('countries'));
    }

    public function TrilinkCleanCapCaseStudyJapan(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/trilink-cleancap-casestudy-japan',compact('countries'));
    }
    public function ContactUsJapan(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/trilink-contactus-japan',compact('countries'));
    }
    public function TrilinkCleanCapReagents(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/cleancap-reagents.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                    // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('TrilinkCleanCapReagents.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/trilink-cleancap-reagents',compact('countries'));
    }
    public function TrilinkCleanCapCaseStudy(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/trilink-cleancap-case-study.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                    // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('TrilinkCleanCapCaseStudy.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/trilink-cleancap-case-study',compact('countries'));
    }


    public function GmpReagents(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH); 
            $form = new Flatpage();               
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->page = $request->page;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/trilink-cleancap-case-study.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'page' => $page, 
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
           $message->to('omplenquiry@ochre-media.com');
           //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('TrilinkGmpReagents.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/gmp-reagents',compact('countries'));
    }
    public function ContactUs(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH);  
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->page = $request->page;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/trilink-cleancap-case-study.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'page' => $page, 
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                $message->to('omplenquiry@ochre-media.com');
                     //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('TrilinkContactUs.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/trilink-contact-us',compact('countries'));
    }
}