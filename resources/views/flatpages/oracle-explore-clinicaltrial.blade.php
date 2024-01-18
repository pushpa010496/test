<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="language" content="english" /> 
	<title>Exploring Clinical Trial Design and Data Collection in a New Environment</title>
	<meta name="viewport" content="width=device-width" />
	<meta name="robots" content="noindex" />
	<link rel="shortcut icon" href="{{ config('app.url') }}images/favicon.ico" type="image/x-icon">
	<meta name="title" content="Exploring Clinical Trial Design and Data Collection in a New Environment" />
	<meta name="description" content="Exploring Clinical Trial Design and Data Collection in a New Environment" />
	<meta name="keywords" content="" />
	<meta property="og:title" content="Exploring Clinical Trial Design and Data Collection in a New Environment" />
	<meta property="og:description" content="Exploring Clinical Trial Design and Data Collection in a New Environment" />
	<meta property="og:Keywords" content=""/>
	<meta property="og:image" content="{{ config('app.url') }}images/oracle-health-sciences-virtual-og.jpg" />
	<link rel="canonical" href="{{URL::current()}}"/>
	<link href="{{ config('app.url') }}mix/app.css" rel="stylesheet" type="text/css" />
	<link href="{{ config('app.url') }}css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 

	<style type="text/css">	
		/*ul li, p{font-size: 15px;}*/
		/*.modal{background: rgba(0, 0, 0, 0.7); }
		.modal-dialog{ top: 0 !important; }*/
		body{font-family: 'Lato', sans-serif;}
		.banner-bg{
			background-image: url("{{asset('public/images/flatpages/pall-laboratory-banner-bg.jpg')}}");
			background-repeat: no-repeat;
			background-size: cover;
		}
		.form-bg{
			background-color: #335160;
		}
		.trans-bg{background-color: rgba(65, 169, 184, 0.9);}
		.bg-dark{background-color: #333;}
		.has-error .help-block{
			text-align: left;
			color: #a94442;
			font-size: 14px;
			margin:0;
		}
		.TXT-ORNG{color: #EE1D23;}
		.TXT-GRAY{color: #335160;}
		.BG-BLUE{background-color: #335160;}
		.TXT-LYT{color: #C7D8DD;}
		.BG-LYT{background-color: #EBF4F7;}
		.form-control {
			border-radius: 0px;
			height: calc(2.0rem + 2px);
			font-size: 14px;
		}
		.form-group{margin-bottom: 10px;}
		.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
			background-color: #EE1D23;
		}
		.btn-danger{background-color: #EE1D23;}

		.Mar-left-n{margin-left: -10px;}
		.line-height{line-height: 130%;}
		.connect li{list-style: none; padding-bottom: 5px;margin-left: -10px;}
		.connect li::before {
		    content: "\f101";
		    font-family: FontAwesome;
		    position: absolute;
		    color: #EE1D23;
		    /*font-size: 14px;*/
		    font-weight: normal;
		    left: 20px;
		}
		.brdr-radius{border-radius: 0px;}
		.font-11{font-size: 11px;line-height: 1.4;}
		.font-20 {font-size: 20px;line-height: 1.2;}
		.font-18 {font-size: 18px;line-height: 1.2;}
		.font-16 {font-size: 16px;line-height: 1.2;}

		.expandcheckbox-div{
			-webkit-transition: all 1s ease-in-out;
			-moz-transition: all 1s ease-in-out;
			-ms-transition: all 1s ease-in-out;
			-o-transition: all 1s ease-in-out;
			/*transition: all 1s ease-in-out;*/
			  transition: visibility 0s, opacity 0.5s linear;
}
		}
	</style>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91608244-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-91608244-2');
	</script>
<script src="https://www.google.com/recaptcha/api.js?render=6Ld3Ni0aAAAAAN-BrU2U95Z9D41TRD0OkdJS9cM9"></script>
<script> 
    grecaptcha.ready(function() {
      grecaptcha.execute('6Ld3Ni0aAAAAAN-BrU2U95Z9D41TRD0OkdJS9cM9', {action: 'submit'}).then(function(token) {
        document.getElementById("g-recaptcha-response").value=token
      });
    });
</script>
</head>

<body>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-6 align-self-center">
					<img src="{{ config('app.url') }}images/logo.png" alt="Pharma Focus Asia" class="img-fluid pt-3 pb-3" width="200">
				</div>

			<!--  <div class="col-md-2 col-6 offset-md-7 align-self-center" align="right">
					<select class="custom-select custom-select-sm brdr-radius" id="countrylng" name="countrylng">
						<option selected disabled>Select Language</option>
					<option value="english">English</option> 
						<option value="chinese">简体中文</option>
						<option value="korean">한국어</option>
						 <option value="thai">ไทย</option>
						<option value="indonesian">Bahasa Indonesia</option>
						<option value="malaysian">Bahasa Malay</option>
						<option value="vietnames">Tiếng Việt Nam</option>
						<option value="taiwan">繁體中文</option> 
					</select>
				</div>  -->
			</div>
		</div>
	</div>


	<div class="container-fluid shadow">	
		<div class="row">
			<img src="{{ config('app.url') }}images/oracle-health-sciences-embrance-banner.jpg" alt="Oracle - AI Revolution in Multivigilance" class="img-fluid">
		</div>		
	</div>


	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">		
				<!-- <h1 class="font-weight-bold TXT-ORNG pt-4 font-20">The AI Revolution in Multivigilance</h1> -->

				<p class="pt-4">As COVID-19 spread across the globe, life sciences organizations were forced to quickly change their approach to clinical trials.
With travel restrictions and lockdowns, physical access to patients
became almost impossible. Organizations accelerated their
plans to shift to decentralized clinical trial models that leverage
remote data collection technologies and processes to engage with
patients, rather than in-person visits.</p>

				<p>To better understand how organizations are adapting to this
new clinical trial environment, Informa Pharma Intelligence and
Oracle Health Sciences conducted a survey of biopharmaceutical
companies, contract research organizations, and medical device
companies involved in clinical trials around the world.</p>

				<p>The vast majority of respondents indicated that the COVID-19
pandemic has accelerated their adoption of decentralized clinical
trial methods. Three in four said that at least some of their trials
were decentralized, with many indicating they use this approach
for more than half of their trials.</p>

				<p class="font-weight-bold pt-2">Read our business brief to learn more.</p>

				<div class="text-center">
					<img src="{{ config('app.url') }}images/oracle-health-sciences-logo.jpg" alt="Oracle" class="img-fluid mb-2" width="300">
				</div>
				
				<h2 class="mb-1 font-weight-bold font-18 TXT-GRAY">About Oracle Health Sciences</h2>
				<p>As a leader in Life Sciences cloud technology, Oracle Health Sciences’ Clinical One and Safety One are trusted globally by professionals in both large and emerging companies engaged in clinical research and pharmacovigilance. With over 20 years’ experience, Oracle Health Sciences is committed to supporting clinical development, delivering innovation to accelerate advancements, and empowering the Life Sciences industry to improve patient outcomes. <em>Oracle Health Sciences. For life.</em></p>

			</div>

			<div class="col-lg-4 col-12 pt-3 pb-4">
				<div class="pb-3 d-none d-sm-block"></div>
				<div class="form-bg p-3"> 
					<h2 class="text-center mb-2 text-white font-weight-bold font-18">Download FREE WhitePaper</h2>              
					<form action="{{route('oracleExploreClinicaltrial.post')}}" method="post">
	               		{{csrf_field()}}
                        <input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">
	               		<input type="hidden" name="formtype" value="normal-form">
	               		<input type="hidden" name="type" value="Oracle HS (explore clinical trials)">	
	                  	<input type="hidden" name="client_subject" value="Registration for Oracle HS ">	 
	                  	<input type="hidden" name="admin_subject" value="Registration for Oracle HS ">	
	                  	<input type="hidden" name="client_message" value="We appreciate your interest in the Oracle HS   .The concerned team will get back to you soon.">	
	                  	<input type="hidden" name="site_name" value="PharmaFocusAsia">	
	                  	<input type="hidden" name="thank_message" value="Thank you for showing your interest in Oracle HS">

	                  	<div class="form-group mb-0 {{ $errors->first('first_name', 'has-error')}}">
	                  		<div class="form-row">
	                  			<div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
	                  				<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name*" value="" required>
	                  				<span class="help-block">{{ $errors->first('first_name', ':message') }}</span>   
	                  			</div>
	                  			<div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
	                  				<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name*" value="" required>
	                  				<span class="help-block">{{ $errors->first('last_name', ':message') }}</span>   
	                  			</div>
	                  		</div>
	                  	</div>

	                  	<div class="form-group {{ $errors->first('email', 'has-error')}}">
	                  		<input type="email" class="form-control" name="email" id="email" placeholder="Business Email*" value="{{ old('email') }}" required>
	                  		<span class="help-block">{{ $errors->first('email', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group {{ $errors->first('job_title', 'has-error')}}">
	                  		<input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title*" value="{{ old('job_title') }}" required>
	                  		<span class="help-block">{{ $errors->first('job_title', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group {{ $errors->first('company', 'has-error')}}">
	                  		<input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" value="{{ old('company') }}" required>
	                  		<span class="help-block">{{ $errors->first('company', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group {{ $errors->first('phone', 'has-error')}}">
	                  		<input type="text" class="form-control" name="phone" id="phone" placeholder="Business Telephone*" value="{{ old('phone') }}" required>
	                  		<span class="help-block">{{ $errors->first('phone', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group {{ $errors->first('country', 'has-error')}}">
	                  		<select class="form-control" name="country" required value="{{ old('country') }}">
	                  			<option value="">Select Country*</option>
	                  			@foreach($countries as $country)
	                  			<option value="{{$country->country_name}}">{{$country->country_name}}</option> 
	                  			@endforeach
	                  		</select>
	                  		<span class="help-block">{{ $errors->first('country', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group {{ $errors->first('zip_code', 'has-error')}}">
	                  		<input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Postal/Zip Code*" value="{{ old('zip_code') }}" required>
	                  		<span class="help-block">{{ $errors->first('zip_code', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group {{ $errors->first('headquarters', 'has-error')}}">
	                  		<select class="form-control" name="headquarters" required value="{{ old('headquarters') }}">
	                  			<option value="">Headquarters Location*</option>
	                  			@foreach($countries as $country)
	                  			<option value="{{$country->country_name}}">{{$country->country_name}}</option> 
	                  			@endforeach
	                  		</select>
	                  		<span class="help-block">{{ $errors->first('headquarters', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group">
	                  		<select class="form-control" name="pdf_language" value="pdf_language" required>
	                  			<option value="" disabled selected>Download PDF in-*</option>
	                  			<option value="English">English</option>
	                  			<option value="Korean">Korean (한국어)</option>
	                  			<option value="Both">Both</option> 
	                  		</select>
	                  	</div>

						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox"  name="subscribe_type" value="Yes" class="custom-control-input" id="oracle-check1">
								<label class="custom-control-label text-light small" for="oracle-check1">Yes, I subscribe to marketing communications from Oracle about its products, events and services.</label>
							</div>
						</div>
					

							<div class="form-group text-left">
								<p class="TXT-LYT small mb-1">This is cohosted by  Pharma Focus Asia and Oracle. Both companies will process your personal information. Each party will be responsible for managing their own use of your personal information.</p>
								<p class="mb-1 TXT-LYT small">By filling and submitting this form you understand and agree that Oracle processes your personal information in accordance with the <a href="https://www.oracle.com/legal/privacy/privacy-policy.html" target="_blank" class="TXT-ORNG">Oracle Privacy Policy</a>.  Additional details regarding Oracle’s collection and use of your personal information, including information about access, retention, rectification, deletion, security, cross-border transfers and other topics, is available in the <a href="https://www.oracle.com/legal/privacy/privacy-policy.html" target="_blank" class="TXT-ORNG">Oracle Privacy Policy</a>.</p>
								<p class="mb-0 TXT-LYT small">Oracle utilizes a third party registration company to manage registrations and logistical activities for this program.</p>
							</div>
						

	                  	<div class="form-group mb-1" align="center">
	                  		<button type="submit" name="submit" class="btn btn-sm btn-danger pl-5 pr-5 brdr-radius">SUBMIT</button>
	                  	</div>


                	</form>  
					<div class="clearfix"></div>   
				</div>
			</div>
		</div>
	</div>

	

	<div class="container-fluid bg-dark footer">
		<div class="container pt-3 pb-2 text-center text-white">
			<p class="mb-1"><i class="fa fa-globe PF-PR10" aria-hidden="true"></i> www.pharmafocusasia.com - Powered by Ochre Media Pvt. Ltd.</p>
			<p class="mb-1"><i class="fa fa-envelope-o PF-PR10" aria-hidden="true"></i> advertise@pharmafocusasia.com</p>
		</div>
	</div>


	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-blue">Thank You..</h4>
				</div>
				<div class="modal-body">
					<p>{{session('thank_message')}}</p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Pharma Focus Asia
				</div>
				<div class="modal-footer">				
					<a class="btn btn-seconadry" role="button" id="aa" name="aa"  href="{{url('promotion/oracle-explore-clinicaltrial')}}" aria-expanded="false">
						Close
					</a>					
				</div>
			</div>
		</div>
	</div> 

	<script src="{{ config('app.url') }}mix/app.js"></script>


	<script type="text/javascript">
		@if(Session('thank_message'))	
		$('#myModal').modal('show');
		@endif	
	</script>

	@if($errors->any())
	@if(old('formtype') == 'modal-form')

	<script type="text/javascript">  
		$(document).ready(function(){ 
			$('#register').modal('show');   
		});   
	</script>


	@endif             
	@endif

</body>

</html>
