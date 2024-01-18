@extends('../layouts/app')
@section('style')

@endsection

@section('content')

    <div class="clearfix"></div>

      <div class="container">
        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ url('knowledgebank') }}">{{trans('messages.knowledgebank_title')}}</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page"></li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">{{trans('messages.knowledgebank_title')}}</h1>            
                </div>

                <p>{{trans('messages.knowledgebank_text')}}</p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('articles')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">ARTICLES</span></h3>
                    </a>
                  </div>
<!--
                  <div class="col-md-6 col-sm-6">
                    <a>
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">INTERVIEWS</span></h3>
                    </a>
                  </div>
-->
                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('technotrends')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">TECHNO TRENDS</span></h3>
                    </a>
                  </div>

                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('projects')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">PROJECTS</span></h3>
                    </a>
                  </div>
<!--
                  <div class="col-md-6 col-sm-6">
                    <a>
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">INDUSTRY REPORTS</span></h3>
                    </a>
                  </div>
-->
                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('researchinsights')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">REASEARCH INSIGHTS</span></h3>
                    </a>
                  </div>

                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('bookshelf')}}">
                      <h3 class="mb-4 PF-Caps PF-TXTRED">BOOK SHELF</h3>
                    </a>
                  </div>  
  <!--                <div class="col-md-6 col-sm-6">
                    <a>
                      <h3 class="mb-4 PF-Caps PF-TXTRED">CASE STUDIES</h3>
                    </a>
                  </div>
                   <div class="col-md-6 col-sm-6">
                    <a>
                      <h3 class="mb-4 PF-Caps PF-TXTRED">WHITE PAPERS</h3>
                    </a>
                  </div>-->
                </div>               
              </div> 
            </div>


            <!--// Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
               @include('layouts.partials._square_banner')
            
           </div>
            <!-- Square Banners // --> 
        </div>

      </div>


@endsection

@section('scripts')

@endsection