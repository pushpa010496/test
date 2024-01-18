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
                <a href="{{url('/knowledgebank')}}">Knowledge Bank</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page">{{trans('messages.projects_title')}}</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // LEFT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">{{trans('messages.projects_title')}}</h1>            
                </div>
                <p>{{trans('messages.projects_text')}} </p>
              </div>

            
              @foreach($projects as $val)
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
                <h2 class="mb-1 PF-TXTBlk000">
                  <a href="{{ route('projects.url',[$val->url])}}" title="{{$val->title_tag}}" class="PF-TXTBlk000">{{ $val->title}}</a>
                </h2>
               <!-- <p class="PF-TXTBlk pt-1">{{ $val->short_description }}...</p>  -->  
                <p class="PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s,0-9,$]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 350, $end = '...') }}</p>            
              </div> 
              @endforeach

              @include('layouts/partials/_loadmorehtml')
            </div>
            <!-- // LEFT SECTION // --> 

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
  var url = "{{ url('projects/more') }}";
 @include('layouts/partials/_loadmorejs')
</script>
@endsection