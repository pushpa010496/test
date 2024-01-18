<?php

namespace App\Http\Controllers\knowledgebank;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\CaseStudy;
use App\SeoPage;
use App\Page;
use App\Download;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Banner;
use \Mail;


class CasestudiesController extends HomeController
{
	protected $banners;
	public function index()
	{	
		$casestudies = CaseStudy::where('active_flag',1)->orderBy('id','desc')->select('url','title','short_description','title_tag')->get()->take(10);		
		$banners = $this->banners;
		$data_count = CaseStudy::where('active_flag',1)->count();
		$this->seoTools(request()->segment(1)); 
		return view('knowledgebank.casestudies.index',compact('casestudies','banners','data_count'));	
	}

	public function show($url)
	{	
		$casestudies = CaseStudy::where('url',$url)->where('active_flag',1)->orderBy('id','desc')->select('pdf','title','description','url','id')->first();
         if(empty($casestudies)){
            return view('errors.404');
        }
		$banners = $this->banners;
		$this->seoToolsView($casestudies->id); 
		return view('knowledgebank.casestudies.show',compact('casestudies','banners'));	
	}

	public function more($offset){

		$data = CaseStudy::where('active_flag',1)->orderBy('id','desc') ->offset($offset)->limit(10)->select('url','title','short_description','title_tag')->get();

		return response(view('knowledgebank.casestudies.loadmore', compact('data'))->render());

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
    
    	$data = CaseStudy::find($id);        
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
  
  public function casestudiesDownload($url)
  { 

    $casestudy = CaseStudy::where('url', $url)->where('active_flag', 1)->orderBy('id', 'desc')->first();
         SEOMeta::setTitle($casestudy->meta_title);
    	SEOMeta::setDescription($casestudy->meta_description);
    	SEOMeta::addMeta('Project:published_time', $casestudy->created_at->toW3CString(), 'property');
    	SEOMeta::addKeyword($casestudy->meta_keywords);
    	OpenGraph::setDescription($casestudy->og_description);
    	OpenGraph::setTitle($casestudy->og_title);
    	OpenGraph::setUrl(url()->current());
    	SEOMeta::setCanonical(url()->current());
    	OpenGraph::addProperty('keyword', $casestudy->og_keywords);
    	OpenGraph::addProperty('type', 'Project');
    	OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
    	OpenGraph::addImage([$casestudy->og_image, 'size' => 300]);
    $time = \Carbon\Carbon::now()->format('Y-m-d');     
    $banners = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->get();  


    return view('knowledgebank.casestudies.download' ,compact('casestudy','banners'));
  } 
  public function casestudiesPost(Request $request,$url)
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
        $download->title = $request->title;  
        $download->type = "casestudy-download";        
        $download->save();    

        $data = [
            'title'=>$request->title, 
            'name'=> $request->fullname,
            'email'=> $request->email,  
            'telephone'=> $request->telephone,  
            'company'=> $request->company,  
            'description'=> $request->description,                  
            'subject_client' => trans('messages.casestudies_client'), 
            'subject_admin' => $request->fullname.trans('messages.casestudies_admin'),
        ];

        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
            $message->to(trans('messages.subscribe-email'));
            $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
        Mail::send('emails.casestudies.client', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });
        $casestudy_id = $request->casestudy_id;

         
    return view('knowledgebank.casestudies.success',compact('casestudy_id'));

}

    public function casestudiesdwnlink($id)
    {
         $data =  CaseStudy::find($id);

         $pdf= config('app.url').'knowledgebank/casestudies/'.$data->pdf; 

         return redirect($pdf);

    }
}
