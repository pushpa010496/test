@extends('../layouts/app')
@section('style')

@endsection

@section('content')


<script type="text/javascript">
   sessionStorage.setItem('advertOnce','true');
</script>

    <div class="clearfix"></div>

      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{url('/knowledgebank')}}">Knowledge Bank</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page">{{trans('messages.articles_title')}}</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">{{trans('messages.articles_title')}}</h1>            
                </div>
                <p>{{trans('messages.articles_text')}}</p>
              </div>


              @foreach($data as $val)
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list mb-3">
                <h2 class="mb-2 PF-TXTBlk000">
                  <a href="{{ route('articles.url',[$val->url])}}" title="{{$val->title_tag}}" class="PF-TXTBlk000">{{ $val->title}}</a>
                </h2>
                <h5 class="PF-Caps text-muted">{{ $val->sub_title }}</h5>
                {{-- <h6 class="PF-Caps text-muted">{{ $val->designation }}</h6> --}}
             <!--    {!!$val->short_description!!} -->
                {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...') }}
              </div> 
              @endforeach
             {!! $data->links() !!}
              <!--@include('layouts/partials/_loadmorehtml')-->
              
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
  var url = "{{ url('articles/more') }}";
 @include('layouts/partials/_loadmorejs')
</script>
@endsection