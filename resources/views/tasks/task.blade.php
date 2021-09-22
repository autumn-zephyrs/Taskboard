@extends('layouts.app', ['activePage' => 'tasks', 'titlePage' => __('Tasks')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Task {{$task->id}}: {{$task->title}}</h4>
        </div>
      </div>
      <div>
          <h3> Task Title</h3>
          <p> {{$task->title}} </p>
      </div>
      <div>
          <h3> Task Description</h3>
          <p> {{$task->data}} </p>
      </div>
      <div>
          <h3> Is the task completed?</h3>
          @if ($task->completed)
            <p> Task is completed! </p>
          @else
            <p> Task is not completed! </p>
          @endif
      </div>
    </div>
  </div>
</div>
@endsection