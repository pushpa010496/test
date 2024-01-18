@extends('../layouts/app')
@section('style')

@endsection

@section('content')


<script>$breadcrumb-divider: quote(">");</script>

    <div class="clearfix"></div>

      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{url('magazine')}}">{{trans('messages.archives-magazine_title')}} </a>
              </li>
           
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">{{trans('messages.archives-magazine_title')}}</h1>            
                </div>
                  <p>{{trans('messages.archives-magazine_text')}}</p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-12">                                  
                <div class="PF-HeightAuto">
                  <div class="text-center">  
                    <img src="{{ config('app.url').'ebooks/'. str_slug($ebook->issue->issue_no).'/'.$ebook->magazine_image }}" alt="{{ $ebook->alt_tag }}" title="{{ $ebook->title_tag }}" class="img-fluid" />
                  </div>
                  <div class="PF-IMGCap">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <h2 class="PF-TXTRED font-weight-bold pl-3">{{ ucfirst($ebook->issue->issue_no)}}</h2>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="row">  
                          @foreach($ebook->issue->categories as $category)                         
                          <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                            <li class="ml-3"><a href="#{{str_slug($category->name)}}">{{ $category->name }}</a></li>
                          </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">

                @foreach($ebook->issue->categories as $category)                                         
                 <div class="pt-4">
                  <h2 class="PF-Caps PF-TXTRED" id="{{ str_slug($category->name) }}">
                    <a id="Healthcare Management" href="{{url($category->url)}}">{{ $category->name }}
                    </a>
                  </h2>
                  {{-- Article loop --}}
                  @foreach($articles as $article)
                    @if($article->category_id ==  $category->id)
                      <h3 class="mb-1">
                      {{--   <a href="{{url('/latest-ebook')}}" title="Patient Experience" class="PF-TXTBlk000 font-weight-bold">{{$article->title}}</a>--}}

                        @if($current_issue->id === $article->issue->id)
                          <a href="{{url('latest-ebook')}}" title="{{$article->title_tag }}" class="PF-TXTBlk000">{{$article->title}}</a>
                        @else
                          <a href="{{url('/') .'/'.$category->url.'/'. $article->url}}" title="{{$article->title_tag }}" class="PF-TXTBlk000">{{$article->title}}</a>
                        @endif    
                      </h3>
                      <h4 class="text-muted small mb-1 mt-2">{{$article->sub_title}}</h4>
                      <p class="PF-TXTBlk">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($article->short_description)))),$limit = 350, $end = '...') }}</p>

                    @endif
     
                  @endforeach 
                    {{-- End Article loop --}}
              </div>
              @endforeach


              </div>

            </div>
            <!-- // RIGHT SECTION // --> 

            <!--// RIGHT SECTION - Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
             <div class="bg-gray border-secondary">
              <div class="text-center">
                {{-- <h3 class="adv-title">Advertisements</h3> --}}
              </div>
               @include('layouts.partials._square_banner')
            </div>
            </div>
            <!-- RIGHT SECTION - Square Banners // --> 
        </div>

      </div>


@endsection

@section('scripts')

@endsection