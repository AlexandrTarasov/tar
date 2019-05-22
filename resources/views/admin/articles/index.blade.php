@extends('admin.app')
@section('content')

<div class="container">
    @if (Session::get('success'))
        <div class="alert alert-success">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
	@forelse($articles as $article)
		<form action="{{route('admin.articles.update', $article->id )}}" method="post">
			{{ csrf_field() }}
			<div class=""  style='margin-bottom: 25px;'>
				<!-- <input type="hidden" name="_method" value="put"> -->
				 {{ method_field('PUT') }}
				<input name="title" type="text" value ="{{$article->title}}"></br>
				<input class="btn btn-primary" type="submit" value="Сохранить">
				<textarea name="text" class="form-control summernote" id="summernote" 
				rows="3">{{$article->text}}</textarea>
			</div>
		</form>
		@empty
			<tr>
				<td colspan="3" class="text-center"><h1>NO data</h1></td>
			</tr>
		@endforelse
	{{ $articles->links() }}
</div>

@endsection
