@extends('../layouts/app')

@section('style')
<style>
.mb-3{
margin-bottom:0.8rem !important;
}
.list-serv p{
  text-shadow: 2px 2px 4px #000000;
  font-family: 'Montserrat', sans-serif;
  font-size:15px;
  font-weight:bold;
  font-style:italic;
  

}
.form-control{
   border-radius:5px; 
}
.btn-info{
    background:#00def8;
    border-radius:5px;
}
</style>
@endsection
@section('content')  

<div class="container">
  <div class="row shadow">

    <div class="col-lg-9 col-md-9 col-sm-8 col-12 p-0">

      {{-- Home Slider  --}}
      <div id="mainsliderControls" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
         <?php $i=1; ?>
         @foreach($sliders as $key=> $homesliders)

         @if($i==1)

        <div class="carousel-item active">
          <a  target="_blank" title="{{$homesliders->title}}">
            <img class="d-block w-100" src="{{ config('app.url') }}slider/{{ $homesliders->image }}" alt="{{$homesliders->title}}">       
          </a>         
          <div class="carousel-caption-new d-none d-lg-block">
            <h3>{{$homesliders->title}}</h3>
          </div>
        </div>

        @else

        <div class="carousel-item">
          <a target="_blank" title="{{$homesliders->title}}">
            <img class="d-block w-100" src="{{ config('app.url') }}slider/{{ $homesliders->image }}" alt="{{$homesliders->img_alt}}">       
          </a>         
          <div class="carousel-caption-new d-none d-lg-block">
            <h3>{{$homesliders->title}}</h3>
          </div>
        </div>

        @endif
        <?php $i++; ?>
        @endforeach


        </div>
        <a class="carousel-control-prev" href="#mainsliderControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainsliderControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      {{--End Home Slider  --}}
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-12" 
    style="background-image: url('https://industry.europeanhhm.com/images/europeanhhm-bg.jpg');    background-repeat: no-repeat;
    background-size: cover;">
     
    <a style="position: absolute;bottom: 20px;right: 20px;left: 42px;" href="{{url('e-newsletter-subscribe')}}">
      <img src="{{config('app.url')}}images/submit_button.png" >
    </a>
    </div>
  
   <!-- <div class="col-lg-3 col-md-12 col-sm-12 col-12" style="background:#5c8395;">

        
          <div class='list-serv my-2'>
                    
                        <p  class="text-center mb-3" style="color:#f1f5f8">
                        Healthcare Management
</p>
                        <p  class="text-center mb-3" style="color:#f1f5f8">
                        Medical Sciences
</p>
                        <p  class="text-center mb-3" style="color:#f1f5f8">
                        Surgical Speciality
</p>
                        <p  class="text-center mb-3 " style="color:#f1f5f8">
                        Diagnostics
</p>
                        <p  class="text-center mb-3" style="color:#f1f5f8">
                        Technology Equipment
</p>
                        <p  class="text-center mb-3" style="color:#f1f5f8">
                        Facilities Operations
</p>
                        <p  class="text-center mb-3" style="color:#f1f5f8">
                        Information Technology
</p>
                        <p  class="text-center mb-2" style="color:#f1f5f8">
                        Expert Talk
</p>

</div>
                    
                  <div>
                  <a href="{{url('e-newsletter-subscribe')}}" target="_blank">
                  <button class="btn btn-sm btn-block btn-warning  font-weight-bold shadow" style="border-color:#002232; background-color:#002232; color:#f1f5f8;font-size: 14px;"> Subscribe to our monthly newsletter <br>for latest insights &amp; discoveries
</button>
      </a>
</div>
                  
           
      
         
  
     
     
      <form action="{{url('welcome')}}" role="form" id="ebookform"  method="post" accept-charset="utf-8">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->first('email', 'has-error')}}">

          <input style="height:30px" type="email" name="email" class="form-control bg-transparent border border-white PF-MagField" placeholder="Your Mail ID..." id="inputEmail" data-error="Bruh, that email address is invalid" required="">
          <span class="help-block">{{ $errors->first('email', ':message') }}</span>
        </div>

        <input value="e-book" name="type" id="e-book" type="hidden">
        <input value="" name="ebook_script" id="ebook_script" type="hidden">
        <button type="submit" id="submit" name="submit" class="btn btn-sm btn-block btn-danger">
          <img src="{{config('app.url')}}images/submit.png" class="" alt="submit" title="submit">&nbsp; SUBMIT
        </button>
      </form>
-->
    </div>  
    </div>

</div>  

{{-- Top/Full Banner banner --}}
<div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">

  

     <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
      @foreach($banners as $k=>$homebanner12)   
      @foreach($homebanner12->pagesCount as $j=>$pcount)
      @if($homebanner12->positions[0]->id == 4 and $pcount->id == 1)
      @if($homebanner12->type == 'script')
      {!! $homebanner12->script !!}
      @else
      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}">
        <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->img_alt}}" />
      </a>
      @endif
      @else
      @endif  
      @endforeach
      @endforeach
    </div>
   
</div>
{{-- End Top/Full Banner banner --}}


<div class="container">
  <div class="row pt-2 bg-white PF-BrdrDDD">
    <!-- // LEFT Section -->
    <div class="col-lg-8 pt-1">
      <!-- // News Section -->
      <div class="col-lg-12 p-0">             
        <h1 class="media-heading text-uppercase PF-h1Brdr pt-1">LATEST NEWS<a href="{{ route('news') }}"><span class="float-right PF-Readmore">Read more...</span></a>
        </h1>
      </div>



      {{-- News Section --}}
      @foreach($news as $val)
      <div class="clearfix"></div>
      <div class="col-lg-12 p-0">
        <div class="PF-Brdrnone">
          <div class="media-left">
            <div class="PF-BrdrDDD text-center p-1">
              <h3>{{ date('d', strtotime($val->date)) }}</h3>
              <span class="text-uppercase mt-1 float-left">{{ date('M Y', strtotime($val->date)) }}</span>
              <div class="clearfix"></div>
            </div>
          </div>

          <div class="media-body pl-2">
            <a href="{{ route('news.url',[$val->url]) }}" title="{{ $val->news_img_alt}}">
              <h2 class="PF-HdngsClrHvr mt-1 mb-1">{{ $val->home_title }}</h2>
            </a>
            <p class="text-justify text-dark">
             {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...') }}
           </p>                             
         </div>
       </div>
     </div>

     @endforeach
     {{-- End News Section --}}          

     {{-- Middle banner --}}
     <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">


      @foreach($banners as $k=>$homebanner12)   
      @foreach($homebanner12->pagesCount as $j=>$pcount)
      @if($homebanner12->positions[0]->id == 7 and $pcount->id == 1)
      @if($homebanner12->type == 'script')
      {!! $homebanner12->script !!}
      @else
      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}">
        <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" />
      </a>
      @endif
      @else
      @endif  
      @endforeach
      @endforeach
    </div>
    {{-- End Middle banner --}}

    <div class="clearfix mb-2"></div>


    <div class="clearfix"></div>



    <div class="clearfix mb-3"></div>

    {{-- // PR Section --}}
    <div class="col-lg-12 p-0">
      <h1 class="media-heading text-uppercase PF-h1Brdr pt-1">press releases<a href="{{route('pressreleases')}}"><span class="float-right PF-Readmore">Read more...</span></a>
      </h1>
    </div>

    @foreach($pressreleases as $val)
    <div class="clearfix"></div>
    <div class="col-lg-12 p-0">
      <div class="PF-Brdrnone">
        <div class="media-left">
          <div class="PF-BrdrDDD text-center p-1">
            <h3>{{ date('d', strtotime($val->date)) }}</h3>
            <span class="text-uppercase mt-1 float-left">{{ date('M Y', strtotime($val->date)) }}</span>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="media-body pl-2">
          <a href="{{route('pressreleases.url',[$val->url])}} " title="{{ $val->img_alt}}">
            <h2 class="PF-HdngsClrHvr mt-1 mb-1">{{ $val->home_title }}</h2>
          </a>
          <p class="text-justify text-dark">
           {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...') }}
         </p>
       </div>
     </div>
   </div>
   @endforeach
   <div class="clearfix"></div>       
   {{-- PR Section // --}}

   <div class="clearfix mb-2"></div>


   {{-- Middle banner  B/W PR & events --}}
   <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
    @foreach($banners as $k=>$homebanner12)   
    @foreach($homebanner12->pagesCount as $j=>$pcount)
    @if($homebanner12->positions[0]->id == 10 and $pcount->id == 1)
    @if($homebanner12->type == 'script')
    {!! $homebanner12->script !!}
    @else
    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
    @endif
    @else
    @endif  
    @endforeach
    @endforeach
  </div>
  {{-- End Middle B/W PR & events banner --}}

  <!-- // Events Section -->
  <div class="col-lg-12 p-0">
    <h1 class="media-heading text-uppercase PF-h1Brdr pt-1">Events<a href="{{url('events')}}"><span class="float-right PF-Readmore">Read more...</span></a>
    </h1>
  </div>


  <div class="clearfix"></div>
  @foreach($events as $val)

  <div class="col-lg-6 p-0 float-left" style="min-height: 110px">
    <div class="PF-Brdrnone">
      <div class="media-left">
        <div class="PF-BrdrDDD text-center p-1">
          <h3>{{ date('d', strtotime($val->start_date)) }} - {{ date('d', strtotime($val->end_date)) }}</h3>
          <span class="text-uppercase mt-1 text-center">{{ date('M Y', strtotime($val->start_date)) }}</span>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="media-body pl-2">
        <a href="{{url('events')}}" title="">
          <h2 class="PF-HdngsClrHvr mt-1 mb-1">{{$val->home_title}}</h2>
        </a>
        <p class="text-dark"> {!!$val->event_organiser != '' ? $val->event_organiser .'<br>': '' !!} {{$val->venue}}</p>
      </div>
    </div>
  </div>
  @endforeach



  <!-- Events Section // -->

  <div class="clearfix mb-2"></div>

  {{-- Bottom banner  below events --}}
  <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
    @foreach($banners as $k=>$homebanner12)   
    @foreach($homebanner12->pagesCount as $j=>$pcount)
    @if($homebanner12->positions[0]->id == 11 and $pcount->id == 1)
    @if($homebanner12->type == 'script')
    {!! $homebanner12->script !!}
    @else
    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
    @endif
    @else
    @endif  
    @endforeach
    @endforeach
  </div>
  {{-- End Bottom banner --}}
</div>
<!-- LEFT Section // -->


<!-- // Right Section -->
<div class="col-lg-4 text-right pb-2">
  <div class="pt-2"></div>

  <div class="bg-gray p-2  border-secondary">
   
   <!-- Sky Tower Banner Statr -->
  
   <!-- Sky Tower Banner End -->

   <!-- Sky Tower Banner Statr -->
   
   <!-- Sky Tower Banner End -->

    
    <!-- <div class="mt-3">
     <a href="https://www.pharmafocusasia.com/repligens-variable-pathlength-technology-for-oligonucleotide-drug-products" id="repligens-variable"  target="_blank" class="mb-3" title="Development and Validation of a Platform Assay Method Using Variable Pathlength Technology for Oligonucleotide Drug Products"><img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}ensign/replign-square-banner.jpg" alt="Development and Validation of a Platform Assay Method Using Variable Pathlength Technology for Oligonucleotide Drug Products" /></a>
   </div>
  -->
  
@foreach($banners as $k=>$homebanner12)   
    @foreach($homebanner12->pagesCount as $j=>$pcount)
    @if($homebanner12->positions[0]->id == 6 and $pcount->id == 1)
    <div class="mt-3">
      @if($homebanner12->type == 'script')
      {!! $homebanner12->script !!}
      @else
      <a href="{{$homebanner12->url}}" target="_blank" title="{{$homebanner12->title}}">
        <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->img_title}}" />
      </a>
      @endif
    </div>
    @else
    @endif  
    @endforeach
    @endforeach
   


    {{-- Square banner --}}

   
    
    <div class="mb-2"></div>
   

<!-- southern-star -->

    {{-- End Square banner --}}
    {{-- medicalexpo --}}
   
    {{-- End medicalexpo --}}
    {{-- Sky tower banner --}}
    @foreach($banners as $k=>$homebanner12)   
    @foreach($homebanner12->pagesCount as $j=>$pcount)
    @if($homebanner12->positions[0]->id == 2 and $pcount->id == 1)
    <div class="mt-3">
      @if($homebanner12->type == 'script')
      {!! $homebanner12->script !!}
      @else
      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}">
        <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" />
      </a>
      @endif
    </div>
    @else
    @endif  
    @endforeach
    @endforeach
    {{-- End Sky tower banner --}}

          </div>

        </div>
        <!-- Right Section // -->
      </div>
    </div>




    <div class="container">
      {{-- Bottom One banner --}}
      <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
        @foreach($banners as $k=>$homebanner12)   
        @foreach($homebanner12->pagesCount as $j=>$pcount)
        @if($homebanner12->positions[0]->id == 8 and $pcount->id == 1)
        @if($homebanner12->type == 'script')
        {!! $homebanner12->script !!}
        @else
        <a href="{{$homebanner12->url}}"  target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
        @endif
        @else
        @endif  
        @endforeach
        @endforeach
      </div>
      {{-- End Bottom One banner --}}
      <div class="row bg-white PF-BrdrDDD mt-2">         

        <!--// Top Articles -->
        <div class="col-lg-3 PF-TAbg"> 
          <h1 class="text-uppercase text-white PF-TopArt pt-3">TOP ARTICLES</h1>
          @if(count($articles))
          @foreach($articles as  $key => $val)
          @if($key != 0)
          <ul class="media-list col-lg-12 PF-PLRT0B10 PF-BrdrBWYTopacity" >
            <li class="media PF-Brdrnone PF-BGnone text-white p-0 PF-TopArt-maxHyt">
              <div class="media-left">
                <h1 class="PF-NUM m-0">{{$key}}</h1>
              </div>
              <div class="media-body pl-2 pt-1">
                <a href="{{url('articles').'/'.$val->url}}" title="{{$val->title_tag}}">
                  <h2 class="media-heading">{{\Illuminate\Support\Str::limit($val->title,$limit =150)}}</h2>
                </a>
                @foreach($val->authors as $author)
                <h5 class="media-heading">{{$author->title }}</h5>
                <h5 class="media-heading">{!!$author->authorbio!!}</h5>
                @endforeach
              </div>
            </li>
          </ul>
          @endif
          @endforeach
          @endif
        </div>
        <!--// Top Articles -->

        <!--// Knowledge Bank Content -->
        <div class="col-lg-9 pt-2">
          <div class="row m-0">
            <h1 class="text-uppercase mb-2 mt-2 PF-TXTRED">KNOWLEDGE BANK</h1>
            <div class="col-lg-12 p-0">
            <!--  <ul class="media-list col-lg-12 pl-0 mb-0">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">
                    <h2 class="media-heading text-uppercase PF-KBHdngs mb-2"><a href="{{url('interviews')}}">Interviews</a></h2>
                    <div class="pt-1">
                           @foreach($interviews as $interviews)
                      <img src="{{ config('app.app_path').'knowledgebank/interview/'.$interviews->photo }}" alt="{{ $interviews->alt_tag }}" class="float-left shadow-sm mt-1 mr-2 mb-2" width="100">
                      <a href="{{ route('interviews.url',[$interviews->url]) }}">
                        <h2 class="mt-0 mb-1">{{$interviews->title}}</h2>
                      </a>
                      <p class="text-justify text-dark mb-0"><strong>{{$interviews->designation}}</strong></p>                    

                      {!! \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst( $interviews->description)))),$limit =400, $end = '...')  !!}
    @endforeach

                    </div>
                  </div>
                </li>
              </ul>  -->


              <ul class="media-list col-lg-12 pl-0 mb-2">
                 <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">
                    <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{url('articles')}}">Articles</a></h2>
                    @foreach($articles as $article)
                      <a href="{{url('articles').'/'.$article->url}}" title="{{$article->title}}">
                      <h2 class="mt-2 mb-1">{{$article->title}}</h2>
                    </a>


                    <p class="m-0 text-justify text-dark"> {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($article->short_description)))),$limit = 400, $end = '...') }}</p>
                  @endforeach



                  </div>
                </li>
              </ul>
            </div>


            <div class="col-lg-12 p-0">
              {{-- Research Insights --}}
              <ul class="media-list col-lg-12 pl-0 mb-2">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">

                    <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{ url('researchinsights') }}" title="{{@$reaserchinsites->title_tag}}">Research Insights</a></h2>
                     @foreach($reaserchinsites as $reaserchinsites)
                     @if($reaserchinsites)
                    <a href="{{ route('researchinsights.url',[$reaserchinsites->url]) }}">                     
                      <h2 class="mt-2 mb-1">{{$reaserchinsites->title}}</h2>
                    </a>               
                    <p class="m-0 text-justify text-dark">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($reaserchinsites->short_description)))),$limit = 4000, $end = '...') }}
                    </p>
                    @endif
                    @endforeach
                  </div>
                </li>
              </ul>
              {{--End Research Insights --}}

              <!-- <ul class="media-list col-lg-12 pl-0 mb-2">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">
                    <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{url('casestudies')}}">Case Studies</a></h2>
                     @foreach($casestudy as $casestudy)
                    <a href="{{route('casestudies.url',[$casestudy->url]) }}" title="{{$casestudy->title_tag}}">
                      <h2 class="mt-2 mb-1">{{$casestudy->title}}</h2></a>
                      <p class="m-0 text-justify text-dark">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($casestudy->short_description)))),$limit = 370, $end = '...') }} </p>
                      @endforeach
                    </div>
                  </li>
                </ul> -->
              </div>

              <div class="col-lg-12 p-0">
                <ul class="media-list col-lg-12 pl-0 mb-2">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1">
                      <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{route('technotrends')}}">Techno Trends</a></h2>
                        @foreach($technotrend as $technotrend)
                      <a href="{{route('technotrends.url',[$technotrend->url]) }}" title="{{$technotrend->title_tag}}"><h2 class="mt-2 mb-1">{{$technotrend->title}}</h2></a>
                      <p class="m-0 text-justify text-dark">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($technotrend->short_description)))),$limit = 370, $end = '...') }}</p>
                      @endforeach
                    </div>
                  </li>
                </ul>

               <!--  <ul class="media-list col-lg-12 pl-0 mb-2">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1">
                         @foreach($whitepaper as $whitepaper)
                    @if($whitepaper)
                      <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{url('whitepapers')}}">White Papers</a></h2>
                      <a href="{{route('whitepapers.url',[$whitepaper->url]) }}" title="{{$whitepaper->title_tag}}">
                        <h2 class="mt-2 mb-1">{{$whitepaper->title}}</h2>
                      </a>

                      <p class="m-0 text-justify text-dark">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($whitepaper->short_description)))),$limit = 400, $end = '...') }}</p>
@endif
@endforeach
                  
                    </div>
                  </li>
                </ul> -->

                {{--   <ul class="media-list col-lg-12 pl-0 mb-2">
                  <li class="media PF-Brdrnone p-0 hoverborder">
                    <div class="media-body pt-1">
                      <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="https://www.asianhhm.com/reports">Industry Reports</a></h2>
                      <a href="https://www.asianhhm.com/reports/ellex-medical-lasers-limited-elx-financial-and-strategic-swot-analysis-review" title="">
                        <h2 class="mt-2 mb-1">Ellex Medical Lasers Limited (ELX) - Financial and Strategic SWOT Analysis Review</h2>
                      </a>
                      <p class="m-0 text-justify text-dark">Ellex Medical Lasers Limited Ellex is a medical technology company It develops manufactures services and distributes a comprehensive range of medical equipment for use in ophthalmic procedures The company also offers a range of thirdparty medical devices and technologies Ellexs product portfolio includes laser therapy equipment surgical techniques intraocular lenses IOLs photocoagulators and ultrasound systems for the diagnosis and treatment...</p>
                    </div>
                  </li>
                </ul> --}}
              </div>
              <!-- half Banners //-->
            </div>
          </div>
          <!-- Knowledge Bank Content //-->
        </div>
      </div>

      <div class="container">
        {{-- Bottom Two banner --}}
        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
          @foreach($banners as $k=>$homebanner12)   
          @foreach($homebanner12->pagesCount as $j=>$pcount)
          @if($homebanner12->positions[0]->id == 9 and $pcount->id == 1)
          @if($homebanner12->type == 'script')
          {!! $homebanner12->script !!}
          @else
          <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->s}}">
            <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->img_alt}}" /></a>
          @endif
          @else
          @endif  
          @endforeach
          @endforeach
        </div>
        {{-- End Bottom Two banner --}}
        <!-- <div class="row mt-2 PF-WytBG PF-BrdrDDD">
         

          <div class="col-lg-3 col-md-3 col-sm-3 col-12 PF-TAbgissues">             
            <h1 class="text-uppercase text-white PF-TopArt pt-3">Advisory Board</h1>
            <div class="row">
              @foreach($advaisoryboard as $val)
              <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
                <img src="{{ config('app.url').'advisoryboard/'.$val->home_image }}" alt="{{$val->alt_tag}}" title="{{$val->title_tag}}" width="70" height="70" style="filter: grayscale(100%);-webkit-filter: grayscale(100%); ">
                <a href="{{url('advisory-board')}}" target="_blank">    
                  <p>{{$val->short_title}}</p>
                </a>
                {!!$val->home_description!!}
              </div>
              @endforeach

             
            </div>
          </div> -->


          <div class="row mt-12 PF-WytBG PF-BrdrDDD">
          <!--// Forthcoming issue block -->
            
             <div class="col-lg-3 col-md-3 col-sm-4 col-12" style='background-image:url("https://industry.americanhhm.com/images/editorial-section-form-bg.jpg");background-repeat: no-repeat;background-size: cover;background-position:right;display:flex;justify-content:center;align-items:center;'>
                 <div class="row form-container" >

                  <div class="col-lg-12 "> 

                   
                                          <h1 class="mb-4 text-center form-title pt-3" style='color:#00def8;font-weight:bold;border-bottom:2px solid #00def8;line-height:30px;'>BECOME A CONTRIBUTOR</h1>
                   
                    <form method="post" name="newsletter_form" id="writemessage" class="form_count" accept-charset="utf-8" _lpchecked="1">         

                      <input name="_token" type="hidden" value="pPCSrHWY98Cqm3MkBrCrT2OG42dmBa90u0xJQcAD">
                      <input type="hidden" name="" class="action_url" value="https://www.americanhhm.com/e-newsletter-subscribe">
                      
                      <input type="hidden" name="name" value="e-newsletter-subscribe">

                      <div class="form-group col-lg-12  ">
                        <input type="text" class="form-control" value="" name="fullname" placeholder="Full Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets " required="">
                        <input type="hidden" value="e-newsletter-subscribe" name="type" id="type">
                         <span class="help-block"></span>   
                      </div>

                       <div class="form-group col-lg-12  ">
                        <input type="text" class="form-control" value="" name="cf_leads_jobtitle" placeholder="Job Title*" pattern="[A-Za-z0-9\s]{2,50}" required="">
                         <span class="help-block"></span>   
                      </div>

                      <div class="form-group col-lg-12  ">
                        <input type="email*" class="form-control" value="" name="email" placeholder="Email*" required="">
                         <span class="help-block"></span>   
                      </div>

                      <div class="form-group col-lg-12  ">
                        <input type="text" class="form-control" value="" name="mobile" placeholder="Telephone*" pattern="[0-9\s._*#()+-]+" minlength="8" required="">
                         <span class="help-block"></span>   
                      </div>

                      
                      <div class="form-group col-lg-12  ">
                        <input type="text" class="form-control" value="" name="company" placeholder="Company*" pattern="[A-Za-z0-9\s]{2,50}" required="">
                         <span class="help-block"></span>   
                      </div>
                         <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response" value="03AIIukzgm05dtM9dDtdUPkqAw3EUIcC55aZ_kXbkksIyURMuqvWwi_AMDN1JXEczLZqk_y2j2-aH-AXufc7tHRSGXODpQfGodhC7w41eWePFJBHdOw6PEX0R56RKhGiTCt8HPrGka-wXArOyO538CrjyNZKQhHvkkJWUH8ssnT8pR6OIzy2GCJmPixA8FNN20Wukx_qCdbSoxvPuOINVWb7zsMj41Gw81O-a19vHGU-q1Kb6VEbPddeni1penJHhc9ZUJRhWEoQ1fAUQPYFNx9ZuK6841B1lqJrcASjmSx2zCUPJprUUxL-itbfDXMelFqfN-Lkk_o1i-y_xfutF8TY1_NzfG3e5jW67TBPDI82nP4Rhdfn9safP6ZOZQaBbqcwboGHOvOc5ujP70-cRBlEPTyvJY7FWF7toRqzryZ9Tf2S9yEmPb0AUxKdKqiT8kbrcu_zwVuBl-QcguGQbLnkb5F-fDyUyvmZ6JE8pPwYBDlLvpvYxwPJ6J2wDS24-bgmK1khBLseW0">
                     <!--  <div class="form-group col-lg-12">
                       <script src="https://www.google.com/recaptcha/api.js?hl=en" async defer></script><div class="g-recaptcha" theme="light" id="buzzNoCaptchaId_8046962960d2554b4fea53759ec2fb1f" data-sitekey="6LdgRS8UAAAAAI2w6gepgumVmrg3op7kSl_67MaG"></div>
                                              <div style="color: #d77878" class="verifi"></div>
                     </div> -->

                     

                     <div class="form-group col-lg-12">
                      <!-- <input type="submit" value="SUBMIT" id="submit-button"  class="btn submit-form btn-block PF-MTB10 PF-MB20"/> -->
                      <input type="submit" class="btn btn-block btn-info" id="submit-button" value="SUBMIT" >

                    </div>
                    </form>

                  <div class="clearfix"></div>

                  <div class="PF-MB20"></div>

                </div> 
              </div>
                 

    
 
    </div>
        <!--  <div class="col-lg-3 PF-TAbgissues">
            <ul class="media-list col-lg-12 PF-PLRT0B10 PF-BrdrBWYTopacity">

              <h1 class="text-uppercase text-white PF-TopArt pt-3">Advisory Board</h1>
             
              </ul>
              <ul class="media-list col-lg-12 PF-PLRT0B10  PF-BrdrBWYTopacity">
              <li style="height: 150px;" class="media PF-Brdrnone PF-BGnone text-white p-0 PF-TopArt-maxHyt165 mt-3">
                <div class="media-left" style="margin: 20px"> 
                <img src="{{ config('app.url').'advisoryboard/Coming_soon.jpg'}}" alt="Coming" title="Coming">
                
                </div>
               
               </li>
            </ul>
              <ul class="media-list col-lg-12 PF-PLRT0B10 PF-BrdrBWYTopacity">
              <li style="height: 110px;" class="media PF-Brdrnone PF-BGnone text-white p-0 PF-TopArt-maxHyt165 mt-3">
                <div class="media-left" style="margin: 10px"> 
                <img src="{{ config('app.url').'advisoryboard/user.png'}}" alt="Coming" title="Coming"  style=" filter: grayscale(100%);-webkit-filter: grayscale(100%); "> 
                </div>
                <br>
                <br>
                <div class="media-left" style="margin: 10px"> 
                <img src="{{ config('app.url').'advisoryboard/user.png' }}" alt="Coming" title="Coming" style=" filter: grayscale(100%);-webkit-filter: grayscale(100%); "> 
                </div>
              </li>
            </ul>
            <ul class="media-list col-lg-12 PF-PLRT0B10 PF-BrdrBWYTopacity">
              <li style="height: 110px;" class="media PF-Brdrnone PF-BGnone text-white p-0 PF-TopArt-maxHyt165 mt-3">
                <div class="media-left" style="margin: 10px"> 
                <img src="{{ config('app.url').'advisoryboard/user.png'}}" alt="Coming" title="Coming"  style=" filter: grayscale(100%);-webkit-filter: grayscale(100%); "> 
                </div>
                <br>
                <br>
                <div class="media-left" style="margin: 10px"> 
                <img src="{{ config('app.url').'advisoryboard/user.png' }}" alt="Coming" title="Coming" style=" filter: grayscale(100%);-webkit-filter: grayscale(100%); "> 
                </div>
              </li>
            </ul>
            <ul class="media-list col-lg-12 PF-PLRT0B10 PF-BrdrBWYTopacity">
              <li style="height: 110px;" class="media PF-Brdrnone PF-BGnone text-white p-0 PF-TopArt-maxHyt165 mt-3">
                <div class="media-left" style="margin: 10px"> 
                <img src="{{ config('app.url').'advisoryboard/user.png'}}" alt="Coming" title="Coming"  style=" filter: grayscale(100%);-webkit-filter: grayscale(100%); "> 
                </div>
                <br>
                <br>
                <div class="media-left" style="margin: 10px"> 
                <img src="{{ config('app.url').'advisoryboard/user.png' }}" alt="Coming" title="Coming" style=" filter: grayscale(100%);-webkit-filter: grayscale(100%); "> 
                </div>
              </li>
            </ul>
           
            <ul class="media-list col-lg-12 PF-PLRT0B10  PF-BrdrBWYTopacity">
              <li style="height: 160px;" class="media PF-Brdrnone PF-BGnone text-white p-0 PF-TopArt-maxHyt165 mt-3">
                <div class="media-left" style="margin: 20px"> 
                <a href="{{'https://www.ochre-media.com/advisory-board-application-form.html'}}" target="_blank">
                <img src="{{ config('app.url').'advisoryboard/subscribe_img.png'}}" alt="Coming" title="Coming">
                      </a>
                </div>
               
               </li>
               <h5 class="text-white text-center pt-1">Sign-Up for Membership in our Advisory Board</h5>
            </ul>
            
            @foreach($advaisoryboard as $val)
              <li style="height: 110px;" class="media PF-Brdrnone PF-BGnone text-white p-0 PF-TopArt-maxHyt165 mt-3">
                <div class="media-left"> 
                  <img src="{{ config('app.url').'advisoryboard/'.$val->image }}" alt="{{$val->alt_tag}}" title="{{$val->title_tag}}" width="70" height="80" style=" filter: grayscale(100%);-webkit-filter: grayscale(100%); "> 
                </div>
                <div class="media-body pl-2 pt-1">
                  <a href="{{url('advisory-board')}}" target="_blank">    
                    <h2 class="media-heading">{{$val->title}}</h2>
                  </a>
                  {!!$val->home_description!!}
                </div>
              </li>
              @endforeach

         
          </div>
-->

          <!--// editorial Section Content -->
          <div class="col-lg-9 mt-2">
            <div class="row m-0">
              <h1 class="text-uppercase mb-2 mt-2 PF-TXTRED">EDITORIAL SECTION</h1>

              <div class="col-lg-12 p-0">

                <ul class="media-list col-lg-12 pl-0 mb-1">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1 pb-1">

                      @foreach($techno_equipment as $techno_equipment)
                      <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{url('technology-equipment')}}">Technology-Equipment</a></h2> 
                      <a href="{{url('technology-equipment').'/'.@$techno_equipment->url }}" title="{{@$techno_equipment->title_tag}}">
                        <h2 class="mt-2 mb-1">{{ @$techno_equipment->title}}</h2>
                      </a>
                      <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$techno_equipment->short_description )))),$limit =320, $end = '...') }} </p>    
                      @endforeach
                    </div>
                  </li>
                </ul>

                <ul class="media-list col-lg-12 pl-0 mb-1">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1 pb-1">
                     @foreach($healthcare_management as $healthcare_management)
                     <h2 class="media-heading text-uppercase PF-KBHdngs">
                      <a href="{{url('healthcare-management')}}">healthcare-management</a>
                    </h2>                           
                    <a href="{{url('healthcare-management').'/'.@$healthcare_management->url }}" title="{{@$healthcare_management->title_tag}}">
                      <h2 class="mt-2 mb-1">{{@$healthcare_management->title}}</h2>
                    </a>
                    <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$healthcare_management->short_description )))),$limit =320, $end = '...') }}</p>  
                    @endforeach                    
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-lg-12 p-0">
              <ul class="media-list col-lg-12 pl-0 mb-1">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1 pb-1">
                    @foreach($surgical_speciality as $surgical_speciality)
                    <h2 class="media-heading text-uppercase PF-KBHdngs">
                      <a href="{{url('surgical-speciality')}}">Surgical Speciality</a>
                    </h2>                            
                    <a href="{{url('surgical-speciality').'/'.@$surgical_speciality->url }}" title="{{@$surgical_speciality->title_tag}}">
                     <h2 class="mt-2 mb-1">{{@$surgical_speciality->title}}</h2>
                   </a>                            
                   <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$surgical_speciality->short_description )))),$limit = 270, $end = '...') }}</p>

                   @endforeach
                 </div>
               </li>
             </ul>

             <ul class="media-list col-lg-12 pl-0 mb-1">
              <li class="media PF-Brdrnone p-0">
                <div class="media-body pt-1 pb-1">
                  @foreach($information_technology as $information_technology)
                  <h2 class="media-heading text-uppercase PF-KBHdngs">
                    <a href="{{url('information-technology')}}">Information Technology</a>
                  </h2>                                             
                  <a href="{{url('information-technology').'/'.@$information_technology->url }}" title="{{@$information_technology->title_tag}}">
                   <h2 class="mt-2 mb-1">{{@$information_technology->title}}</h2>
                 </a>
                 <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$information_technology->short_description )))),$limit = 270, $end = '...') }}</p>
                 @endforeach

               </div>
             </li>
           </ul>
         </div>

         <div class="col-lg-12 p-0">
          <ul class="media-list col-lg-12 pl-0 mb-1">
            <li class="media PF-Brdrnone p-0">
              <div class="media-body pt-1 pb-1">
                @foreach($medical_science as $medical_science)
                <h2 class="media-heading text-uppercase PF-KBHdngs">
                  <a href="{{url('medical-sciences')}}">Medical Sciences</a>
                </h2>
                <a href="{{url('medical-sciences').'/'.@$medical_science->url }}" title="{{@$medical_science->title_tag}}">                              
                 <h2 class="mt-2 mb-1">{{@$medical_science->title}}</h2>
               </a>
               <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$medical_science->short_description )))),$limit = 270, $end = '...') }}</p>
               @endforeach
             </div>
           </li>
         </ul>

         <ul class="media-list col-lg-12 pl-0 mb-1">
          <li class="media PF-Brdrnone p-0">
            <div class="media-body pt-1 pb-1">
              @foreach($diagnostics as $diagnostics)
              <h2 class="media-heading text-uppercase PF-KBHdngs">
                <a href="{{url('diagnostics')}}">Diagnostics</a>
              </h2>
              <a href="{{url('diagnostics').'/'.@$diagnostics->url }}" title="{{@$diagnostics->title_tag}}"> 

               <h2 class="mt-2 mb-1">{{@$diagnostics->title}}</h2>
             </a>

             <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$diagnostics->short_description )))),$limit =320, $end = '...') }}</p>

             @endforeach
           </div>
         </li>
       </ul>

       <ul class="media-list col-lg-12 pl-0 mb-1">
        <li class="media PF-Brdrnone p-0">
          <div class="media-body pt-1 pb-1">
           @foreach($facilities as $facilities)
           <h2 class="media-heading text-uppercase PF-KBHdngs">
            <a href="{{url('facilities-operations')}}">Facilities &amp; Operations</a>
          </h2>
          <a href="{{url('facilities-operations').'/'.@$facilities->url }}" title="{{@$facilities->title_tag}}"> 

            <h2 class="mt-2 mb-1">{{@$facilities->title}}</h2>
          </a>

          <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$facilities->short_description )))),$limit =320, $end = '...') }}</p>
          @endforeach
        </div>
      </li>
    </ul>
    <!--
    <ul class="media-list col-lg-12 pl-0 mb-1">
        <li class="media PF-Brdrnone p-0">
          <div class="media-body pt-1 pb-1">
       
           <h2 class="media-heading text-uppercase PF-KBHdngs">
            <a >Expert Talk </a>
          </h2>
      
        </div>
      </li>
    </ul>
                      -->
  </div>
</div>
</div>
<!-- editorial Section Content //-->

</div>
</div>

{{-- Base banner --}}
<div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
  @foreach($banners as $k=>$homebanner12)   
  @foreach($homebanner12->pagesCount as $j=>$pcount)
  @if($homebanner12->positions[0]->id == 5 and $pcount->id == 1)
  @if($homebanner12->type == 'script')
  {!! $homebanner12->script !!}
  @else
  <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
  @endif
  @else
  @endif  
  @endforeach
  @endforeach
</div>
{{-- End Base banner --}}
@endsection

@section('scripts')

@endsection
