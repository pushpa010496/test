<?php 
namespace App\Http\Controllers\industryupdates;

use App\Http\Controllers\HomeController;
use Request;
use App\Models\Country; 
use \Session;
use \DB;
use \Mail;
use Carbon\Carbon;
use App\Models\SeoPage;
use App\Models\Page;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Models\Event;
use App\Models\Banner;


class EventController extends HomeController
{
	
   /* protected $banners;
    protected $time;
    protected $tempmonth;

    public function __construct()
    {        

        $this->time = \Carbon\Carbon::now()->format('Y-m-d');     
          $this->banners = Banner::where('active_flag','=', 1)->where('to_date', '>' , $this->time)->where('from_date', '<=' , $this->time)->get(); 
                  
    }*/

    public function index()
    {      

        $total = Event::where('active_flag','=', 1)->where('end_date', '>=' , $this->time);

       $data = Event::where('active_flag','=', 1)->where('end_date', '>=' , $this->time)->orderBy('start_date', 'ASC')->select('start_date','end_date','title','venue','event_organiser','email','web_link')->limit(50)->get();
     
        $last =  $data->last();
         $this->tempmonth = date('F Y', strtotime($last->start_date));

        $currentyear = Event::where('active_flag','=', 1)->where('end_date', '>=' , $this->time)->where(DB::raw("Year(start_date)"), date('Y'))->orderBy('start_date')->count();
        $nextyear =Event::where('active_flag','=', 1)->where('end_date', '>=' , $this->time)->where(DB::raw("Year(start_date)"), date('Y')+1)->orderBy('start_date')->count();

        $data_count = Event::where('active_flag',1)->where('end_date', '>=' , $this->time)->count();
              
        $banners = $this->banners;
        $this->seoTools(request()->segment(1)); 
        return view('events.index',compact('data','banners','data_count','currentyear','nextyear')); 
    }

    public function show($url)
    {   
        $data = Event::where('url',$url)->where('active_flag',1)->orderBy('id','desc')->first();
        $banners = $this->banners;
        $this->seoToolsView($data->id); 
        return view('events.show',compact('data','banners'));   
    }

    public function more($offset,$date){

        $data =  Event::where('active_flag','=', 1)->where('end_date', '>=' , $this->time)->orderBy('start_date', 'ASC') ->offset($offset)->limit(50)->select('start_date','end_date','title','venue','event_organiser','email','web_link')->get();

        return response(view('events.loadmore', compact('data','date'))->render());

    }

    public function filter($month,$year){


       $result = Event::where('active_flag',1)->where('end_date','>=', date('Y-m-d'))->whereIn(DB::raw("Year(start_date)"), [$year]); 

       $data = $result->where(DB::raw("Month(start_date)"), $month)->orderBy('start_date')->limit(50)->select('start_date','end_date','title','venue','event_organiser','email','web_link')->get();

       $data_count =$result->where(DB::raw("Month(start_date)"), $month)->orderBy('start_date')->count();


        $currentyear = Event::where('active_flag','=', 1)->where('end_date', '>=' , $this->time)->where(DB::raw("Year(start_date)"), date('Y'))->orderBy('start_date')->count();
        $nextyear =Event::where('active_flag','=', 1)->where('end_date', '>=' , $this->time)->where(DB::raw("Year(start_date)"), date('Y')+1)->orderBy('start_date')->count();


       $banners = $this->banners;

       return response(view('events.filter', compact('data','banners','data_count','currentyear','nextyear'))->render());

   }

   public function moreFilter($offset,$month,$year,$date){

     $result = Event::where('active_flag',1)->where('end_date','>=', date('Y-m-d'))->whereIn(DB::raw("Year(start_date)"), [$year]);

     $data_count =$result->where(DB::raw("Month(start_date)"), $month)->orderBy('start_date')->get();

     $data = $result->where(DB::raw("Month(start_date)"), $month)->orderBy('start_date')->offset($offset)->limit(50)->select('start_date','end_date','title','venue','event_organiser','email','web_link')->get();

     $banners = $this->banners;
     // $date =  date('F', strtotime($month)).' '.$year;


     return response(view('events.loadmore', compact('data','date'))->render());

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
    
        $data = Event::find($id);        
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
