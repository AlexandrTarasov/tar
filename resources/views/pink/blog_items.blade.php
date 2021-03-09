@extends('pink.layouts.site')

@section('navigation')
	{!!$navigation!!}
@endsection

@section('title')
	{!!$title!!}
@endsection


@section('content')
	<div class="row">
		<div class="col">
	@if($blog_items)
		@foreach($blog_items as $blog_item)	
			<div class="card">
				<div class="card-header" style="font-size: 1.5rem;">
					<h2><a href={{'/blog/'.$blog_item['alias'] }}>{{$blog_item['title']}}</a></h2>
				</div>
				<div class="card-body">
					<?php $blog_item['text'] = strip_tags($blog_item['text']);?>
		{!!str_limit($blog_item['text'], $limit = 150, $end = '...')!!}	
				</div>
				<div class="card-footer" style="color: green;">
					<?=$blog_item['tags']?>
				</div>
			</div>
		@endforeach
	@endif
		</div>
		<div class="col-3" style="">
			<div class="card">
				<div class="card-header" style="font-size: 1.5rem;"> Tags: </div>
				<div class="card-body">
				<?php
				if( isset($all_tags) ){
					foreach($all_tags as $val){
						echo '<a href="/blog/tag/'.$val.'" class=""> '.$val.'</a>, ';
				   }
				}
				?>
				</div>
			</div>
		</div>
	</div>
@endsection
