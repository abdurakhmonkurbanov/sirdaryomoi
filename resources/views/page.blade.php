@extends('layouts.main')
@section('title','Sirdaryo XTXQTMOHM page')
@section('menu')
	@include('components.menu')
@endsection

@section('slider')
	@include('components.slider')
@endsection

@section('main')

@if (count($page) > 1)

	@include('components.newscontent')
	
@else
	@include('components.pagecontent')

@endif

@endsection


@section('footer')
	@include('components.footer')
@endsection

