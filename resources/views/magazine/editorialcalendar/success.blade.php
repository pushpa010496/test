@extends('../layouts/app')
@section('style')
<meta http-equiv="refresh" content="4;URL='{{url('/')}}/editorialcalendardwnlink'" />  
@endsection

@section('content')


    <div class="clearfix"></div>

    <div class="row">
      <div class="container">
        <div class="pt-5 d-sm-none d-xs-none"></div>
        <div class="col-lg-10 offset-lg-1 pt-5 pb-5">
            <h5 class="text-center font-weight-bold" style="color: green;">Your Editorial calendar request was successfully submitted</h5> 
            <p style="line-height: 150%;" align="center">Thank you for your interest in Editorial Calendar. You will get a pop-up dialogue to download the document. Additionally we have also sent a direct download link to your registered email-id.
            </p>
        </div>
        <div class="pt-5 pb-5"></div>
      </div>
    </div>

  @if(session('status') == 'true') 
  <a id="fileopen" target="_blank" style="display: none" href="{{ trans('messages.editorial_calendar_pdf') }}">download</a>
  
  @endif  
@endsection

@section('scripts')
  @if(Session('status') == 'true') 
    <script type="text/javascript">   
      for (let link of document.querySelectorAll('a[id="fileopen"]'))
        link.click();
    </script>
  @endif  
@endsection