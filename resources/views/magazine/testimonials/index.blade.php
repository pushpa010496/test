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
                <a href="{{ url('/magazine') }}">Magazine</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page">{{ucwords(Request::segment(count(Request::segments())))}}</li>

            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">{{trans('messages.testimonials_title')}}</h1> 
                </div>

                <p class="mb-0">{{trans('messages.testimonials_text')}}</p>            
              </div>


              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
               

              @foreach($testimonials as $val)
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 PF-BrdrBEEE mt-4">
                  <div class="row">
                    <p class="col-lg-8 col-md-8 col-sm-9 col-xs-12 pt-3">
                      <span>
                        <img src="{{config('app.url')}}images/Left_quote_14.png" class="mr-2 PF-MTN10" alt="quotes">
                      </span>
                      <!-- {{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->description)))),$limit = 400, $end = '...') }} -->
                      {{ preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->description)))) }}
                      <span>
                        <img src="{{config('app.url')}}images/right_quote_14.png" class="ml-2 PF-MTN10" alt="quotes">
                      </span>
                    </p>
                    <h2 class="col-lg-4 col-md-4 col-sm-3 col-xs-12 PF-BGf7f7f7 mb-0 p-3"><span class="PF-TXTRED">{{$val->name}}</span><br>
                     <p class="small mb-0">{{$val->designation}}, {{$val->company}}</p>
                    </h2>
                  </div>
                </div>
              @endforeach
                 @include('layouts/partials/_loadmorehtml')
              
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
<script type="text/javascript">
  var url = "{{ url('testimonials/more') }}";
    @include('layouts/partials/_loadmorejs')
</script>
@endsection