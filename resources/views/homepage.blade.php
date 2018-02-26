@extends('layouts.template')


@section('title')
	NewsMOTO-Homepage
@endsection


@section('content')
			@include('partials.news-trending')
			@include('partials.news-music')
			@include('partials.news-sports')
			@include('partials.news-entertainment')
			@include('partials.news-business')
			@include('partials.news-tech')
			@include('partials.news-movies')
			@include('partials.news-lifestyle')
@endsection