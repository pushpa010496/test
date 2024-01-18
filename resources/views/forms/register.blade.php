@extends('../layouts/app')
@section('style')
<style type="text/css">
  #block{display:block;border:none;box-shadow: 2px 2px 7px #999;border-radius:7px;}
  #block:hover{transform: scale(1.07);border-radius: 0px;}

  .transition, .transition:hover {
  -webkit-transition: all .5s ease-in-out;-moz-transition: all .5s ease-in-out;-ms-transition: all .5s ease-in-out;-o-transition: all .5s ease-in-out;transition: all .5s ease-in-out;}

  .red-block{color:#e26262;}
  .red-block:hover{background-color:#e26262;color: #fff !important;}

  .teal-blue-block{color: #01c0c8;}
  .teal-blue-block:hover{background-color:#01c0c8;color: #fff !important;}

  .green1-block{color: #77b905;}
  .green1-block:hover{background-color:#77b905;color: #fff !important;}

  .yellow-block{color: #ffb727;}
  .yellow-block:hover{background-color:#ffb727;color: #fff !important;}

  .aqua-blue-block{color: #15da84;}
  .aqua-blue-block:hover{background-color:#15da84;color: #fff !important;}

  .violet-block{color: #9465dc;}
  .violet-block:hover{background-color:#9465dc;color: #fff !important;}

  .pink-block{color: #e966ac;}
  .pink-block:hover{background-color:#e966ac;color: #fff !important;}

  .blue-block{color: #3078b8;}
  .blue-block:hover{background-color:#3078b8;color: #fff !important;}
  
  .title-font{font-family:'Raleway', sans-serif !important;font-weight: 600;}
</style>
@endsection

@section('content')


  <div class="container pt-4 pb-5"> 
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pt-3 pb-3" align="center">
          <a href="{{url('registration')}}" target="_blank">
            <div id="block" class="p-3 red-block transition">
              <i class="fa fa-3x fa-pencil-square-o" aria-hidden="true"></i>
              <br/>
              <div class="pt-2 pb-2"></div>
              <span class="fa-lg title-font">Register Your Company</span>
              <div class="pt-1 pb-2"></div>
              <span class="text-center PF-TXTBlk">Create an amazing impact REGISTERING your company on our portal. Accelerate your professional identity with us.</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pt-3 pb-3" align="center">
          <a href="{{url('latest-ebook')}}" target="_blank">
            <div id="block" class="p-3 teal-blue-block transition">
              <i class="fa fa-3x fa-book" aria-hidden="true"></i>
              <br/>
              <div class="pt-2 pb-2"></div>
              <span class="fa-lg title-font">Latest e-Book</span>
              <div class="pt-1 pb-2"></div>
              <span class="text-center PF-TXTBlk">{{trans('messages.siteshortname')}} latest E-book provides systematic approaches to enhance quality pharma detailing the recent technologies.</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pt-3 pb-3" align="center">
          <a href="{{url('editorial-calendar')}}" target="_blank">
            <div id="block" class="p-3 green1-block transition">
              <i class="fa fa-3x fa-calendar-check-o" aria-hidden="true"></i>
              <br/>
              <div class="pt-2 pb-2"></div>
              <span class="fa-lg title-font">Editorial Calendar</span>
              <div class="pt-1 pb-2"></div>
              <span class="text-center PF-TXTBlk">Our editorial calendar provides focused coverage of {{trans('messages.siteshortname')}} Issues covering emerging trends in the pharma industry. </span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pt-3 pb-3" align="center">
          <a href="{{url('advertise')}}" target="_blank">
            <div id="block" class="p-3 yellow-block transition">
              <i class="fa fa-3x fa-bullhorn" aria-hidden="true"></i>
              <br/>
              <div class="pt-2 pb-2"></div>
              <span class="fa-lg title-font">Advertise</span>
              <div class="pt-1 pb-2"></div>
              <span class="text-center PF-TXTBlk">Advertise with us and speed up chances of getting seen and identified by your clients across the globe.</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pt-3 pb-3" align="center">
          <a href="{{url('mediapacks')}}" target="_blank">
            <div id="block" class="p-3 aqua-blue-block transition">
              <i class="fa fa-3x fa-file-pdf-o" aria-hidden="true"></i>
              <br/>
              <div class="pt-2 pb-2"></div>
              <span class="fa-lg title-font">Download Mediapack</span>
              <div class="pt-1 pb-2"></div>
              <span class="text-center PF-TXTBlk">Fast-track your business by taking advantage of our various offerings/services. Download our media pack here.</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pt-3 pb-3" align="center">
          <a href="{{url('post-event')}}" target="_blank">
            <div id="block" class="p-3 violet-block transition">
              <i class="fa fa-3x fa-mouse-pointer" aria-hidden="true"></i>
              <br/>
              <div class="pt-2 pb-2"></div>
              <span class="fa-lg title-font">Event Posting</span>
              <div class="pt-1 pb-2"></div>
              <span class="text-center PF-TXTBlk">Make it easy to keep up and engage better with your target audience globally by posting an event on our portal.</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pt-3 pb-3" align="center">
          <a href="{{url('e-newsletter-subscribe')}}" target="_blank">
            <div id="block" class="p-3 pink-block transition">
              <i class="fa fa-3x fa-user-plus" aria-hidden="true"></i>
              <br/>
              <div class="pt-2 pb-2"></div>
              <span class="fa-lg title-font">Newsletter Signup</span>
              <div class="pt-1 pb-2"></div>
              <span class="text-center PF-TXTBlk">Receive the latest updates happening in the industry straight to your inbox signing up our e-newsletter.</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pt-3 pb-3" align="center">
          <a href="{{url('contactus')}}" target="_blank">
            <div id="block" class="p-3 blue-block transition">
              <i class="fa fa-3x fa-microphone" aria-hidden="true"></i>
              <br/>
              <div class="pt-2 pb-2"></div>
              <span class="fa-lg title-font">Contact Us</span>
              <div class="pt-1 pb-2"></div>
              <span class="text-center PF-TXTBlk">Thank you for your interest in our services/products. Get in touch with us to serve you better. We would love to hear from you!</span>
            </div>
          </a>
        </div>

      </div>  
  </div>

@endsection

@section('scripts')

@endsection