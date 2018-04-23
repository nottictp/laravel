@extends('layouts.master');

@section('nav-bar')
  <a class="nav-link" href="/users">Users</a>
	<a class="nav-link active" href="/projects">Projects</a>
	<a class="nav-link" href="/categories">Categories</a>
	<a class="nav-link" href="/issues">Issues</a>
@endsection

@section('page-title')
  All Projects
@endsection

@section('content')
<div class="col">
    <table class="table">
      <thread>
        <tr>
          <th scope="col">#</th>
          <th scope="col">project name</th>
          <th scope="col">status</th>
          <th scope="col">view status</th>
          <th scope="col">create date</th>
        </tr>
      </thread>
      <tbody>
        @foreach($projects as $project)
          <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>
                  <a href="/projects/{{$project->id}}">
                      {{$project->name}}
                  </a>
              </td>
              <td>{{$project->status}}</td>
              <td>{{$project->view_status}}</td>
              <td>{{$project->created_at->format('d/m/Y H:i:s')}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection