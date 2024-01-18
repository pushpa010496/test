@extends('../layouts/app')
@section('style')
<style type="text/css">
  @media (min-width:1200px) {
    .card-columns { column-count: 4; }
  }
  @media (min-width:992px) and (max-width:1200px) {
    .card-columns {column-count: 3;}  
  }
  @media (min-width:768px) and (max-width:991.98px) {
    .card-columns {column-count: 3;}  
  }
  @media (min-width:400px) and (max-width:767.98px) {
    .card-columns {column-count: 2;}  
  }
</style>
@endsection

@section('content')


<div class="clearfix"></div>


  <div class="container">

    <div class="row PF-MobP030">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/knowledgebank')}}">Knowledge Bank</a>
          </li>
          <li class="breadcrumb-item active PF-TXTRED" aria-current="page">{{trans('messages.bookshelf_title')}}</li>
        </ol>
      </nav>
    </div>

    <div class="row PF-WytBG">

      <!-- // LEFT SECTION --> 
      <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
          <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
            <h1 class="PF-Bshelf pt-2">{{trans('messages.bookshelf_title')}}</h1>            
          </div>
          <p>{{trans('messages.bookshelf_text')}}</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
          <div class="card-columns">
            @foreach($data as $val)
            <div class="BookList mb-2">
              <div class="card shadow">
               <a href="{{route('bookshelf.url',$val->url)}}">
                 <img src="{{ config('app.url').'knowledgebank/bookshelf/'. $val->bookshelf_image}}" alt="{{ $val->alt_tag}}" title="{{$val->title_tag}}" class="img-fluid text-center" width="100%">
                 <div class="card-body p-0">
                  <div class="card-text pt-2 pb-3 pl-2 pr-2">
                    <p class="mb-0">{{$val->title}}</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          @endforeach                
        </div>
      </div>

      </div>
      <!-- LEFT SECTION // --> 

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