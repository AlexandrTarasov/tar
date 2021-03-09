
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
	  <h1 style="margin:0;">{!!$header1!!}  <div class="" style="float:right;font-size: 16px; margin-top: 3px;color: gray;">
			tags:<a href="" class="">  {!!$tags!!}</a></div>
	  </h1>
  </div>
 <style>
	pre{
		color: hsl(331.8, 93.6%, 42.7%);
	}
</style>
<div class="card-body">
     {!!$blog_item!!}
      <footer class="blockquote-footer"></footer>
  </div>
</div>

@endsection
