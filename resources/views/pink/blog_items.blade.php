@extends('pink.layouts.site')

@section('navigation')
	{!!$navigation!!}
@endsection

@section('title')
	{!!$title!!}
@endsection


@section('content')
	@if($blog_items)
		@foreach($blog_items as $blog_item)	
				<h2><a href={{URL::current().'/'.$blog_item['alias'] }}>{{$blog_item['title']}}</a></h2>
				{!!str_limit($blog_item['text'], $limit = 150, $end = '...')!!}	
		@endforeach
	@endif
@endsection
