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
            <a href="{{url('knowledgebank')}}">Knowledge Bank</a>
          </li>
          <li class="breadcrumb-item">
            <a href="{{url('researchinsights')}}">Research Insights</a>
          </li>
          <li class="breadcrumb-item active PF-TXTRED" aria-current="page"></li>
        </ol>
      </nav>
    </div>

    <div class="row PF-WytBG">
      <!-- // RIGHT SECTION --> 
      <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">
       
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
          <h2 class="mb-2 mt-2 PF-TXTRED">{{ $researchinsights->title}}</h2>
          <h6 class="mt-3 mb-3 PF-TXTBlk">{!! $researchinsights->author_details!!}</h6>
          {!!$researchinsights->description!!}
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