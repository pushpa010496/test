@extends('../layouts/app')
@section('style')
<link rel="stylesheet" href="{{ config('app.url') }}css/form-design.css">
@endsection

@section('content')


    <div class="clearfix"></div>


      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{url('/magazine')}}">e-newsletter</a>
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

                    <h1 class="text-center form-title pt-3">E-NEWSLETTER SUBSCRIBE FORM</h1>
                      @if(Session('status') == 'true') 
                        <h2 style="color: green;" align="center">Thank You!</h2>
                        <h3 style="color: green;" align="center"><em>We are grateful to you for your subscription to our e-Newsletter. A confirmation email shall be sent to you shortly. Your inbox will now be home to the latest healthcare news and updates.</em> </h3>
                      @endif

                    <form action="{{route('newsletter.post')}}" method="post" name="vtiger_form" method="post" id="writemessage" class="form_count" accept-charset="utf-8" _lpchecked="1">        

                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <input type="hidden" name="" class="action_url" value="{{route('newsletter.post')}}">
                      
                      <input type="hidden" name="name" value="e-newsletter-subscribe">

                      <div class="form-group col-lg-12">
                        <input type="text" class="form-control" value="" name="fullname" placeholder="Full Name*" pattern="[A-Za-z\s]{3,30}" title="Enter only alphabets " required="">
                        <input type="hidden" value="e-newsletter-subscribe" name="type" id="type">
                      </div>

                       <div class="form-group col-lg-12">
                        <input type="text" class="form-control" value="" name="cf_leads_jobtitle" placeholder="Job Title*" pattern="[A-Za-z0-9\s]{3,30}" required="">
                      </div>

                      <div class="form-group col-lg-12">
                        <input type="email*" class="form-control" value="" name="email" placeholder="Email*" required="">
                      </div>

                      <div class="form-group col-lg-12">
                        <input type="text" class="form-control" value="" name="mobile" placeholder="Telephone*" pattern="[0-9\s._*#()+-]+" required="">
                      </div>

                       <div class="form-group col-lg-12">
                        <input type="text" class="form-control" value="" name="fax" placeholder="Fax*" pattern="[0-9\s._*#()+-]+" required>
                      </div>

                      <div class="form-group col-lg-12">
                        <input type="text" class="form-control" value="" name="company" placeholder="Company*" pattern="[A-Za-z0-9\s]{3,30}" required="">
                      </div>

                      <div class="form-group col-lg-12">
                        <div class="g-recaptcha" data-sitekey="6LepWukgAAAAAAiXZhUUZrCZB0g4gsjP5_cCb1gu">
                          <div style="width: 304px; height: 78px;">
                            <div>
                              <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LepWukgAAAAAAiXZhUUZrCZB0g4gsjP5_cCb1gu&amp;co=aHR0cHM6Ly93d3cuYXNpYW5oaG0uY29tOjQ0Mw..&amp;hl=en&amp;v=v1545073489967&amp;size=normal&amp;cb=9daq5uigdto6" role="presentation" name="a-2t3zzprf2o5y" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" width="304" height="78" frameborder="0"></iframe>
                            </div>
                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">
                            </textarea>
                          </div>
                        </div>
                        <div style="color: #d77878" class="verifi"></div>
                      </div>

                     
                       
                        <div class="form-group col-lg-12">
                          <!-- <input type="submit" value="SUBMIT" id="submit-button"  class="btn submit-form btn-block PF-MTB10 PF-MB20"/> -->
                          <input type="submit" class="btn submit-form btn-block PF-MTB10 PF-MB20" id="submit-button" value="SUBMIT" >
                     
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
                    @if($banner->positions[0]->id == 6 and $pcount->id == 30)

                    <a href="{{$banner->url}}" target="_blank" class="mb-3" title="{{$banner->title}}"><img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}banners/{{$banner->image}}" alt="{{$banner->alt_tag}}" /></a>
                    @else
                    @endif  
                  @endforeach       
                @endforeach         

              </div>
            </div>
            <!-- RIGHT SECTION - Square Banners // --> 
        </div>

      </div>


@endsection

@section('scripts')

@endsection