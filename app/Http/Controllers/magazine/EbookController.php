<?php

namespace App\Http\Controllers\magazine;

use App\Http\Controllers\HomeController;
use App\Models\Ebook;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Editorialarticle;
use App\Models\EbookEmail;
use App\Models\Issue;
use App\Models\Subscriber;
use \Mail;
use App\Models\Page;
use App\Models\SeoPage;
use SEOMeta;
use OpenGraph;
use Twitter;


class EbookController extends HomeController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $current_issue = $this->current_issue;
         if($current_issue->issue_no=="No Issue | 2015"){
            echo "This is No Issue";
         }
        $banners = $this->banners;
        $this->seoTools(request()->segment(1));  
        $ebook = Ebook::with('issue')->where('issue_id',$current_issue->id)->first();
        $articles = Editorialarticle::where('issue_id',$current_issue->id)->with('issue','category')->get();
        $categories = Category::whereIn('id',explode(',',$current_issue->category))->where('active_flag',1)->get(); 
        return view('magazine.index',compact('current_issue','banners','ebook','articles','categories'));

    }


    public function ebook(Request $request)
    {   

        if($request->post()){
           request()->validate([
            'email'=>'required|email',
            'issue_id' =>'required',
            'ebook_id' =>'required'
        ]);
           $ebook =  Ebook::with('issue')->where('id',$request->ebook_id)->where('active_flag',1)->orderBy('id','desc')->first();


            $email = new EbookEmail;
            $email->issue_id =$request->issue_id;
            $email->email = $request->email; 
            $email->save();    

            $data = [
                'issue'=> $ebook->issue->title,
                'email'=> $request->email,           
                'subject_client' => trans('messages.ebook_client'),
                'subject_admin' => trans('messages.ebook_admin'),
            ];

            /*Admin mail*/
            Mail::send('emails.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.subscribe-email'));
                $message->subject($data['subject_admin']);
            });
            /*Client Mail*/
            Mail::send('emails.ebook.client', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return view('magazine.ebook.ebookview',compact('ebook'));

        }    


         $ebook =  Ebook::with('issue')->where('active_flag',1)->orderBy('id','desc')->get();
         $banners = $this->banners;
         $this->seoTools(request()->segment(1));  
        return view('magazine.ebook.index',compact('ebook','banners'));
    }

    public function ebookSubscribe(Request $request)
    {   
        if($request->post()){

             request()->validate([
                'email'=>'required|email',
                'fullname' =>'required',
                'company' =>'required',
                'telephone'=>'required'
            ]);

           $form = new Subscriber();
            $form->fullname = $request->fullname ;
            $form->email = $request->email;
            $form->telephone = $request->telephone;
            $form->fax = $request->fax;            
            $form->company = $request->company;
            $form->designation = $request->cf_leads_jobtitle;
            
            $form->type = $request->type;
            $form->save();

             /*Send email admin*/  
        $data = [
            'name'=> $request->fullname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->telephone,                                                
            'type' => $request->type,            
            'subject_client' => trans('messages.ebook_subscribe_admin'),
            'subject_admin' => ucfirst($request->fullname).trans('messages.ebook_subscribe_admin'),
         ];
            /*Admin mail*/
            Mail::send('emails.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.subscribe-email'));
                $message->subject($data['subject_admin']);
            });
            /*Client Mail*/
            Mail::send('emails.ebook.subscribe', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->back()->with(['status'=>'true']);
        }    

       
        $banners = $this->banners;
        // $this->seoTools(request()->segment(1));  
        return view('magazine.ebook.subscribe',compact('banners'));
    }


   
    public function archives()
    {
        
        $categories = Category::where('active_flag',1)->get();        
         $ebook =  Ebook::with('issue')->where('active_flag',1)->orderBy('id','desc')->get();
       
         $banners = $this->banners;
        $this->seoTools(request()->segment(1));  
        return view('magazine.archives.index',compact('ebook','categories','banners'));
    }

    public function archiveMagazine(Issue $issue,Request $request)
    {   
        // if(!$request->post()){
        //     return redirect('archives');    
        // }
        $ebook = Ebook::where('issue_id',$issue->id)->first(); 
        if(empty($ebook)){
            return view('errors.404');
        }  
        //return $ebook;
        $articles = Editorialarticle::where('issue_id',$ebook->issue_id)->with('issue','category')->get();
        
        $categories = Category::whereIn('id',explode(',',$ebook->issue->category))->get();              
        $banners = $this->banners;
         $this->seoToolsView($ebook->id);  
        $current_issue = $this->current_issue;
        return view('magazine.ebook.archive_magazine',compact('ebook','categories','banners','articles','current_issue'));
    }

    public function ebookPost(Request $request)
    {   
        
        request()->validate([
            'email'=>'required|email',
            'issue_id' =>'required',
            'ebook_id' =>'required'
        ]);

      $issue = Issue::find($request->issue_id);

      if($issue){
        $email = new EbookEmail;

        $email->issue_id = $issue->id;
        $email->email = $request->email; 
        $email->save();    

        $data = [
            'issue'=> $issue->issue_no,
            'email'=> $request->email,           
            'subject_client' => trans('messages.ebook_archive_client'),
            'subject_admin' => trans('messages.ebook_archive_admin'),
        ];

        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
            $message->to(trans('messages.subscribe-email'));
            $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
        Mail::send('emails.ebook.client', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });

    }else{

        return redirect()->route('ebook.archives');
    }   

     $ebook = Ebook::find($request->ebook_id);
     //return  $ebook;
    $articles = Editorialarticle::where('issue_id',$issue->id)->with('issue','category')->get();
    $categories = Category::whereIn('id',explode(',',$issue->category))->get();              
    $banners = $this->banners;
    $current_issue=$this->current_issue;
    $this->seoToolsView($ebook->id);  
    return view('magazine.ebook.archive_magazine',compact('ebook','categories','banners','articles','current_issue'));

}


 public function latestIssue()
    {   
        $this->seoTools('latest-ebook');
        
        $ebook =  Ebook::with('issue')->where('active_flag',1)->orderBy('id','desc')->first();
        $banners = $this->banners;          

        return view('magazine.ebook.latestissue',compact('ebook','banners'));
    }

    public function welcome(Request $request)
    {   

        if($request->post()){
           request()->validate([
            'email'=>'required|email'        
        ]);
           $ebook =  Ebook::with('issue')->where('active_flag',1)->orderBy('id','desc')->first();


           $form = new Subscriber();        
           $form->email = $request->email;          
           $form->type = $request->type;
           $form->save();


           $data = [
            'issue'=> $ebook->issue->title,
            'email'=> $request->email,           
            'subject_client' => trans('messages.ebook_welcome_client'),
            'subject_admin' => trans('messages.ebook_welcome_admin'),
        ];

        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
            $message->to(trans('messages.subscribe-email'));
            $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
        Mail::send('emails.ebook.welcome', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });

        return view('magazine.ebook.ebookview',compact('ebook'));

    }    

        return redirect()->route('mainhome');
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

    public function seoToolsView($ebook){
        $page = Ebook::find($ebook);
        $data =  Ebook::find($ebook);
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
   
}
