<?php

namespace App\Http\Controllers\industryupdates;
use App\Http\Controllers\HomeController;

use Illuminate\Http\Requests;
use Request;
use App\Models\News;
use App\Models\Banner;
use \DB;
use App\Models\SeoPage;
use App\Models\Page;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;

class NewsController extends HomeController
{
	

	public function index()
	{	
        $time = \Carbon\Carbon::now()->format('Y-m-d');   

        $news = News::where('active_flag',1)->orderBy('date','desc')->limit(10)->select('url','title','date','short_description')->get();
        $banners = $this->banners;
        $data_count = News::where('active_flag',1)->count(); 

        $this->seoTools(request()->segment(1)); 
        return view('news.index',compact('news','banners','data_count'));	
    }

    public function show( $url)
    {	        
      
      $news = News::where('url',$url)->where('active_flag',1)->orderBy('id','desc')->select('title','date','description','id')->first();
      if(empty($news)){
        return view('errors.404');
    }
      $banners = $this->banners;
      $this->seoToolsView($news->id); 
      return view('news.show',compact('news','banners'));	
  }


  public function more($offset){

    $data = News::where('active_flag',1)->orderBy('id','desc')->offset($offset)->limit(10)->select('url','title','date','short_description')->get();
    return response(view('news.loadmore', compact('data'))->render());

}

public function filter($month,$year){

 $news = News::where('active_flag',1)->whereIn(DB::raw("Month(date)"), [$month])->whereIn(DB::raw("Year(date)"), [$year])->orderBy('id','desc')->limit(10)->select('url','title','date','short_description')->get();

 $data_count = $news->count(); 
 $banners = $this->banners;
 return view('news.filter',compact('news','banners','data_count','month','year'));   

}

public function listnewsFilter($month,$year,$offset){

   $data =News::where('active_flag',1)->whereIn(DB::raw("Month(date)"), [$month])->whereIn(DB::raw("Year(date)"), [$year])->orderBy('id','desc')->offset($offset)->limit(10)->select('url','title','date','short_description')->get(); 

   
   return response(view('news.loadmore', compact('data'))->render());   

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
    
    $data = News::find($id);        
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
