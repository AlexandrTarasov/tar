@if($menu)

<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				@include('pink.customMenuItems', ['items'=>$menu->roots()])
			</ul>
		</div>
	</div>
</nav>
@endif

	{{-- {!! $menu->asUl() !!} --}}
