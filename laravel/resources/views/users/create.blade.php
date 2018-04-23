@extends('layouts.master')
@section('page-title')
Add New User
@endsection

@section('content')
	<div class="col-sm-12">
		<form action="/users" method="post">
			{{ csrf_field() }}

			<label>Name:</label>
			<input type="text" name="name" value="{{ old('name') }}"><br>

			<label>Username:</label>
            <input type="text" name="username" value="{{ old('username') }}"><br>
            
            <label>Password:</label>
            <input type="password" name="password" value="{{ old('password') }}"><br>
            
            <label>Email:</label>
			<input type="text" name="email" value="{{ old('email') }}"><br>

			<label>Access Level:</label>
			<select name="access_level">
				@foreach($accessLevels as $value)
					@if(old('access_level') == $value)
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