@extends('../layouts/app')
@section('style')
  <link rel="stylesheet" href="{{ config('app.url') }}css/advertise.css">
<style type="text/css">
	.advert-bg{
		background-image: url("{{config('app.url')}}images/advertising/advertise-bg.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		padding-right:0px;
	}
	#wrap {
		/* fixed width, centered in viewport */
		width:90%;
		left: -490px;
		margin-left:0%;
		position: relative;
	}
	.bullet ul > li{list-style: none !important;}
	.font-21{font-size: 21px;line-height: 120%;}
	.font-18{font-size: 18px;line-height: 120%;}
	.PF-TXTBLU{color: #3c598a;}
	.bullet ul > li{list-style: none !important;}
	.has-error .help-block{
		color: #fff;
	}
	.hover-img{
		padding: 10px;
		margin-right: 10px;
		transition: all .4s ease-in-out;
		    transform: scale(.9) rotate(-11deg) translateY(-19px);
	}
	.hover-img:hover{
		transition: all .4s ease-in-out;
		    transform: scale(1) rotate(0deg) translateY(-30px);
	}
	.form-control {
		height: calc(2rem + 2px);
		font-size: 14px;
	}
	.font-13 {font-size: 13px !important; line-height: 1.2}
	.form-group {
		margin-bottom: 14px;
	}
</style>
<style type="text/css">
  .grecaptcha-badge { 
    bottom: 100px !important;
  }
  .rc-anchor-normal{
    background: #000 !important;
    color: #000 !important; 
  }
</style>
<script src="https://www.google.com/recaptcha/api.js?render=6LepWukgAAAAAAiXZhUUZrCZB0g4gsjP5_cCb1gu"></script>
<script> 
    grecaptcha.ready(function() {
      grecaptcha.execute('6LepWukgAAAAAAiXZhUUZrCZB0g4gsjP5_cCb1gu', {action: 'submit'}).then(function(token) {
        document.getElementById("g-recaptcha-response").value=token
      });
    });
</script>

@endsection

@section('content')

<div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title text-blue"> Thank You...</h2>
                    </div>
                    <div class="modal-body">
					<h2 class="text-blue">Your Advertising Query was successfully submitted</h2>
                        <p class="text-blue">Thank you for your interest in EuropeanHHM Advertising. Our team extends its gratitude for your interest. </p>
                        <p  class="text-blue">We look forward to approaching you soon. In the interim, please feel free to explore EuropeanHHM by subscribing to our e-book and e-Newsletter. </p>
						<p  class="text-blue"><b>We have sent a direct download link to your registered email-id.</b></p>
						<br>
                       
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" role="button" id="aa" name="aa" href="{{url('advertise')}}"
                            aria-expanded="false">
                            Close
                        </a>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid"> 
	<div class="bullet">
		<div class="container-fluid mob-MR0"> 

			<!-- // Main Container -->
			<div class="container advert">
				<div class="col-lg-12">
					<div class="row PF-BrdrBEEE mb-4 mt-3">
						<h1 class="float-left PF-Bshelf text-uppercase">advertise</h1>
					</div>
				</div>

				<div class="row">
					<!-- // col-9 -->
					<div class="col-lg-8 col-md-8 col-sm-12 col-12 pl-o mob-MR0">
						<div class="col-12 advert-bg min-hyt-580">
							<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-6 col-12 pt-3">
									<h2 class="pt-3">Are you reaching the right audience with your advertising?</h2>
									<p class="text-left pt-2">Advertise in EHHM magazine, an internationally acclaimed publication that reaches key decision makers at carefully selected hospitals, medical laboratories, and healthcare companies around the world. This marketplace is designed for targeted reach and higher returns on ad spend.</p>
									<p class="text-left pt-2">EHHM magazine, written by doctors and hospital managers, is a valuable resource for those who want to stay up-to-date on the latest trends in the healthcare industry.</p>

									<ul class="px-2 font-16 pb-3">
										<li><h2>Our Services</h2></li>
										<li class="text-white mb-2">
											<img src="{{config('app.url')}}/images/advertising/hand-icon.png" alt="Hand icon" width="20" class="mr-2" /> Magazine Advertisement
										</li>
										<li class="text-white mb-2">
											<img src="{{config('app.url')}}/images/advertising/hand-icon.png" alt="Hand icon" width="20" class="mr-2" /> Banner Advertisements
										</li>
										<li class="text-white mb-2">
											<img src="{{config('app.url')}}/images/advertising/hand-icon.png" alt="Hand icon" width="20" class="mr-2" /> e-Mail Direct Marketing
										</li>
									</ul>
									<div class="pb-3"></div>
								</div>

								<div class="col-lg-7 col-md-7 col-sm-6 col-12 align-self-end">
									<img src="{{config('app.url')}}images/advertising/advertise-user.png" alt="" class="img-fluid banner-wrap-img" style="vertical-align: bottom;" />           
								</div>
							</div>
						</div>  
					</div>
					<!-- col-9 // -->

					<!-- // col-3 - Right -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-12 magz-bg pt-2 pb-2 min-hyt-580">  
						<div class="advert">
							<h2 class="text-left pt-2 font-21 mb-1">Have a query or want to know more?</h2>
							<p class="text-left font-13">Please fill in the below form and download our Mediapack.</p>
						</div>    
						<div class="form_error">
						</div>         
						<!--<form name="advertise_form" class="email" id="writemessage" method="post" accept-charset="utf-8">-->
						<form action="{{route('advertise.post')}}" class="email" id="writemessage" method="post" accept-charset="utf-8">
							@csrf
							  <input type="hidden" name="" class="action_url" value="{{route('advertise.post')}}">
                        	<input type="hidden" name="name" value="pharmafocusasia-advertise">
							<div class="form-group col-12  {{ $errors->first('firstname', 'has-error')}}">
								<input type="text" class="form-control" id="name" name="firstname" placeholder="First Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets" value="{{old('firstname')}}" required>
								<input type="hidden" value="advertise" name="type" id="type" />
								<span class="help-block">{{ $errors->first('firstname', ':message') }}</span>   
							</div>

							<div class="form-group col-12  {{ $errors->first('lastname', 'has-error')}}">
								<input type="text" class="form-control" id="name" name="lastname" placeholder="Last Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets" value="{{old('lastname')}}" required>
								<span class="help-block">{{ $errors->first('lastname', ':message') }}</span>   
							</div>

							<div class="form-group col-lg-12  {{ $errors->first('cf_leads_jobtitle', 'has-error')}}">
		                        <input type="text" class="form-control" value="{{old('cf_leads_jobtitle')}}" name="cf_leads_jobtitle" placeholder="Job Title*" pattern="[A-Za-z0-9\s]{2,50}" required="">
		                          <span class="help-block">{{ $errors->first('cf_leads_jobtitle', ':message') }}</span>  
                      		</div>

                      		<div class="form-group col-12  {{ $errors->first('company', 'has-error')}}">
								<input type="text" class="form-control" id="company" name="company" value="{{old('company')}}" placeholder="Company*" pattern="[A-Za-z0-9\s]{2,50}" required>      
								<span class="help-block">{{ $errors->first('company', ':message') }}</span>         
							</div>

							<div class="form-group col-12  {{ $errors->first('email', 'has-error')}}">
								<input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Business Email*" required>
								<span class="help-block">{{ $errors->first('email', ':message') }}</span>   
							</div>

							<div class="form-group col-12  {{ $errors->first('mobile', 'has-error')}}">
								<input type="tel" class="form-control" id="subject" name="mobile" value="{{old('mobile')}}" pattern="[0-9\s._*#()+-]+" minlength="8" placeholder="Telephone*" required>       
								<span class="help-block">{{ $errors->first('mobile', ':message') }}</span>        
							</div>
							
							<div class="form-group col-12  {{ $errors->first('whom', 'has-error')}}">  
								<select class="form-control custom-select" name="whom" required="required">
									<option selected disabled>How did you hear about us?*</option>
									<option value="Internet Search">Internet Search</option>
									<option value="Social Media">Social Media</option>
									<option value="Email">Email</option>
									<option value="Other">Other</option>
								</select>        
							</div>
							
							<div class="form-group col-12  {{ $errors->first('description', 'has-error')}}">
								<textarea class="form-control" type="textarea" id="message" name="description" value="{{old('description')}}" placeholder="Message" rows="2"></textarea>
								<span class="help-block">{{ $errors->first('description', ':message') }}</span>   
							</div>

							<input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">

							<div class="form-group col-12">
								<!--<input type="submit" class="btn btn-block btn-info" id="submit-button" value="SUBMIT" onclick="return checkform();"><div class="clearfix"></div>-->
								<input type="submit" class="btn btn-block btn-info" id="submit-button" value="SUBMIT" ><div class="clearfix"></div>
							</div>
							<div class="form-group col-12">
								<p class="text-left mb-0 font-13">OR write to us at</p>
								<p class="text-left mb-0">	
									<a href="{{trans('messages.advertise_mail_to')}}" class="text-white font-weight-bold">{{trans('messages.advertise_email')}}</a>
								</p>
								<!-- <p>Call to us: <a href="tel:+914049614567" title="For Enquiries" class="text-white"> +91 40 49614567</a>
								</p> -->
							</div>
							<div class="clearfix"></div>
						</form>
					</div>
					<!-- col-3 // -->
				</div>  
			</div>
			<!-- Main Container // -->

			<!-- // Visits Container -->
			<div class="container" align="center">
				<div class="col-12 pt-4 adv-visit">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 col-12 pt-2 pb-2" align="center">
							<div class="row">
								<div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
								<div class="col-lg-3 col-md-3 col-sm-5 col-6">
									<i class="fa fa-globe fa-cust" aria-hidden="true"></i>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7 col-6 pt-3 pb-3" align="center">
									<p class="font-18 text-center mb-3">
									100% Focus on <br>
									the European <br>
									Healthcare Market</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6 col-12 pt-2 pb-2" align="center">
							<div class="row">
								<div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
								<div class="col-lg-3 col-md-3 col-sm-5 col-6">
									<i class="fa fa-hospital-o fa-cust" aria-hidden="true"></i>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7 col-6 pt-3 pb-3" align="center">
									<p class="font-18 text-center mb-3">
									100% Granular reach  <br>
									in the European<br>
									Healthcare professional pool
									</p>
								</div>  
							</div>
						</div>   

						<div class="col-lg-4 col-md-6 col-sm-6 col-12 pt-2 pb-2" align="center">
							<div class="row">
								<div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
								<div class="col-lg-3 col-md-3 col-sm-5 col-6">
									<i class="fa fa-users fa-cust" aria-hidden="true"></i>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7 col-6 pt-3 pb-3" align="center">
									<p class="font-18 text-center mb-3">
									100% ROI    <br>
									Guaranteed<br>
									Programs
									</p>
								</div>  
							</div> 
						</div> 
					</div>
				</div>
			</div>  
			<!-- Visits Container // -->

			<!-- Magazines-Container // -->
			<div class="container" align="center">
				<div class="col-12 magz-bg pb-1">
					<h3 class="font-21 pb-0 pt-2 font-weight-bold">
						<a  target="_blank" class="text-white">Our Healthcare & Pharmaceutical Publications</a>
					</h3>
					
					<div class="mt-3"> 
						<tr>
							<td><a href="{{url('https://www.pharmafocuseurope.com')}}" target="_blank">
								<img class=" " src="{{ config('app.url')}}/ebooks/pharma_europe.png" alt="" width="300" height="223"  />
							</a></td>
							<td>
							<a href="{{url('https://www.pharmafocusamerica.com')}}" target="_blank">
								<img class=" " src="{{ config('app.url')}}/ebooks/pharma_america.png" alt="" width="300" height="223"  />
							</a>
							</td>
							<a href="{{url('https://www.pharmafocusasia.com')}}" target="_blank">
								<img class=" " src="{{ config('app.url')}}/ebooks/pharma_asia.png" alt="" width="300" height="223"  />
							</a>
							<td>
							</td>
				</tr>     
					</div>    
					<div class="mt-3"> 
					<tr>
							<td ><a  target="_blank">
								<img class=" " src="{{ config('app.url')}}/ebooks/europe_hhm.png" alt="" width="300" height="223"  />
							</a></td>
							<td>
							<a href="{{url('https://www.americanhhm.com')}}" target="_blank">
								<img class=" " src="{{ config('app.url')}}/ebooks/american_hhm.png" alt="" width="300" height="223"  />
							</a>
							</td>
							<a href="{{url('https://www.asianhhm.com')}}" target="_blank">
								<img class=" " src="{{ config('app.url')}}/ebooks/asian_hhm.png" alt="" width="300" height="223"  />
							</a>
							<td>
							</td>
				</tr>  
					</div>    
				

        
				</div>
			</div>   

	       	<!-- // Clients-Container -->
			 <!--  <div class="container" align="center">
		       	<div class="col-12 pt-4">
		       		<h2 class="font-21 PF-TXTRED mt-0 pt-2 pb-2">Our Clients</h2>
		       		<div class="row">
		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">
		       				<img src="{{config('app.url')}}/advertising/csc-logo.png" alt="csc" class="img-fluid pl-4 pr-4" />
		       			</div>
		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">
		       				<img src="{{config('app.url')}}/advertising/perkinelmer-logo.png" alt="perkinelmer" class="img-fluid" />
		       			</div>
		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">
		       				<img src="{{config('app.url')}}/advertising/zebra-logo.png" alt="zebra" class="img-fluid" />
		       			</div>
		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">
		       				<img src="{{config('app.url')}}/advertising/orion-health-logo.png" alt="Orion Health" class="img-fluid" />
		       			</div>
		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">
		       				<img src="{{config('app.url')}}/advertising/abbott-logo.png" alt="abbott" class="img-fluid" />
		       			</div>
		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">
		       				<img src="{{config('app.url')}}/advertising/siemens-logo.jpg" alt="siemens" class="img-fluid" />
		       			</div>
		       		
		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">
		       				<img src="{{config('app.url')}}/advertising/roche-logo.jpg" alt="roche" class="img-fluid pl-4 pr-4" />
		       			</div>
		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">
		       				<img src="{{config('app.url')}}/advertising/ge-healthcare-logo.jpg" alt="GE Healthcare" class="img-fluid" />
		       			</div>
		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">
		       				<img src="{{config('app.url')}}/advertising/philips-logo.jpg" alt="philips" class="img-fluid" />
		       			</div>
		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">
		       				<img src="{{config('app.url')}}/advertising/microsoft-logo.jpg" alt="microsoft" class="img-fluid" />
		       			</div>
		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">
		       				<img src="{{config('app.url')}}/advertising/napier-logo.jpg" alt="napier" class="img-fluid" />
		       			</div>
		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4 align-items-center" valign="middle" align="center">
		       				<a href="{{url('clients')}}" target="_blank" class="text-primary">
		       					<h6 class="pt-2 pb-2 mb-2 font-21 font-weight-bold">More...</h6>
		       				</a>
		       			</div>
		       		</div>
		   		</div>
	   		</div> -->
	   		<!-- Clients-Container // -->

    	</div>
   	</div>
</div>
<div id="alertModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title text-danger">Error</h5>
      <button type="button" class="close" data-dismiss="modal">&times;</button>

    </div>
    <div class="modal-body">
      <p class="">Please fill the all required fields....!!</p>


    </div>
    <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

   </div>
 </div>
</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
      var url = "{{ route('advertise.post') }}";
		function OnButton1(){
		    setTimeout(function(){
		      document.advertise_form.action = url;
		      document.advertise_form.submit();
		        },200);
		  }
    
      function checkform() {      
       var flag = true;
       var form = $('#writemessage');
       $("#writemessage input").each(function(){
        if($(this)[0].hasAttribute("required")){

          if($(this)[0].value == ""){
            $('#alertModal').modal('show');                 
            
            flag = false;
          }
        }
      });
       if (!flag) { return false; }
         OnButton1();
     }
  </script> 

<script type="text/javascript">
       @if(Session('status') == 'true') 
        $('#myModal').modal('show');
        @endif</script>
@endsection