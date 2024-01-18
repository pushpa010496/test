@extends('../layouts/app')
@section('style')
<style type="text/css">
  
@media (max-width: 575.98px) {.card-columns {column-count: 1;} }
@media (min-width: 576px) and (max-width: 767.98px) {.card-columns {column-count: 2;} }
@media (min-width: 768px) and (max-width: 991.98px) {.card-columns {column-count: 3;} }
@media (min-width: 992px) and (max-width: 1199.98px) {
  .BookList .card-columns {column-count: 4;}
  .navbar-light .navbar-nav .nav-link {
     color: rgba(0,0,0,.8);
     font-size: 12px;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
     padding-left: 8px;
     padding-right: 10px;
  }
}
@media (min-width: 1200px) {.card-columns {column-count: 4;} }
</style>
@endsection

@section('content')

    <div class="clearfix"></div>

      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{url('magazine')}}">Magazine</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page">{{trans('messages.archives_title')}}</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">{{trans('messages.archives_title')}}</h1>            
                </div>
                <p>{{trans('messages.archives_text')}} </p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card-columns">
                  @foreach($ebook as $book)
                  <div class="BookList mb-2">
                    <div class="card shadow">                    
                      <a id="show_confirm" data-toggle="modal" href="#" data-target="#modal_confirm" data-id ="{{ str_slug($book->issue->id) }}" data-eid ="{{ $book->id }}" data-title ="{{ $book->issue->issue_no }}">
                        <img src="{{ config('app.url').'ebooks/'. str_slug($book->issue->issue_no).'/'.$book->magazine_image }} " alt="" title="" class="img-fluid">
                        <div class="card-body p-0">
                          <h3 class="card-title bg-dark text-white pl-3 pr-2 pt-2 pb-2 m-0">{{ $book->issue->issue_no}}</h3>
                          <div class="card-text pt-2 pb-3 pr-1">
                            <ul>
                              @foreach($book->issue->categories as $cat)
                                 <li>{{ $cat->name }}</li>
                              @endforeach
                            </ul>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  @endforeach                
                </div>
              </div>

            </div>
            <!-- // RIGHT SECTION // --> 

            <!--// RIGHT SECTION - Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
              <div class="bg-gray border-secondary">
                <div class="text-center">
                  {{-- <h3 class="adv-title">Advertisements</h3> --}}
                </div>
                @include('layouts.partials._square_banner')
              </div>
            </div>
            <!-- RIGHT SECTION - Square Banners // --> 
        </div>

      </div>
    




{{-- Popup --}}
<div class="modal fade" id="modal_confirm" tabindex="-1" role="dialog" aria-labelledby="modal_confirm" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_confirm">{{ old('title') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" accept-charset="utf-8">
          {{ csrf_field() }}        
          <div class="help-block with-errors"></div>
          <div class="input-group">
            <input type="email" name="email" class="form-control" placeholder="Enter your email id to access magazine..." id="inputEmail" data-error="Bruh, that email address is invalid" required >  
            
            <input type="hidden" value="{{ old('title') }}" name="title">
            <input type="hidden" value="{{ old('ebook_id') }}" name="ebook_id">
            <input type="hidden" value="{{ old('issue_id') }}" name="issue_id">
            <input type="hidden" value="{{ old('action') }}" name="action">
            <input type="hidden" value="archives" name="page">
            
            <span class="input-group-btn">
              <button class="btn btn-danger" type="submit" name="submit">Submit</button>
            </span>
          </div><!-- /input-group -->
          <span class="help-block">{{ $errors->first('email', ':message') }}</span>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- End popup --}}

@endsection

@section('scripts')
<script>
  @if($errors->any())      
      $(document).ready(function(){ 
        $('#modal_confirm').modal('show'); 
        $("form").attr('action',"{{old('action')}}");  
      });                  
  @endif

$(function () {
  $('body').on('hidden.bs.modal', '.modal', function () {
    $(this).removeData('bs.modal');

  });
});
var $url_path = '{!! url('/') !!}';

$('body').on('click','#show_confirm', function (event) {

  var ebook_id = $(this).data("eid");
  var issue_id = $(this).data("id");
  var action = "{{ url('archives-magazine') }}" +'/' + issue_id;
  $('.modal-title').text($(this).data("title"));
  $("form").attr('action',action);
  $("[name=title]").val($(this).data("title"));
  $("[name=action]").val(action);
  $("[name=issue_id]").val(issue_id);
  $("[name=ebook_id]").val(ebook_id);   

});
</script>


@endsection