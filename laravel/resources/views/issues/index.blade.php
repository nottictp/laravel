@extends('layouts.master')

@section('nav-bar')
    <a class="nav-link" href="/users">Users</a>
	<a class="nav-link" href="/projects">Projects</a>
	<a class="nav-link" href="/categories">Categories</a>
	<a class="nav-link active" href="/issues">Issues</a>
@endsection

@section('page-title')
All Issues
@endsection

@section('content')
  <div class="col">
    <table class="table">
      <thread>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Summary</th>
            <th scope="col">Project</th>
            <th scope="col">Category</th>
            <th scope="col">Reporter</th>
            <th scope="col">Assign to</th>
            <th scope="col">Status</th>
            <th scope="col">Priority</th>
            <th scope="col">Severity</th>
            <th scope="col">Created date</th>
        </tr>
      </thread>
      <tbody>
        @foreach($issues as $issue)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>
                    <a href="/issues/{{$issue->id}}">
                        {{$issue->summary}}
                    </a>
                </td>
                <td>
                    @if(!is_null($issue->project))
                        <a href="/projects/{{$issue->project_id}}">
                            {{ $issue->project->name }}
                        </a>
                    @else
                        not assign
                    @endif
                </td>
                <td>
                    @if(!is_null($issue->category))
                        <a href="/categories/{{$issue->category_id}}">
                            {{ $issue->category->name }}
                        </a>
                    @else
                        not assign
                    @endif
                </td>
                <td>
                    @if(!is_null($issue->reporterUser))
                        <a href="/users/{{$issue->reporter}}">
                            {{ $issue->reporterUser->name }}
                        </a>
                    @else
                        not assign
                    @endif
                </td>
                <td>
                    @if(!is_null($issue->assignTo))
                        <a href="/users/{{$issue->assign_to}}">
                            {{ $issue->assignTo->name }}
                        </a>
                    @else
                        not assign
                    @endif
                </td>
                <td>{{$issue->status}}</td>
                <td>{{$issue->priority}}</td>
                <td>{{$issue->severity}}</td>
                <td>{{$issue->created_at->format('d/m/Y H:i:s')}}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
