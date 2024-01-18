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
</style>
@endsection

@section('content')
<div class="container">
	<div class="border mt-4 mb-4 p-4">
		<h1 class="mb-4 PF-TXTRED mt-0">To subscribe Pharma Focus Asia please fill the form below :</h1>

		
			<div class="mb-2">
				<div class="custom-control custom-radio custom-control-inline mb-2">
					<input type="radio" id="Radio-ebook" name="subscribe-type" class="custom-control-input ebook-btn">
					<label class="custom-control-label" for="Radio-ebook">
						<strong class="font-18">e-book</strong>
					</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline mb-2">
					<input type="radio" id="Radio-Magazine" name="subscribe-type" class="custom-control-input magazine-btn">
					<label class="custom-control-label" for="Radio-Magazine">
						<strong class="font-18">Magazine</strong> - <span class="PF-TXT555"><i>Paid service</i>  <small>(e book included)</small></span>
					</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline mb-2">
					<input type="radio" id="Radio-Mailing" name="subscribe-type" class="custom-control-input mailing-btn">
					<label class="custom-control-label" for="Radio-Mailing">
						<strong class="font-18">Update Mailing Address</strong>
					</label>
				</div>
			</div>

			<div class="mt-2"></div>

			<!-- // E-book -->	
			<div class="ebook">
				<h2 class="font-weight-bold font-18">e Book</h2>
				<form>		
					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-2 align-self-center pr-0">
								<label for="name"><strong>Name (Mr/Mrs/Ms)</strong></label>	    				
							</div>
							<div class="col-md-10 mb-2 pl-0">
								<input type="text" class="form-control" id="name" placeholder="">    				
							</div>
						</div>	
					</div>


					<div class="form-group form-custom">
						<div class="row"> 
							<div class="col-md-3 align-self-center pr-0">
								<label for="address" class="pr-2"><strong>Address</strong></label>	
								<div class="custom-control-inline"> 
									<div class="custom-control custom-checkbox pr-3">
										<input type="checkbox" class="custom-control-input" id="check_Home">
										<label class="custom-control-label" for="check_Home">Home</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="check_Office">
										<label class="custom-control-label" for="check_Office">Office</label>
									</div>
								</div>							  
							</div>
							<div class="col-md-9 mb-2 pl-0">
								<input type="text" class="form-control" id="address">
							</div>
						</div>
					</div>

					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-2 align-self-center pr-0">
								<label for="zipcode"><strong>Post/Zip Code</strong></label>             
							</div>
							<div class="col-md-2 mb-2 pl-0">
								<input type="text" class="form-control" id="zipcode" placeholder="">           
							</div>
							<div class="col-md-1 align-self-center pr-0">
								<label for="h_tel"><strong>Tel (H)</strong></label>             
							</div>
							<div class="col-md-3 mb-2 pl-0">
								<input type="tel" class="form-control" id="h_tel" placeholder="">           
							</div>
							<div class="col-md-1 align-self-center pr-0">
								<label for="o_tel"><strong>Tel (O)</strong></label>             
							</div>
							<div class="col-md-3 mb-2 pl-0">
								<input type="tel" class="form-control" id="o_tel" placeholder="">           
							</div>
						</div>  
					</div>


					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-1 align-self-center pr-0">
								<label for="fax"><strong>Fax</strong></label>             
							</div>
							<div class="col-md-5 mb-2 pl-0">
								<input type="text" class="form-control" id="fax" placeholder="">           
							</div>

							<div class="col-md-1 align-self-center pr-0">
								<label for="email"><strong>Email</strong></label>             
							</div>
							<div class="col-md-5 mb-2 pl-0">
								<input type="email" class="form-control" id="email" placeholder="">           
							</div>
						</div>  
					</div>

					<div class="mb-2"></div>

					<div class="form-group">
						<div class="row">        
							<div class="col-md-6 mb-3">
								<select class="form-control" id="job_itle" name="job_itle" placeholder="Job Title*" required="">
									<option disabled="" selected="" value="">Job Title / Function</option>
									<option value="CMD">CMD</option>
									<option value="President">President</option>
									<option value="CEO / Managing Director">CEO / Managing Director</option>
									<option value="CFO">CFO</option>
									<option value="COO">COO</option>
									<option value="Head of Department">Head of Department</option>
									<option value="other">Others</option>
								</select>

								<div class="mt-3" id='input_hod' style="display: none">
									<input type="text" class="form-control" name="" placeholder="Please specify the department name"/>                
								</div>
								<div class="mt-3" id='input_job_other' style="display: none">
									<input type="text" class="form-control" name=""  placeholder="Please specify the job title and department" >
								</div>
							</div>

							<div class="col-md-6 mb-3">
								<select class="form-control" id="company_type" name="company_type" placeholder="Company Type*" required="">
									<option disabled="" selected="" value="">Company Type</option>
									<option value="">Pharmaceutical Manufacturer</option>
									<option value="">Biotech Manufacturer</option>
									<option value="">Biopharmaceutical Manufacturer</option>
									<option value="">Contract Research Organisation</option>
									<option value="">Contract Manufacturing Organisation</option>
									<option value="other">Others</option>

								</select>

								<div class="mt-3" id='input_company_other' style="display: none">
									<input type="text" class="form-control" name="" placeholder="Please specify company type"> 
								</div>
							</div>

							<div class="col-md-6 mb-3">
								<select class="form-control" id="turnover" name="turnover" placeholder="Company Turnover (US $)*" required="">
									<option disabled="" selected="" value="">Company Turnover (US $)</option>
									<option value="">Less than 1 Million</option>
									<option value="">1 – 10 Million</option>
									<option value="">11 – 150 Million</option>
									<option value="">151 – 500 Million</option>
									<option value="">Over 500 Million</option>
								</select>
							</div>

							<div class="col-md-6 mb-3">
								<select class="form-control" id="your_role" name="your_role" placeholder="Indicate Your Role in Purchasing*" required="">
									<option disabled="" selected="" value="">Indicate Your Role in Purchasing</option>
									<option value="">Final Decision</option>
									<option value="">Significant Influence</option>
									<option value="">Initial Recommendation</option>
									<option value="">Researching New Products</option>
									<option value="">Not Applicable</option>
								</select>
							</div>
						</div>
					</div>


					<h2 class="mb-2 PF-TXTRED">Looking for more information on products & services?</h2>
					<p>Your copy of the Pharma Focus Asia contains advertisements by the industry's leading companies. If you wish to receive more information from these companies about their products & services, simply tick the categories that interest you and return by fax to +91 40 4961 4555</p>

					<div class="row">        
						<div class="col-md-12">
							<div class="form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="strategy">
									<label class="custom-control-label" for="strategy">Strategy</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="Clinical_Trials">
									<label class="custom-control-label" for="Clinical_Trials">Clinical Trials</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="Manufacturing">
									<label class="custom-control-label" for="Manufacturing">Manufacturing</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="R_D">
									<label class="custom-control-label" for="R_D">Research & Development</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="I_T">
									<label class="custom-control-label" for="I_T">Information Technology</label>
								</div>	           
							</div>
						</div>

						<div class="col-md-12 pt-2">
							<div class="form-group">
								<img src="{{ config('app.url') }}images/pharma-newsletter-logo.jpg" alt="Pharma Subscription" class="img-fluid mb-2" />

								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="newsletter">
									<label class="custom-control-label" for="newsletter">Tick here if you wish to receive Verticaltalk Healthcare e-Newsletter</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="publication">
									<label class="custom-control-label" for="publication">Tick here if you do not wish to receive mailings from 3rd party companies that are not involved in the publication</label>
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
				<h2 class="font-weight-bold font-18">Magazine</h2>

				<form>
					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-2 align-self-center pr-0">
								<label for="name"><strong>Name (Mr/Mrs/Ms)</strong></label>	    				
							</div>
							<div class="col-md-10 mb-2 pl-0">
								<input type="text" class="form-control" id="name" placeholder="">    				
							</div>
						</div>	
					</div>


					<div class="form-group form-custom">
						<div class="row"> 
							<div class="col-md-3 align-self-center pr-0">
								<label for="address" class="pr-2"><strong>Address</strong></label>	
								<div class="custom-control-inline"> 
									<div class="custom-control custom-checkbox pr-3">
										<input type="checkbox" class="custom-control-input" id="check_Home">
										<label class="custom-control-label" for="check_Home">Home</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="check_Office">
										<label class="custom-control-label" for="check_Office">Office</label>
									</div>
								</div>							  
							</div>
							<div class="col-md-9 mb-2 pl-0">
								<input type="text" class="form-control" id="address">
							</div>
						</div>
					</div>

					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-2 align-self-center pr-0">
								<label for="zipcode"><strong>Post/Zip Code</strong></label>             
							</div>
							<div class="col-md-2 mb-2 pl-0">
								<input type="text" class="form-control" id="zipcode" placeholder="">           
							</div>
							<div class="col-md-1 align-self-center pr-0">
								<label for="h_tel"><strong>Tel (H)</strong></label>             
							</div>
							<div class="col-md-3 mb-2 pl-0">
								<input type="tel" class="form-control" id="h_tel" placeholder="">           
							</div>
							<div class="col-md-1 align-self-center pr-0">
								<label for="o_tel"><strong>Tel (O)</strong></label>             
							</div>
							<div class="col-md-3 mb-2 pl-0">
								<input type="tel" class="form-control" id="o_tel" placeholder="">           
							</div>
						</div>  
					</div>


					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-1 align-self-center pr-0">
								<label for="fax"><strong>Fax</strong></label>             
							</div>
							<div class="col-md-5 mb-2 pl-0">
								<input type="text" class="form-control" id="fax" placeholder="">           
							</div>

							<div class="col-md-1 align-self-center pr-0">
								<label for="email"><strong>Email</strong></label>             
							</div>
							<div class="col-md-5 mb-2 pl-0">
								<input type="email" class="form-control" id="email" placeholder="">           
							</div>
						</div>  
					</div>

					<div class="mb-2"></div>

					<div class="form-group">
						<div class="row">        
							<div class="col-md-6 mb-3">
								<select class="form-control" id="job_itle" name="job_itle" placeholder="Job Title*" required="">
									<option disabled="" selected="" value="">Job Title / Function</option>
									<option value="CMD">CMD</option>
									<option value="President">President</option>
									<option value="CEO / Managing Director">CEO / Managing Director</option>
									<option value="CFO">CFO</option>
									<option value="COO">COO</option>
									<option value="Head of Department">Head of Department</option>
									<option value="other">Others</option>
								</select>

								<div class="mt-3" id='input_hod' style="display: none">
									<input type="text" class="form-control" name="" placeholder="Please specify the department name"/>                
								</div>
								<div class="mt-3" id='input_job_other' style="display: none">
									<input type="text" class="form-control" name=""  placeholder="Please specify the job title and department" >
								</div>
							</div>

							<div class="col-md-6 mb-3">
								<select class="form-control" id="company_type" name="company_type" placeholder="Company Type*" required="">
									<option disabled="" selected="" value="">Company Type</option>
									<option value="">Pharmaceutical Manufacturer</option>
									<option value="">Biotech Manufacturer</option>
									<option value="">Biopharmaceutical Manufacturer</option>
									<option value="">Contract Research Organisation</option>
									<option value="">Contract Manufacturing Organisation</option>
									<option value="other">Others</option>

								</select>

								<div class="mt-3" id='input_company_other' style="display: none">
									<input type="text" class="form-control" name="" placeholder="Please specify company type"> 
								</div>
							</div>

							<div class="col-md-6 mb-3">
								<select class="form-control" id="turnover" name="turnover" placeholder="Company Turnover (US $)*" required="">
									<option disabled="" selected="" value="">Company Turnover (US $)</option>
									<option value="">Less than 1 Million</option>
									<option value="">1 – 10 Million</option>
									<option value="">11 – 150 Million</option>
									<option value="">151 – 500 Million</option>
									<option value="">Over 500 Million</option>
								</select>
							</div>

							<div class="col-md-6 mb-3">
								<select class="form-control" id="your_role" name="your_role" placeholder="Indicate Your Role in Purchasing*" required="">
									<option disabled="" selected="" value="">Indicate Your Role in Purchasing</option>
									<option value="">Final Decision</option>
									<option value="">Significant Influence</option>
									<option value="">Initial Recommendation</option>
									<option value="">Researching New Products</option>
									<option value="">Not Applicable</option>
								</select>
							</div>
						</div>
					</div>


					<h2 class="mb-2 PF-TXTRED">Looking for more information on products & services?</h2>
					<p>Your copy of the Pharma Focus Asia contains advertisements by the industry's leading companies. If you wish to receive more information from these companies about their products & services, simply tick the categories that interest you and return by fax to +91 40 4961 4555</p>

					<div class="row">        
						<div class="col-md-12">
							<div class="form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="strategy">
									<label class="custom-control-label" for="strategy">Strategy</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="Clinical_Trials">
									<label class="custom-control-label" for="Clinical_Trials">Clinical Trials</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="Manufacturing">
									<label class="custom-control-label" for="Manufacturing">Manufacturing</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="R_D">
									<label class="custom-control-label" for="R_D">Research & Development</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="I_T">
									<label class="custom-control-label" for="I_T">Information Technology</label>
								</div>	           
							</div>
						</div>

						<div class="col-md-12 pt-2">
							<div class="form-group">
								<img src="{{ config('app.url') }}images/pharma-newsletter-logo.jpg" alt="Pharma Subscription" class="img-fluid mb-2" />

								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="newsletter">
									<label class="custom-control-label" for="newsletter">Tick here if you wish to receive Verticaltalk Healthcare e-Newsletter</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="publication">
									<label class="custom-control-label" for="publication">Tick here if you do not wish to receive mailings from 3rd party companies that are not involved in the publication</label>
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
				<h2 class="font-weight-bold font-18">Mailing Address</h2>
				<form>
					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-2 align-self-center pr-0">
								<label for="name"><strong>Name (Mr/Mrs/Ms)</strong></label>	    				
							</div>
							<div class="col-md-10 mb-2 pl-0">
								<input type="text" class="form-control" id="name" placeholder="">    				
							</div>
						</div>	
					</div>


					<div class="form-group form-custom">
						<div class="row"> 
							<div class="col-md-3 align-self-center pr-0">
								<label for="address" class="pr-2"><strong>Address</strong></label>	
								<div class="custom-control-inline"> 
									<div class="custom-control custom-checkbox pr-3">
										<input type="checkbox" class="custom-control-input" id="check_Home">
										<label class="custom-control-label" for="check_Home">Home</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="check_Office">
										<label class="custom-control-label" for="check_Office">Office</label>
									</div>
								</div>							  
							</div>
							<div class="col-md-9 mb-2 pl-0">
								<input type="text" class="form-control" id="address">
							</div>
						</div>
					</div>

					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-2 align-self-center pr-0">
								<label for="zipcode"><strong>Post/Zip Code</strong></label>             
							</div>
							<div class="col-md-2 mb-2 pl-0">
								<input type="text" class="form-control" id="zipcode" placeholder="">           
							</div>
							<div class="col-md-1 align-self-center pr-0">
								<label for="h_tel"><strong>Tel (H)</strong></label>             
							</div>
							<div class="col-md-3 mb-2 pl-0">
								<input type="tel" class="form-control" id="h_tel" placeholder="">           
							</div>
							<div class="col-md-1 align-self-center pr-0">
								<label for="o_tel"><strong>Tel (O)</strong></label>             
							</div>
							<div class="col-md-3 mb-2 pl-0">
								<input type="tel" class="form-control" id="o_tel" placeholder="">           
							</div>
						</div>  
					</div>


					<div class="form-group form-custom">
						<div class="row">        
							<div class="col-md-1 align-self-center pr-0">
								<label for="fax"><strong>Fax</strong></label>             
							</div>
							<div class="col-md-5 mb-2 pl-0">
								<input type="text" class="form-control" id="fax" placeholder="">           
							</div>

							<div class="col-md-1 align-self-center pr-0">
								<label for="email"><strong>Email</strong></label>             
							</div>
							<div class="col-md-5 mb-2 pl-0">
								<input type="email" class="form-control" id="email" placeholder="">           
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
</script>

@endsection