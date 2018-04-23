@extends('layouts.master')

@section('page-title')
User Detail
@endsection

@section('content')
	<div class="col-sm-12">
	   <p><b>Name:</b> {{ $user->name }}</p>
      	<p><b>Username:</b> {{ $user->username }}</p>
      	<p><b>Email:</b> {{ $user->email }}</p>
        <p><b>Access Level:</b> {{ $user->access_level}}</p>
        <p><b>Updated date:</b> {{ $user->updated_at->format('d/m/Y H:i:s')}}</p>


    	<div class="panel-footer" style="text-align: right;">
      		<a class="btn btn-outline-light" href="/users/{{$user->id}}/edit">Edit</a>
   		</div>

	  </div>
	</div>
@endsection