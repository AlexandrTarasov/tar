@extends('admin.app')
@section('content')
<div class="container">
	<form method="post">
		@forelse($articles as $article)
		<div class=""  style='margin-bottom: 25px;'>
			<input type="text" value ="{{$article->title}}"></br>
			<textarea class="form-control summernote" id="summernote" 
			rows="3">{{$article->text}}</textarea>
		</div>
		@empty
			<tr>
				<td colspan="3" class="text-center"><h1>NO data</h1></td>
			</tr>
		@endforelse
	</form>
	{{ $articles->links() }}
</div>

@endsection
