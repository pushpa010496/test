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
            <a href="{{ url('/knowledgebank') }}">Knowledge Bank</a>
          </li>
          <li class="breadcrumb-item active PF-TXTRED" aria-current="page">Interviews</li>
        </ol>
      </nav>
    </div>

    <div class="row PF-WytBG">
      <!-- // RIGHT SECTION --> 
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">
       
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2 class="pt-2 PF-TXTRED">{!! $interviews->title !!}</h2>        
        </div> 

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-2 pb-3"> 
          <div class="media PF-BGf7f7f7 PF-BrdrDDD mb-3 author-brdr">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 pr-0" align="text-center">
                <img src="{{ config('app.app_path').'knowledgebank/interview/'.$interviews->photo }}" alt="{{ $interviews->alt_tag }}" width="100%">
              </div>

              <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                <h3 class="PF-TXTRED display-5">{{ $interviews->name}} ,&nbsp;
                  <small class="PF-TXTBlk">{{ $interviews->designation}}</small>
                </h3>
                <p class="mb-0">{!!$interviews->description!!}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          {!!$interviews->quest_answer!!}
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