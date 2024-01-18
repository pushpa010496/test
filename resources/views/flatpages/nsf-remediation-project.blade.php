<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="language" content="english" /> 
	<title>Lessons Learned From a Successful Remediation Project </title>
	<meta name="viewport" content="width=device-width" />
	<meta name="robots" content="noindex" />
	<link rel="shortcut icon" href="{{ config('app.url') }}images/favicon.ico" type="image/x-icon">
	<meta name="title" content="Lessons Learned From a Successful Remediation Project" />
	<meta name="description" content="Manufacturers, regulators and consumers look to NSF International for the development of public health standards and certification programs that help protect the world’s food, water, consumer products and environment." />
	<meta name="keywords" content="" />
	<meta property="og:title" content="Lessons Learned From a Successful Remediation Project" />
	<meta property="og:description" content="Manufacturers, regulators and consumers look to NSF International for the development of public health standards and certification programs that help protect the world’s food, water, consumer products and environment." />
	<meta property="og:Keywords" content=""/>
	<meta property="og:image" content="{{ config('app.url') }}images/remediation-project-og.jpg" />
	<link rel="canonical" href="{{URL::current('lesson-learned-from-successful-remediation-project')}}"/>
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
		.form-bg {
			background: rgb(50,139,215);
			background: -moz-linear-gradient(180deg, rgba(50,139,215,1) 0%, rgba(11,61,103,1) 81%);
			background: -webkit-linear-gradient(180deg, rgba(50,139,215,1) 0%, rgba(11,61,103,1) 81%);
			background: linear-gradient(180deg, rgba(50,139,215,1) 0%, rgba(11,61,103,1) 81%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#328bd7",endColorstr="#0b3d67",GradientType=1);
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
		.TXT-BLUE{color: #17558a;}
		.BG-BLUE{background-color: #17558a;}
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
		.font-22 {font-size: 22px;line-height: 1.4;}
		.font-18 {font-size: 18px;line-height: 1.2;}
		.font-16 {font-size: 16px;line-height: 1.2;}
		.font-28 { font-size: 28px; line-height: 1.6; }

		.expandcheckbox-div{
			-webkit-transition: all 1s ease-in-out;
			-moz-transition: all 1s ease-in-out;
			-ms-transition: all 1s ease-in-out;
			-o-transition: all 1s ease-in-out;
			/*transition: all 1s ease-in-out;*/
			transition: visibility 0s, opacity 0.5s linear;
		}
	ul { list-style-type: disclosure-closed; }
		ul li::marker { color: #ee1d23; }
		/*Mobile ResponsiveCode */
	@media (min-width: 320px) and (max-width: 767px) {
		.font-28 { font-size: 16px!important; }
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

</head>

<body>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-6 align-self-center">
					<img src="{{ config('app.url') }}images/logo.png" alt="Pharma Focus Asia" class="img-fluid pt-1 pb-1" width="200">
				</div>

				<div class="col-md-3 col-6 offset-md-6 align-self-center" align="right">
					<img src="https://promotions.pharmafocusasia.com/public/images/flatpages/nsf-logo.jpg" alt="nsf-logo" title="nsf-logo" class="img-fluid mt-1 mb-1">
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid shadow">	
		<div class="row">
			<!-- <img src="{{ config('app.url') }}images/flatpages/nsf-why-you-might-need-a-remediation-program-banner.jpg" alt="Oracle - AI Revolution in Multivigilance" class="img-fluid"> -->
			<img src="{{ config('app.url') }}images/remediation-project-banner.jpg" alt="Oracle - AI Revolution in Multivigilance" class="img-fluid">
		</div>		
	</div>


	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">		
				<h1 class="font-weight-bold TXT-BLUE mt-4 mb-4 font-28" style="text-transform: uppercase;">Lessons Learned From a Successful Remediation Project </h1>

				<h2 class="font-weight-bold TXT-ORNG mb-2 font-20">Abour NSF </h2>

				<p class="mb-4">Manufacturers, regulators and consumers look to NSF International for the development of public health standards and certification programs that help protect the world’s food, water, consumer products and environment. </p>
				<!-- <h2 class="font-weight-bold TXT-ORNG pt-4 font-20">How Have These Events Affected Some Firms’ Ability to Meet cGMP? </h2> -->
				<p class="mb-3">Discover how we worked on a complex remediation program that reduced time in an MHRA IAG referral by six months and got the company back into production within three months. </p>
				<p class="mb-3">Satisfying your shareholders’ expectations, meeting the legal and cGMP expectations of the international regulatory bodies and staying on the right side of your board of directors is a basic requirement of staying in business. </p>
				<p class="mb-3">However, often we see the law of unintended consequences raise its ugly head. For example, let’s say you identified a need to improve something in the workplace; possibly a process, SOP, laboratory method or system. You planned what to do, trained the staff and implemented the change. Yet some time later you noticed: </p>

				<ul class="pl-4 mb-5">
					<li>No one is following the new process, SOP, method or system. </li>
					<li>People are working around it. </li>
					<li>It isn’t working; it’s clunky, unwieldy, unpopular and hard to follow. </li>
					<li>It has caused more variation and more waste than it sought to prevent. </li>
				</ul>



				<p class="font-weight-bold BG-BLUE pt-2 text-white text-center font-22 py-3 px-5 rounded" style="cursor: pointer;" data-toggle="modal" data-target="#form-submit">Register For Lessons From Successful Remediation Project </p>

			</div>

			<div class="col-lg-4 col-12 pt-3 pb-4">
				<div class="pb-3 d-none d-sm-block"></div>
				<div class="form-bg p-3"> 
					<h2 class="text-center mb-2 text-white font-weight-bold font-18">Register For Lessons From Successful Remediation Project </h2>
					<form action="{{route('nsfRemediationproject.post')}}" method="post">
						@csrf

						<input type="hidden" name="formtype" value="modal-form">
						<input type="hidden" name="type" value="Lessons From Successful Remediation Project">	
						<input type="hidden" name="client_subject" value="Registration for NSF Health Science in PFA">	
						<input type="hidden" name="admin_subject" value="Registration for NSF Health Science">	
						<input type="hidden" name="client_message" value="We appreciate your interest in the NSF Health Science. The concerned team will get back to you soon.">	
						<input type="hidden" name="site_name" value="PharmaFocusAsia">	
						<input type="hidden" name="thank_message" value="Your registration was successfully completed.The concerned team will get back to you soon.">

						<div class="form-group">
							<input type="text" class="form-control" id="first_name" name="firstname" placeholder="First Name*" value="" required="">
						</div>

						<div class="form-group">
							<input type="text" class="form-control" id="last_name" name="lastname" placeholder="Last Name*" value="" required="">
						</div>


						<div class="form-group ">
							<input type="email" class="form-control" name="email" id="email" placeholder="Business mail* " value="" required="">
							<span class="help-block"></span>   
						</div>

						<div class="form-group ">
							<input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title*" value="" required="">
							<span class="help-block"></span>   
						</div>

						<div class="form-group ">
							<input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" value="" required="">
							<span class="help-block"></span>   
						</div>

						<div class="form-group ">
							<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number*" value="" required="">
							<span class="help-block"></span>   
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

						<div class="form-group ">
							<textarea rows="2" name="description" class="form-control" placeholder="Message"></textarea>
							<span class="help-block"></span>   
						</div>		

						<div class="form-group mb-2" align="center">
							<button type="submit" name="submit" class="btn btn-sm btn-danger pl-5 pr-5 brdr-radius">Submit</button>
						</div>

						<div class="form-group">
							<div class="mb-1 d-flex">
								<input type="checkbox" class="mt-1 mr-1" id="privacy" name="email_updates" value="Yes">
								<label class="text-light small" for="privacy">Yes, I would like to opt-in to learn more about offers, products, and services.</label>
							</div>
						</div>

						<div class="form-group mb-1" align="left">
							<p class="font-11 text-light mb-0">**Under no circumstances we will share or sell your email and contact information with any govt or private entity.</p>
						</div>
					</form> 
					<div class="clearfix"></div>   
				</div>
			</div>
		</div>
	</div>

	<!-- Form Popup Model Box -->
	<div id="form-submit" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content form-bg">
				<div class="modal-header">
					<h4 class="modal-title text-white font-22 font-weight-bold">Register For Lessons From Successful Remediation Project </h4>
				</div>
				<div class="modal-body">
					<form action="{{route('nsfRemediationproject.post')}}" method="post">
						@csrf

						<input type="hidden" name="formtype" value="modal-form">
						<input type="hidden" name="type" value="Lessons From Successful Remediation Project">	
						<input type="hidden" name="client_subject" value="Registration for NSF Health Science in PFA">	
						<input type="hidden" name="admin_subject" value="Registration for NSF Health Science">	
						<input type="hidden" name="client_message" value="We appreciate your interest in the NSF Health Science. The concerned team will get back to you soon.">	
						<input type="hidden" name="site_name" value="PharmaFocusAsia">	
						<input type="hidden" name="thank_message" value="Your registration was successfully completed.The concerned team will get back to you soon.">

						<div class="form-group">
							<input type="text" class="form-control" id="first_name" name="firstname" placeholder="First Name*" value="" required="">
						</div>

						<div class="form-group">
							<input type="text" class="form-control" id="last_name" name="lastname" placeholder="Last Name*" value="" required="">
						</div>


						<div class="form-group ">
							<input type="email" class="form-control" name="email" id="email" placeholder="Business mail* " value="" required="">
							<span class="help-block"></span>   
						</div>

						<div class="form-group ">
							<input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title*" value="" required="">
							<span class="help-block"></span>   
						</div>

						<div class="form-group ">
							<input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" value="" required="">
							<span class="help-block"></span>   
						</div>

						<div class="form-group ">
							<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number*" value="" required="">
							<span class="help-block"></span>   
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

						<div class="form-group ">
							<textarea rows="2" name="description" class="form-control" placeholder="Message"></textarea>
							<span class="help-block"></span>   
						</div>		

						<div class="form-group mb-2" align="center">
							<button type="submit" name="submit" class="btn btn-sm btn-danger pl-5 pr-5 brdr-radius">Submit</button>
						</div>

						<div class="form-group">
							<div class="mb-1 d-flex">
								<input type="checkbox" class="mt-1 mr-1" id="privacy" name="email_updates" value="Yes">
								<label class="text-light small" for="privacy">Yes, I would like to opt-in to learn more about offers, products, and services.</label>
							</div>
						</div>

						<div class="form-group mb-1" align="left">
							<p class="font-11 text-light mb-0">**Under no circumstances we will share or sell your email and contact information with any govt or private entity.</p>
						</div>
					</form>
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
					<a class="btn btn-seconadry" role="button" id="aa" name="aa"  href="{{url('promotion/lesson-learned-from-successful-remediation-project')}}" aria-expanded="false">
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