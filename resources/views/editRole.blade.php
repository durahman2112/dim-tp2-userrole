@extends('master')

@section('konten')
<h3>Update Role</h3>
  @foreach($role as $s)
    <form method="post" action="{{route('updateRole')}}">
      @csrf
      <input type="hidden" name="id" value="{{$s->role_id}}">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="role_name" value="{{$s->role_name}}" class="form-control" placeholder="Role Name" required="">
      </div>
      <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="role_description" rows="3" required="">{{$s->role_description}}</textarea>
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  @endforeach
@endsection