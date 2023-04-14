@extends('master')

@section('judul', 'Role Lists')
@section('konten')
<h3>Role Lists</h3>
<a class="btn btn-success" href="{{route('addRole')}}"><i class="fa fa-plus"></i> Add Role</a><br><br>
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($role as $l)
    <tr>
      <th scope="row">{{$l->role_id}}</th>
      <td>{{$l->role_name}}</td>
      <td>{{$l->role_description}}</td>
    <td>
      <a href="/role/edit/{{$l->role_id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="/role/delete/{{$l->role_id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection