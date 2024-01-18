<?php

namespace App\Http\Controllers\knowledgebank;

use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;
use App\WhitePaper;
use App\SeoPage;
use App\Page;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Banner;
use App\Download;
use \Mail;

class WhitepapersController extends HomeController
{

	public function index()
	{	

		$whitepapers = WhitePaper::where('active_flag',1)->orderBy('id','desc')->select('url','title','short_description','title_tag')->get()->take(10);		
		$banners = $this->banners;
		$data_count = WhitePaper::where('active_flag',1)->count();
		$this->seoTools(request()->segment(1)); 
		return view('knowledgebank.whitepapers.index',compact('whitepapers','banners','data_count'));	
	}

	public function show($url)
	{	
		$whitepapers = WhitePaper::where('url',$url)->where('active_flag',1)->orderBy('id','desc')->select('pdf','title','description','url','id')->first();
         if(empty($whitepapers)){
            return view('errors.404');
        }
		$banners = $this->banners;
		$this->seoToolsView($whitepapers->id); 
		return view('knowledgebank.whitepapers.show',compact('whitepapers','banners'));	
	}

	public function more($offset){

		$data = WhitePaper::where('active_flag',1)->orderBy('id','desc') ->offset($offset)->limit(10)->select('url','title','short_description','title_tag')->get();
		return response(view('knowledgebank.whitepapers.loadmore', compact('data'))->render());

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

    	$data = Whitepaper::find($id);        
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

    public function whitepapersDownload($url)
  { 

    $whitepaper = Whitepaper::where('url', $url)->where('active_flag', 1)->orderBy('id', 'desc')->first();
    SEOMeta::setTitle($whitepaper->meta_title);
    	SEOMeta::setDescription($whitepaper->meta_description);
    	SEOMeta::addMeta('Project:published_time', $whitepaper->created_at->toW3CString(), 'property');
    	SEOMeta::addKeyword($whitepaper->meta_keywords);
    	OpenGraph::setDescription($whitepaper->og_description);
    	OpenGraph::setTitle($whitepaper->og_title);
    	OpenGraph::setUrl(url()->current());
    	SEOMeta::setCanonical(url()->current());
    	OpenGraph::addProperty('keyword', $whitepaper->og_keywords);
    	OpenGraph::addProperty('type', 'Project');
    	OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
    	OpenGraph::addImage([$whitepaper->og_image, 'size' => 300]);
    $time = \Carbon\Carbon::now()->format('Y-m-d');     
    $banners = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->get();  
    

    return view('knowledgebank.whitepapers.download' ,compact('whitepaper','banners'));
  } 
  public function whitepapersPost(Request $request,$url)
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
        $download->type = "whitepaper-download";        
        $download->save();    

        $data = [
            'title'=>$request->title,
            'name'=> $request->fullname,
            'email'=> $request->email,  
            'telephone'=> $request->telephone,  
            'company'=> $request->company,  
            'description'=> $request->description,                  
            'subject_client' => trans('messages.whitepaper_client'),
            'subject_admin' => $request->fullname.trans('messages.whitepaper_admin'),
        ];

        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
            $message->to(trans('messages.subscribe-email'));
            $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
        Mail::send('emails.whitepapers.client', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });
        $whitepaper_id = $request->whitepaper_id;
    return view('knowledgebank.whitepapers.success',compact('whitepaper_id'));

}

    public function whitepapersdwnlink($id)
    {
         $data =  Whitepaper::find($id);

         $pdf= config('app.url').'knowledgebank/whitepaper/'.$data->pdf; 

         return redirect($pdf);

    }

}
