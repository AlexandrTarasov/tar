@extends('admin.app')
@section('content')

<div class="container">
	<h3> add new post in blog</h3>
    @if (Session::get('success'))
        <div class="alert alert-success">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
		<form action="{{route('admin.posts.store')}}" method="post">
			{{ csrf_field() }}
			<div class=""  style='margin-bottom: 25px;'>
				<!-- <input type="hidden" name="_method" value="put"> -->
				<div class="input-group input-group-sm mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">title</span>
				  </div>
				  <input  name="title" type="text" value ="" class="form-control" >
				</div>

				<div class="input-group input-group-sm mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">url</span>
				  </div>
				  <input  name="alias" type="text" value ="" class="form-control" >
				</div>

				<textarea name="text" class="form-control summernote" id="summernote" 
				rows="3">
				</textarea>

				<div class="input-group input-group-sm mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">tags</span>
				  </div>
				  <input  name="tags" type="text" value ="" class="form-control" >
				</div>

				<input class="btn btn-primary" type="submit" value="Сохранить">
			</div>
		</form>
</div>

@endsection
