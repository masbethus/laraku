@extends('template')
@section('content')

@foreach($nasabah as $n)

<h3>{{ $n }}</h3>
@endforeach

@stop