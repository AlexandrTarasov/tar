@extends('admin.app')
@section('content')
<div class="">
		@forelse($articles as $article)
		<div>{{$article->title}}</div></br>
			<div>{{$article->desc}}</div>
		@empty
			<tr>
				<td colspan="3" class="text-center"><h1>NO data</h1></td>
			</tr>
		@endforelse
	</tbody>
	<tbody>
</div>
@endsection
