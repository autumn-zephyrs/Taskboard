@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Welcome Page'), 'titlePage' => __('Welcome Page')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <h1 class="text-white text-center">{{ __('Welcome to the Taskboard') }}</h1>
      </div>
      <div class="col-lg-7 col-md-8">
          <h3 class="text-white text-center">{{ __('Click here to login') }}</h3>
      </div>
  </div>
</div>
@endsection
