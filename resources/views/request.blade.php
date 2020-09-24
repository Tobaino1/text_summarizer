@include('layouts.admin_header')

<div class="container">
<div class="row">
<h3 style="color: green">Administrator Dashboard (Prospective Clients Requests)  </h3>

<table class="table table-striped table-hover">
<tr>
<th>ID</th>
<th>TITLE</th>
<th>AIM & OBJs / SPECIFICATIONS</th>
<th>TECHNOLOGY / METHODOLOGY</th>
<th>EMAIL</th>
<th>PHONE NUMBER</th>
</tr>


<tbody>

     @foreach($helps as $help)

<tr>
<td>{{ $help->id }}</td>
<td>{{ $help->title }}</td>
<td>{{ $help-> requirement_aimobj }}</td>
<td>{{ $help->Methodology_technology }}</td>
<td>{{ $help->email }}</td>
<td>{{ $help->phone }}</td>
</tr>

@endforeach
</tbody>
</table>

</div>
</div>
@include ('inc.footer')