@extends('layouts.master')
@section('page-title')
Edit User
@endsection

@section('content')
	<div class="col-sm-12">
		<form action="/users/{{$user->id}}" method="post">
			@method('PUT')
			{{ csrf_field() }}

			<label>Name:</label>
            <input type="text" name="name" value="{{ old('name') ?? $user->name}}"><br>
            
            <label>Username:</label>
            <input type="text" name="username" value="{{ old('username') ?? $user->username}}"><br>

            <label>Email:</label>
			<input type="text" name="email" value="{{ old('email') ?? $user->email}}"><br>

			<label>Access Level:</label>
			<select name="access_level">
				@foreach($accessLevels as $value)
					@if((old('access_level')?? $user->access_level) == $value)
						<option value="{{$value}}" selected="">{{ $value }}</option>
					@else
						<option value="{{$value}}">{{ $value }}</option>
					@endif
				@endforeach
			</select><br>

			<button class="btn btn-outline-primary" type="submit">Submit</button>
		</form>
	</div>
@endsection