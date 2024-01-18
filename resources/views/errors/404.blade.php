@extends('../layouts/app')

@section('style')
<style>
  .bg-404{
   
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }
  .error-template {
    padding: 40px 15px;
    text-align: center;
}
.gotohome { background-color: orangered; color: #fff; padding: 8px 16px;  }
.gotohome:hover { color: #fff; }
</style>
@endsection
@section('content')
  <div role="main">
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <img src="{{config('app.url')}}images/error-404.png" alt="" title="" />
                    <div class="error-details">
                       <h2 class="pb-3"> Sorry, an error has occured, Requested page not found!</h2>
                       <p><a href="{{url('/')}}" title="" class="gotohome">Go to Home Page</a></p>
                    </div>
                </div>
            </div>
         </div>
      </div>
    <div class="container pt-4 pb-4">
  </div>
  @endsection
  @section('scripts')
  <script>ga('send', 'pageview', '404.html?page='+ document.location.pathname + document.location.search +'&from=' + document.referrer);</script> 
@endsection