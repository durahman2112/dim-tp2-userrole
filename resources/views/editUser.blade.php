@extends('master')

@section('konten')
<h3>Update User</h3>
  @foreach($user as $s)
    <form method="post" action="{{route('updateUser')}}">
      @csrf
      <input type="hidden" name="id" value="{{$s->id}}">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="{{$s->name}}" class="form-control" placeholder="Nama Santri" required="">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" rows="3" class="form-control" placeholder="email" required="" value="{{$s->email}}" >
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  @endforeach
@endsection