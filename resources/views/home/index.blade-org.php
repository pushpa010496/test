@extends('../layouts/app')
@section('style')

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
          <a href="{{$homesliders->url}}" target="_blank" title="{{$homesliders->title}}">
            <img class="d-block w-100" src="{{ config('app.url') }}slider/{{ $homesliders->image }}" alt="{{$homesliders->title}}">       
          </a>         
          <div class="carousel-caption-new d-none d-lg-block">
            <h3>{{$homesliders->title}}</h3>
          </div>
        </div>

        @else

        <div class="carousel-item">
          <a href="{{$homesliders->url}}" target="_blank" title="{{$homesliders->title}}">
            <img class="d-block w-100" src="{{ config('app.url') }}slider/{{ $homesliders->image }}" alt="{{$homesliders->title}}">       
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

    <div class="col-lg-3 col-md-3 col-sm-4 col-12 PF-LatestMagzBG">
      {{-- <a href="https://www.asianhhm.com/ahhmadmin/upload/ebook/1526305348-img-ahhm-40-md.jpg"> --}}

        <img src="{{ config('app.url').'ebooks/'. str_slug($ebook->issue->issue_no).'/'.$ebook->image_sm }}" alt="Latest Issue" title="Latest Issue" width="145" class="img-fluid pb-3">

      {{-- </a> --}}
      {{--   <a href="https://www.asianhhm.com/ahhmadmin/upload/ebook/1526305348-img-ahhm-40-md.jpg" class="btn btn-sm btn-block btn-danger">Get instant access to latest e-book</a> --}}
      <h5 class="text-white PF-MT5">Get instant access to latest e-book </h5>
      <form action="{{url('welcome')}}" role="form" id="ebookform"  method="post" accept-charset="utf-8">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->first('email', 'has-error')}}">

          <input style="height:30px !important;color: #fff" type="email" name="email" class="form-control bg-transparent border border-white PF-MagField" placeholder="Your Mail ID..." id="inputEmail" data-error="Bruh, that email address is invalid" required="">
          <span class="help-block">{{ $errors->first('email', ':message') }}</span>
        </div>

        <input value="e-book" name="type" id="e-book" type="hidden">
        <input value="" name="ebook_script" id="ebook_script" type="hidden">
        <button type="submit" id="submit" name="submit" class="btn btn-sm btn-block btn-danger">
          <img src="{{config('app.url')}}images/submit.png" class="" alt="submit" title="submit">&nbsp; SUBMIT
        </button>
      </form>
    </div>  

</div>
</div>  

{{-- Top/Full Banner banner --}}
<div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
  @foreach($banners as $k=>$homebanner12)   
  @foreach($homebanner12->pagesCount as $j=>$pcount)
  @if($homebanner12->positions[0]->id == 4 and $pcount->id == 1)
  @if($homebanner12->type == 'script')
  {!! $homebanner12->script !!}
  @else
  <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}">
    <img class="img-fluid border" src="{{config('app.url')}}banners/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" />
  </a>
  @endif
  @else
  @endif  
  @endforeach
  @endforeach
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
              <h3>{{ date('d', strtotime($val->created_at)) }}</h3>
              <span class="text-uppercase mt-1 float-left">{{ date('M Y', strtotime($val->created_at)) }}</span>
              <div class="clearfix"></div>
            </div>
          </div>

          <div class="media-body pl-2">
            <a href="{{ route('news.url',[$val->url]) }}" title="{{ $val->news_img_alt}}">
              <h2 class="PF-HdngsClrHvr mt-1 mb-1">{{ $val->home_title }}</h2>
            </a>
            <p class="text-justify text-dark">
             {{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...') }}
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
        <img class="img-fluid border" src="{{config('app.url')}}banners/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" />
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
            <h3>{{ date('d', strtotime($val->created_at)) }}</h3>
            <span class="text-uppercase mt-1 float-left">{{ date('M Y', strtotime($val->created_at)) }}</span>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="media-body pl-2">
          <a href="{{route('pressreleases.url',[$val->url])}} " title="{{ $val->img_alt}}">
            <h2 class="PF-HdngsClrHvr mt-1 mb-1">{{ $val->home_title }}</h2>
          </a>
          <p class="text-justify text-dark">
           {{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...') }}
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
    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}banners/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
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
    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}banners/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
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
    <div class="text-center">
      <h3 class="adv-title">Advertisements</h3>
    </div>
 
    {{-- Static Banner --}}
    <ins class='dcmads' style='display:inline-block;width:300px;height:250px'

    data-dcm-placement='N386402.3016915PHARMAFOCUSASIA1/B21636445.238601292'

    data-dcm-rendering-mode='iframe'

    data-dcm-https-only

    data-dcm-resettable-device-id=''

    data-dcm-app-id=''>

    <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>

  </ins>
   <a href="javascript:void(0)" target="_blank" title="{{$homebanner12->title}}" onclick="trackOutboundLink('http://track.pharmafocusasia.com/201904180652381447251152'); return false;">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/banners/1555570456-banner-rousselot--banner-042019.gif" alt="{{$homebanner12->title}}" />
      </a>
  {{-- Static Banner --}}

    {{-- Square banner --}}
    @foreach($banners as $k=>$homebanner12)   
    @foreach($homebanner12->pagesCount as $j=>$pcount)
    @if($homebanner12->positions[0]->id == 6 and $pcount->id == 1)
    <div class="mt-3">
      @if($homebanner12->type == 'script')
      {!! $homebanner12->script !!}
      @else
      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}">
        <img class="img-fluid border" src="{{config('app.url')}}banners/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" />
      </a>
      @endif
    </div>
    @else
    @endif  
    @endforeach
    @endforeach
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
        <img class="img-fluid border" src="{{config('app.url')}}banners/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" />
      </a>
      @endif
    </div>
    @else
    @endif  
    @endforeach
    @endforeach
    {{-- End Sky tower banner --}}

              <!-- <ins class='dcmads' style='display:inline-block;width:300px;height:250px'
              data-dcm-placement='N386402.3016915PHARMAFOCUSASIA1/B21636445.238601292'
              data-dcm-rendering-mode='iframe'
              data-dcm-https-only
              data-dcm-resettable-device-id=''
              data-dcm-app-id=''>
              <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
            </ins> -->
            
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
        <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}banners/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
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
          @if($articles->count())
          @foreach($articles as  $key => $val)
          @if($key != 0)
          <ul class="media-list col-lg-12 PF-PLRT0B10 PF-BrdrBWYTopacity" >
            <li class="media PF-Brdrnone PF-BGnone text-white p-0 PF-TopArt-maxHyt">
              <div class="media-left">
                <h1 class="PF-NUM m-0">{{$key}}</h1>
              </div>
              <div class="media-body pl-2 pt-1">
                <a href="{{url('articles').'/'.$val->url}}" title="{{$val->title_tag}}">
                  <h2 class="media-heading">{{$val->title}}</h2>
                </a>
                {{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 110, $end = '...') }}
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
              <ul class="media-list col-lg-12 pl-0 mb-0">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">
                    <h2 class="media-heading text-uppercase PF-KBHdngs mb-2"><a href="{{url('interviews')}}">Interviews</a></h2>
                    <div class="pt-1">
                      <img src="{{ config('app.app_path').'knowledgebank/interview/'.$interviews->photo }}" alt="{{ $interviews->alt_tag }}" class="float-left shadow-sm mt-1 mr-2 mb-2" width="100">
                      <a href="{{ route('interviews.url',[$interviews->url]) }}">
                        <h2 class="mt-0 mb-1">{{$interviews->title}}</h2>
                      </a>
                      <p class="text-justify text-dark mb-0"><strong>{{$interviews->designation}}</strong></p>                    

                      {!! str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst( $interviews->description)))),$limit = 250, $end = '...')  !!}

                    </div>
                  </div>
                </li>
              </ul>


              <ul class="media-list col-lg-12 pl-0 mb-2">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">
                    <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{url('articles')}}">Articles</a></h2>
                    @if($articles->count())
                    <a href="{{url('articles').'/'.$articles->first()->url}}" title="INVEST IN Eco-sustainable Technologies for a safe processing of healthcare waste">
                      <h2 class="mt-2 mb-1">{{$articles->first()->title}}</h2>
                    </a>

                    <p class="m-0 text-justify text-dark"> {{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($articles->first()->short_description)))),$limit = 370, $end = '...') }}</p>
                    @endif
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
                     @if($reaserchinsites)
                    <a href="{{ route('researchinsights.url',[$reaserchinsites->url]) }}">                     
                      <h2 class="mt-2 mb-1">{{$reaserchinsites->title}}</h2>
                    </a>               
                    <p class="m-0 text-justify text-dark">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($reaserchinsites->short_description)))),$limit = 370, $end = '...') }}
                    </p>
                    @endif
                  </div>
                </li>
              </ul>
              {{--End Research Insights --}}

              <ul class="media-list col-lg-12 pl-0 mb-2">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">
                    <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{url('casestudies')}}">Case Studies</a></h2>
                    <a href="{{route('casestudies.url',[$casestudy->url]) }}" title="{{$casestudy->title_tag}}">
                      <h2 class="mt-2 mb-1">{{$casestudy->title}}</h2></a>
                      <p class="m-0 text-justify text-dark">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($casestudy->short_description)))),$limit = 370, $end = '...') }} </p>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="col-lg-12 p-0">
                <ul class="media-list col-lg-12 pl-0 mb-2">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1">
                      <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{route('technotrends')}}">Techno Trends</a></h2>
                      <a href="{{route('technotrends.url',[$technotrend->url]) }}" title="{{$technotrend->title_tag}}"><h2 class="mt-2 mb-1">{{$technotrend->title}}</h2></a>
                      <p class="m-0 text-justify text-dark">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($technotrend->short_description)))),$limit = 370, $end = '...') }}</p>
                    </div>
                  </li>
                </ul>

                <ul class="media-list col-lg-12 pl-0 mb-2">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1">
                    @if($whitepaper)
                      <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{url('whitepapers')}}">White Papers</a></h2>
                      <a href="{{route('whitepapers.url',[$whitepaper->url]) }}" title="{{$whitepaper->title_tag}}">
                        <h2 class="mt-2 mb-1">{{$whitepaper->title}}</h2>
                      </a>

                      <p class="m-0 text-justify text-dark">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($whitepaper->short_description)))),$limit = 370, $end = '...') }}</p>
@endif
                  
                    </div>
                  </li>
                </ul>

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
          <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}">
            <img class="img-fluid border" src="{{config('app.url')}}banners/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
          @endif
          @else
          @endif  
          @endforeach
          @endforeach
        </div>
        {{-- End Bottom Two banner --}}
        <div class="row mt-2 PF-WytBG PF-BrdrDDD">
          <!--// Forthcoming issue block -->
          <!-- <div class="col-lg-3 PF-TAbgissues">             
            <h1 class="text-uppercase text-white PF-TopArt pt-3">Advisory Board</h1>
            <div class="row">
              <ul class="media-list col-lg-12 PF-PLRT0B10 PF-BrdrBWYTopacity">
                @foreach($advaisoryboard as $val)
                <li style="height: 110px;" class="media PF-Brdrnone PF-BGnone text-white p-0 PF-TopArt-maxHyt165 mt-3">
                  <div class="media-left"> 
                    <img src="{{ config('app.url').'advisoryboard/'.$val->image }}" alt="{{$val->alt_tag}}" title="{{$val->title_tag}}" style=" width:70px; height:80px;filter: grayscale(100%);-webkit-filter: grayscale(100%); "> 
                  </div>
                  <div class="media-body pl-2 pt-1">
                    <a href="{{url('advisory-board')}}" target="_blank">    
                      <h2 class="media-heading">{{$val->title}}</h2>
                    </a>
                    {!!$val->home_description!!}
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
          </div> -->
          <!-- Forthcoming issue block //-->

          <div class="col-lg-3 col-md-3 col-sm-3 col-12 PF-TAbgissues">             
            <h1 class="text-uppercase text-white PF-TopArt pt-3">Advisory Board</h1>
            <div class="row">
              @foreach($advaisoryboard as $val)
              <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
                <img src="{{ config('app.url').'advisoryboard/homeimage/'.$val->home_image }}" alt="{{$val->alt_tag}}" title="{{$val->title_tag}}" width="70" height="70" style="filter: grayscale(100%);-webkit-filter: grayscale(100%); ">
                <a href="{{url('advisory-board')}}" target="_blank">    
                  <p>{{$val->short_title}}</p>
                </a>
                {!!$val->home_description!!}
              </div>
              @endforeach

              <!-- <ul class="col-lg-12 PF-PLRT0B10 PF-BrdrBWYTopacity">
                @foreach($advaisoryboard as $val)
                <li style="height: 110px;" class="media PF-Brdrnone PF-BGnone text-white p-0 PF-TopArt-maxHyt165 mt-3">
                  <div class="media-left"> 
                    <img src="{{ config('app.url').'advisoryboard/'.$val->image }}" alt="{{$val->alt_tag}}" title="{{$val->title_tag}}" style=" width:70px; height:80px;filter: grayscale(100%);-webkit-filter: grayscale(100%); "> 
                  </div>
                  <div class="media-body pl-2 pt-1">
                    <a href="{{url('advisory-board')}}" target="_blank">    
                      <h2 class="media-heading">{{$val->title}}</h2>
                    </a>
                    {!!$val->home_description!!}
                  </div>
                </li>
                @endforeach
              </ul> -->
            </div>
          </div>



          <!--// editorial Section Content -->
          <div class="col-lg-9 mt-2">
            <div class="row m-0">
              <h1 class="text-uppercase mb-2 mt-2 PF-TXTRED">EDITORIAL SECTION</h1>

              <div class="col-lg-12 p-0">

                <ul class="media-list col-lg-12 pl-0 mb-1">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1 pb-1">
                     <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{url('strategy')}}">STRATEGY</a></h2> 
                     <a href="{{url('strategy').'/'.@$strategy->url }}" title="{{@$strategy->title_tag}}">
                      <h2 class="mt-2 mb-1">{{ @$strategy->title}}</h2>
                    </a>
                    <p class="mb-0 text-justify PF-TXTBlk">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$strategy->short_description )))),$limit = 150, $end = '...') }} </p> 
                  </div>
                </li>
              </ul>

              <ul class="media-list col-lg-12 pl-0 mb-1">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1 pb-1">
                    <h2 class="media-heading text-uppercase PF-KBHdngs">
                      <a href="{{url('research-development')}}">RESEARCH DEVELOPMENT</a>
                    </h2>                           
                    <a href="{{url('research-development').'/'.@$research_development->url }}" title="{{@$research_development->title_tag}}">
                      <h2 class="mt-2 mb-1">{{@$research_development->title}}</h2>
                    </a>
                    <p class="mb-0 text-justify PF-TXTBlk">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$research_development->short_description )))),$limit = 150, $end = '...') }}</p>                      
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-lg-12 p-0">
              <ul class="media-list col-lg-12 pl-0 mb-1">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1 pb-1">
                    <h2 class="media-heading text-uppercase PF-KBHdngs">
                      <a href="{{url('clinical-trials')}}">CLINICAL TRIALS</a>
                    </h2>                            
                    <a href="{{url('clinical-trials').'/'.@$clinical_trials->url }}" title="{{@$clinical_trials->title_tag}}">
                     <h2 class="mt-2 mb-1">{{@$clinical_trials->title}}</h2>
                   </a>                            
                   <p class="mb-0 text-justify PF-TXTBlk">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$clinical_trials->short_description )))),$limit = 150, $end = '...') }}</p>
                 </div>
               </li>
             </ul>

             <ul class="media-list col-lg-12 pl-0 mb-1">              
              <li class="media PF-Brdrnone p-0">
                <div class="media-body pt-1 pb-1">
                  <h2 class="media-heading text-uppercase PF-KBHdngs">
                    <a href="{{url('manufacturing')}}">MANUFACTURING</a>
                  </h2>
                  <a href="{{url('manufacturing').'/'.@$manufacturing->url }}" title="{{@$manufacturing->title_tag}}">                              
                   <h2 class="mt-2 mb-1">{{@$manufacturing->title}}</h2>
                 </a>
                 <p class="mb-0 text-justify PF-TXTBlk">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$manufacturing->short_description )))),$limit = 150, $end = '...') }}</p>
               </div>
             </li>
           </ul>

           <ul class="media-list col-lg-12 pl-0 mb-1">
            <li class="media PF-Brdrnone p-0">
              <div class="media-body pt-1 pb-1">
                <h2 class="media-heading text-uppercase PF-KBHdngs">
                  <a href="{{url('information-technology')}}">Information Technology</a>
                </h2>                                             
                <a href="{{url('information-technology').'/'.@$information_technology->url }}" title="{{@$information_technology->title_tag}}">
                 <h2 class="mt-2 mb-1">{{@$information_technology->title}}</h2>
               </a>
               <p class="mb-0 text-justify PF-TXTBlk">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$information_technology->short_description )))),$limit = 150, $end = '...') }}</p>

             </div>
           </li>
         </ul>

         <ul class="media-list col-lg-12 pl-0 mb-1">
          <li class="media PF-Brdrnone p-0">
            <div class="media-body pt-1 pb-1">
              <h2 class="media-heading text-uppercase PF-KBHdngs">
                <a href="{{url('expert-talk')}}">EXPERT Talk</a>
              </h2>
              <a href="{{url('expert-talk').'/'.@$expert_talk->url }}" title="{{@$expert_talk->title_tag}}"> 

               <h2 class="mt-2 mb-1">{{@$expert_talk->title}}</h2>
             </a>

             <p class="mb-0 text-justify PF-TXTBlk">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$expert_talk->short_description )))),$limit = 150, $end = '...') }}</p>
           </div>
         </li>
       </ul>
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
  <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}banners/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
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