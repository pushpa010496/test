
<form action="{{url('e-book')}}" method="post" accept-charset="utf-8">

     <div class="help-block with-errors"></div>
     <div class="input-group">
      <input type="email" name="email" class="form-control" placeholder="Enter your email id to access magazine..." id="inputEmail" data-error="Bruh, that email address is invalid" required >       
      <input type="hidden" value="Issue 42" name="issue_id">
      <input type="hidden" value="35" name="issue_tid">
      <input type="hidden" value="archives" name="page">
      <input type="hidden" value="" name= "ebook_script">
      <span class="input-group-btn">
        <button class="btn btn-danger" type="submit" name="submit">Submit</button>
      </span>
    </div><!-- /input-group -->
</form>
