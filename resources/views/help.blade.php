@extends ('layouts.app')

@section('content')

<hr/>
<div class="container">
<div class="row">
<div class="col-md-6">

<form class="form-horizontal" method="POST" action="{{url('/insert_help')}}">
{{(csrf_field())}}

<fieldset>
<legend style="color: green">Request form </legend>
<p style="color: black">Do you need help on SOFTWARE DEVELOPMENT / RESEARCH & DEVELOPMENT TASK? <BR>
fill the form below </p>
<!-- displayig the error for the validated fields of the form defined in the controller-->
@if(count($errors) > 0)
@foreach($errors->all() as $error)

<div class="alert alert-danger">
{{$error}}
</div>
@endforeach
@endif

<div class="form-group">
<label for="title" clas="col-lg-2 control-label"> Title of Application / Research </label>  
<div class="col-lg-10">
<input type="text" id="title" name="title" placeholder="Title of Research / Research" class="form-control" size="70">
</div>
</div>

<div class="form-group">
<label for="requirement_aimobj" clas="col-lg-2 control-label"> Requirements / Aim & Objectives</label>  
<div class="col-md-8">
<textarea id="requirement_aimobj" name="requirement_aimobj" placeholder="Requirements / Aim & Objectives" class="form-control" rows="4" cols="70">
</textarea>
</div>
</div>

<div class="form-group">
<label for="Methodology_technology" clas="col-lg-2 control-label"> Methodology / Technology</label>  
<div class="col-md-8">
<textarea id="Methodology_technology" name="Methodology_technology" placeholder="Methodology / Technology" class="form-control" rows="4" cols="70">
</textarea>
</div>
</div>

<div class="form-group">
<label for="email" clas="col-lg-2 control-label"> Email address </label>  
<div class="col-lg-10">
<input type="text" id="email" name="email" placeholder="Email address" class="form-control" size="40">
</div>
</div>

<div class="form-group">
<label for="phone" clas="col-lg-2 control-label">Phone number </label>  
<div class="col-lg-10">
<input type="int" id="phone" name="phone" placeholder="Phone number" max="11" min="11" class="form-control" size="40">
</div>
</div>

<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">

<button class="btn btn-primary"><a href="{{( 'welcome' )}}"> Back </a></button>
<button type="reset" class="btn btn-danger"> Cancel </button>
<button type="submit" class="btn btn-success"> Submit </button>
</div>
</div>
</fieldset>
</form>

</div>
</div>
</div>
<hr/>

@include('inc.footer')

@endsection
