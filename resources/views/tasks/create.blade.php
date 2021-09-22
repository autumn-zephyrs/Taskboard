@extends('layouts.app', ['activePage' => 'tasks', 'titlePage' => __('Tasks')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Create a new Task</h4>
        </div>
      </div>
      <div>
        <form action="{{ route('tasks.store') }}" method="post">
          {{ csrf_field() }}
          @method('post')
          <div class="form-group">
            <label for="title">Task title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Please enter task title...">
          </div>
          <div class="form-group">
            <label for="data">Task description</label>
            <input type="text" class="form-control" id="data" name="data" placeholder="Please enter task description...">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection