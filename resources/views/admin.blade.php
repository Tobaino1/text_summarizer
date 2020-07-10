@include('layouts.admin_header')

<div class="container">
<div class="row">
<h3 style="color: green">Administrator Dashboard (CRUD) </h3>

<!-- flashing / displaying the session success message declared in the controller  -->
<div class="col-md-6 col-lg-6">
@if (session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif
</div>

<table class="table table-striped table-hover">
<tr>
<th>ID</th>
<th>TOPIC</th>
<th>SPECIFICATIONS</th>
<th>RESULTS</th>
<th>ACTION</th>
</tr>


<tbody>

     @foreach($projects as $project)

<tr>
<td>{{ $project->id }}</td>
<td>{{ $project->title }}</td>
<td>{{ $project->specification }}</td>
<td>{{ $project->result }}</td>
<td>

<a href= '{{ url ("/read_admincrud/$project->id") }}' class="btn btn-primary"> Read </a> <br><br> 
<a href= '{{ url ("/update_admincrud/$project->id") }}' class="btn btn-success"> Update </a> <br><br>
<a href= '{{ url ("/delete_admincrud/$project->id") }}' class="btn btn-danger"> Delete </a> 

</td>
</tr>

@endforeach
</tbody>
</table>


</div>
</div>

@include ('inc.footer')