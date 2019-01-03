@extends('index')

@section('title', 'Create New Menu')

@section('breadcrumbs')
{!! Breadcrumbs::render('menu.create') !!}
@endsection

@section('content')
<!-- Grid -->
<div class="row">
  <div class="col-md-6">

    <!-- Horizontal form -->
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h5 class="panel-title">Create New Menu</h5>
        <div class="heading-elements">
          <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="close"></a></li>
                  </ul>
                </div>
              </div>

      <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('menu.store') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Name</label>
              <div class="col-md-6">
                  <input id="name" type="text" class="form-control" 
                         name="name" value="" required autofocus>
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
              <label for="description" class="col-md-4 control-label">Description</label>
              <div class="col-md-6">
                  <input id="description" type="text" class="form-control" 
                         name="description" value="" required>
                  @if ($errors->has('description'))
                      <span class="help-block">
                          <strong>{{ $errors->first('description') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          
          <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
              <label for="link" class="col-md-4 control-label">Link</label>
              <div class="col-md-6">
                  <input id="link" type="text" class="form-control" 
                         name="link" value="" required>
                  @if ($errors->has('link'))
                      <span class="help-block">
                          <strong>{{ $errors->first('link') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          
          <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
              <label for="link" class="col-md-4 control-label">Icon</label>
              <div class="col-md-6">
                  <input id="icon" type="text" class="form-control" 
                         name="icon" value="" required>
                  @if ($errors->has('icon'))
                      <span class="help-block">
                          <strong>{{ $errors->first('icon') }}</strong>
                      </span>
                  @endif
              </div>
          </div>


          <div class="form-group" style="border: solid 0px black;">
            <div class="col-md-4">
              <a href="{{ route('menu') }}" class="btn btn-primary"><i class="icon-arrow-left13 position-left"></i> Back</a>
            </div>
            <div class="col-md-8">
              <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- /horizotal form -->

  </div>
</div>
<!-- /grid -->
@endsection
