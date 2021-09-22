@extends('layouts.app', ['activePage' => 'unassigned-tasks', 'titlePage' => __('Unassigned Tasks')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title">List of all unassigned tasks</h4>
          <p class="card-category">Handcrafted by our friends from
            <a target="_blank" href="https://design.google.com/icons/">Google</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection