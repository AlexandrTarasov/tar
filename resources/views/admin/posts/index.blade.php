@extends('admin.app')
@section('content')

<div class="container">
    @if (Session::get('success'))
        <div class="alert alert-success">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
	@forelse($posts as $post)
		<form onsubmit="if(confirm('Del?')){ return true; }else{ return false; }" action="{{route('admin.posts.destroy', $post)}}" method="POST">
			<input type="hidden" name="_method" value="DELETE">
			{{ csrf_field() }}
			<button type="submit" style="float:right;" class="btn btn-danger">del</button>
		</form>
		<form action="{{route('admin.posts.update', $post->id )}}" method="post">
			{{ csrf_field() }}
			<div class=""  style='margin-bottom: 25px;'>
				<!-- <input type="hidden" name="_method" value="put"> -->
				 {{ method_field('PUT') }}
				<input name="title" type="text" value ="{{$post->title}}"></br>
				<textarea name="text" class="form-control summernote" id="summernote" 
				rows="3">{{$post->text}}</textarea>
				<input class="btn btn-primary" type="submit" value="Save">
			</div>
		</form>

		
		@empty
			<tr>
				<td colspan="3" class="text-center"><h1>NO data</h1></td>
			</tr>
		@endforelse
	{{ $posts->links() }}
</div>

@endsection
