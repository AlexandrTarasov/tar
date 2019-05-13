@extends('pink.layouts.site')

@section('navigation')
	{!!$navigation!!}
@endsection

@section('title')
	{!!$title!!}
@endsection


@section('content')
		<h1>{!!$header1!!}</h1>
		{!!$blog_item!!}
@endsection
