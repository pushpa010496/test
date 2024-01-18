@extends('../layouts/app')
@section('style')
<!-- <link rel="stylesheet" href="{{ config('app.url') }}css/form-design.css"> -->
<style>
	label{padding-bottom: 0px;margin-bottom: 0px;}
	.form-custom .form-control {border: none !important;border-bottom: 1px dashed #999 !important;}
	select{background-color: #f3f3f3 !important;}
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
                        <p style="color: green;">Your Magazine Subscription was Successful</p>
						<p style="color: green;">Thank you for subscribing EuropeanHHM  Magazine. Our team extends its gratitude for your interest in EuropeanHHM Magazine.</p>
						<p style="color: green;">We look forward to approaching you soon with the details to your access of the magazine.</p>
                        <p style="color: green;">A world of Medical insights and industrial acumen awaits you!</p>
						<br>
                       
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" role="button" id="aa" name="aa" href="{{url('https://www.europeanhhm.com/subscribe')}}"
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
			<div class="col-lg-8 col-md-8 col-sm-8 col-12">	
				<h1 class="mb-4 PF-TXTRED mt-0">Please complete the following form to get European Hospital and Healthcare Management:</h1>
				<div class="mb-2">
					<div class="custom-control custom-radio custom-control-inline mb-2">
						<input type="radio" id="Radio-ebook" name="issue_pack" class="custom-control-input ebook-btn" checked>
						<label class="custom-control-label" for="Radio-ebook">
							<span class="font-16">I want magazine in eBook Format (Free)</span>
						</label>
					</div>
					<br>
					<div class="custom-control custom-radio custom-control-inline mb-2">
						<input type="radio" id="Radio-Magazine" name="issue_pack" class="custom-control-input magazine-btn">
						<label class="custom-control-label" for="Radio-Magazine">
							<span class="font-16">I want magazine in Print Format (Paid)</span> 
							<!-- - <span class="PF-TXT555"><i>Paid service</i>  <small>(e book included)</small></span> -->
						</label>
					</div>
					<br>
					<div class="custom-control custom-radio custom-control-inline mb-2">
						<input type="radio" id="Radio-Mailing" name="issue_pack" class="custom-control-input mailing-btn">
						<label class="custom-control-label" for="Radio-Mailing">
							<span class="font-16">I want to update my mailing address</span>
						</label>
					</div>
				</div>				
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-12 ebook">	
				<img src="{{config('app.url')}}images/e-magazine-devices-new.jpg" alt="Digital Version" class="img-fluid">
			</div>

			<div class="col-lg-3 col-md-3 col-sm-4 col-12 mag">
				<img src="{{config('app.url')}}images/e-magazine-devices-new.jpg" alt="Print Version" class="img-fluid">
			</div>

			<div class="col-lg-3 col-md-3 col-sm-4 col-12 mailing">
				<img src="{{config('app.url')}}images/e-magazine-devices-new.jpg" alt="Mmailing Address" class="img-fluid">
			</div>
		</div>


<!--
                  @if(@Session('status') == 'true') 
                  <h2 style="color: green;" align="center"><u>Thank You!</u></h2> 
				  <h2  align="center">Your Magazine Subscription was Successful</h2>  
				  <p>Thank you for subscribing EuropeanHHM Magazine. Our team extends its gratitude for your interest in EuropeanHHM Magazine. </p>                    
                <p>We look forward to approaching you soon with the details to your access of the magazine. </p>
				  <p>A world of Medical insights and industrial acumen awaits you!</p>
				@endif
-->	
			<!-- // E-book -->	
			<div class="ebook">
				<h2 class="font-weight-bold font-18 PF-TXTRED pt-3">Register for eBook</h2>
				<form action="{{url('magazine-subscribe-post')}}" method="Post" enctype="multipart/form-data">	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-2 align-self-center pr-0">
								<label for="name"><strong>Name (Mr/Mrs/Ms)</strong></label>	    				
							</div>
							<div class="col-md-10 mb-2 pl-0">
								<input type="text" class="form-control" name="name" id="name" placeholder="">    	<input type="hidden" class="form-control" name="type" id="type" value="ebook">			
							</div>
						</div>	
					</div>	


					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-1 align-self-center pr-0">
								<label for="name"><strong>Address</strong></label>	    				
							</div>
							<div class="col-md-11 pl-0">
								<textarea class="form-control pb-0" name="address" id="address" placeholder="" rows="1"></textarea>		
							</div>
						</div>	
					</div>


					<!-- <div class="form-group form-custom">
						<div class="row"> 
							<div class="col-md-3 align-self-center pr-0">
								<label for="address" class="pr-2"><strong>Address</strong></label>	
								<div class="custom-control-inline"> 
									<div class="custom-control custom-checkbox pr-3">
										<input type="checkbox" class="custom-control-input" id="magazine_Home">
										<label class="custom-control-label" for="magazine_Home">Home</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="magazines_Office">
										<label class="custom-control-label" for="magazines_Office">Office</label>
									</div>
								</div>							  
							</div>
							<div class="col-md-9 mb-2 pl-0">
								<input type="text" class="form-control" id="address">
							</div>
						</div>
					</div> -->

					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-2 align-self-center pr-0">
								<label for="zipcode"><strong>Post/Zip Code</strong></label>             
							</div>
							<div class="col-md-2 mb-2 pl-0">
								<input type="text" 
								name="zipcode" class="form-control" id="zipcode" placeholder="">           
							</div>
							<div class="col-md-1 align-self-center pr-0">
								<label for="h_tel"><strong>Telephone</strong></label>             
							</div>
							<div class="col-md-3 mb-2 pl-0">
								<input type="tel" name="telephone" class="form-control" id="h_tel" placeholder="">           
							</div>
							<div class="col-md-1 align-self-center pr-0">
								<label for="o_tel"><strong>Mobile</strong></label>             
							</div>
							<div class="col-md-3 mb-2 pl-0">
								<input type="tel" name="mobile" class="form-control" id="o_tel" placeholder="">           
							</div>
						</div>  
					</div>


					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-1 align-self-center pr-0">
								<label for="fax"><strong>Fax</strong></label>             
							</div>
							<div class="col-md-5 mb-2 pl-0">
								<input type="text" name="fax" class="form-control" id="fax" placeholder="">           
							</div>

							<div class="col-md-2 align-self-center pr-0">
								<label for="email"><strong>Business Email</strong></label>             
							</div>
							<div class="col-md-4 mb-2 pl-0">
								<input type="email" name="email" class="form-control" id="email" placeholder="">           
							</div>
						</div>  
					</div>

					<div class="mb-2"></div>

					<div class="form-group">
						<div class="row">       
							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<!-- <select class="form-control" id="country" name="country" placeholder="Country*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">Country</option>
									<option value="India">India</option>
									<option value="USA">USA</option>
									<option value="UK">UK</option>
									<option value="Japan">Japan</option>
								</select> -->


								 {{ Form::select('country', $countries, null, ['class' => 'form-control','required'=>'required']) }}
                      <span class="help-block">{{ $errors->first('country', ':message') }}




								<div class="mt-3" id='input_hod' style="display: none">
									<input type="text" class="form-control" name="" placeholder="Please specify the department name"/>                
								</div>							
							</div>    

							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<select class="form-control" id="job_title" name="job_title" placeholder="Job Title*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">Job Title / Function</option>
									<option value="Academic">Academic</option>
									<option value="Academic Dept Head/Chair">Academic Dept Head/Chair</option>
									<option value="Assistant/Administrator">Assistant/Administrator</option>
									<option value="Business Development">Business Development</option>
									<option value="CEO / Managing Director">CEO / Managing Director</option>
									<option value="CEO/President/Owner">CEO/President/Owner</option>
									<option value="CFO">CFO</option>
									<option value="Chief/President/Chairman/Director">Chief/President/Chairman/Director</option>
									<option value="CMD">CMD</option>
									<option value="Consultant">Consultant</option>
									<option value="Consulting">Consulting</option>
									<option value="COO">COO</option>
									<option value="Engineering">Engineering</option>
									<option value="Expert/Advisor/Specialist/Consultant">Expert/Advisor/Specialist/Consultant</option>
									<option value="Financial/Legal">Financial/Legal</option>
									<option value="Group or Section Leader/Project Manager">Group or Section Leader/Project Manager</option>
									<option value="Head of Department">Head of Department</option>
									<option value="Human Resources">Human Resources</option>
									<option value="IT/Technical">IT/Technical</option>
									<option value="Lab Director/Lab Manager/Dept Manager">Lab Director/Lab Manager/Dept Manager</option>
									<option value="Manager/Head of Department">Manager/Head of Department</option>
									<option value="Operations">Operations</option>
									<option value="President">President</option>
									<option value="Principal Investigator">Principal Investigator</option>
									<option value="Process Engineer">Process Engineer</option>
									<option value="Processing">Processing</option>
									<option value="Production/Manufacturing">Production/Manufacturing</option>
									<option value="Professor/Instructor">Professor/Instructor</option>
									<option value="Professor/Researcher/Lecturer">Professor/Researcher/Lecturer</option>
									<option value="Purchasing Manager/Agent">Purchasing Manager/Agent</option>
									<option value="Purchasing/Procurement">Purchasing/Procurement</option>
									<option value="QA/QC">QA/QC</option>
									<option value="Research Director">Research Director</option>
									<option value="Research Scientist">Research Scientist</option>
									<option value="Research/Development">Research/Development</option>
									<option value="Sales/Marketing/PR">Sales/Marketing/PR</option>
									<option value="Scientist/Technologist">Scientist/Technologist</option>
									<option value="Student">Student</option>
									<option value="VP Drug Development">VP Drug Development</option>
									<option value="VP Research">VP Research</option>
									<option value="Others">Others</option>
								</select>

								<div class="mt-3" id="hod_job_title" style="display: none">
									<input type="text" id="job_title1" name="job_title1" class="form-control" name="" placeholder="Please specify the Job title"/>                
								</div>							
							</div>
							
							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<select class="form-control" id="company_type" name="company_type" placeholder="Company Type*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">Company Type</option>
									<option value="Academia/Research Institute">Academia/Research Institute</option>
									<option value="Academic/University">Academic/University</option>
									<option value="Association">Association</option>
									<option value="Biopharmaceutical">Biopharmaceutical</option>
									<option value="Biopharmaceutical Manufacturer">Biopharmaceutical Manufacturer</option>
									<option value="Biotech">Biotech</option>
									<option value="Biotech Manufacturer">Biotech Manufacturer</option>
									<option value="Biotechnology">Biotechnology</option>
									<option value="Clinical Trials Organisation">Clinical Trials Organisation</option>
									<option value="Consultancy">Consultancy</option>
									<option value="Consulting Firm/Organisation">Consulting Firm/Organisation</option>
									<option value="Contract Manufacturer">Contract Manufacturer</option>
									<option value="Contract Manufacturing Organisation">Contract Manufacturing Organisation</option>
									<option value="Contract Research">Contract Research</option>
									<option value="Contract Research Organisation">Contract Research Organisation</option>
									<option value="Drug Development">Drug Development</option>
									<option value="Financial/Legal">Financial/Legal</option>
									<option value="Government Research Establishment">Government Research Establishment</option>
									<option value="Government/Regulatory Body">Government/Regulatory Body</option>
									<option value="Hospital/Medical Centre">Hospital/Medical Centre</option>
									<option value="Independent Laboratory">Independent Laboratory</option>
									<option value="Instrument/System Manufacturer">Instrument/System Manufacturer</option>
									<option value="IT/Software">IT/Software</option>
									<option value="Logistics">Logistics</option>
									<option value="Manufacturer: Ingredients">Manufacturer: Ingredients</option>
									<option value="Manufacturer: Packaging & Labelling">Manufacturer: Packaging & Labelling</option>
									<option value="Manufacturer: Pharmaceuticals">Manufacturer: Pharmaceuticals</option>
									<option value="Media/PR/Agency">Media/PR/Agency</option>
									<option value="Pharmaceutical">Pharmaceutical</option>
									<option value="Pharmaceutical Manufacturer">Pharmaceutical Manufacturer</option>
									<option value="Retailer">Retailer</option>
									<option value="Supplier">Supplier</option>
									<option value="Others">Others</option>
									<!-- <option value="">Pharmaceutical Manufacturer</option>
									<option value="">Biotech Manufacturer</option>
									<option value="">Biopharmaceutical Manufacturer</option>
									<option value="">Contract Research Organisation</option>
									<option value="">Contract Manufacturing Organisation</option>
									<option value="other">Others</option> -->
								</select>

								<div class="mt-3" id='input_company_other'  style="display: none;">
									<input type="text" class="form-control"  name="company_type1" id="company_type1" placeholder="Please specify company type"> 
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<select class="form-control" id="turnover" name="turnover" placeholder="Company Turnover (US $)*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">Company Turnover (US $)</option>
									<option value="Less than 1 Million">Less than 1 Million</option>
									<option value="1 – 10 Million">1 – 10 Million</option>
									<option value="11 – 150 Million">11 – 150 Million</option>
									<option value="151 – 500 Million">151 – 500 Million</option>
									<option value="Over 500 Million">Over 500 Million</option>
								</select>
							</div>

							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<select class="form-control" id="your_role" name="your_role" placeholder="Indicate Your Role in Purchasing*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">Indicate Your Role in Purchasing</option>
									<option value="Final Decision">Final Decision</option>
									<option value="Significant Influence">Significant Influence</option>
									<option value="Initial Recommendation">Initial Recommendation</option>
									<option value="Researching New Products">Researching New Products</option>
									<option value="Not Applicable">Not Applicable</option>
								</select>
							</div>

							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<select class="form-control" id="" name="whom" placeholder="How did you hear about us?*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">How did you hear about us?*</option>
									<option value="Internet Search">Internet Search (Search engine)</option>
									<option value="Social Media">Social Media</option>
									<option value="Email">Email</option>
									<option value="Other">Other</option>
								</select>
							</div>
						</div>
					</div>


					<h2 class="mb-2 PF-TXTRED">Interested in learning more about goods and services?</h2>
					<p>Advertisements from top companies in the sector can be found in your copy of European hospital and healthcare management. Simply check the areas that interest you and send the form by fax to +91 40 4961 4555 if you'd want more information from these businesses about their products & services.</p>

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

						<div class="col-md-12 pt-2">
							<div class="form-group">
								<img src="{{ config('app.url') }}images/vertical-logo.jpg" alt="Pharma Subscription" class="img-fluid mb-2" />

								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="accept[]" value="newsletter" class="custom-control-input" id="newsletter" checked="checked">
									<label class="custom-control-label" for="newsletter">Tick here if you wish to receive Verticaltalk Healthcare e-Newsletter</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="accept[]" value="publication" class="custom-control-input" id="publication">
									<label class="custom-control-label" for="publication">Tick here if you do not wish to receive mailings from 3rd party companies that are not involved in the publication</label>
								</div> 
							</div>
						</div>         
					</div>					

					<div class="mt-2">
						<div class="row">   
							<div class="col-md-2 pr-0">
								<label for="message"><strong>Leave your comment</strong></label>             
							</div>
							<div class="col-md-10">
								<div class="form-group">
									<textarea class="form-control" placeholder="" name="message" rows="2"></textarea>
								</div>
							</div> 
						</div>
					</div>

					<div class="pt-4 pb-3" align="center">
						<button type="submit" class="btn btn-danger pl-4 pr-4">Submit</button>
					</div>
				</form>
			</div>
			<!-- E-book // -->


			<!-- // Magazine -->
			<div class="mag">
				<h2 class="font-weight-bold font-18 pt-2">
					<span class="PF-TXTRED">Register for Print Format Magazine (eBook included)</small>
				</h2>				

				<form action="{{url('magazine-subscribe-post')}}" method="Post" enctype="multipart/form-data">		<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" class="form-control" name="type" id="type" value="magazine">
					<div class="mb-2">
						<div class="custom-control custom-radio custom-control-inline mb-2">
							<input type="radio" id="magz-issue4" name="issue_packk" value="1 year (4 Issues)" class="custom-control-input">
							<label class="custom-control-label" for="magz-issue4">
								<span class="font-16">1 year (2 Issues)</span>
							</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline mb-2">
							<input type="radio" id="magz-issue8" name="issue_packk" value="2 year (8 Issues)" class="custom-control-input">
							<label class="custom-control-label" for="magz-issue8">
								<span class="font-16">2 year (4 Issues)</span>
							</label>
						</div>
					</div>

					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-2 align-self-center pr-0">
								<label for="name"><strong>Name (Mr/Mrs/Ms)</strong></label>	    				
							</div>
							<div class="col-md-10 mb-2 pl-0">
								<input type="text" class="form-control" name="name" id="name" placeholder="">    				
							</div>
						</div>	
					</div>	


					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-1 align-self-center pr-0">
								<label for="name"><strong>Address</strong></label>	    				
							</div>
							<div class="col-md-11 pl-0">
								<textarea class="form-control pb-0" id="address" name="address" placeholder="" rows="1"></textarea>		
							</div>
						</div>	
					</div>

					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-2 align-self-center pr-0">
								<label for="zipcode"><strong>Post/Zip Code</strong></label>             
							</div>
							<div class="col-md-2 mb-2 pl-0">
								<input type="text" id="zipcode" name="zipcode" class="form-control" id="zipcode" placeholder="">           
							</div>
							<div class="col-md-1 align-self-center pr-0">
								<label for="h_tel"><strong>Telephone</strong></label>             
							</div>
							<div class="col-md-3 mb-2 pl-0">
								<input type="tel" name="telephone" class="form-control" id="h_tel" placeholder="">           
							</div>
							<div class="col-md-1 align-self-center pr-0">
								<label for="o_tel"><strong>Mobile</strong></label>             
							</div>
							<div class="col-md-3 mb-2 pl-0">
								<input type="tel" name="mobile" class="form-control" id="o_tel" placeholder="">           
							</div>
						</div>  
					</div>


					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-1 align-self-center pr-0">
								<label for="fax"><strong>Fax</strong></label>             
							</div>
							<div class="col-md-5 mb-2 pl-0">
								<input type="text" name="fax" class="form-control" id="fax" placeholder="">           
							</div>

							<div class="col-md-2 align-self-center pr-0">
								<label for="email"><strong>Business Email</strong></label>             
							</div>
							<div class="col-md-4 mb-2 pl-0">
								<input type="email" name="email" class="form-control" id="email" placeholder="">           
							</div>
						</div>  
					</div>

					<div class="mb-2"></div>

					<div class="form-group">
						<div class="row">       
							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<!-- <select class="form-control" id="country" name="country" placeholder="Country*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">Country</option>
									<option value="India">India</option>
									<option value="USA">USA</option>
									<option value="UK">UK</option>
									<option value="Japan">Japan</option>
								</select> -->


 {{ Form::select('country', $countries, null, ['class' => 'form-control','required'=>'required']) }}
                      <span class="help-block">{{ $errors->first('country', ':message') }}


								<div class="mt-3" id='input_hod' style="display: none">
									<input type="text" class="form-control" name="" placeholder="Please specify the department name"/>                
								</div>							
							</div>    

							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<select class="form-control" id="job_title" name="job_title" placeholder="Job Title*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">Job Title / Function</option>
									<option value="Academic">Academic</option>
									<option value="Academic Dept Head/Chair">Academic Dept Head/Chair</option>
									<option value="Assistant/Administrator">Assistant/Administrator</option>
									<option value="Business Development">Business Development</option>
									<option value="CEO / Managing Director">CEO / Managing Director</option>
									<option value="CEO/President/Owner">CEO/President/Owner</option>
									<option value="CFO">CFO</option>
									<option value="Chief/President/Chairman/Director">Chief/President/Chairman/Director</option>
									<option value="CMD">CMD</option>
									<option value="Consultant">Consultant</option>
									<option value="Consulting">Consulting</option>
									<option value="COO">COO</option>
									<option value="Engineering">Engineering</option>
									<option value="Expert/Advisor/Specialist/Consultant">Expert/Advisor/Specialist/Consultant</option>
									<option value="Financial/Legal">Financial/Legal</option>
									<option value="Group or Section Leader/Project Manager">Group or Section Leader/Project Manager</option>
									<option value="Head of Department">Head of Department</option>
									<option value="Human Resources">Human Resources</option>
									<option value="IT/Technical">IT/Technical</option>
									<option value="Lab Director/Lab Manager/Dept Manager">Lab Director/Lab Manager/Dept Manager</option>
									<option value="Manager/Head of Department">Manager/Head of Department</option>
									<option value="Operations">Operations</option>
									<option value="President">President</option>
									<option value="Principal Investigator">Principal Investigator</option>
									<option value="Process Engineer">Process Engineer</option>
									<option value="Processing">Processing</option>
									<option value="Production/Manufacturing">Production/Manufacturing</option>
									<option value="Professor/Instructor">Professor/Instructor</option>
									<option value="Professor/Researcher/Lecturer">Professor/Researcher/Lecturer</option>
									<option value="Purchasing Manager/Agent">Purchasing Manager/Agent</option>
									<option value="Purchasing/Procurement">Purchasing/Procurement</option>
									<option value="QA/QC">QA/QC</option>
									<option value="Research Director">Research Director</option>
									<option value="Research Scientist">Research Scientist</option>
									<option value="Research/Development">Research/Development</option>
									<option value="Sales/Marketing/PR">Sales/Marketing/PR</option>
									<option value="Scientist/Technologist">Scientist/Technologist</option>
									<option value="Student">Student</option>
									<option value="VP Drug Development">VP Drug Development</option>
									<option value="VP Research">VP Research</option>
									<option value="Others">Others</option>
								</select>

								<div class="mt-3" id="hod_job_title" style="display: none">
									<input type="text" id="job_title1" name="job_title1" class="form-control" name="" placeholder="Please specify the Job title"/>                
								</div>							
							</div>

							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<select class="form-control" id="company_type" name="company_type" placeholder="Company Type*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">Company Type</option>
									<option value="Academia/Research Institute">Academia/Research Institute</option>
									<option value="Academic/University">Academic/University</option>
									<option value="Association">Association</option>
									<option value="Biopharmaceutical">Biopharmaceutical</option>
									<option value="Biopharmaceutical Manufacturer">Biopharmaceutical Manufacturer</option>
									<option value="Biotech">Biotech</option>
									<option value="Biotech Manufacturer">Biotech Manufacturer</option>
									<option value="Biotechnology">Biotechnology</option>
									<option value="Clinical Trials Organisation">Clinical Trials Organisation</option>
									<option value="Consultancy">Consultancy</option>
									<option value="Consulting Firm/Organisation">Consulting Firm/Organisation</option>
									<option value="Contract Manufacturer">Contract Manufacturer</option>
									<option value="Contract Manufacturing Organisation">Contract Manufacturing Organisation</option>
									<option value="Contract Research">Contract Research</option>
									<option value="Contract Research Organisation">Contract Research Organisation</option>
									<option value="Drug Development">Drug Development</option>
									<option value="Financial/Legal">Financial/Legal</option>
									<option value="Government Research Establishment">Government Research Establishment</option>
									<option value="Government/Regulatory Body">Government/Regulatory Body</option>
									<option value="Hospital/Medical Centre">Hospital/Medical Centre</option>
									<option value="Independent Laboratory">Independent Laboratory</option>
									<option value="Instrument/System Manufacturer">Instrument/System Manufacturer</option>
									<option value="IT/Software">IT/Software</option>
									<option value="Logistics">Logistics</option>
									<option value="Manufacturer: Ingredients">Manufacturer: Ingredients</option>
									<option value="Manufacturer: Packaging & Labelling">Manufacturer: Packaging & Labelling</option>
									<option value="Manufacturer: Pharmaceuticals">Manufacturer: Pharmaceuticals</option>
									<option value="Media/PR/Agency">Media/PR/Agency</option>
									<option value="Pharmaceutical">Pharmaceutical</option>
									<option value="Pharmaceutical Manufacturer">Pharmaceutical Manufacturer</option>
									<option value="Retailer">Retailer</option>
									<option value="Supplier">Supplier</option>
									<option value="Others">Others</option>
									<!-- <option value="">Pharmaceutical Manufacturer</option>
									<option value="">Biotech Manufacturer</option>
									<option value="">Biopharmaceutical Manufacturer</option>
									<option value="">Contract Research Organisation</option>
									<option value="">Contract Manufacturing Organisation</option>
									<option value="other">Others</option> -->
								</select>

								<div class="mt-3" id='input_company_other'  style="display: none;">
									<input type="text" class="form-control"  name="company_type1" id="company_type1" placeholder="Please specify company type"> 
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<select class="form-control" id="turnover" name="turnover" placeholder="Company Turnover (US $)*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">Company Turnover (US $)</option>
									<option value="Less than 1 Million">Less than 1 Million</option>
									<option value="1 – 10 Million">1 – 10 Million</option>
									<option value="11 – 150 Million">11 – 150 Million</option>
									<option value="151 – 500 Million">151 – 500 Million</option>
									<option value="Over 500 Million">Over 500 Million</option>
								</select>
							</div>

							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<select class="form-control" id="your_role" name="your_role" placeholder="Indicate Your Role in Purchasing*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">Indicate Your Role in Purchasing</option>
									<option value="Final Decision">Final Decision</option>
									<option value="Significant Influence">Significant Influence</option>
									<option value="Initial Recommendation">Initial Recommendation</option>
									<option value="Researching New Products">Researching New Products</option>
									<option value="Not Applicable">Not Applicable</option>
								</select>
							</div>

							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<select class="form-control" id="" name="whom placeholder="How did you hear about us?*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">How did you hear about us?*</option>
									<option value="Internet Search">Internet Search (Search engine)</option>
									<option value="Social Media">Social Media</option>
									<option value="Email">Email</option>
									<option value="Other">Other</option>
								</select>
							</div>
						</div>
					</div>


					<h2 class="mb-2 PF-TXTRED">Interested in learning more about goods and services?</h2>
					<p>Advertisements from top companies in the sector can be found in your copy of European hospital and healthcare management. Simply check the areas that interest you and send the form by fax to +91 40 4961 4555 if you'd want more information from these businesses about their products & services.</p>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" class="custom-control-input" id="Healthcare_Management1" value="Healthcare_Management1">
									<label class="custom-control-label" for="Healthcare_Management1">Healthcare Management</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Medical_Sciences1" class="custom-control-input" id="Medical_Sciences1">
									<label class="custom-control-label" for="Medical_Sciences1">Medical Sciences</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Surgical_Speciality1" class="custom-control-input" id="Surgical_Speciality1">
									<label class="custom-control-label" for="Surgical_Speciality1">Surgical Speciality</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Diagnostics1" class="custom-control-input" id="Diagnostics1">
									<label class="custom-control-label" for="Diagnostics1">Diagnostics</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Technology_Equipment1" class="custom-control-input" id="Technology_Equipment1">
									<label class="custom-control-label" for="Technology_Equipment1">Technology, Equipment &amp; Devices</label>
								</div>	
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Facilities_Operations1" class="custom-control-input" id="Facilities_Operations1">
									<label class="custom-control-label" for="Facilities_Operations1">Facilities &amp; Operations</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Information_Technology1" class="custom-control-input" id="Information_Technology1">
									<label class="custom-control-label" for="Information_Technology1">Information Technology</label>
								</div>	       
							<!--	<div class="custom-control custom-checkbox">
									<input type="checkbox" name="interest[]" value="Expert_Talk1" class="custom-control-input" id="Expert_Talk1">
									<label class="custom-control-label" for="Expert_Talk1">Expert Talk</label>
								</div>     -->
							</div>
						</div>
					

						<div class="col-md-12 pt-2">
							<div class="form-group">
								<img src="{{ config('app.url') }}images/vertical-logo.jpg" alt="Pharma Subscription" class="img-fluid mb-2" />

								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="acceptt[]" value="newsletter1" class="custom-control-input" id="newsletter1" checked="checked">
									<label class="custom-control-label" for="newsletter1">Tick here if you wish to receive Verticaltalk Healthcare e-Newsletter</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox"  name="acceptt[]" value="publication1" class="custom-control-input" id="publication1">
									<label class="custom-control-label" for="publication1">Tick here if you do not wish to receive mailings from 3rd party companies that are not involved in the publication</label>
								</div> 
							</div>
						</div>         
					</div>					

					<div class="mt-2">
						<div class="row">   
							<div class="col-md-2 pr-0">
								<label for="message"><strong>Leave your comment</strong></label>             
							</div>
							<div class="col-md-10">
								<div class="form-group">
									<textarea class="form-control" name="message" placeholder="" rows="2"></textarea>
								</div>
							</div> 
						</div>
					</div>

					<div class="pt-4 pb-3" align="center">
						<button type="submit" class="btn btn-danger pl-4 pr-4">Submit</button>
					</div>
				</form>
			</div>
			<!-- Magazine // -->


			<!-- // Mailing Address -->
			<div class="mailing">
				<h2 class="font-weight-bold font-18 PF-TXTRED pt-3">Mailing Address</h2>
				<form action="{{url('magazine-subscribe-post')}}" method="Post" enctype="multipart/form-data">	
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" class="form-control" name="type" id="type" value="mailing">
					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-2 align-self-center pr-0">
								<label for="name"><strong>Name (Mr/Mrs/Ms)</strong></label>	    				
							</div>
							<div class="col-md-10 mb-2 pl-0">
								<input type="text" name="name" class="form-control" id="name" placeholder="">    				
							</div>
						</div>	
					</div>	


					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-1 align-self-center pr-0">
								<label for="name"><strong>Address</strong></label>	    				
							</div>
							<div class="col-md-11 pl-0">
								<textarea class="form-control pb-0" id="address" name="address" placeholder="" rows="1"></textarea>		
							</div>
						</div>	
					</div>

					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-2 align-self-center pr-0">
								<label for="zipcode"><strong>Post/Zip Code</strong></label>             
							</div>
							<div class="col-md-2 mb-2 pl-0">
								<input type="text"  name="zipcode" class="form-control" id="zipcode" placeholder="">           
							</div>
							<div class="col-md-1 align-self-center pr-0">
								<label for="h_tel"><strong>Telephone</strong></label>             
							</div>
							<div class="col-md-3 mb-2 pl-0">
								<input type="tel" name="telephone" class="form-control" id="h_tel" placeholder="">           
							</div>
							<div class="col-md-1 align-self-center pr-0">
								<label for="o_tel"><strong>Mobile</strong></label>             
							</div>
							<div class="col-md-3 mb-2 pl-0">
								<input type="tel" name="mobile" class="form-control" id="o_tel" placeholder="">           
							</div>
						</div>  
					</div>


					<div class="form-group">
						<div class="row">
							<div class="col-md-8 col-sm-12 col-12 mb-3 form-custom">
								<div class="row">        
									<div class="col-md-1 align-self-center pr-0">
										<label for="fax"><strong>Fax</strong></label>             
									</div>
									<div class="col-md-5 mb-2 pl-0">
										<input type="text" name="fax" class="form-control" id="fax" placeholder="">           
									</div>

									<div class="col-md-2 align-self-center pr-0">
										<label for="email"><strong>Business Email</strong></label>             
									</div>
									<div class="col-md-4 mb-2 pl-0">
										<input type="email" name="email" class="form-control" id="email" placeholder="">           
									</div>
								</div> 
							</div>

							<div class="col-md-4 col-sm-12 col-12 mb-3">
								<!-- <select class="form-control" id="country" name="country" placeholder="Country*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">Country</option>
									<option value="India">India</option>
									<option value="USA">USA</option>
									<option value="UK">UK</option>
									<option value="Japan">Japan</option>
								</select>-->

								 {{ Form::select('country', $countries, null, ['class' => 'form-control','required'=>'required']) }}
                      <span class="help-block">{{ $errors->first('country', ':message') }}

                      	
								<div class="mt-3" id='input_hod' style="display: none">
									<input type="text" class="form-control" name="" placeholder="Please specify the department name"/>                
								</div>							
							</div>
						</div>
						
					</div>

					<div class="mb-2"></div>

					<!-- <div class="form-group">
						<div class="row">       
							<div class="col-md-4 col-sm-6 col-12 mb-3">
								<select class="form-control" id="country" name="country" placeholder="Country*" required="">
									<option disabled="" selected="" value="" class="font-weight-bold">Country</option>
									<option value="India">India</option>
									<option value="USA">USA</option>
									<option value="UK">UK</option>
									<option value="Japan">Japan</option>
								</select>

								<div class="mt-3" id='input_hod' style="display: none">
									<input type="text" class="form-control" name="" placeholder="Please specify the department name"/>                
								</div>							
							</div> 
						</div>
					</div> -->				

					<div class="row">   
						<div class="col-md-2 pr-0">
							<label for="message"><strong>Leave your comment</strong></label>             
						</div>
						<div class="col-md-10">
							<div class="form-group">
								<textarea class="form-control" name="message" placeholder="" rows="2"></textarea>
							</div>
						</div> 
					</div>

					<div class="pt-4 pb-3" align="center">
						<button type="submit" class="btn btn-danger pl-4 pr-4">Submit</button>
					</div>
				</form>
			</div>
			<!-- Mailing Address // -->		
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