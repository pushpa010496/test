@extends('../layouts/app')
@section('style')
@endsection
@section('content')
      @if(\Request::url() =='https://www.pharmafocusasia.com/advertorials/cytiva-global-life-science-leader')
       <div align="center" class="mt-2 mb-2 hidden-xs">
        <a href="javascript:void(0)" onclick="trackOutboundLink('https://track.pharmafocusasia.com/202111241025081918697407/'); return false;" target="_blank" title="Cytiva || Offshoring drug manufacturing to low-cost countries"><img class="img-fluid border" src="https://industry.pharmafocusasia.com/ensign/1637749523-cytiva-low-cost-manufacturing.jpg" alt="Cytiva || Offshoring drug manufacturing to low-cost countries"></a>
        </div>
      @endif
     
    <div class="clearfix"></div>
      <div class="container">
        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ url('/editorialsection') }}">Editorial Section</a>
              </li>
              <li class="breadcrumb-item active  text-capitalize" aria-current="page"><a href="{{url(Request::segment(1))}}">{{ str_replace('-', ' ', ucwords(Request::segment(1))) }} </a> </li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list pb-2">
                <h1 class="mb-1 mt-2 PF-TXTRED ">{{strip_tags(html_entity_decode(ucfirst($data->title))) }}</h1>
                <h2> 
                  {{ucfirst($data->sub_title)}}
                </h2>               
              </div>  

              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                
                {{-- @if(@$data->authors->first()->id != 593) --}}


                @foreach($data->authors as $val)  
                @if($val->title !="No Author")             
                   <h3 class="PF-MT10">
                  <span class="PF-TXTRED">{{$val->title}},</span> 
                  <small> <!--  {{ preg_replace('/[^a-zA-Z0-9\s]/', '', strip_tags(html_entity_decode(ucfirst($val->details)))) }} -->
                    {{ucfirst($val->details)}}
                  </small>
                </h3>
                
                @endif
                @endforeach
                {{-- @endif --}}
              
               @if($data->abstract != '')
                <div class="media bloq-bg mb-3">          
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-2">
                    <blockquote>
                      <h4 class="PF-Quotes">   {!! $data->abstract !!}

                     </h4>
                    </blockquote>
                  </div>
                </div>
                @endif

                {!! $data->description !!}

              {{--   <p style="text-align:right"><a href="{{ route('ebook.archivesmagazine',[$data->first()->issue->id]) }}" target="_blank"><em>-- {{ucfirst($data->first()->issue->issue_no)}} --</em></a></p> --}}
              </div>
               @if($data->authors->count() != 0)
              @if($data->authors[0]->title != 'No Author')
               @if($data->authors->count() != 0)
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-3">

                <h4 class="font-weight-bold">Author Bio</h4>

                @if($data->authors->count() != 0)
                  @foreach($data->authors as $val)  
                   @if($val->title !="No Author")                              
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                    <div class="row PF-BGf7f7f7 PF-BrdrDDD author-brdr">            
                      <div class="col-lg-2 p-2 text-center"> 
                        <img class="img-fluid shadow-sm" src="{{ config('app.url').'contributors/'. $val->image }}" alt="{{ $val->alt_tag }}" style="min-width: 110px;" />

                      </div>
                      <div class="col-lg-10 p-2">                        
                        <span class="font-14 MB-0">
                          {{-- <strong>{{ $val->title }}</strong> , --}}
                          {!! ucfirst($val->authorbio) !!}
                          {{-- {{ preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->authorbio))))}} --}}


                        </span>
                      </div>
                    </div>
                  </div>
                  @endif
                  @endforeach
                  @else
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                    <div class="row PF-BGf7f7f7 PF-BrdrDDD author-brdr">            
                      <div class="col-lg-2 p-2 text-center"> 
                        <img class="img-fluid shadow-sm" src="{{ config('app.url').'contributors/' }}/1421757887-img-contributer.jpg" style="min-width: 110px;" />

                      </div>
                      <div class="col-lg-10 p-2">                        
                       
                      </div>
                    </div>
                  </div>
                @endif


              </div>
                 @endif
                @endif
                @endif
            </div>    
            <!-- // RIGHT SECTION // --> 

            <!--// RIGHT SECTION - Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
               @include('layouts.partials._square_banner')
            </div>
            <!-- RIGHT SECTION - Square Banners // --> 
        </div>

      </div>


@endsection

@section('scripts')

@endsection