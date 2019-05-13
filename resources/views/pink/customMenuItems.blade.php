@foreach($items as $item)
	@if($item->hasChildren())
		<li class = {{$item->attr('class')}} >
			<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  href="{{ $item->url() }}">{{$item->title}}<span class="caret"></span></a>
	@else
		<li class = {{$item->attr('class')}} {{ (URL::current() == $item->url()) ? " active" : "" }}>
			<a href="{{ $item->url() }}">{{$item->title}}</a>
	@endif
	@if($item->hasChildren())
		<ul class="dropdown-menu">
			@include('pink.customMenuItems', ['items'=>$item->children()])
			<!-- <li><a href="#">Portfolio</a></li> -->
		</ul>
	@endif
	</li>
@endforeach
