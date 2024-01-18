<?php

namespace App\Http\Controllers\magazine;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Download;
use \Mail;
use App\Authorguideline;

class MagazineController extends HomeController
{
    public function authorguidelinesPost(Request $request)
    {  

        request()->validate([
            'fullname' =>'required',
            'email'=>'required|email',
			'telephone' =>'required',
			'company' =>'required'                                  
        ]);

        $download = new Download;
        $download->fullname = $request->fullname;
        $download->email = $request->email; 
        $download->telephone = $request->telephone; 
        $download->company = $request->company; 
        $download->description = $request->description; 
        $download->type = "authorguidelines-download";        
        $download->save();    

        $data = [
        	'name'=> $request->fullname,
        	'email'=> $request->email,  
        	'telephone'=> $request->telephone,  
        	'company'=> $request->company,  
        	'description'=> $request->description,                  
        	'subject_client' => trans('messages.authorguideline_client'),
        	'subject_admin' => $request->fullname.trans('messages.authorguideline_admin'),
        ];

        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
            $message->to(trans('messages.subscribe-email'));
            $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
        Mail::send('emails.mediapack.authorguidelines', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });
    return view('magazine.authorguidelines.success');

}

	public function autherguidlinesdwnlink(Request $request)
	{
		 $data =  Authorguideline::where('active_flag',1)->orderBy('id','desc')->first();


		 $pdf= config('app.url').'authorguidelines/pdf/'.$data->pdf; 

		 return redirect($pdf);

	}

}
