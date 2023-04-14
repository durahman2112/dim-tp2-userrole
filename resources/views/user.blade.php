@extends('master')

@section('judul', 'User Lists')
@section('konten')
<h3>User Lists</h3>
<a class="btn btn-success" href="{{route('addUser')}}"><i class="fa fa-plus"></i> Add User</a><br><br>
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $l)
    <tr>
      <th scope="row">{{$l->id}}</th>
      <td>{{$l->name}}</td>
      <td>{{$l->email}}</td>
      <td>
        @if ($l->role === 1)
            Administrator
        @elseif ($l->role === 2)
            Manager
        @elseif ($l->role === 3)
            Staff
        @else
            I don't have any role!
        @endif    
    </td>
    <td>
      <a href="/user/edit/{{$l->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="/user/delete/{{$l->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection