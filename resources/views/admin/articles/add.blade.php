@extends('admin.app')
@section('content')

<div class="container">
	<h3> add new article </h3>
    @if (Session::get('success'))
        <div class="alert alert-success">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
		<form action="{{route('admin.articles.store')}}" method="post">
			{{ csrf_field() }}
			<div class=""  style='margin-bottom: 25px;'>
				<!-- <input type="hidden" name="_method" value="put"> -->
				title: <input name="title" type="text" value =""></br>
				url: <input name="alias" type="text" value =""></br>
				<textarea name="text" class="form-control summernote" id="summernote" 
				rows="3"></textarea>
				<br>
				<input class="btn btn-primary" type="submit" value="Сохранить">
			</div>
		</form>
</div>

@endsection
