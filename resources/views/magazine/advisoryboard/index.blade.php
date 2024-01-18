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
                <a href="{{url('/magazine')}}">Magazine</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page">{{trans('messages.advisory-board_title')}}</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">{{trans('messages.advisory-board_title')}}</h1>            
                </div>
                <p>{{trans('messages.advisory-board_text')}}</p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                @foreach($advisoryboard as $val)
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                  <div class="row PF-BGf7f7f7 PF-BrdrDDD">            
                    <div class="col-lg-2 p-2 text-center"> 
                      <img class="img-fluid shadow-sm" src="{{ config('app.url').'advisoryboard/'.$val->image}}" title="{{ $val->title_tag }}" alt="{{ $val->title }}"  width="150" />
                    </div>

                    <div class="col-lg-10 p-2">
                        <h2 class="PF-TXTRED">{{ $val->title }}</h2>
                        <span class="font-14 MB-0">{!!$val->description!!}</span>
                    </div>
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
  var url = "{{ url('advisory-board/more') }}";
     @include('layouts/partials/_loadmorejs')
</script>
@endsection