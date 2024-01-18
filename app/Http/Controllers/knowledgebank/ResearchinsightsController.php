<?php 
 namespace App\Http\Controllers\knowledgebank;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\ReaserchInsites;
use App\Models\SeoPage;
use App\Models\Page;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;

class ResearchinsightsController extends HomeController
{
	protected $banners;
	public function index()
	{	
		$researchinsights = ReaserchInsites::where('active_flag',1)->orderBy('id','desc')->select('url','title','title_tag','short_description')->get()->take(10);		
		$banners = $this->banners;
		$data_count = ReaserchInsites::where('active_flag',1)->count();
		$this->seoTools(request()->segment(1)); 
		return view('knowledgebank.researchinsights.index',compact('researchinsights','banners','data_count'));	
	}

	public function show($url)
	{	
		$researchinsights = ReaserchInsites::where('url',$url)->where('active_flag',1)->orderBy('id','desc')->select('description','title','id','author_details')->first();
        if(empty($researchinsights)){
            return view('errors.404');
        }
		$banners = $this->banners;
		$this->seoToolsView($researchinsights->id); 
		return view('knowledgebank.researchinsights.show',compact('researchinsights','banners'));	
	}

	public function more($offset){

		$data = ReaserchInsites::where('active_flag',1)->orderBy('id','desc') ->offset($offset)->limit(10)->select('url','title','title_tag','short_description')->get();
		return response(view('knowledgebank.researchinsights.loadmore', compact('data'))->render());

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
    
    	$data = ReaserchInsites::find($id);        
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
