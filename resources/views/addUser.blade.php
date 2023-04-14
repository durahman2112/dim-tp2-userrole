@extends('master')

@section('konten')
<h3>Add User</h3>
<form method="post" action="{{route('saveUser')}}">
  @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="User Name" required="">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email" required="">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required="">
  </div>
  <div class="form-group">
    <label>Role</label>
    <select class="form-select form-control" aria-label="Default select example" name="role" required="">
      <option value="1">Administrator</option>
      <option value="2">Manager</option>
      <option value="3">Staff</option>
    </select>
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection