@extends('layouts.master')
@section('nav-bar')
    <a class="nav-link active" href="/users">Users</a>
	<a class="nav-link" href="/projects">Projects</a>
	<a class="nav-link" href="/categories">Categories</a>
	<a class="nav-link" href="/issues">Issues</a>
@endsection

@section('page-title')
All Users
<a class="btn btn-outline-warning btn-sm" href="/users/create">Add new user</a>
@endsection

@section('content')
  <div class="col">
    <table class="table">
      <thread>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Username</th>
          <th scope="col">Name</th>
          <th scope="col">Access Level</th>
          <th scope="col">Enabled?</th>
        </tr>
      </thread>
      <tbody>
        @foreach($users as $user)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>
            <a href="/users/{{$user->id}}">
            {{$user->username}}
            </a>
          </td>
          <td>{{$user->name}}</td>
          <td>{{$user->access_level}}</td>
          <td>{{$user->is_enabled}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
