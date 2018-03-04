@extends('layouts.template')


@section('title')
	{{$this_article->title}}
@endsection


@section('content')
			@include('partials.article-main')
@endsection