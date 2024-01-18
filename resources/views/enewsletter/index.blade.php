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
                   <a href="">{{trans('messages.enewsletter_title')}}</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page"></li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
                  <h1 class="float-left PF-Bshelf">{{trans('messages.enewsletter_title')}}</h1>
                  <span class="PF-ForthIssue PF-MobP015 PF-MobMB10">
                    <a href="e-newsletter-subscribe" target="_blank" class="float-right">
                      <i class="fa fa-book mr-2"></i> Subscribe</a>
                  </span>
                  <div class="clearfix"></div>
                </div>         
                <p >{{trans('messages.enewsletter_text')}}</p>
              </div>
              <br>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h1 class="text-center"><b>Watch this space for more...</b></h1>
             
              </div>
              <br>
              <br>
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