<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="{{ config('app.url') }}/images/favicon.ico" type="image/x-icon">

	<title>PHARMA FOCUS ASIA</title>
	
	<!-- Meta Tags -->
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:Keywords" content="" />

	<meta property="og:image" content="{{config('app.url')}}images/pfa-mediapack-og.jpg" />

	<link rel="canonical" href="{{url('cmp-mediapack')}}"/>

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="{{url('cmp-mediapack')}}" />
	
	<meta property="og:site_name" content="Pharma Focus Asia" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<meta name="robots" content="index, follow" />

	<meta name="revisit-after" content="1 days" />

	<meta name="google-site-verification" content="vrUJfBkdzevt8C6ksHdL2TvxH9GGWWUoG9CdvL7MPU0" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91608244-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-91608244-2');
	</script>

	<!--AS per Basco& sudhakar Canonical -->
	<script type="application/ld+json">
		{
			"@context" : "http://schema.org",
			"@type" : "Organization",
			"name" : "Pharmafocusasia",
			"url" : "https://www.pharmafocusasia.com/",
			"sameAs" : [
			" https://www.facebook.com/PharmaFocusAsia ",
			" https://twitter.com/pharmafocusasia ",
			" https://plus.google.com/+Pharmafocusasia/about ",
			" https://www.linkedin.com/groups?home=&gid=6750706&trk=anet_ug_hm ",
			" https://www.tumblr.com/blog/pharmafocusasia "
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
		body { font-size: 16px; }

		.font-14 { font-size: 14px; line-height: 1.2; }
		.font-16 { font-size: 16px; line-height: 1.2; }
		.font-18 { font-size: 18px; line-height: 1.2; }
		.font-20 { font-size: 20px; line-height: 1.2; }

		.TXT-GREEN { color:#0F876E; }
		.TXT-GRAY { color:#919191; }
		.bg-light {background-color: #f1f1f1 !important;}

		.modal-dialog{ top:0 !important; }
		.form-group{margin-bottom: 10px;}
		.form-control{font-size: 14px; height: calc(2rem + 2px); background-color: #fedcd3; border: none;}
		.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before { background-color: #ee4e22;	}
		/*#state{ display: none; }*/
		::placeholder { color: #111 !important; opacity: 1; }
		:-ms-input-placeholder { color: #111 !important; }
		::-webkit-input-placeholder { color: #111 !important; }
		select {color: #495057;}

		.shadow { box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.3)!important; }

		.btn-danger { color: #fff; background-color: #F04E23; border-color: #F04E23; }

		footer .social-icons i{
			color: #f04e23;
			font-size: 17px;
			border-radius: 50%;
			transition: 500ms;
			background: #f1f1f1;
			margin-right: 5px;
		}
		footer .social-icons i:hover{
			color: #fff;
			transition: 500ms;
			background: #f04e23;
		}
		.fa-facebook{ padding: 6px 9px;	}
		.fa-linkedin,.fa-twitter{ padding: 6px 6px; }
		footer {
			background-color: #002232 !important;
			color: #ccc;
			padding: 15px 10px 0 10px;
		}
		/*footer i{
			color: #f04e23;
			font-size: 17px;
			border-radius: 5px;
			transition: 500ms;
			background: #f1f1f1;
			margin-right: 5px;
		}
		.fa-facebook{ padding: 5px 8px;	}
		.fa-linkedin,.fa-twitter{ padding: 5px 5px; }
		footer i:hover{
			color: #fff;
			transition: 500ms;
			background: #F04E23;
		}*/
	</style>

</head>

<body> 

	<!-- <div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 my-auto">
				<img src="{{config('app.url')}}images/logo.png" alt="Pharma Focus Asia" class="img-fluid" width="200">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-8 my-auto offset-lg-5 pt-2 pb-2 text-right TXT-GRAY align-self-center">
				<p class="mb-0">
					<em class="mt-5"><span>Webinar Sponsored by</span></em>
					<img src="{{config('app.url')}}images/logo.png" alt="" class="ml-2 img-fluid">
				</p>
			</div>
		</div>
	</div>

	<div class="border-top mb-3"></div> -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 text-right pl-0 pr-0">
				<img src="{{config('app.url')}}images/rfq-banner-1.jpg" alt="ALL OUR PROGRAMS CARRY 100%" class="img-fluid" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left pl-0 pr-0">
				<img src="{{config('app.url')}}images/rfq-banner-2.jpg" alt="POSITIVE ROI ASSURANCE" class="img-fluid" />
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">

			<div class="col-lg-5 col-md-5 col-sm-12 col-12 offset-md-1 mt-4">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<h2 class="PF-TXTRED font-30">Why ?</h2> 

						<h3 class="font-weight-bold font-20 mt-4 mb-0">UDMs in our Active Network</h3> 
						<p class="TXT-GRAY font-weight-bold">400K+</p>

						<h3 class="font-weight-bold font-20 mt-4 mb-0">UDMs Profile Breakdown</h3> 
						<p class="TXT-GRAY font-weight-bold font-weight-bold">C-Suites Directors, Senior Executives, Middle Management</p>

						<h3 class="font-weight-bold font-20 mt-4 mb-0">Readership</h3> 
						<p class="TXT-GRAY font-weight-bold mb-0">Hard Copy Format - 100K</p>
						<p class="TXT-GRAY font-weight-bold">E-Book Format - 400K</p>

						<h3 class="font-weight-bold font-20 mt-4 mb-0">Global Reach  (% of subscribers)</h3> 
						<p class="TXT-GRAY font-weight-bold mb-0">Asia-Pacific - 55%</p>
						<p class="TXT-GRAY font-weight-bold mb-0">Europe - 35%</p>
						<p class="TXT-GRAY font-weight-bold mb-0">America - 9%</p>
						<p class="TXT-GRAY font-weight-bold">Rest of the World - 1%</p>
					</div> 
				</div>			
			</div>

			<div class="col-lg-5 col-md-5 col-sm-12 col-12 mt-3 mb-4">
				<div class="border shadow p-2">
					<h2 class="modal-title font-weight-bold text-center">HAVE A QUERY OR<br>WANT TO KNOW MORE?</h2>
					<p class="text-center font-14">Please fill in the below form and download our <strong>Mediapack</strong>.</p>

					<form action="{{route('cmpmediapacks.post')}}" class="email" id="writemessage" method="post" accept-charset="utf-8">
						{{ csrf_field()}}

						<input type="hidden" name="publicid" value="edd64ca3f473dc601c4f86aa1f0e8075">
						<input type="hidden" name="name" value="pharmafocusasia-advertise">

					

						<div class="form-group col-12  {{ $errors->first('firstname', 'has-error')}}">
							<input type="text" class="form-control" id="name" name="firstname" placeholder="Full Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets" value="{{old('firstname')}}" required>
							<input type="hidden" value="cmp-mediapacks" name="type" id="type" />
							<span class="help-block">{{ $errors->first('firstname', ':message') }}</span> 
						</div>

						<div class="form-group col-12  {{ $errors->first('email', 'has-error')}}">
							<input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Business Email*" required>
							<span class="help-block">{{ $errors->first('email', ':message') }}</span>   
						</div>

						<div class="form-group col-12  {{ $errors->first('mobile', 'has-error')}}">
							<input type="tel" class="form-control" id="subject" name="mobile" value="{{old('mobile')}}" pattern="[0-9\s._*#()+-]+" minlength="8" placeholder="Telephone*" required>       
							<span class="help-block">{{ $errors->first('mobile', ':message') }}</span>        
						</div>

						<div class="form-group col-lg-12  {{ $errors->first('job_title', 'has-error')}}">
							<input type="text" class="form-control" value="{{old('job_title')}}" name="job_title" placeholder="Designation*" pattern="[A-Za-z0-9\s]{2,50}" required="">
							<span class="help-block">{{ $errors->first('cf_leads_jobtitle', ':message') }}</span>  
						</div>

						<div class="form-group col-12  {{ $errors->first('company', 'has-error')}}">
							<input type="text" class="form-control" id="company" name="company" value="{{old('company')}}" placeholder="Company*" pattern="[A-Za-z0-9\s]{2,50}" required>      
							<span class="help-block">{{ $errors->first('company', ':message') }}</span>         
						</div>

						<div class="form-group col-12  {{ $errors->first('country', 'has-error')}}">  
							   {{ Form::select('country', $countries, null, ['class' => 'form-control custom-select','required'=>'required']) }}
                     		<span class="help-block">{{ $errors->first('country', ':message') }}</span>
						</div>

						<div class="form-group col-12  {{ $errors->first('description', 'has-error')}}">
							<textarea class="form-control" type="textarea" id="message" name="description" value="{{old('description')}}" placeholder="Message" maxlength="200" rows="2"></textarea>
							<span class="help-block">{{ $errors->first('description', ':message') }}</span>   
						</div>

						<div class="form-group col-12 mb-0">
							<div class="row">
								<!-- <div class="col-md-6 col-sm-6 col-12 mb-2 align-self-center">							
									<p class="TXT-GRAY mb-0">PODCAST... & MORE.</p>
								</div> -->
								<div class="col-md-12 col-sm-12 col-12 mb-2 text-right">							
									<input type="submit" value="Submit" id="submit-button" class="btn btn-sm btn-danger pl-4 pr-4" onclick="return checkform();"/>
								</div>
							</div>
						</div>

						<!-- <div class="form-group col-12">
							<p class="text-left mb-0 font-13">OR write to us at</p>
							<p class="text-left mb-0">	
								<a href="{{trans('messages.advertise_mail_to')}}" class="font-weight-bold">{{trans('messages.advertise_email')}}</a>
							</p>
							<p>Call to us: <a href="tel:+914049614567" title="For Enquiries" class="text-white"> +91 40 49614567</a>
								</p>
						</div> -->
							<div class="clearfix"></div>
					</form>
				</div>
			</div>

		</div>
	</div>

	<section class="bg-light">
		<div class="container">

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3 text-center">
					<h2 class="PF-TXTRED font-30 mb-0">How ?</h2>
					<h3 class="font-weight-bold font-18 mb-4">Content Sharing Channels</h3> 
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4 text-center">
					<img src="{{config('app.url')}}images/magazine-icon.png" alt="Magazine" class="img-fluid">
					<h4 class="font-weight-bold TXT-GRAY font-16">Magazine</h4>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4 text-center">
					<img src="{{config('app.url')}}images/content-syndication-icon.png" alt="Content Syndication Targeted" class="img-fluid">
					<h4 class="font-weight-bold TXT-GRAY font-16">Content Syndication Targeted</h4>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4 text-center">
					<img src="{{config('app.url')}}images/email-marketing-icon.png" alt="Email Marketing" class="img-fluid">
					<h4 class="font-weight-bold TXT-GRAY font-16">Email Marketing</h4>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4 text-center">
					<img src="{{config('app.url')}}images/newsletter-icon.png" alt="Newsletters" class="img-fluid">
					<h4 class="font-weight-bold TXT-GRAY font-16">Newsletters</h4>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4 text-center">
					<img src="{{config('app.url')}}images/digital-promotion-icon.png" alt="Digital Promotion Services" class="img-fluid">
					<h4 class="font-weight-bold TXT-GRAY font-16">Digital Promotion Services</h4>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4 text-center">
					<img src="{{config('app.url')}}images/webinar-icon.png" alt="Webinars" class="img-fluid">
					<h4 class="font-weight-bold TXT-GRAY font-16">Webinars</h4>
				</div>

			</div>
		</div>
	</section>

	<div class="container text-center mt-4">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-4 text-center">
				<img src="{{config('app.url')}}images/banner-cta-banner.jpg" alt="WHAT WHOULD FIT YOU BEST" class="img-fluid shadow">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-4 text-center">
				<h2 class="PF-TXTRED font-30 mb-3">Our Clients</h2>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="{{config('app.url')}}images/catalent-logo.jpg" alt="Catalent" class="img-fluid border">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="{{config('app.url')}}images/thermo-fisher-logo.jpg" alt="Thermo Fisher Scientific" class="img-fluid border">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="{{config('app.url')}}images/eppendorf-logo.jpg" alt="Eppendorf" class="img-fluid border">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="{{config('app.url')}}images/bosch-logo.jpg" alt="BOSCH" class="img-fluid border">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="{{config('app.url')}}images/parexel-logo.jpg" alt="Parexel" class="img-fluid border">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="{{config('app.url')}}images/lonza-logo.jpg" alt="Lonza" class="img-fluid border">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="{{config('app.url')}}images/pall-logo.jpg" alt="Pall Laboratories" class="img-fluid border">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="{{config('app.url')}}images/ge-healthcare.jpg" alt="GE Healthcare Life Sceinces" class="img-fluid border">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="{{config('app.url')}}images/turkish-cargo-logo.jpg" alt="Turkish Cargo" class="img-fluid border">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="{{config('app.url')}}images/emirates-sky-cargo-logo.jpg" alt="Emirates Sky Cargo" class="img-fluid border">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="{{config('app.url')}}images/perkin-elmer-logo.jpg" alt="Perkin Elmer" class="img-fluid border">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="{{config('app.url')}}images/syneos-health-logo.jpg" alt="Syneos Health" class="img-fluid border">
			</div>

		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-12">	          		
					<p><i class="fa fa-globe mr-1" aria-hidden="true"></i> www.pharmafocusasia.com</p>
				</div>

				<div class="col-md-5 col-sm-12 col-12 text-center">	          		
					<p><i class="fa fa-envelope mr-1" aria-hidden="true"></i> advertise@pharmafocusasia.com</p>
				</div>

				<div class="col-md-3 col-sm-12 col-12 pb-2 text-right social-icons"> 
					<a href="https://www.linkedin.com/company/pharmafocusasia-magazine" target="_blank">
						<i class="fa fa-linkedin"></i>
					</a>
					<a href="https://twitter.com/pharmafocusasia" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="https://www.facebook.com/PharmaFocusAsia" target="_blank">
						<i class="fa fa-facebook"></i>
					</a>
				</div>
			</div>   
		</div>
	</footer>


		<!-- <footer>
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-12">	          		
						<p>&copy; Ochre Media Pvt Ltd., <?php //echo date("Y"); ?>. All rights reserved.</p>
					</div>

					<div class="col-md-5 col-12 pb-2">
						<div class="ft-right">  
							<a href="https://www.linkedin.com/company/pharmafocusasia-magazine" target="_blank">
								<i class="fa fa-linkedin"></i>
							</a>
							<a href="https://twitter.com/pharmafocusasia" target="_blank">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="https://www.facebook.com/PharmaFocusAsia" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
						</div>
					</div>
				</div>   
			</div>
		</footer> -->

	<!-- main container --> 

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->


		
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title TXT-GREEN">Registration successful...</h2>
				</div>
				<div class="modal-body">
					<p>You have successfully submitted Media Pack download request. A direct link to your Media Pack download would be sent to your registered email.If you face any technical difficulties while downloading the Media Pack or if the email has not arrived into your inbox, please let us know at advertise@pharmafocusasia.com</p>
					<br>
					<p>One of our Subject Matter Expert (SME) will get in touch with you in the next 48 hours.</p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					PFA
				</div>
				<div class="modal-footer">				
					<a class="btn btn-primary" role="button" id="aa" name="aa"  href="{{url('cmp-mediapack')}}" aria-expanded="false">
						Close
					</a>					
				</div>
			</div>
		</div>
	</div> 
	 
@if(Session('status') == 'true') 
  <a id="filedownload" download style="display: none" href="{{ trans('messages.mediapack_download_path') }}">Download</a>

  @endif 

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

	<!-- <script type="text/javascript">
		@if(session('thank_message'))	
		$('#myModal').modal('show');
  	// for (let link of document.querySelectorAll('a[download]'))
  	// 	link.click();

  	@endif	  	
  </script> -->

   @if(Session('status') == 'true') 
    <script type="text/javascript">   
    	$('#myModal').modal('show');
      for (let link of document.querySelectorAll('a[download]'))
        link.click();
    </script>
  @endif 


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

