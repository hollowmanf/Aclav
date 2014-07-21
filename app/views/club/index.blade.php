@extends('template')


@section('container')


	@foreach ($club as $clubs)

	<ul>{{$clubs}}</ul>

	@endforeach

@stop