  @php

 $current_issue  = \App\Models\Issue::where('active_flag', 1)->orderBy('id','desc')->first();   

 $ebook = \App\Models\Ebook::where('issue_id', $current_issue->id)->where('active_flag', 1)->first();

        if(empty($ebook)){
         $alt_issue = \App\Models\Issue::where('active_flag', 1)->where('id', '!=',$current_issue->id)->orderBy('id','desc')->first();    
         $ebook = \App\Models\Ebook::where('issue_id',$alt_issue->id)->where('active_flag', 1)->first();          
        }
  @endphp
<!--
  <style type="text/css">
    .PF-LatestMagzBG {height: auto !important;}
  </style>

  <div class="col-lg-12 col-md-12 col-sm-12 col-12 PF-LatestMagzBG mb-3">
    <a href="https://www.europeanhhm.com/latest-ebook" target="_blank">
    <img src="https://industry.europeanhhm.com/ebooks/issue-56/1659509348-ebook-sm-ebook-sm-AHHM-56-sm.jpg" alt="Latest Issue" title="Latest Issue" width="145" class="img-fluid border mb-3">
    </a>
   <h5 class="text-white font-weight-bold">Get instant <br>access to our latest e-book</h5>   

  </div>  
  
   <a href="javascript:void(0)" id="THERMOFISHER_SEA" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202202141034211138296851/'); return false;" target="_blank" title="THERMOFISHER SEA">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/thermofisher_sea_2971_300x600.gif" alt="THERMOFISHER SEA" />
    </a>
      -->
  @php 
  $page_id =  getpage(Request::segment(1));
  @endphp
  @foreach($banners as $k=>$banner)   
   @foreach($banner->pagesCount as $j=>$pcount)
     @if($banner->positions[0]->id == 6 and $pcount->id == $page_id)
    
<a {{$page_id}} href="{{$banner->url}}"  target="_blank" class="mb-3" title="{{$banner->title}}"><img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}ensign/{{$banner->image}}" alt="{{$banner->img_alt}}"  title="{{$banner->img_title}}"/></a>


     @else
     @endif  
   @endforeach
 @endforeach


