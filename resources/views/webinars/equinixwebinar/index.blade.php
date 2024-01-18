<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Equinix Webinar | Healthcare IT - Securing EMR Data in the Cloud and Scaling for Telehealth & Remote Workers</title>

	<link rel="shortcut icon" href="{{ config('app.url') }}/images/favicon.ico" type="image/x-icon">

	<!-- Meta Tags -->
	<meta property="og:title" content="Equinix Webinar | Healthcare IT - Securing EMR Data in the Cloud and Scaling for Telehealth & Remote Workers" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<meta property="og:description" content="" />
	<meta property="og:Keywords" content="" />

	<meta property="og:image" content="{{config('app.url')}}webinars/equinix/equinix-og.jpg" />
	<link rel="canonical" href="{{url('equinix-webinar-2020')}}"/>

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="{{url('equinix-webinar-2020')}}" />

	
	<meta property="og:site_name" content="Asian HHM" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<meta name="robots" content="index, follow" />

	<meta name="revisit-after" content="1 days" />

	<meta name="google-site-verification" content="vrUJfBkdzevt8C6ksHdL2TvxH9GGWWUoG9CdvL7MPU0" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91608244-2"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-91608244-1', 'auto');
		ga('send', 'pageview');
	</script>

	<!--AS per Basco& sudhakar Canonical -->

	<script type="application/ld+json">
	  {
	    "@context" : "http://schema.org",
	    "@type" : "Organization",
	    "name" : "Asianhhm",
	    "url" : "https://www.asianhhm.com/",
	    "sameAs" : [
	    " https://www.facebook.com/AsianHospitalandHealthcareManagement ",
	    " https://twitter.com/asianhhm ",
	    " https://plus.google.com/+AsianhhmSecunderabad/about ",
	    " https://www.linkedin.com/groups?home=&gid=6750651&trk=anet_ug_hm ",
	    " https://www.tumblr.com/blog/asianhhm "
	    ]
	  }
	</script>
	<!--AS per Basco& sudhakar Schema code -->

	<link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css"> 
	<link rel="stylesheet" href="{{ config('app.url') }}css/custom-styles.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">  -->
	<!-- <link rel="stylesheet" href="{{ config('app.url') }}css/latest-styles.css">   -->

	<script src="{{ config('app.url') }}styles/js/jquery-2.1.3.min.js"></script> 

	<style type="text/css">
	.form-bg{
		background-color: #00586E;
	}	
	.person-area {
	  background: #fff none repeat scroll 0 0;
	  border-bottom-left-radius: 10px;
	  border-bottom-right-radius: 10px;
	  /*padding: 25px;*/
	  padding-top: 25px;
	  font-size: 15px;
	}
	.audience-title {
	  font-size: 26px;
	  margin-bottom: 10px;
	}
	.person {
	  margin-bottom: 10px;
	  /*padding-left: 18px;
	  padding-right: 18px;
	  text-align: left;*/
	}
	.person-name{
	font-size: 20px;
	}

	.gray-text {
	  color: #7a7a7a;
	  font-size: 14px;
	}
	.TXT-GREEN {
	  color: #269f00;
	}
	.date-meta {
	  font-size: 18px;
	  font-weight: 600;
	  color: #555;
	}
	.text-white{
	color:#ffffff !important;
	}

	.b-shadow{
	  /*box-shadow: 1px 1px 4px 0 rgba(0,0,0,.3);*/
	  box-shadow:0 2px 4px 0 rgba(0,0,0,.1);
	}
	input[type="submit"]{
	  padding-left: 25px;
	  padding-right:25px;
	}

	footer i{
		color: #ee1a3b;
		font-size: 17px;
		border-radius: 5px;
		transition: 500ms;
		background: #f1f1f1;
		margin-right: 5px;
	}
	.fa-facebook{
		padding: 5px 8px;
	}
	.fa-google-plus{
		padding: 5px 3px;
	}
	.fa-linkedin,.fa-twitter{
		padding: 5px 5px; 
	}

	footer i:hover{
		color: #fff;
		transition: 500ms;
		background: #ee1a3b;
	}
	.modal-dialog{
		top:0 !important;
	}
	.video:hover{cursor: pointer;}

	.BG-BLUE{background-color: #1c95ca;}
	.form-control{font-size: 14px; height: calc(2rem + 2px);}
	.form-group{margin-bottom: 10px;}
	.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
	    background-color: #bde450;
	}
	#state{
		display: none;
	}
    </style>

</head>

<body> 

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 col-12 my-auto">
				<img src="{{config('app.url')}}images/logo.png" alt="Asian HHM" class="img-fluid" width="200">
			</div>
			<div class="col-lg-5 col-md-5 col-sm-8 col-12 my-auto offset-md-4 pt-1 pb-2 text-right gray-text align-self-center">
				<p class="mb-0">
					<em class="mt-5"><span>Webinar Sponsored by</span></em>
					<img src="{{config('app.url')}}webinars/equinix/equinix-logo.jpg" alt="Equinix" class="ml-2 img-fluid">
				</p>
			</div>
		</div>
	</div>

	<div class="border-top mb-3"></div>


	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-2 text-center">
				<img src="{{config('app.url')}}webinars/equinix/equinix-banner.jpg" alt="Equinix Healthcare" title="Equinix" class="img-fluid shadow" />
			</div>

        	<div class="col-lg-7 col-md-7 col-sm-12 col-12 person pt-3">
        		<p>Equinix connects the world's leading businesses to their customers, employees and partners inside the most-interconnected data centers. On this global platform for digital business, companies come together across more than 55+ markets on five continents to reach everywhere, interconnect everyone and integrate everything they need to create their digital futures.</p>

        		<h1 class="font-weight-bold PF-TXTRED font-18">Healthcare IT - Securing EMR Data in the Cloud and Scaling for Telehealth & Remote Workers</h1>
        		<p>Join two visionary leaders from Sentara Healthcare & Optima Health as they discuss their decisions, actions and architecture to enhance patient outcomes. Explore the key benefits of a cloud-first architecture to enhance security, maintain privacy and improve flexibility to take electronic medical records to the cloud. See how Sentara unified an Epic EMR system with 20+ EMRs while enabling machine learning and AI to provide new solutions for the global healthcare community.</p>
        	</div>

        	<div class="col-lg-5 col-md-5 col-sm-12 col-12 mt-4 mb-4 align-self-center">
        		<img type="button" data-toggle="modal" data-target="#videoFormModal" src="{{config('app.url')}}webinars/equinix/equinix-video-thumb.jpg" alt="Equinix Webinar" title="Equinix Webinar" class="img-fluid video shadow text-center border" />
        	</div>	

        	<div class="col-lg-9 col-md-9 col-sm-12 col-12 mb-3">        		
        		<h2 class="font-weight-bold PF-TXTRED font-18">Key Learning Objectives: Benefits of Platform Equinix</h2>
        		<ul style="list-style-type: disc;padding-left: 16px;">
					<li>Ability to rapidly connect to new SaaS applications </li>
					<li>Proximity of ecosystem partners enabled the scale from 75 providers on the telehealth platform to 2,000 in two weeks</li>
					<li>Scaled to 60,000 daily mobile app views of patient records, billing, insurance and test results</li>
					<li>Managed 15X growth of telehealth visits in two weeks with no wait times</li>
        		</ul>
        	</div>

        	<!-- <div class="col-lg-3 col-md-3 col-sm-12 col-12 pb-3">				
        		<div class="p-2 PF-BrdrDDD mb-3 bg-white shadow" align="center">
        			<h2 class="mb- pt-2 PF-TXTRED"><strong>5<sup>th</sup> August 2020</strong></h2>
        			<p class="small mb-0"><strong>(Wednesday)</strong></p>
        			<p class="mb-1 mt-1">
        			11:30 AM IST<br>
        			2:00 PM SGT<br>
        			4:00 PM AUST
        			</p>
        		</div> 				          
        	</div> -->
		</div>
	</div>

	<!-- <div class="container">	
		<div class="row">
	        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-2 align-self-center">
	        	<div class="BG-BLUE border p-3 text-white">
	            <p class="text-center font-20 font-weight-bold mb-0">" Professionals across the globe have already benefitted. Hurry register now! "</p>
	          </div>
	        </div>
	    </div>
	</div> -->

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<h3 class="font-weight-bold PF-TXTRED font-20 mb-3">Featured Speakers</h3>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="bg-light border p-2">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-12 align-self-center">				
					<div class="text-center">
						<img src="{{config('app.url')}}webinars/equinix/speaker-1.jpg" alt="Jeffrey Thomas" title="Jeffrey Thomas" class="img-fluid border" />        
					</div> 				          
				</div>
				<div class="col-lg-10 col-md-10 col-sm-12 col-12">
					<h2 class="mt-2 font-weight-bold">About - <strong class="PF-TXTRED">Jeffrey Thomas</strong></h2>
					<p class="gray-text mb-1"><em>Chief Technology Officer | Sentara Healthcare & Optima Health</em></p>
					<p class="mb-1">An Innovative IT executive with 20+ years' experience in global infrastructure, operations, enterprise architecture and application development across commercial, government, consulting and higher education platforms. Specializing in cloud transformation and consolidation, leading multifaceted infrastructure conversion.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container mt-3">                 
		<div class="bg-light border p-2">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-12 align-self-center">				
					<div class="text-center">
						<img src="{{config('app.url')}}webinars/equinix/speaker-2.jpg" alt="Matthew Douglas" title="Matthew Douglas" class="img-fluid border" />        
					</div> 				          
				</div>
				<div class="col-lg-10 col-md-10 col-sm-12 col-12">
					<h2 class="mt-2 font-weight-bold">About - <strong class="PF-TXTRED">Matthew Douglas</strong></h2>
					<p class="gray-text mb-1"><em>Chief Enterprise Architect | Sentara Healthcare & Optima Health</em></p>
					<p class="mb-0">Matthew Douglas is the Chief Enterprise Architect for Sentara & Optima Healthcare. He is responsible for over $60 Million in Healthcare IT budgets, Matthew has 25 years of experience as a global IT executive with expertise across multiple verticals, building and managing large-scale networks and enterprise applications</p>
				</div>
			</div>
		</div>
	</div>



	<div class="container mt-3">                 
		<div class="bg-light border p-2">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-12 align-self-center">				
					<div class="text-center">
						<img src="{{config('app.url')}}webinars/equinix/moderator.jpg" alt="Tim Waters" title="Tim Waters" class="img-fluid border" />        
					</div> 				          
				</div>
				<div class="col-lg-10 col-md-10 col-sm-12 col-12">
					<h2 class="mt-2 font-weight-bold">Moderator - <strong class="PF-TXTRED">Tim Waters</strong></h2>
					<p class="gray-text mb-1"><em>Sr. Manager, Healthcare Vertical Marketing, Equinix</em></p>
					<p class="mb-0">Tim Waters is responsible for the Healthcare and Life Sciences (HCLS) vertical for Equinix Americas, design solutions that leverage interconnection to support healthcare interoperability. Conduct speaking engagements, briefings and educate others on the HCLS industry and interoperability.</p>
				</div>
			</div>
		</div>
	</div>


	<div id="videoFormModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">			
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title PF-TXTRED">Free Registration to View Now</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ url('equinix-webinar-2020-success') }}" method="post" id='writemessage' >
						{{ csrf_field() }}	
						<div class="row">
							<div class="col-md-12">
								<div class="form-group {{ $errors->first('name', 'has-error')}}">
									<input class="form-control" id="name" name="name" placeholder="Full Name *" required=""  value="{{ old('name') }}"  type="text">	
									<input type="hidden" name="callfrom"  value="{{Request::segment(1)}}" />
									<input type="hidden" name="type" id="type" value="equinix-webinar-2020-video" />
									<input type="hidden" name="formtype"  value="modal-form" />
									<input type="hidden" name="thank_message" value="Thank you for showing your interest in Equinix Webinar 2020.">
									<span class="help-block">{{ $errors->first('name', ':message') }}</span>
								</div>
							</div>					

							<div class="col-md-12">
								<div class="form-group {{ $errors->first('email', 'has-error')}}">
									<input class="form-control" id="email" name="email" placeholder="Business Email *" required=""  value="{{ old('email') }}"  type="name">
									<span class="help-block">{{ $errors->first('email', ':message') }}</span>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group {{ $errors->first('phone', 'has-error')}}">
									<input class="form-control" id="phone" name="phone" placeholder="Phone *" required=""  value="{{ old('phone') }}"  type="text">
									<span class="help-block">{{ $errors->first('phone', ':message') }}</span> 
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group {{ $errors->first('job_title', 'has-error')}}">
									<input class="form-control" id="job_title" name="job_title" placeholder="Job Title *"  value="{{ old('job_title') }}"  required="" type="text">
									<span class="help-block">{{ $errors->first('job_title', ':message') }}</span>   
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group {{ $errors->first('company', 'has-error')}}">
									<input type="text" class="form-control" id="company" name="company" placeholder="Company Name *" value="{{ old('company') }}" required/>
									<span class="help-block">{{ $errors->first('company', ':message') }}</span> 
								</div>
							</div>							

							<div class="col-md-12">
								<div class="form-group  {{ $errors->first('country', 'has-error')}}">
									<select class="form-control" id="country" name="country" placeholder="Country *" required=""  value="{{ old('country') }}" >
										<option value="">Select Location*</option>
										@foreach($countries as $value)               	
										<option value="{{$value->title}}">{{$value->title}}</option>
										@endforeach    
									</select>
									<span class="help-block">{{ $errors->first('country', ':message') }}</span>   
								</div>
							</div>					

							<div class="col-md-12">
								<div class="form-group">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="email_updates" value="Yes" id="email_updates">
										<label class="custom-control-label small" for="email_updates">I would like to receive email updates about Equinix Webinar products, services and events</label>
									</div>
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="quotation" value="Yes" id="quotation">
										<label class="custom-control-label small" for="quotation">I would like to request a quotation</label>
									</div>
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="representative" value="Yes" id="representative">
										<label class="custom-control-label small" for="representative">I have more questions and would like to be contacted by a Equinix Webinar representative</label>
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group text-center mb-1">
									<button type="submit" value="submit" class="btn btn-sm btn-danger">SUBMIT</button>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group mb-1">									
									<small class="mt-2 text-muted">**Under no circumstances we will share or sell your email and contact information with any govt or private entity.</small>
								</div>
							</div>
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-12">	          		
					<p>&copy; Ochre Media Pvt Ltd., <?php echo date("Y"); ?>. All rights reserved.</p>
				</div>

				<div class="col-md-5 col-12 pb-2">	   
					<!-- // FOOTER-SOCIAL MEDIA -->
					<div class="ft-right">  
						<a href="https://www.linkedin.com/in/healthcare-magazine" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
						<a href="https://twitter.com/asianhhm" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="https://www.facebook.com/AsianHospitalandHealthcareManagement" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					</div>                                  
					<!-- FOOTER-SOCIAL MEDIA // --> 
				</div>
			</div>   
		</div>
	</footer>

	<!-- main container --> 

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

	
	
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-blue"> Thank You...</h2>
				</div>
				<div class="modal-body">
					<p>{{session('thank_message')}}</p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Asian HHM
				</div>
				<div class="modal-footer">				
					<a class="btn btn-primary" role="button" id="aa" name="aa"  href="{{url('equinix-webinar-2020')}}" aria-expanded="false">
						Close
					</a>					
				</div>
			</div>
		</div>
	</div> 


	<script src="{{ config('app.url') }}js/jquery-3.3.1.js"></script>
	<script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
	<script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>

 <script src='https://vjs.zencdn.net/7.4.1/video.js'></script>
<script type="text/javascript">
	$('#country').on('change', function() {
		if( this.value  == "India"){
			$('#state').css('display','block').attr('required','true');
		}else{
			$('#state').css('display','none').removeAttr('required');
		}
	});
</script>
	@if(Session('thank_message')) 
	<script type="text/javascript">	  	
		$('#successModal').modal('show');
	</script>

	@endif  

	<script type="text/javascript">
  	@if(session('thank_message'))	
  	$('#myModal').modal('show');
  	// for (let link of document.querySelectorAll('a[download]'))
  	// 	link.click();

  	@endif	  	
  </script>


<!-- 	@if($errors->any())
	<script type="text/javascript">	  	
		@if(old('formtype') == 'modal-form')	
			$(document).ready(function(){ 
				$('#videoFormModal').modal('show'); 
			});   		
		@endif  
	</script>
	@endif  --> 

</body>

</html>

