@extends('../layouts/app')
@section('style')
<!-- <link rel="stylesheet" href="{{ config('app.url') }}css/form-design.css"> -->
<style>
	label{padding-bottom: 0px;margin-bottom: 0px;}

	/*select{background-color: #f3f3f3 !important;}*/
	.form-area .form-control:focus {
		border-color: #f04e23 !important;
		outline: 1;
		transition: all ease-in .5s;
	}
	#input_company_other .form-control, #input_job_other .form-control ,#input_hod .form-control{
		border-color: #e29c8a;
	}

	.form-custom .form-control:focus {
		border-color: #66afe9;
		outline: 0;
		border-bottom: 1px dashed #F04E23 !important;
      /*-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
      box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);*/
      box-shadow:none;
  }
  .custom-control-label::before{background-color: }

  .custom-control-label1 {
  	position: relative;
  	margin-bottom: 0;
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
                        <h2 style="color: blue;">Your Magazine Subscription was Successful</h2>
						<p style="color: blue;">Thank you for subscribing AmericanHHM  Magazine. Our team extends its gratitude for your interest in PharmaFocusAmerica Magazine.</p>
						<p style="color: blue;">We look forward to approaching you soon with the details to your access of the magazine.</p>
                        <p style="color: blue;">A world of Medical insights and industrial acumen awaits you!</p>
						<br>
                       
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" role="button" id="aa" name="aa" href="{{url('https://www.americanhhm.com/subscribe')}}"
                            aria-expanded="false">
                            Close
                        </a>
                    </div>
                </div>
            </div>
        </div>
<div class="container">
	<div class="border mt-4 mb-4 p-4">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">	
			<div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">Contribute article and get published</h1>            
                </div>
                <p>Grab the opportunity to challenge our readers with your thoughts and industry insights. Writing to
be published with us is both highly rewarding and warrants efforts too. Our editorial framework is
designed to help you dig deeper into your ideas and thoughts, and articulate them in the best
possible manner.</p>
<p>We aspire to present the best industry content to our readers and with that non-compromising
virtue, we encourage and invite all who could contribute and add value to our magazine. Some of
the obvious benefits that are associated with being a contributor are –</p>

<ul>
    <li>Visibility across the American &amp; European industry majors (corporate/academic)</li>
    <li>Networking opportunity with industry experts.</li>
    <li>Opportunity to be an influencer.</li>
    <li>Discounted entry fee in industry events/seminars.</li>
    <li>Opportunity to be invited as a premium speaker, and panellist in the seminars globally.</li>
    <li>Opportunity to have a say in shaping our future course of publications.</li>
</ul>

				
								
			</div>

		
		</div>




			<!-- // E-book -->	
			<div class='row justify-content-center '>
			<div class="col-lg-6 col-md-6 col-sm-6 col-12 ebook align-self-center border mb-3 ">
			<div class="ebook ">
				<h2 class="font-weight-bold font-18 PF-TXTRED pt-3 text-center mb-3">Register & Sign-Up to Contribute</h2>
				<form action="#" method="Post" enctype="multipart/form-data">	<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						
								<div class="form-group form-custom">
						      <div class='form-row'>
							<div class="col-md-3 align-self-center pr-0">
								<label for="name"><strong>First Name* :</strong></label>	    				
							</div>
								<div class="col-md-9 mb-2 pl-0">
								<input type="text" class="form-control" name="firstname" id="fname" placeholder="" required>    				
							</div>
</div>
							
						
					</div>
					
							<div class="form-group form-custom">
						      <div class='form-row'>
							<div class="col-md-3 align-self-center pr-0">
								<label for="name"><strong>Last Name* :</strong></label>	    				
							</div>
						<div class="col-md-9 mb-2 pl-0">
								<input type="text" class="form-control" name="lastname" id="lname" placeholder="" required>    				
							</div>
</div>
							
						
					</div>
					


					<div class="form-group form-custom">
						      <div class='form-row'>
							<div class="col-md-3 align-self-center pr-0">
								<label for="designation"><strong>Designation* :</strong></label>             
							</div>
							<div class="col-md-9 mb-2 pl-0">
								<input type="text" name="designation" class="form-control" id="designation" placeholder="" required>           
							</div>
</div>
							
						
					</div>
					
						<div class="form-group form-custom">
						      
						<div class='form-row'>

							<div class="col-md-3 align-self-center pr-0">
								<label for="email"><strong>Business Email* :  </strong></label>             
							</div>
							<div class="col-md-9 mb-2 pl-0">
								<input type="email" name="email" class="form-control" id="email" placeholder="" required>           
							</div>
							</div>
						
					</div>
					
						<div class="form-group form-custom">
						      <div class='form-row'>
							<div class="col-md-3 align-self-center pr-0">
								<label for="h_tel"><strong>Telephone* :</strong></label>             
							</div>
							<div class="col-md-9 mb-2 pl-0">
								<input type="tel" name="telephone" class="form-control" id="h_tel" placeholder="" required>           
							</div>
</div>
							
						
					</div>
					
						<div class="form-group form-custom">
						      
						<div class='form-row'>

							<div class="col-md-3 align-self-center pr-0">
								<label for="organisation">
								    <strong>Organisation* :</strong></label>             
							</div>
							<div class="col-md-9 mb-2 pl-0">
								<input type="text" name="organisation" class="form-control" id="h_tel" placeholder="" required>           
							</div>
							</div>
						
					</div>



			



					<div class="mb-2"></div>

					<div class="form-group">
						<div class="form-row"> 
						
							<div class="col-md-3 align-self-center pr-0">
								<label for="country">
								    <strong>Country* :</strong></label>             
							</div>
							<div class="col-md-9 col-sm-9 col-12 mb-3">
							


								 {{ Form::select('country', $countries, null, ['class' => 'form-control','required'=>'required']) }}
                      <span class="help-block">{{ $errors->first('country', ':message') }}




													
							</div>    

						

						

							

						
						</div>
					</div>
					<input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">

					<h2 class="mb-2 PF-TXTRED">Our Editorial Sections</h2>
					<p>Select all that interests you to contribute/write</p>

					<div class="row">        
						<div class="col-md-12">
							<div class="form-group">
							<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" class="custom-control-input" id="Healthcare_Management" value="Healthcare_Management">
									<label class="custom-control-label" for="Healthcare_Management">Healthcare Management</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Medical_Sciences" class="custom-control-input" id="Medical_Sciences">
									<label class="custom-control-label" for="Medical_Sciences">Medical Sciences</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Surgical_Speciality" class="custom-control-input" id="Surgical_Speciality">
									<label class="custom-control-label" for="Surgical_Speciality">Surgical Speciality</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Diagnostics" class="custom-control-input" id="Diagnostics">
									<label class="custom-control-label" for="Diagnostics">Diagnostics</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Technology_Equipment" class="custom-control-input" id="Technology_Equipment">
									<label class="custom-control-label" for="Technology_Equipment">Technology, Equipment &amp; Devices</label>
								</div>	
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Facilities_Operations" class="custom-control-input" id="Facilities_Operations">
									<label class="custom-control-label" for="Facilities_Operations">Facilities &amp; Operations</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Information_Technology" class="custom-control-input" id="Information_Technology">
									<label class="custom-control-label" for="Information_Technology">Information Technology</label>
								</div>	       
							<!--	<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Expert_Talk" class="custom-control-input" id="Expert_Talk">
									<label class="custom-control-label" for="Expert_Talk">Expert Talk</label>
								</div>    -->
							</div>
						</div>

					
					</div>					

				
					<div class="pt-4 pb-3" align="center">
						<button type="submit" class="btn btn-danger pl-4 pr-4">Submit</button>
					</div>
				</form>
				</div>
				
				
			</div>
			</div>
			<p>European Hospital Healthcare Management would focus on European-centric B2B  Healthcare Industry executives introducing them to
cutting-edge, novel and exclusive materials in the forms of Articles, Editorials, Advertorials, Research Insights, Expert talks,
New Product launches, Breakthroughs, Projects, Events, and much more.</p>
			<!-- E-book // -->


			
		


			
		</div>	

		
		<div class="clearfix"></div>

		
	</div>
	@endsection

	@section('scripts')

	<script>
		$(document).ready(function() {
			$(".mailing").hide();
			$(".mag").hide();
			$(".ebook").show();
		});

		$(".ebook-btn").click(function() {
			$(".mag").hide();
			$(".mailing").hide();
			$(".ebook").show();
		});

		$(".magazine-btn").click(function() {
			$(".ebook").hide();
			$(".mailing").hide();
			$(".mag").show();
		});

		$(".mailing-btn").click(function() { 
			$(".ebook").hide();
			$(".mailing").show();
			$(".mag").hide();
		});


		$("#job_title").change(function() { 
			var response=$("#job_title").val();
			if(response=="Others" || response=="VP Others" ){
				$("#hod_job_title").css("display", "block");
			}
			else{
				$("#hod_job_title").css("display", "none");
			}
		});


		$("#company_type").change(function() { 
			var response=$("#company_type").val();
			if(response=="Others"){
				$("#input_company_other").css("display", "block");
			}
			else{
				$("#input_company_other").css("display", "none");
			}
		});


   @if (Request::segment(2) =="success")
  $('#myModal').modal('show'); 
  @endif  
	</script>

	@endsection