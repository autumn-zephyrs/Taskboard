@extends('layouts.app', ['activePage' => 'tasks', 'titlePage' => __('Tasks')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="col-md-12">
        <form method="post" action="{{ route('tasks.store') }}" autocomplete="off" class="form-horizontal">
          @csrf
          @method('post')

          <div class="card ">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Create New Task') }}</h4>
            </div>
            <div class="card-body ">
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" name="title" id="title" type="text" required="true"/>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Task Description') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="data" id="data" type="textarea" required="true"/>
                    </div>
                  </div>
                </div>
              </div>
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection