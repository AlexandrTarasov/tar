@extends('pink.layouts.site')

@section('navigation')
	{!!$navigation!!}
@endsection

@section('title')
	{!!$title!!}
@endsection


@section('content')

<div class="card">
  <div class="card-header">
    <h1>{!!$header1!!}</h1>
  </div>
  <div class="card-body">
     {!!$blog_item!!}
      <footer class="blockquote-footer">tags: </footer>
  </div>
</div>

@endsection
