@extends('master')

@section('judul', 'User Lists')
@section('konten')
{{$nama}}
<ul>
@foreach($list as $l)
    <li>{{$l}}</li> 
@endforeach
</ul>
@endsection