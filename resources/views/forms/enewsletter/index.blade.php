@extends('../layouts/app')
@section('style')
<link rel="stylesheet" href="{{ config('app.url') }}css/form-design.css">
@endsection
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

@section('content')


    <div class="clearfix"></div>


      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{url('/e-newsletter')}}">e-Newsletter</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page">e-Newsletter Subscribe Form</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-8">

              <div class="row form-container">

                  <div class="col-lg-10 offset-lg-1"> 

                   
                      @if(Session('status') == 'true') 
                      <h2 style="color: green;" align="center"><b><u>Thank You </b></u></h2>
                        <h2 style="color: green;" align="center"><b>Your eNewsletter Subscription was Successful</b></h2>
                         <h3 style="color: green;" align="center">Thank you for subscribing for eNewsletter. Your details are duly recorded with us. </h3>
                         <h3 style="color: green;" align="center">You will receive the eNewsletter soon. </h3>
                      @endif
                    <h1 class="text-center form-title pt-3">E-NEWSLETTER SUBSCRIBE FORM</h1>
                   
                    <form method="post" name="newsletter_form" method="post" id="writemessage" class="form_count" accept-charset="utf-8" _lpchecked="1">         

                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <input type="hidden" name="" class="action_url" value="{{route('enewsletter.post')}}">
                      
                      <input type="hidden" name="name" value="e-newsletter-subscribe">

                      <div class="form-group col-lg-12  {{ $errors->first('fullname', 'has-error')}}">
                        <input type="text" class="form-control" value="{{ old('fullname') }}" name="fullname" placeholder="Full Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets " required="">
                        <input type="hidden" value="e-newsletter-subscribe" name="type" id="type">
                         <span class="help-block">{{ $errors->first('fullname', ':message') }}</span>   
                      </div>

                       <div class="form-group col-lg-12  {{ $errors->first('cf_leads_jobtitle', 'has-error')}}">
                        <input type="text" class="form-control" value="" name="cf_leads_jobtitle" placeholder="Job Title*" pattern="[A-Za-z0-9\s]{2,50}" required="">
                         <span class="help-block">{{ $errors->first('cf_leads_jobtitle', ':message') }}</span>   
                      </div>

                      <div class="form-group col-lg-12  {{ $errors->first('email', 'has-error')}}">
                        <input type="email*" class="form-control" value="" name="email" placeholder="Email*" required="">
                         <span class="help-block">{{ $errors->first('email', ':message') }}</span>   
                      </div>

                      <div class="form-group col-lg-12  {{ $errors->first('mobile', 'has-error')}}">
                        <input type="text" class="form-control" value="" name="mobile" placeholder="Telephone*" pattern="[0-9\s._*#()+-]+" minlength="8" required="">
                         <span class="help-block">{{ $errors->first('mobile', ':message') }}</span>   
                      </div>

                       <div class="form-group col-lg-12  {{ $errors->first('fax', 'has-error')}}">
                        <input type="text" class="form-control" value="{{old('fax')}}" name="fax" placeholder="Fax*" pattern="[0-9\s._*#()+-]+" required>
                         <span class="help-block">{{ $errors->first('fax', ':message') }}</span>   
                      </div>

                      <div class="form-group col-lg-12  {{ $errors->first('company', 'has-error')}}">
                        <input type="text" class="form-control" value="" name="company" placeholder="Company*" pattern="[A-Za-z0-9\s]{2,50}" required="">
                         <span class="help-block">{{ $errors->first('company', ':message') }}</span>   
                      </div>
                         <input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">
                   
                     

                     <div class="form-group col-lg-12">
                      <input type="submit" class="btn btn-block btn-info" id="submit-button" value="SUBMIT" onclick="return checkform();">

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
               
                @foreach($banners as $k=>$banner)   
                  @foreach($banner->pagesCount as $j=>$pcount)
                    @if($banner->positions[0]->id == 6 and $pcount->id == 32)

                    <a href="{{$banner->url}}" target="_blank" class="mb-3" title="{{$banner->title}}"><img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}ensign/{{$banner->image}}" alt="{{$banner->alt_tag}}" /></a>
                    @else
                    @endif  
                  @endforeach
                @endforeach      

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
  var url = "{{route('enewsletter.post')}}";
  function OnButton1(){
    setTimeout(function(){
      document.newsletter_form.action = url;
      document.newsletter_form.submit();
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