@extends('master')

@section('konten')
<h3>Add Role</h3>
<form method="post" action="{{route('saveRole')}}">
  @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="role_name" class="form-control" placeholder="Role Name" required="">
  </div>
  <div class="form-group">
    <label>Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="role_description" rows="3" required=""></textarea>
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection