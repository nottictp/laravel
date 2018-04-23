@extends('layouts.master')

@section('page-title')
Project Detail
@endsection

@section('content')
	<div class="col-sm-12">
	   <p><b>Name:</b> {{ $project->name }}</p>
      	<p><b>View status:</b> {{ $project->view_status }}</p>
      	<p><b>Description:</b> {{ $project->description }}</p>
      	<!-- <p><b>Create Date:</b> {{ $project->created_at}}</p> -->
      	<p><b>Create Date:</b> {{ $project->created_at->format('d/m/Y H:i:s')}}</p>


    	<div class="panel-footer" style="text-align: right;">
      		<a class="btn btn-outline-light" href="{{url('/projects/'.$project->id.'/edit')}}">Edit</a>
   		</div>

	  </div>
	</div>
@endsection