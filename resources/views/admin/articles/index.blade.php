@extends('admin.app')
@section('content')
<div class="container">
		@forelse($articles as $article)
			<input type="text" value ="{{$article->title}}"></br>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$article->desc}}</textarea>
		@empty
			<tr>
				<td colspan="3" class="text-center"><h1>NO data</h1></td>
			</tr>
		@endforelse
	</tbody>
	<tbody>
</div>
@endsection
