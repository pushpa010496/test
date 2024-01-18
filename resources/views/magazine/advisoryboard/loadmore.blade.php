 @foreach($data as $val)
 <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
 	<div class="row PF-BGf7f7f7 PF-BrdrDDD">            
 		<div class="col-lg-2 p-2 text-center"> 
 			<img class="img-fluid shadow-sm" src="{{ config('app.url').'advisoryboard/'.$val->image}}" title="{{ $val->title }}" alt="{{ $val->title }}"  width="150" />
 		</div>

 		<div class="col-lg-10 p-2">
 			<h2 class="PF-TXTRED">{{ $val->title }}</h2>
 			<span class="font-14 MB-0">{!!$val->description!!}</span>
 		</div>
 	</div>
 </div>
@endforeach