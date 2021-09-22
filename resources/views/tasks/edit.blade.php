@extends('layouts.app', ['activePage' => 'tasks', 'titlePage' => __('Tasks')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Edit an existing task (Task {{$task->id}}: {{$task->title}})</h4>
        </div>
      </div>
      <div>
        <form action="{{ route('tasks.update', $task->id) }}" method="post">
          {{ csrf_field() }}
          @method('PUT')
          <div class="form-group">
            <label for="title">New task title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Please enter task title...">
          </div>
          <div class="form-group">
            <label for="data">New task description</label>
            <input type="text" class="form-control" id="data" name="data" placeholder="Please enter task description...">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="checkbox" id="completed" name="completed">
            <label class="form-check-label" for="completed">Is the task completed?</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection