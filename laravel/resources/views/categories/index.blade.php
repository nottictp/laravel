@extends('layouts.master')

@section('nav-bar')
    <a class="nav-link" href="/users">Users</a>
	<a class="nav-link" href="/projects">Projects</a>
	<a class="nav-link active" href="/categories">Categories</a>
	<a class="nav-link" href="/issues">Issues</a>
@endsection

@section('page-title')
All Categories
@endsection

@section('content')
  <div class="col">
    <table class="table">
      <thread>
        <tr>
          <th scope="col">#</th>
          <th scope="col">category name</th>
    <th scope="col">project</th>
    <th scope="col">assign to</th>
    <th scope="col">create date</th>
        </tr>
      </thread>
      <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>
                    <a href="/categories/{{$category->id}}">
                        {{$category->name}}
                    </a>
                </td>
                <td>
                    @if(!is_null($category->project))
                        <a href="/projects/{{$category->project->id}}">
                            {{$category->project->name}}
                        </a>
                    @else
                        not assign
                    @endif
                </td>
                <td>
                    @if(!is_null($category->user))
                        <a href="/users/{{$category->user->id}}">
                            {{ $category->user->name }}
                        </a>
                    @else
                        not assign
                    @endif
                </td>
                <td>{{$category->created_at->format('d/m/Y H:i:s')}}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
