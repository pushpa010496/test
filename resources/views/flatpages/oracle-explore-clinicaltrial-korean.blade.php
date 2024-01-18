<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="language" content="english" /> 
	<title>
새로운 환경에서 임상 시험 설계 및 데이터 수집 탐색</title>
	<meta name="viewport" content="width=device-width" />
	<meta name="robots" content="noindex" />
	<link rel="shortcut icon" href="{{ config('app.url') }}images/favicon.ico" type="image/x-icon">
	<meta name="title" content="Exploring Clinical Trial Design and Data Collection in a New Environment" />
	<meta name="description" content="Exploring Clinical Trial Design and Data Collection in a New Environment" />
	<meta name="keywords" content="" />
	<meta property="og:title" content="Exploring Clinical Trial Design and Data Collection in a New Environment" />
	<meta property="og:description" content="Exploring Clinical Trial Design and Data Collection in a New Environment" />
	<meta property="og:Keywords" content=""/>
	<meta property="og:image" content="{{ config('app.url') }}images/oracle-health-sciences-embrance-korean-og.png" />
	<link rel="canonical" href="{{URL::current()}}"/>
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
		.form-bg{
			background-color: #335160;
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
		.BG-BLUE{background-color: #335160;}
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
		.font-18 {font-size: 18px;line-height: 1.2;}
		.font-16 {font-size: 16px;line-height: 1.2;}

		.expandcheckbox-div{
			-webkit-transition: all 1s ease-in-out;
			-moz-transition: all 1s ease-in-out;
			-ms-transition: all 1s ease-in-out;
			-o-transition: all 1s ease-in-out;
			/*transition: all 1s ease-in-out;*/
			  transition: visibility 0s, opacity 0.5s linear;
}
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
					<img src="{{ config('app.url') }}images/logo.png" alt="Pharma Focus Asia" class="img-fluid pt-3 pb-3" width="200">
				</div>

			<!--  <div class="col-md-2 col-6 offset-md-7 align-self-center" align="right">
					<select class="custom-select custom-select-sm brdr-radius" id="countrylng" name="countrylng">
						<option selected disabled>Select Language</option>
					<option value="english">English</option> 
						<option value="chinese">简体中文</option>
						<option value="korean">한국어</option>
						 <option value="thai">ไทย</option>
						<option value="indonesian">Bahasa Indonesia</option>
						<option value="malaysian">Bahasa Malay</option>
						<option value="vietnames">Tiếng Việt Nam</option>
						<option value="taiwan">繁體中文</option> 
					</select>
				</div>  -->
			</div>
		</div>
	</div>


	<div class="container-fluid shadow">	
		<div class="row">
			<img src="{{ config('app.url') }}images/oracle-health-sciences-embrance-korean-banner.png" alt="Oracle - AI Revolution in Multivigilance" class="img-fluid">
		</div>		
	</div>


	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">		
				<!-- <h1 class="font-weight-bold TXT-ORNG pt-4 font-20">The AI Revolution in Multivigilance</h1> -->

				<p class="pt-4">COVID-19가 전 세계적으로 확산됨에 따라 생명과학 조직은 임상 시험에 대한 접근 방식을 신속하게 변경해야 했습니다. 여행 제한 및 폐쇄로 인해 환자에 대한 물리적 접근이 거의 불가능해졌습니다. 조직은 직접 방문이 아닌 원격 데이터 수집 기술 및 프로세스를 활용하여 환자와 소통하는 분산형 임상 시험 모델로 전환하려는 계획을 가속화했습니다.</p>

				<p>Informa Pharma Intelligence와 Oracle Health Sciences는 조직이 이 새로운 임상 실험 환경에 어떻게 적응하고 있는지 더 잘 이해하기 위해 전 세계의 임상 실험에 참여하는 바이오 제약 회사, 계약 연구 조직 및 의료 기기 회사를 대상으로 설문 조사를 실시했습니다.</p>

				<p>대다수의 응답자는 COVID-19 전염병이 분산형 임상 시험 방법의 채택을 가속화했다고 밝혔습니다. 4분의 3은 시험 중 적어도 일부가 분산되어 있다고 말했으며, 대부분은 시험의 절반 이상에 이 접근 방식을 사용한다고 밝혔습니다.</p>

				<p class="font-weight-bold pt-2">자세히 알아보려면 비즈니스 개요를 읽어보세요.</p>

				<div class="text-center">
					<img src="{{ config('app.url') }}images/oracle-health-sciences-logo.jpg" alt="Oracle" class="img-fluid mb-2" width="300">
				</div>
				
				<h2 class="mb-1 font-weight-bold font-18 TXT-GRAY">Oracle Health Sciences 정보</h2>
				<p>생명 과학 클라우드 기술의 리더인 Oracle Health Sciences의 Clinical One 및 Safety One은 임상 연구 및 약물 감시에 종사하는 대기업 및 신흥 기업의 전문가들로부터 전 세계적으로 신뢰받고 있습니다. 20년 이상의 경험을 바탕으로 Oracle Health Sciences는 임상 개발을 지원하고, 발전을 가속화하기 위한 혁신을 제공하고, 생명 과학 산업이 환자 결과를 개선할 수 있도록 지원하기 위해 최선을 다하고 있습니다. 오라클 건강 과학. 평생.</p>

			</div>

			<div class="col-lg-4 col-12 pt-3 pb-4">
				<div class="pb-3 d-none d-sm-block"></div>
				<div class="form-bg p-3"> 
					<h2 class="text-center mb-2 text-white font-weight-bold font-18">무료 백서 다운로드</h2>              
					<form action="{{route('oracleExploreClinicaltrialKorean.post')}}" method="post">
	               		{{csrf_field()}}

	               		<input type="hidden" name="formtype" value="normal-form">
	               		<input type="hidden" name="type" value="Oracle HS (explore clinical trials) Korean">	
	                  	<input type="hidden" name="client_subject" value="Registration for Oracle HS ">	 
	                  	<input type="hidden" name="admin_subject" value="Registration for Oracle HS ">	
	                  	<input type="hidden" name="client_message" value="We appreciate your interest in the Oracle HS   .The concerned team will get back to you soon.">	
	                  	<input type="hidden" name="site_name" value="PharmaFocusAsia">	
	                  	<input type="hidden" name="thank_message" value="Thank you for showing your interest in Oracle HS">

	                  	<div class="form-group mb-0 {{ $errors->first('first_name', 'has-error')}}">
	                  		<div class="form-row">
	                  			<div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
	                  				<input type="text" class="form-control" id="first_name" name="first_name" placeholder="
이름*" value="" required>
	                  				<span class="help-block">{{ $errors->first('first_name', ':message') }}</span>   
	                  			</div>
	                  			<div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
	                  				<input type="text" class="form-control" id="last_name" name="last_name" placeholder="
성*" value="" required>
	                  				<span class="help-block">{{ $errors->first('last_name', ':message') }}</span>   
	                  			</div>
	                  		</div>
	                  	</div>

	                  	<div class="form-group {{ $errors->first('email', 'has-error')}}">
	                  		<input type="email" class="form-control" name="email" id="email" placeholder="
비즈니스 이메일*" value="{{ old('email') }}" required>
	                  		<span class="help-block">{{ $errors->first('email', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group {{ $errors->first('job_title', 'has-error')}}">
	                  		<input type="text" class="form-control" name="job_title" id="job_title" placeholder="
직위*" value="{{ old('job_title') }}" required>
	                  		<span class="help-block">{{ $errors->first('job_title', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group {{ $errors->first('company', 'has-error')}}">
	                  		<input type="text" class="form-control" name="company" id="company" placeholder="
회사 이름*" value="{{ old('company') }}" required>
	                  		<span class="help-block">{{ $errors->first('company', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group {{ $errors->first('phone', 'has-error')}}">
	                  		<input type="text" class="form-control" name="phone" id="phone" placeholder="
업무용 전화*" value="{{ old('phone') }}" required>
	                  		<span class="help-block">{{ $errors->first('phone', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group {{ $errors->first('country', 'has-error')}}">
	                  		<select class="form-control" name="country" required value="{{ old('country') }}">
	                  			<option value="">
국가 선택*</option>
	                  			@foreach($countries as $country)
	                  			<option value="{{$country->country_name}}">{{$country->country_name}}</option> 
	                  			@endforeach
	                  		</select>
	                  		<span class="help-block">{{ $errors->first('country', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group {{ $errors->first('zip_code', 'has-error')}}">
	                  		<input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="
우편번호*" value="{{ old('zip_code') }}" required>
	                  		<span class="help-block">{{ $errors->first('zip_code', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group {{ $errors->first('headquarters', 'has-error')}}">
	                  		<select class="form-control" name="headquarters" required value="{{ old('headquarters') }}">
	                  			<option value="">
본사 위치*</option>
	                  			@foreach($countries as $country)
	                  			<option value="{{$country->country_name}}">{{$country->country_name}}</option> 
	                  			@endforeach
	                  		</select>
	                  		<span class="help-block">{{ $errors->first('headquarters', ':message') }}</span>   
	                  	</div>

	                  	<div class="form-group">
	                  		<select class="form-control" name="pdf_language" value="pdf_language" required>
	                  			<option value="" disabled selected>
PDF 다운로드-*</option>
	                  			<option value="English">English</option>
	                  			<option value="Korean">Korean (한국어)</option>
	                  			<option value="Both">Both</option> 
	                  		</select>
	                  	</div>

						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox"  name="subscribe_type" value="Yes" class="custom-control-input" id="oracle-check1">
								<label class="custom-control-label text-light small" for="oracle-check1">예, 저는 Oracle의 제품, 이벤트 및 서비스에 대한 마케팅 커뮤니케이션을 구독합니다.</label>
							</div>
						</div>
					

							<div class="form-group text-left">
								<p class="TXT-LYT small mb-1">이는 Pharma Focus Asia와 Oracle이 공동 주최합니다. 두 회사 모두 귀하의 개인 정보를 처리합니다. 각 당사자는 자신의 개인 정보 사용을 관리할 책임이 있습니다.</p>
								<p class="mb-1 TXT-LYT small">이 양식을 작성하고 제출함으로써 귀하는 Oracle이 규정에 따라 귀하의 개인 정보를 처리한다는 것을 이해하고 동의합니다.<a href="https://www.oracle.com/legal/privacy/privacy-policy.html" target="_blank" class="TXT-ORNG">
오라클 개인정보 보호정책</a>.
액세스, 보존, 수정, 삭제, 보안, 국가 간 이전 및 기타 주제에 대한 정보를 포함하여 Oracle의 개인 정보 수집 및 사용에 대한 추가 세부 정보는<a href="https://www.oracle.com/legal/privacy/privacy-policy.html" target="_blank" class="TXT-ORNG">오라클 개인정보 보호정책</a>.</p>
								<p class="mb-0 TXT-LYT small">Oracle은 제3자 등록 회사를 활용하여 이 프로그램의 등록 및 물류 활동을 관리합니다.</p>
							</div>
						

	                  	<div class="form-group mb-1" align="center">
	                  		<button type="submit" name="submit" class="btn btn-sm btn-danger pl-5 pr-5 brdr-radius">제출하다</button>
	                  	</div>


                	</form>  
					<div class="clearfix"></div>   
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
					<a class="btn btn-seconadry" role="button" id="aa" name="aa"  href="{{url('promotion/oracle-explore-clinicaltrial-korean')}}" aria-expanded="false">
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
