@extends('../layouts/app')
@section('style')
<meta http-equiv="refresh" content="4;URL='{{url('/')}}/whitepapersdwnlink/{{@$whitepaper_id}}'" />  

@endsection

@section('content')
    <div class="clearfix"></div>

    	<div class="container">
    		<!-- // RIGHT SECTION --> 
    		<div class="col-sm-12 col-12  p-1">

    			<center><br />
    				<br />

    				<h1 style="color: red;" align="center">Thank You...!</h1>
    				<h3 style="color: green;" align="center"><em>We are glad that you found relevant information that answers your queries. Thank you for downloading one of our whitepapers. A confirmation email shall be sent to you shortly.</em>
    				</h3>

    				<br>
    				

    				<br/><br/><br/>
    				<p></p>
    				<br/><br/><br/>
    				<p></p>
    			</center>
    		</div>
    	</div>

@endsection

@section('scripts')

@endsection