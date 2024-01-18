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
                <a href="{{url('/industryupdates')}}">Industry Updates</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page">Reports</li>
            </ol>
          </nav>
        </div>

		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-0">
				<div class="col-lg-12">
					<div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
						<h1 class="PF-Bshelf pt-2">Industry Reports</h1>
					</div>          
			        <div class="clearfix"></div>
			        <!-- <p>Content</p> -->
			    </div>

			    @foreach($data as $val)			    

			    <div class="col-lg-12 mb-4">			    
			    	<div class="shadow border border-light p-3">
						<div class="row">
							<div class="col-lg-9">
								<h3><a href="{{route('reports.url',[$val->report_url])}}">{{$val->title}}</a></h3>
							</div>
							<div class="col-lg-3 text-right text-muted">{{ date('l, M j, Y', strtotime($val->publication_date)) }}</div>
						</div>

						<div class="BorBotDash mb-1"></div>

						<p class="mb-0"> 
							{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val->short_description )))),$limit = 300, $end = '...') }}
							<a href="{{route('reports.url',[$val->report_url])}}" class="float-right">
								<strong><i class="fa fa-size fa-angle-double-right"></i><i class="fa fa-size fa-angle-double-right"></i></strong>
							</a>
						</p>
					</div>	            
				</div>  

				@endforeach
				 @include('layouts/partials/_loadmorehtml')

			    {{-- <div class="col-lg-12 mb-4">			    
			    	<div class="shadow border border-light p-3">
						<div class="row">
							<div class="col-lg-9">
								<h3><a href="{{route('reports.url')}}">AlloSource - Strategic SWOT Analysis Review</a></h3>
							</div>
							<div class="col-lg-3 text-right text-muted">Thursday, Jan 10, 2019</div>
						</div>

						<div class="BorBotDash mb-1"></div>
						
						<p class="mb-0">TAlloSource - Strategic SWOT Analysis Review provides a comprehensive insight into the company’s history, corporate strategy, business structure and operations. The report contains a detailed SWOT analysis, information on the company’s key employees, key competitors and major products and services...
							<a href="#" class="float-right">
								<strong><i class="fa fa-size fa-angle-double-right"></i><i class="fa fa-size fa-angle-double-right"></i></strong>
							</a>
						</p>
					</div>	            
				</div> --}}
			</div>


			<!--// Square Banners -->
			<div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
				<div class="bg-gray border-secondary">
					<div class="text-center">
						{{-- <h3 class="adv-title">Advertisements</h3> --}}
					</div>

				<!-- Square Banner -->
                  @include('layouts.partials._square_banner')
                <!-- End Square Banner -->
				</div>
			</div>

		</div>


	</div>


@endsection

@section('scripts')
<script type="text/javascript">
	var url = "{{ url('reports/more') }}";
	@include('layouts/partials/_loadmorejs')
</script>
@endsection

