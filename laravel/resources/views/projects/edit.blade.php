@extends('layouts.master')
@section('page-title')
Edit Project
@endsection

@section('content')
	<div class="col-sm-12">
		<form action="/projects/{{$project->id}}" method="post">
			@method('PUT')
			<!-- CSRF Cross-Site Request Forgery -->
			{{ csrf_field() }}
			<!--  -->

			<!-- {{ old('name') }} for non reset value-->
			<label>Name:</label>
			<input type="text" name="name" value="{{ old('name') ?? $project->name}}"><br>

			<label>Description:</label><br>
			<textarea name="description" rows="8" cols="80">{{ old('description') ?? $project->description }}</textarea><br>

			<label>Status:</label>
			<select name="status">
				@foreach($status as $key => $value)
					@if((old('status') ?? $project->status)== $key)
						<option value="{{$key}}" selected="">{{ $value }}</option>
					@else
						<option value="{{$key}}">{{ $value }}</option>
					@endif
				@endforeach
			</select><br>

			<label>View Status:</label>
			<select name="view_status">
				@foreach($view_status as $key => $value)
					@if((old('view_status')?? $project->view_status) == $key)
						<option value="{{$key}}" selected="">{{ $value }}</option>
					@else
						<option value="{{$key}}">{{ $value }}</option>
					@endif
				@endforeach
			</select><br>

			<button class="btn btn-outline-primary" type="submit">Submit</button>
		</form>
	</div>
@endsection