<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form;
use Auth;
use App\Category;
use \Session;
use \DB;
use \Mail;
use App\Product;
use App\SeoPage;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Country;
## or
use SEO;

class FlatPagesController extends Controller
{
 protected $model;
    public function __construct(Form $model)
    {
        $this->model = $model;
        //$this->middleware('auth');
    }
    public function index()
    {   $countries = DB::table('countries')->get();

          return view('flatpages/rpa-ai',compact('countries'));
    }
    
    public function RpaStore(Request $request)
    {  

             $form = new Form();
        request()->validate([
            'name' => 'required',
            'email' => 'email',
            'g-recaptcha-response' => 'required|captcha'
         ]);

        
        $form->name = $request->input("name");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        //$form->member_type = $request->input("member_type");
        $form->title = $request->input("job_title");
        $form->country = $request->input("country");
        $form->phone = $request->input("phone");
        $form->message = $request->input("message");
        $form->type = "rpa-ai";
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'job_title' =>$request->input("job_title"),
            'country' =>$request->input("country"),
            'type' => "RPA & AI Exchange Invitation",
            'membertype' => $request->input("member_type"),
            'description'=>$request->input("message")];
        /*Admin mail*/
        Mail::send('emails.rpa-ai.admin', $data, function($message) use ($data) {
        $message->to('info@plantautomation-technology.com');
        //$message->to('venkatasiva@ochre-media.com');
        $message->cc(['naveen@ochre-media.com','sumit@ochre-media.com']);
        $message->subject($data['email'].'| Generated Enquiry for RPA-AI-2018');
        });
        /*Client Mail*/
         Mail::send('emails.rpa-ai.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('RPA/AI Exchange-2018 Invitation Request|PlantAutomation-Technology');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('page_type',$request->input('page_type'));
        Session::flash('message_header', 'Success');
        Session::flash('message', "Thanks for your invitaion request.");
        $msg = base64_encode("success");
            /*
             $filePath = config_path("rpa/_DGdSJrpa_eu_delegate_analysis_final.pdf");
        	$headers = ['Content-Type: application/pdf'];
        	$fileName = time().'.pdf';
*/
            return redirect()->to($request->header('referer').'#-RPA-success');
    }

    public function TexWeek()
    {   $countries = DB::table('countries')->get();

          return view('flatpages/texweek',compact('countries'));
    }

    public function TexweekStore(Request $request)
    {  

            $countries = DB::table('countries')->get();


             $form = new Form();
        /*request()->validate([
            'name' => 'required',
            'email' => 'email',
            'g-recaptcha-response' => 'required|captcha'
         ]);*/

        
        $form->name = $request->input("name");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        //$form->member_type = $request->input("member_type");
        $form->title = $request->input("job_title");
        $form->country = $request->input("country");
        $form->phone = $request->input("phone");
        //$form->message = $request->input("message");
        $form->type = "Texweek";
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'job_title' =>$request->input("job_title"),
            'country' =>$request->input("country"),
            'type' => "TexWeek",
            //'membertype' => $request->input("member_type"),
            //'description'=>$request->input("message")
        ];
        /*Admin mail*/
        Mail::send('emails.texweek.admin', $data, function($message) use ($data) {
        //$message->to('info@plantautomation-technology.com');
        $message->to('omplenquiry@ochre-media.com');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com']);
        $message->subject('Generated Enquiry for Texweek');
        });
        /*Client Mail*/
         /*Mail::send('emails.texweek.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('RPA/AI Exchange-2018 Invitation Request|PlantAutomation-Technology');
        });*/
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        //Session::flash('page_type',$request->input('page_type'));
        Session::flash('message_header', 'Success');
        Session::flash('message', "Thanks for your invitaion request.");
        $msg = base64_encode("success");
            /*
             $filePath = config_path("rpa/_DGdSJrpa_eu_delegate_analysis_final.pdf");
            $headers = ['Content-Type: application/pdf'];
            $fileName = time().'.pdf';
*/
            //return redirect()->to($request->header('referer').'#-success');
            return view('flatpages/texweek-success',compact('countries'));
    }

   /* Flat page occ */

   public function pexbusinessview(Request $request){

        $countries = Country::select('id','country_name')->get();
        return view('flatpages.pex-business',compact('countries'));

   }

 public function pexbusiness(Request $request){


             $form = new Form();
             request()->validate([
            'name' => 'required',
            'email' => 'email',
            'g-recaptcha-response' => 'required|captcha'
         ]);

        
        $form->name = $request->input("name");
        $form->title = $request->input("job_title");
        $form->company = $request->input("company");
        $form->email = $request->input("email");
        $form->phone = $request->input("phone");
        $form->country = $request->input("country");
       
        //$form->message = $request->input("message");
        $form->type = "PEX-Business-Transformation";
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'job_title' =>$request->input("job_title"),
            'country' =>$request->input("country"),
            'type' => "PEX-Business-Transformation"];
        /*Admin mail*/
        Mail::send('emails.pex.admin', $data, function($message) use ($data) {
       //$message->to('info@plantautomation-technology.com');
       $message->to('omplenquiry@ochre-media.com');
      $message->subject('pex-business-transformation');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
      // $message->cc(['vamshinath@ochre-media.com']);
        });
        /*Client Mail*/
         Mail::send('emails.pex.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('pex-business-transformation');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('member_type',$request->input("member_type"));
        Session::flash('message', "Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours.Sincerely Plant Automation Technology");
            $msg = base64_encode("success");

            // return redirect()->to($request->header('referer'). '#'.$request->input("member_type").'-success');
            return redirect()->back()->with('status','success');
                
        /*return redirect()->back();*/

    } 
 public function Downloadpdfpex(){


        $filePath = public_path('industry/documents/PEX.pdf');
        $headers = ['Content-Type: application/pdf'];
        $fileName = time().'.pdf';
        return response()->download($filePath, $fileName, $headers);
         redirect('/pex-business-transformation'); 
                
        /*return redirect()->back();*/

    }
   /* Flat page end occ */


   //coopercorp Industrial
    public function coopercorpIndustrialGet(Request $request){
         $countries = Country::where('id',99)->select('id','country_name')->get();
        return view('flatpages.coopercorp-industrial',compact('countries'));
    }
   public function coopercorpIndustrial(Request $request){     

   
        $form = new Form();
    
          request()->validate([
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required',
             'g-recaptcha-response' => 'required'
            ]); 
  
                 
              
        $form->name = $request->input("name");
        $form->title = 'Cooper Corp product enquiry';
       
        $form->email = $request->input("email");
        $form->phone = $request->input("phone");
        $form->kva_genset = $request->input("kva_genset");
        $form->nature_of_business = $request->input("nature_of_business");
        $form->country = $request->input("country");
        $form->type = "Cooper Corp product enquiry";
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
           
            'phone'=>$request->input("phone"),
            'kva_genset' =>$request->input("kva_genset"),
            'nature_of_business' =>$request->input("nature_of_business"),
            'country' => $request->input("country"),
            'type' => "Cooper Corp Product Enquiry submitted"];
        /*Admin mail*/
        Mail::send('emails.cooper.admin', $data, function($message) use ($data) {
        //$message->to('info@plantautomation-technology.com');
        $message->to('omplenquiry@ochre-media.com');
        $message->subject('Cooper Corp Product Enquiry submitted');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
   
        });
        /*Client Mail*/
         Mail::send('emails.cooper.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Cooper Corp Product Enquiry submitted Successfully');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');   
        Session::flash('message', "Success! You have successfully posted your Enquiry");
            $msg = base64_encode("success");

            return redirect()->back()->with('status','success');

   }

   public function Scwsamericas()
    {   $countries = DB::table('countries')->get();

          return view('flatpages/scwsamericas',compact('countries'));
    }

    public function ScwsamericasStore(Request $request)
    {  

            $countries = DB::table('countries')->get();

if(\Request::isMethod('post')){

    
    $form = new Form();
            request()->validate([
                'name' => 'required',
                'email' => 'email',
                //'g-recaptcha-response' => 'required'
             ]);

        
        $form->name = $request->input("name");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        //$form->member_type = $request->input("member_type");
        $form->title = $request->input("job_title");
        $form->country = $request->input("country");
        $form->phone = $request->input("phone");
        //$form->message = $request->input("message");
        $form->type = "Scwsamericas";
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'job_title' =>$request->input("job_title"),
            'country' =>$request->input("country"),
            'type' => "Scwsamericas",
            //'membertype' => $request->input("member_type"),
            //'description'=>$request->input("message")
        ];
        /*Admin mail*/
        /*Mail::send('emails.scwsamericas.admin', $data, function($message) use ($data) {
        //$message->to('info@plantautomation-technology.com');
        $message->to('venkatasiva@ochre-media.com');
        //$message->to('omplenquiry@ochre-media.com');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com']);
        $message->subject('Generated Enquiry for Scwsamericas');
        });*/
        /*Client Mail*/
         /*Mail::send('emails.scwsamericas.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Scwsamericas Invitation Request|PlantAutomation-Technology');
        });*/
     
        return redirect()->route('scwsamericas')->with(['message'=>'Registration Successful Thank you for showing interest in this event. One of our staff will get back to you at the earliest to take this ahead.']);
}
             
            
            return view('flatpages/scwsamericas',compact('countries'));
    }
    
   
   
}