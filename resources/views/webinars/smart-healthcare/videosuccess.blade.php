<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Smart Healthcare: The right way, in the right place at the right time</title>

	<link rel="shortcut icon" href="{{ config('app.url') }}/images/favicon.ico" type="image/x-icon">

	<!-- Meta Tags -->
	<meta property="og:title" content="Data-driven Healthcare: The right way, in the right place at the right time" />
	<meta name="description" content="Consumers in healthcare are often forced to make healthcare decisions in an information vacuum. The information asymmetry in healthcare between patients and medical practitioners often translates to undue stress on patients, increased healthcare costs, and increased treatment complication and readmission rates." />

	<meta name="keywords" content="" />

	<meta property="og:description" content="Consumers in healthcare are often forced to make healthcare decisions in an information vacuum. The information asymmetry in healthcare between patients and medical practitioners often translates to undue stress on patients, increased healthcare costs, and increased treatment complication and readmission rates." />
	<meta property="og:Keywords" content="" />

	<meta property="og:image" content="{{config('app.url')}}webinars/doc-doc/doc-doc-data-driven-healthcare-og.jpg" />

	<link rel="canonical" href="{{url('data-driven-healthcare-the-right-way-in-the-right-place-at-the-right-time')}}"/>

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="{{url('data-driven-healthcare-the-right-way-in-the-right-place-at-the-right-time')}}" />

	
	<meta property="og:site_name" content="Asian HHM" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<meta name="robots" content="index, follow" />

	<meta name="revisit-after" content="1 days" />

	<meta name="google-site-verification" content="vrUJfBkdzevt8C6ksHdL2TvxH9GGWWUoG9CdvL7MPU0" />

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

	<!--AS per Basco& sudhakar Canonical -->


<style type="text/css">
	body{
		background-color: #ccc;
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
</head>

<body> 
<div class="container-fluid">  
    <!-- // Main Container -->      
    <div class="container">
      <div class="row">
      <div class="col-md-8 offset-md-2 mt-4">
          <video width="100%" controls autoplay>
              <source src="{{config('app.url')}}webinars/smart-healthcare/smart-healthcare.mp4" type="video/mp4">
            </video>
      </div>
    </div> 
  </div>
</div>

	<script src="{{ config('app.url') }}js/jquery-3.3.1.js"></script>
	<script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
	<script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>


	@if(Session('thank_message')) 
	<script type="text/javascript">	  	
		$('#successModal').modal('show');
	</script>

	@endif  
	@if($errors->any())
	<script type="text/javascript">	  	
		@if(old('formtype') == 'modal-form')	
			$(document).ready(function(){ 
				$('#videoFormModal').modal('show'); 
			});   		
		@endif  
	</script>
	@endif  



</body>

</html>

