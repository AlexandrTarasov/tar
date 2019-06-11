@foreach($items as $item)
	@if($item->hasChildren())
		<li class = "{{$item->attr('class')}} nav-item dropdown" >
			<a class="nav-link dropdown-toggle" href="{{ $item->url() }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				{{$item->title}}
			</a>
	@else
		<li class = "nav-item {{$item->attr('class')}} {{ (URL::current() == $item->url()) ? " active" : "" }}">
			<a class= "nav-link" href="{{ $item->url() }}">{{$item->title}}</a>
	@endif
	@if($item->hasChildren())
		<ul class="dropdown-menu">
			@include('pink.customMenuItems', ['items'=>$item->children()])
			<!-- <li><a href="#">Portfolio</a></li> -->
		</ul>
	@endif
	</li>
@endforeach
