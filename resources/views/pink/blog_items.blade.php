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
<div class="card">
  <div class="card-header" style="font-size: 1.5rem;">
		<h2><a href={{URL::current().'/'.$blog_item['alias'] }}>{{$blog_item['title']}}</a></h2>
	</div>
	<div class="card-body">
		<?php $blog_item['text'] = strip_tags($blog_item['text']);?>
		{!!str_limit($blog_item['text'], $limit = 150, $end = '...')!!}	
	</div>
</div>

		@endforeach
	@endif
@endsection
