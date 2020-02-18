
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
 <style>
	pre{
		color: hsl(331.8, 93.6%, 42.7%);
	}
</style>
<div class="card-body">
     {!!$blog_item!!}
      <footer class="blockquote-footer">tags: {!!$tags!!}</footer>
  </div>
</div>

@endsection
