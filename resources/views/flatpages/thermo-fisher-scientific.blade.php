<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="language" content="english" />
	<title>Thermo Fisher Scientific </title>
	<meta name="viewport" content="width=device-width" />
	<meta name="robots" content="noindex" />
	<link rel="shortcut icon" href="{{ config('app.url') }}images/favicon.ico" type="image/x-icon">
	<meta name="title" content="Thermo fisher scientific" />
	<meta name="description" content=" we’ve leveraged our end-to-end workflow strategies to provide a highly flexible, standard, single-use offering in the form of a modular library of products: the monoclonal antibody (mAb) Process Playbook." />
	<meta name="keywords" content="" />
	<meta property="og:title" content="Thermo Fisher Scientific" />
	<meta property="og:description" content=" we’ve leveraged our end-to-end workflow strategies to provide a highly flexible, standard, single-use offering in the form of a modular library of products: the monoclonal antibody (mAb) Process Playbook." />
	<meta property="og:Keywords" content="" />
	<meta property="og:image" content="{{ config('app.url') }}images/thermo-fisher-banner-og.jpg" />
	<link rel="canonical" href="{{URL::current('thermo-fisher-scientific')}}" />
	<link href="{{ config('app.url') }}mix/app.css" rel="stylesheet" type="text/css" />
	<link href="{{ config('app.url') }}css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<script src="https://industry.pharmafocusasia.com/js/jquery-2.1.3.min.js"></script>

	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.14/js/bootstrap-multiselect.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.14/css/bootstrap-multiselect.css" type="text/css"/>

	<style type="text/css">
		/*ul li, p{font-size: 15px;}*/
		/*.modal{background: rgba(0, 0, 0, 0.7); }
		.modal-dialog{ top: 0 !important; }*/
		body {
			font-family: 'Lato', sans-serif;
			
		}

		.form-bg {
			background: rgb(50, 139, 215);
			background: -moz-linear-gradient(180deg, rgba(50, 139, 215, 1) 0%, rgba(11, 61, 103, 1) 81%);
			background: -webkit-linear-gradient(180deg, rgba(50, 139, 215, 1) 0%, rgba(11, 61, 103, 1) 81%);
			background: linear-gradient(180deg, rgba(50, 139, 215, 1) 0%, rgba(11, 61, 103, 1) 81%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#328bd7", endColorstr="#0b3d67", GradientType=1);
		}

		.trans-bg {
			background-color: rgba(65, 169, 184, 0.9);
		}

		.bg-dark {
			background-color: #333;
		}

		.has-error .help-block {
			text-align: left;
			color: #a94442;
			font-size: 16px;
			margin: 0;
		}

		.TXT-ORNG {
			color: #EE1D23;
		}

		.TXT-GRAY {
			color: #335160;
		}

		.TXT-BLUE {
			color: #17558a;
		}

		.BG-BLUE {
			background-color: #1B667A;
		}

		.TXT-LYT {
			color: #C7D8DD;
		}

		.BG-LYT {
			background-color: #EBF4F7;
		}

		.form-control {
			border-radius: 0px;
			height: calc(2.0rem + 2px);
			font-size: 16px;
		}

		p {
			font-size: 16px;
		}

		.form-group {
			margin-bottom: 10px;
		}

		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #EE1D23;
		}

		.btn-danger {
			background-color: #EE1D23;
		}

		.Mar-left-n {
			margin-left: -10px;
		}

		.line-height {
			line-height: 130%;
		}

		.connect li {
			list-style: none;
			padding-bottom: 5px;
			margin-left: -10px;
		}

		.connect li::before {
			content: "\f101";
			font-family: FontAwesome;
			position: absolute;
			color: #EE1D23;
			/*font-size: 16px;*/
			font-weight: normal;
			left: 20px;
		}

		.brdr-radius {
			border-radius: 0px;
		}

		.font-11 {
			font-size: 11px;
			line-height: 1.4;
		}

		.font-20 {
			font-size: 20px;
			line-height: 1.2;
		}

		.font-22 {
			font-size: 22px;
			line-height: 1.4;
		}

		.font-18 {
			font-size: 18px;
			line-height: 1.2;
		}

		.font-16 {
			font-size: 16px;
			line-height: 1.2;
		}

		.font-28 {
			font-size: 28px;
			line-height: 1.6;
		}

		.expandcheckbox-div {
			-webkit-transition: all 1s ease-in-out;
			-moz-transition: all 1s ease-in-out;
			-ms-transition: all 1s ease-in-out;
			-o-transition: all 1s ease-in-out;
			/*transition: all 1s ease-in-out;*/
			transition: visibility 0s, opacity 0.5s linear;
		}

		ul {
			list-style-type: disclosure-closed;
		}

		ul li::marker {
			color: #094277;
		}

		.multiselect-container>li>a>label {
			padding: 4px;
		}
		.btn-group{
			width: 100%;
		}
		.multiselect{
			background-color: white;
			text-align: left;
			width: 100%;
			border-radius: 0px;
			height: calc(2.0rem + 2px);
			border: 1px solid #ced4da;
		}
		.multiselect-native-select{
			width: 100%;
			padding: 0 1rem 1rem 1rem;
		}
		.multiselect-container{
			max-height:40vh;
			overflow: scroll;
		}
		.multiselect-selected-text{
			display: inline-block;
			width:100%;
			height:2rem;
			overflow: hidden;
			color: #495057;
			font-size: 14px;
			position: relative;
    		top: -2px;
		}
		.multiselect-container>li>a {
    padding: 0;
	color:#000;
}
.dropdown-menu.show {
	width:100%;
}
		/*Mobile ResponsiveCode */
		@media (min-width: 320px) and (max-width: 767px) {
			.font-28 {
				font-size: 16px !important;
			}
		}
		.TXT-Blue {
    color: #1B667A;
}

.fa-facebook {
    padding: 5px 8px;
}

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
footer i {
    color: #f04e23;
    font-size: 17px;
    border-radius: 5px;
    transition: 500ms;
    background: #f1f1f1;
    margin-right: 5px;
}

.fa-linkedin, .fa-twitter {
    padding: 5px 5px;
}
footer .ft-right a {
    float: right;
}

.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}
.border-top {
    border-top: 1px solid #dee2e6!important;
}

ul li::marker {
    color: #1B667A;
}

.custom-control{
	color:#fff;
}



.dropdown-toggle::after {
	font-family: FontAwesome;
	content: "\f078";
	position: absolute;
    right: 3.1%;
	border:none;
	font-size: 11px;
	color:#343a40;
}


	</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91608244-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-91608244-2');
	</script>

</head>

<body>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-6 align-self-center">
				<img src="{{ config('app.url') }}images/thermo-fisher-scientific-logo.jpg" alt="thermo-fisher-scientific_logo" title="thermo-fisher-scientific_logo" class="img-fluid mt-1 mb-1" >
				</div>

				<div class="col-md-3 col-6 offset-md-6 align-self-center" align="right">
				<p class="mb-0">
						<!-- <em class="mt-5"><span>Webinar Sponsored by</span></em> -->
						
						<img src="{{ config('app.url') }}images/logo.png" alt="Pharma Focus Asia" class="img-fluid pt-1 pb-1" width="200">
						
					</p>
					
				</div>
			</div>
		</div>
	</div>
	<div class="border-top mb-3 mt-2"></div>

	<div class="container shadow mb-3">
		<div class="row position-relative">
			<div style="top: 50%;" class="banner-text position-absolute container">
				<!-- <div class="row">
					<div class="col-12 col-md-7">
						<h1 style="margin:0 calc(1vh + 1vw); font-size:calc(1vw + 1rem); text-shadow: 1px 1px 9px rgba(0,0,0,0.7);" class="text-white">Genotoxic Impurities:<br> Nitrosamines LC-MS An NSF Guide</h1>
					</div>
				</div> -->

			</div>

			<img class="w-100" src="{{ config('app.url') }}images/thermo-fisher-banner-1.png" alt="bioaccord-banner" title="bioaccord-banner" class="img-fluid">
		</div>
	</div>


	<div class="container">
		<div class="row justify-content-center ">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 my-4">
				<h2 class="font-weight-bold TXT-Blue font-20 mb-3" style="line-height:1.2">Build your personalized mAb production single-use process with our latest playbook! </h2>


				<div class="row justify-content-center">
                     <div class = 'col-lg-12 col-md-8 col-sm-12 col-12 '>

					 <p class="mb-4">
					 More than ever, biomanufacturers are seeking support to quickly and efficiently produce a wide variety of therapies to meet the growing population’s needs. Striving to enable and complement your goals, we’ve leveraged our end-to-end workflow strategies to provide a highly flexible, standard, single-use offering in the form of a modular library of products: the monoclonal antibody (mAb) Process Playbook. </p>

					 <!-- <p class="mb-4">
					 Combined with our well established molecular biology expertise, the Twist oligo synthesis platform enables the fabrication of highly diverse gene mutant libraries with excellent variant representation and highly specific user-defined composition with no unwanted bias or motifs. Twist library technology enables a comprehensive interrogation of the variant sequence space.</p> -->
					 <!-- <p class="mb-4 text-center">
					 <u>Fill in the form and download the Playbook now!</u> </p> -->
					 <!-- <div class = 'col-lg-6 col-md-8 col-sm-12 col-12'>
					 <p class="mb-0">
					 Duration: 59 minutes</p>
					 <button style='border: 1px solid #0077bb;background-color: #0077bb;padding:8px;'><a href='#' style='color:#fff;font-size: 16px;'>REGISTER NOW</a></button>
					 </div> -->
					 </div>

					 
				</div>

				<div class='row justify-content-center'>
		<div class="col-12 col-md-3 " >
				<p class="shadow font-weight-bold BG-BLUE pt-2 text-white text-center font-18 py-2 px-1 rounded" style="cursor: pointer;line-height:1" data-toggle="modal" data-target="#myForm" style="cursor: pointer;">Download Now</p>
			</div>
	   </div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-12 my-4">
				<h2 class="font-weight-bold TXT-Blue mb-3 font-20"><u>Advantages of the single-use mAb Process Playbook</u></h2>
				<p> Flexibility in modular design</p>
				<ul style="padding-left: 20px; line-height: 1.6;list-style-type: disc;color:#000;font-size:16px;">
        						<li>  A library of standard products designed to optimize your supply chain by using the minimal number of manifolds to address diverse unit operation requirements.</li>
        						
        					</ul>

							<p>  Optimize your single-use supply</p>
				<ul style="padding-left: 20px; line-height: 1.6;list-style-type: disc;color:#000;font-size:16px;">
        						<li>This standard offering is backed by a global manufacturing network. A robust supply chain of reliable, off-the-shelf components means you can rest assured during operation.</li>
        						
        					</ul>

							<p> Leverage our expertise</p>
				<ul style="padding-left: 20px; line-height: 1.6;list-style-type: disc;color:#000;font-size:16px;">
        						<li>This modular library with our expertise will help reduce the labor involved in process engineering for your specific application.</li>
        						
        					</ul>
							
	</div>



	<div class="col-lg-12 col-md-12 col-sm-12 col-12 my-4">
				<h2 class="font-weight-bold TXT-Blue mb-3 font-20"><u>Key Resources</u></h2>
				<p> Explore each unit operation in the mAb Process Playbook to learn about our recommended single-use products:</p>
				<ul style="padding-left: 20px; line-height: 1.6;list-style-type: disc;color:#000;font-size:16px;">
        						<li>  Media preparation</li>
								<li>Buffer preparation</li>
								<li>Cell expansion</li>
								<li>Production</li>
								<li> Harvest</li>
								<li>Chromatography</li>
								<li>Viral inactivation</li>
								<li>Viral filtration</li>
								<li>Ultrafiltration/diafiltration (UF/DF)</li>
								<li>Bulk Fill</li>
        						
        					</ul>
							<!-- <p class="mb-4 text-center">
					 <u>
Fill in the form to download the playbook and start building your personalized mAb production single-use process!</u> </p> -->
							
	</div>


	<div class='row justify-content-center'>
		<div class="col-12 col-md-3 " >
				<p class="shadow font-weight-bold BG-BLUE pt-2 text-white text-center font-18 py-2 px-1 rounded" style="cursor: pointer;line-height:1" data-toggle="modal" data-target="#myForm" style="cursor: pointer;">Download Now</p>
			</div>
	   </div>
			
			</div>

			
		</div>

	</div>
	
	<!-- Form Popup Model Box -->
	<div id="myForm" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content BG-BLUE">
				<div class="modal-header text-center">
					<h2 class="text-white font-24 text-white font-weight-bold">Register now</h2>
					<button type="button" class="close text-white" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
            		<form action="{{route('thermoFisherScientific.post')}}" method="post" id="writemessage">
            		   @csrf   
            		   <div class="row">
            				<div class="col-md-6 mb-2"> 
            					<div class="form-group ">
            							
            						<input type="hidden" name="type" id="type" value="thermo fisher scientific single-use mAb Process Playbook">
            						<input type="hidden" name="formtype" value="modal-form">
            						<input type="hidden" name="client_subject" value="Registration For thermo fisher scientific single-use mAb Process Playbook">
            						<input type="hidden" name="admin_subject" value="Registration For thermo fisher scientific single-use mAb Process Playbook">
            						<input type="hidden" name="thank_message" value=" Thank you for showing interest in Thermo Fisher Scientific Single-use mAb Process Playbook. One of our product associates will contact you soon.">
            						<input type="hidden" name="client_message" value=" Thank you for showing interest in Thermo Fisher Scientific Single-use mAb Process Playbook. One of our product associates will contact you soon.">
            
            						<input class="form-control" id="firstname" name="firstname" placeholder="First Name *" required="" value="" type="text">
            						<span class="help-block"></span>
            					</div>
            				</div>

							<div class="col-md-6 mb-2"> 
            					<div class="form-group ">
            						<input class="form-control" id="lastname" name="lastname" placeholder="Last Name *" required="" value="" type="text">
            						<span class="help-block"></span>
            					</div>
            				</div>

							<div class="col-md-12 mb-2">
            					<div class="form-group ">
            						<input type="text" class="form-control" id="company" name="company" placeholder="Company/Institute/University *" value="" required="">
            						<span class="help-block"></span> 
            					</div>
            				</div>

							<div class="col-md-12 mb-2">
            					<div class="form-group ">
            						<input type="text" class="form-control" id="jobtitle" name="job_title" placeholder="Role/position  *" value="" required="">
            						<span class="help-block"></span> 
            					</div>
            				</div>
                            
                            <div class="col-md-12 mb-2">
                				<div class="form-group ">
                				<input class="form-control" id="email" name="email" placeholder=" Email Address *" required="" value="" type="email">
                				<span class="help-block"></span>
                				</div>
            				</div>
            				
            				
            				
            			
            				
            				
            
            				<div class="col-md-12 mb-2">
            					<div class="form-group ">
            						<input class="form-control" id="phone" name="phone" placeholder="Phone number *" required="" value="" type="text">
            
            						<span class="help-block"></span> 
            					</div>
            				</div>


							<div class="col-md-12 mb-2">
                            <div class="form-group {{ $errors->first('country', 'has-error')}}">
							<select class="form-control" placeholder="Select Country*" name="country" required value="{{ old('country') }}">
								<option value="">Select Country*</option>
								@foreach($countries as $country)
								<option value="{{$country->country_name}}">{{$country->country_name}}</option>
								@endforeach
							</select>
							<span class="help-block">{{ $errors->first('country', ':message') }}</span>
						</div>
						</div>

						
							<label class="px-3 m-0 text-white" for="research-area1">Please select your area of work</label>
		                  	<select class="form-group col-12 " id="research-area1" name="working[]" multiple="multiple" required>
								<option value="Upstream bioprocessing">Upstream bioprocessing</option>
								<option value="Downstream bioprocessing">Downstream bioprocessing</option>
								<option value="Quality Control and Quality Assurance">Quality Control and Quality Assurance</option>
								<option value="Process development">Process development</option>
								<option value="Research and development">Research and development</option>
								<option value="Procurement and supply chain management">Procurement and supply chain management</option>
								<option value="Other">Other …………………………..</option>
								
							</select>


							<label class="px-3 m-0 text-white" for="research-area2">What is your focus biologics/products?</label>
		                  	<select class="form-group col-12 " id="research-area2" name="products_interest[]" multiple="multiple" required>
								<option value="Recombinant proteins">Recombinant proteins</option>
								<option value="Monoclonal antibodies, biosimilars, or biobetters">Monoclonal antibodies, biosimilars, or biobetters</option>
								<option value="Plasma proteins">Plasma proteins</option>
								<option value="Human vaccines">Human vaccines</option>
								<option value="Veterinary vaccines">Veterinary vaccines</option>
								<option value="DNA/RNA">DNA/RNA</option>
								<option value="Virus">Virus</option>
								<option value="Cell and gene therapy">Cell and gene therapy</option>
								<option value="QC/QA">QC/QA</option>
								<option value="Culture meats and alternative foods">Culture meats and alternative foods</option>
								<option value="Other">Other …………………………………...</option>
								
							</select>


							<label class="px-3 m-0 text-white" for="research-area3">Please select all product of interest</label>
		                  	<select class="form-group col-12 " id="research-area3" name="areas_of_interest[]" multiple="multiple" required>
								<option value="Single-Use bioreactors/fermenter">Single-Use bioreactors/fermenter</option>
								<option value="Single-Use mixers">Single-Use mixers</option>
								<option value="Bioprocess containers (BPCs)">Bioprocess containers (BPCs)</option>
								<option value="Large scale adherent cell culture solution">Large scale adherent cell culture solution</option>
								<option value="Cell culture media">Cell culture media</option>
								<option value="Downstream purification resins">Downstream purification resins</option>
								<option value="Single-Use chromatography system">Single-Use chromatography system</option>
								<option value="Pharma analytics solutions">Pharma analytics solutions</option>
								<option value="cGMP grade production chemicals and services">cGMP grade production chemicals and services</option>
								<option value="Cell and gene therapy solutions">Cell and gene therapy solutions</option>
								<option value="Other">None of the above</option>
								
							</select>

							   


            		  


						<div class="col-md-12 mb-2">
		
			<p class='text-white'>I’m interested to receive information about innovations in mAb manufacturing from Thermo Fisher Scientific by  </p>
            
			
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="intrested" value="Contact from sales representative" id="product-interest-30">

				<label class="custom-control-label small" for="product-interest-30">Contact from sales representative </label>
			</div>

            <div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="intrested" value="Get a product quote" id="product-interest-31">

				<label class="custom-control-label small" for="product-interest-31">Get a product quote </label>
			</div>

            <div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="intrested" value="Attend a product demonstration" id="product-interest-32">

				<label class="custom-control-label small" for="product-interest-32">  Attend a product demonstration </label>
			</div>

            
			<div class="error text-danger verifi"></div>
			
			
			
			
		</div>
            		   


						<div class="col-md-12 mb-2">
			<div class="form-group text-white ">
            <label for="exampleFormControlTextarea1">Any Additional Comments (optional):</label>
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="2" name="message"></textarea>
				<span class="help-block"></span>   
			</div>
		</div>
            		            
            			<div class="col-md-12 pt-2">
            				<div class="form-group text-center mb-3">
            					<button type="submit" value="submit" class="btn btn-sm btn-block btn-danger" id="checkBtn">Submit</button>
            				</div>
            			</div>
            			<div class="custom-control custom-checkbox mb-1 ml-3">
				<input type="checkbox" class="custom-control-input" name="declaration" value="" id="Yes">

				<label class="custom-control-label small" for="product-interest-33">  I wish to receive communication via telephone, email, or other electronic means on Thermo Fisher Scientific goods and services.</label>
			</div>

			</div>
            		</form>
				</div>
			</div>
		</div>
	</div> 



	<footer style='    background-color: #002232 !important;
    color: #ccc;
    padding: 15px 10px 0 10px;
'>
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-12">	          		
					<p>© Ochre Media Pvt Ltd., 2022. All rights reserved.</p>
				</div>

				<div class="col-md-5 col-12 pb-2">	   
					<!-- // FOOTER-SOCIAL MEDIA -->
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
					<!-- FOOTER-SOCIAL MEDIA // --> 
				</div>
			</div>   
		</div>
	</footer>


	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-blue">Registration was successful..!.</h4>
				</div>
				<div class="modal-body">
					<p>{{session('thank_message')}}</p>
					<br>
					<!--<a href="http://promotions.pharmafocusasia.com/public/pdf/Interactive-Brochure-mAbs-Process-Playbook-December-2021.pdf" download></a>-->
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Pharma Focus Asia
				</div>
				<div class="modal-footer">
					<a class="btn btn-seconadry" role="button" id="aa" name="aa" href="{{url('promotion/thermo-fisher-scientific')}}" aria-expanded="false">
						Close
					</a>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://promotions.pharmafocusasia.com/public/styles/js/bootstrap-4.min.js"></script> 
	
	<script>
	$(document).ready(function () {
    $('#checkBtn').click(function() {
    	var form = $('#writemessage');
        checked = $("input[name=intrested]:checked").length;
	      if(checked==0) {
	      	form.find('.verifi').html("You must check at least one checkbox.");
	        return false;
	      }else{
	      	form.find('.verifi').html("");
	      	return true;
	      }
    });
});
</script>

	<script type="text/javascript">
		@if(Session('thank_message'))
		$('#myModal').modal('show');
// 		for (let link of document.querySelectorAll('a[download]'))
// 	    link.click();
		@endif
	</script>
	<script type="text/javascript">
    $(document).ready(function() {
        $('#research-area1').multiselect();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#industry1').multiselect();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#research-area2').multiselect();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#industry2').multiselect();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#research-area3').multiselect();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#industry3').multiselect();
    });
</script>


</body>

</html>