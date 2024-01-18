@extends('../layouts/app')
@section('style')
<link rel="stylesheet" href="{{ config('app.url') }}css/form-design.css">
<style type="text/css">
  .grecaptcha-badge { 
    bottom: 100px !important;
  }
  .rc-anchor-normal{
    background: #000 !important;
    color: #000 !important; 
  }
</style>
@endsection
<script src="https://www.google.com/recaptcha/api.js?render=6LepWukgAAAAAAiXZhUUZrCZB0g4gsjP5_cCb1gu"></script>
<script> 
    grecaptcha.ready(function() {
      grecaptcha.execute('6LepWukgAAAAAAiXZhUUZrCZB0g4gsjP5_cCb1gu', {action: 'submit'}).then(function(token) {
        document.getElementById("g-recaptcha-response").value=token
      });
    });
</script>

@section('content')


    <div class="clearfix"></div>
      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{url('/magazine')}}">Magazine</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page">{{ str_replace('-', ' ', ucwords(Request::segment(count(Request::segments())))) }}</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-8">

              <div class="row form-container">

                  <div class="col-lg-10 offset-lg-1"> 

                    <h1 class="text-center form-title pt-3">EDITORIAL CALENDAR DOWNLOAD</h1>
                   <!-- <form method="post" name="editorialcalendar_form" method="post" id="writemessage" class="form_count" accept-charset="utf-8" _lpchecked="1"> -->
                   <form action="{{route('editorialcalendar.post')}}" method="post">        

                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    
                      <input type="hidden" name="name" value="editorial-calendar">
                      <input type="hidden" value="editorial-calendar" name="type" id="type">

                      <div class="form-group col-lg-12 {{ $errors->first('firstname', 'has-error')}}">
                        <input type="text" class="form-control" value="{{old('firstname')}}" name="firstname" placeholder="First Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets" required="">
                        <span class="help-block">{{ $errors->first('firstname', ':message') }}</span>
                      </div>

                      <div class="form-group col-lg-12   {{ $errors->first('lastname', 'has-error')}}">
                        <input type="text" class="form-control" value="{{old('lastname')}}" name="lastname" placeholder="Last Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets " required="">
                        <span class="help-block">{{ $errors->first('lastname', ':message') }}</span>
                      </div>

                      <div class="form-group col-lg-12  {{ $errors->first('email', 'has-error')}}">
                        <input type="email*" class="form-control" value="{{old('email')}}" name="email" placeholder="Business Email*" required="">
                         <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                      </div>

                      <div class="form-group col-lg-12  {{ $errors->first('mobile', 'has-error')}}">
                        <input type="text" class="form-control" value="{{old('mobile')}}" name="mobile" placeholder="Telephone*" pattern="[0-9\s._*#()+-]+" minlength="8" required="">
                        <span class="help-block">{{ $errors->first('mobile', ':message') }}</span>
                      </div>

                      <div class="form-group col-lg-12  {{ $errors->first('company', 'has-error')}}">
                        <input type="text" class="form-control" value="{{old('company')}}" name="company" placeholder="Company*" pattern="[A-Za-z0-9\s]{2,50}" required="">
                        <span class="help-block">{{ $errors->first('company', ':message') }}</span>
                      </div>

                      <div class="form-group col-lg-12  {{ $errors->first('cf_leads_jobtitle', 'has-error')}}">
                        <input type="text" class="form-control" value="{{old('cf_leads_jobtitle')}}" name="cf_leads_jobtitle" placeholder="Job Title*" pattern="[A-Za-z0-9\s]{2,50}" required="">
                        <span class="help-block">{{ $errors->first('cf_leads_jobtitle', ':message') }}</span>
                      </div>

                      <div class="form-group col-lg-12  {{ $errors->first('description', 'has-error')}}">
                        <textarea class="form-control" type="textarea" name="description" placeholder="Message" maxlength="200" rows="3">{{old('description')}}</textarea>
                        <span class="help-block">{{ $errors->first('description', ':message') }}</span>
                      </div>
                      <input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">
                      <!-- <div class="form-group col-lg-12  {{ $errors->first('g-recaptcha-response', 'has-error')}}">
                         {!! Form::captcha() !!}
                         @if ($errors->has('g-recaptcha-response'))
                         <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                         @endif
                         <div style="color: #d77878" class="verifi"></div>

                     </div> -->
                      
                        <div class="form-group col-lg-12">
                          <input type="submit" value="submit"   class="btn submit-form btn-block PF-MTB10 PF-MB20"/>
                          <!-- <input type="submit" class="btn btn-block btn-info" id="submit-button" value="SUBMIT" onclick="return checkform();"> -->
                        
                      </div>
                    </form>

                  <div class="clearfix"></div>

                  <div class="PF-MB20"></div>

                </div> 
              </div>
            </div>
            <!-- // RIGHT SECTION // --> 


            <!--// RIGHT SECTION - Square Banners -->
            <div class="col-lg-3 offset-lg-1 d-none d-sm-block text-center">               
              <div class="bg-gray border-secondary">
                <div class="text-center">
                  <h3 class="adv-title mb-1">Advertisements</h3>
                </div>
                @include('layouts.partials._square_banner')

              </div>
            </div>
            <!-- RIGHT SECTION - Square Banners // --> 
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
  var url = "{{route('editorialcalendar.post')}}";
  function OnButton1(){
    setTimeout(function(){
      document.editorialcalendar_form.action = url;
      document.editorialcalendar_form.submit();
        });
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
@endsection