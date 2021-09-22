@extends('layouts.app', ['activePage' => 'tasks', 'titlePage' => __('Tasks')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Your list of tasks</h4>
          <p class="card-category">Click here to 
            <a href="tasks/create">add a new task</a>
          </p>
        </div>
      </div>
      <div>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Task ID</th>
              <th>Title</th>
              <th>Task Content</th>
              <th>Comlpeted?</th>
              <th>Date Created</th>
              <th>View</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tasks as $task)
              <tr>
                <td> {{$task->id}} </td>
                <td> {{$task->title}} </td>
                <td> {{$task->data}} </td>
                @if ($task->completed)
                  <td> Yes </td>
                @else
                  <td> No </td>
                @endif
                <td> {{$task->created_at}} </td>
                <td> <a class="btn btn-small btn-success" href="{{ URL::to('tasks/' . $task->id) }}">View</a></td>
                <td> <a class="btn btn-small btn-info" href="{{ URL::to('tasks/' . $task->id . '/edit') }}">Edit</a> </td>
                <td>
                  {{ Form::open(array('url' => 'tasks/' . $task->id)) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Delete', array('class' => 'btn btn-small btn-warning')) }}
                  {{ Form::close() }}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection