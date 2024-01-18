@extends('../layouts/app')
@section('style')
{{-- <meta http-equiv="refresh" content="20;URL='{{url('/')}}/autherguidlinesdwnlink'" />  --}}

@endsection

@section('content')
    <div class="clearfix"></div>

      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{url('/magazine')}}">e-book</a>
              </li>
              <li class="breadcrumb-item">
               e-book Subscribe Form
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page"></li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">
	            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
	                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-1">
	                  <h1 class="PF-Bshelf pt-2">e-book Subscribe Form</h1>            
	                </div>
	            </div>
            	

	            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			      
		          	<div class="form-area col-lg-12 col-md-12 col-sm-12 mt-2"> 
		          		@if(session('status') == 'true')
			          		<h3 style="color: green;" align="center"> Thank You!</h3>
			          		<h3 style="color: green;" align="center"> <em>We greatly appreciate your initiative of subscribing to our e-Book. A confirmation email regarding the same will be sent to you shortly.</em></h3>
		          		@endif
		            	<form action="{{url('ebook-subscribe')}}" class="email" id="writemessage" method="post" accept-charset="utf-8">
		       				{{ csrf_field() }}
			              	<h2 class="mb-3 mt-3">Please fill the below form to download our <span class="PF-Caps PF-TXTRED">e-book</span></h2>

			              	<div class="row">
				                <div class="form-group col-lg-6 {{ $errors->first('fullname', 'has-error')}}">
				                	<input type="text" class="form-control" id="name" name="fullname" placeholder="Full Name" required="">
				                	<input type="hidden" value="ebooksubscribe" name="type" id="type">
				                	<span class="help-block">{{ $errors->first('fullname', ':message') }}</span>
				                </div>
				                <div class="form-group col-lg-6 {{ $errors->first('email', 'has-error')}}">
				                	<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
				                	<span class="help-block">{{ $errors->first('email', ':message') }}</span>
				                </div>
				                <div class="form-group col-lg-6 {{ $errors->first('telephone', 'has-error')}}">
				                	<input type="tel" class="form-control" id="subject" name="telephone" placeholder="Telephone" required="">
				                	<span class="help-block">{{ $errors->first('telephone', ':message') }}</span>
				                </div>
				                <div class="form-group col-lg-6 {{ $errors->first('company', 'has-error')}}">
				                	<input type="text" class="form-control" id="mobile" name="company" placeholder="Company" required="">
				                	<span class="help-block">{{ $errors->first('company', ':message') }}</span>
				                </div>
				                <div class="form-group col-lg-12 col-md-12 col-sm-12 {{ $errors->first('description', 'has-error')}}">
				                   <textarea class="form-control" type="textarea" id="message" name="description" placeholder="Message" maxlength="140" rows="7"></textarea>
				                   <span class="help-block">{{ $errors->first('description', ':message') }}</span>
				                </div>
				                <div class="form-group col-lg-12 col-md-12 col-sm-12">
				                    <input type="submit" value="SUBMIT" id="submit-button" class="btn btn-danger pull-right">                   
				                     <div class="clearfix"></div>
				                </div>
			            	</div>
		              	</form>
		          	</div>
		          	<div class="clearfix pb-5"></div>
		      	</div>

        	</div>


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

        <div class="pb-3"></div>
      </div>


@endsection

@section('scripts')

@endsection