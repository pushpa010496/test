@extends('../layouts/app')
@section('style')
<!-- <link rel="stylesheet" href="{{ config('app.url') }}css/form-design.css"> -->
@endsection
<style type="text/css">
  .error p{color:#fff !important;text-align:left; padding-top:2px;}

  .form-control  {
    height: 34px;
    padding: 6px 12px;
    width: 100%;
    border: none !important;
    border-bottom: 1px solid #ccc !important;
    margin-bottom: 10px;
  }
  @media only screen and (max-width: 500px) {
    #rc-imageselect, .g-recaptcha {
      transform:scale(.8);-webkit-transform:scale(.8);transform-origin:0 0;-webkit-transform-origin:0 0;
    }     
  }
</style>

@section('content')

<div class="clearfix"></div>

<div class="container">

        <!-- <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Subscribe</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page">{{ str_replace('-', ' ', ucwords(Request::segment(count(Request::segments())))) }}</li>
            </ol>
          </nav>
        </div> -->

        <div class="row PF-WytBG">
          <!-- // RIGHT SECTION --> 
          <div class="col-lg-8 col-md-8 col-sm-9 pt-4 pb-4">
            <div class="shadow form-container">
              <div class="row">

                <div class="col-lg-8 offset-lg-2"> 

                  <p>{{ @$loaded }}</p>
                  @if(@Session('status') == 'true') 
                  <h2 style="color: green;" align="center">Thank You!</h2>                      
                  @endif
                  <h1 class="text-center form-title pt-2 pb-2 PF-TXTRED">SUBSCRIBE WITH US</h1>
                  <form action="{{route('registration.post')}}" method="post" name="vtiger_form" method="post" id="writemessage" class="form_count" accept-charset="utf-8" _lpchecked="1">        

                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input type="hidden" name="" class="action_url" value="{{route('registration.post')}}">

                    <input type="hidden" name="name" value="e-newsletter-subscribe">

                    <div class="form-group col-lg-12  {{ $errors->first('fullname', 'has-error')}}">
                      <input type="text" class="form-control" value="{{old('fullname')}}" name="fullname" placeholder="Full Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets " required="">
                      <input type="hidden" value="e-newsletter-subscribe" name="type" id="type">
                      <span class="help-block">{{ $errors->first('fullname', ':message') }}</span>  
                    </div>

                    <div class="form-group col-lg-12 {{ $errors->first('email', 'has-error')}}">
                      <input type="email*" class="form-control" value="{{old('email')}}" name="email" placeholder="Email*" required="">
                      <span class="help-block">{{ $errors->first('email', ':message') }}</span>  
                    </div>

                    <div class="form-group col-lg-12 {{ $errors->first('mobile', 'has-error')}}">
                      <input type="text" class="form-control" value="{{old('mobile')}}" name="mobile" placeholder="Telephone*" pattern="[0-9\s._*#()+-]+" minlength="8" required="">
                      <span class="help-block">{{ $errors->first('mobile', ':message') }}</span>  
                    </div>

                    <div class="form-group col-lg-12 {{ $errors->first('company', 'has-error')}}">
                      <input type="text" class="form-control" value="{{old('company')}}" name="company" placeholder="Company*" pattern="[A-Za-z0-9\s]{2,50}" required="">
                      <span class="help-block">{{ $errors->first('company', ':message') }}</span>  
                    </div>  

                    <div class="form-group col-lg-12 {{ $errors->first('cf_leads_jobtitle', 'has-error')}}">
                      <input type="text" class="form-control" value="{{old('cf_leads_jobtitle')}}" name="cf_leads_jobtitle" placeholder="Job Title*" pattern="[A-Za-z0-9\s]{2,50}" required="">
                      <span class="help-block">{{ $errors->first('cf_leads_jobtitle', ':message') }}</span>  
                    </div>

                    <div class="form-group col-lg-12 {{ $errors->first('country', 'has-error')}}">
                      {{ Form::select('country', $countries, null, ['class' => 'form-control','required'=>'required']) }}
                      <span class="help-block">{{ $errors->first('country', ':message') }}</span> 
                    </div>

                    <div class="form-group col-lg-12 {{ $errors->first('description', 'has-error')}}">
                      <textarea class="form-control" type="textarea" name="description" placeholder="Message" maxlength="140" rows="3">{{old('description')}}</textarea>
                      <span class="help-block">{{ $errors->first('description', ':message') }}</span>  
                    </div>

                    <div class="form-group col-lg-12">
                     <h3 class="PF-TXTRED mb-2">Subscriptions : </h3>
                     <div class="text-left form-group mb-0"> 
                      <label class="checkbox-inline text-muted"> 
                        <input type="checkbox" name="magazine_de" id="magazine_de" checked> &nbsp; Yes, I would like to subscribe to Digital Magazine
                      </label> 
                    </div> 
                    <div class="text-left form-group mb-0"> 
                      <label class="checkbox-inline text-muted"> 
                        <input type="checkbox" name="current_newsletter" id="current_newsletter" checked> &nbsp; Yes, I would like to subscribe to e-Newsletter
                      </label> 
                    </div> 
                    <div class="text-left form-group mb-0"> 
                      <label class="checkbox-inline text-muted"> 
                        <input type="checkbox" name="content_newsletter" id="content_newsletter" checked> &nbsp; Yes, I would like to subscribe to Event e-Newsletter
                      </label> 
                    </div> 
                    <div class="text-left form-group mb-0"> 
                      <label class="checkbox-inline text-muted"> 
                        <input type="checkbox" name="special_offers" id="special_offers" checked> &nbsp; Yes, I would like to be notified about {{trans('messages.sitename')}} updates and special offers.
                      </label> 
                    </div> 
                  </div>

                  <div class="form-group col-lg-12">
                   {!! Form::captcha() !!}
                   @if ($errors->has('g-recaptcha-response'))
                   <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                   @endif
                   <div style="color: #d77878" class="verifi"></div>
                 </div>



                 <div class="form-group col-lg-12">
                  <!-- <input type="submit" value="SUBMIT" id="submit-button"  class="btn submit-form btn-block PF-MTB10 PF-MB20"/> -->
                  <input type="submit" class="btn btn-block btn-info" id="submit-button" value="SUBMIT" >

                </div>
              </form>

              <div class="clearfix"></div>

              <div class="pb-3"></div>
            </div> 
          </div>
        </div>
      </div>
      <!-- // RIGHT SECTION // --> 


      <!--// RIGHT SECTION - Square Banners -->
      <div class="col-lg-4 col-md-4 col-sm-3 d-none d-sm-block text-center">               
        <div class="bg-gray border-secondary">
          <div class="text-center">
            <h3 class="adv-title mb-0 mt-2">Advertisements</h3> 
          </div>

          <!-- Square Banner -->
          @include('layouts.partials._square_banner')
          <!-- End Square Banner -->
        </div>
      </div>
      <!-- RIGHT SECTION - Square Banners // --> 
    </div>

  </div>


  @endsection

  @section('scripts')

  @endsection