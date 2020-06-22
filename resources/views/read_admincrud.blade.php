@include('layouts.admin_header')

<div class="container">
<div>
<h3 style="color: purple">Read project | Administrator </h3>

<p>{{$projects->title}}</p>
<p align="justify">{{$projects->specification}}</p>
<p align="justify">{{$projects->result}}</p>

</div>
</div>
@include ('inc.footer')