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
                <a href="{{url('industryupdates')}}">Industry Updates</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{url('reports')}}">Reports</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page"></li>
            </ol>
          </nav>
        </div>

        <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-0">
            <div class="col-lg-12">
              <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                <h1 class="PF-Bshelf pt-2">Industry Reports <small class="float-right text-muted">{{ date('l, M j, Y', strtotime($data->publication_date)) }}</small></h1>
              </div>          
              <div class="clearfix"></div>
            </div>

            <div class="col-lg-12 mb-4">
              <h2><a href="#">{{ $data->title }}</a></h2>
              <p class="mb-0">{!!$data->summary!!}</p>
             {{--  <p>
                <a href="#">Read more <i class="fa fa-size fa-angle-double-right"></i></a>
              </p>  --}}            
            </div>
          </div>


          <!--// Square Banners -->
          <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
            <div class="bg-gray border-secondary">
              <div class="text-center">
                {{-- <h3 class="adv-title">Advertisements</h3> --}}
              </div>

              @include('layouts.partials._square_banner')
            </div>
          </div>
          <!-- Square Banners // --> 
        </div>

      </div>



@endsection

@section('scripts')
{{-- <script type="text/javascript">
  var url = "{{ url('news/more') }}";
  @include('layouts/partials/_loadmorejs')
</script> --}}
@endsection