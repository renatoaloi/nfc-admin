@extends('index')

@section('title', 'Edit User')

@section('breadcrumbs')
{!! Breadcrumbs::render('user.edit', $user->id) !!}
@endsection

@section('content')
<!-- Grid -->
<div class="row">
  <div class="col-md-6">

    <!-- Horizontal form -->
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h5 class="panel-title">Edit User #{{ $user->id }}</h5>
        <div class="heading-elements">
          <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="close"></a></li>
                  </ul>
                </div>
              </div>

      <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('user.update', ['id' => $user->id]) }}">
          {{ csrf_field() }}
          
          <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
              <label for="role_id" class="col-md-4 control-label">Role</label>
              <div class="col-md-6">
                  
                  <select id="role_id" class="form-control" name="role_id">
                      @foreach ($roles as $role)
                      <option value="{{ $role->id }}" 
                              {{ ($role->id == $user->role_id) ? "selected" : "" }}
                              >{{ $role->name }}</option>
                      @endforeach
                  </select>
                  @if ($errors->has('role_id'))
                      <span class="help-block">
                          <strong>{{ $errors->first('role_id') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Name</label>
              <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>


          <div class="form-group" style="border: solid 0px black;">
            <div class="col-md-4">
              <a href="{{ route('user') }}" class="btn btn-primary"><i class="icon-arrow-left13 position-left"></i> Back</a>
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
