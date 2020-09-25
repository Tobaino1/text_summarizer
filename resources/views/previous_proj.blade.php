@extends ('layouts.app')

@section('content')

<div class="container">
<div class="row">
<h3 style="color: green">Previous Software development / Research & development (Academic, business) </h3>

<table class="table table-striped table-hover">
<tr>
<th>ID</th>
<th>TOPIC</th>
<th>SPECIFICATIONS</th>
<th>RESULTS</th>
</tr>

<tbody>
     @foreach($projects as $project)
<tr>
<td>{{ $project->id }}</td>
<td>{{ $project->title }}</td>
<td>{{ $project->specification }}</td>
<td>{{ $project->result }}</td>
</tr>

@endforeach
</tbody>
</table>


</div>
</div>

@endsection