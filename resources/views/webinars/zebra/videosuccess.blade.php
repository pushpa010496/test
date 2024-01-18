<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<title>Clinical Mobility and Point of Care Technology Innovation | Zebra Healthcare Webinar</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="language" content="english" /> 

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-91608244-1', 'auto');
		ga('send', 'pageview');
	</script>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<meta property="og:url" content="{{url('zebra-healthcare-webinar')}}" />

	<meta property="og:image" content="{{config('app.url')}}/webinars/zebra/zebra-webinar-banner.jpg" />

	<meta property="og:site_name" content="Asianhhm" />

	<meta name="robots" content="index, follow" />

	<meta name="revisit-after" content="1 days" />

	<meta name="google-site-verification" content="vrUJfBkdzevt8C6ksHdL2TvxH9GGWWUoG9CdvL7MPU0" />

	<link rel="shortcut icon" href="{{ config('app.url') }}/images/favicon.ico" type="image/x-icon">

	<link rel="canonical" href="{{url('zebra-healthcare-webinar')}}" />

	<link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css"> 
	<link rel="stylesheet" href="{{ config('app.url') }}css/custom-styles.css">
	<!-- <link rel="stylesheet" href="{{ config('app.url') }}css/latest-styles.css">   -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 

	<!--AS per Basco& sudhakar Canonical -->


<style type="text/css">
	body{
		background-color: #ccc;
	}
</style>
</head>

<body> 
<div class="container-fluid">  
    <!-- // Main Container -->      
    <div class="container">
      <div class="row">
      <div class="col-md-8 offset-md-2 mt-4">
            <video width="100%" controls autoplay>
              <source src="{{config('app.url')}}webinars/zebra/zebra-webinar.mp4" type="video/mp4">
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

