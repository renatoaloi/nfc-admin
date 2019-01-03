@extends('index')

@section('title', 'Login')

@section('breadcrumbs')
{!! Breadcrumbs::render('login') !!}
@endsection

@section('content')
<!-- Grid -->
<div class="row">
  <div class="col-md-6">

    <!-- Horizontal form -->
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h5 class="panel-title">Login form</h5>
        <div class="heading-elements">
          <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="close"></a></li>
                  </ul>
                </div>
              </div>

      <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))

                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Password</label>
              <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-4 col-md-offset-4">
                  <!-- <button type="submit" class="btn btn-primary">
                      Login
                  </button> -->

                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      Forgot Your Password?
                  </a>
              </div>
              <div class="col-md-4">
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">Login <i class="icon-arrow-right14 position-right"></i></button>
                </div>
              </div>
          </div>
          <!-- <div class="text-right">
            <button type="submit" class="btn btn-primary">Login <i class="icon-arrow-right14 position-right"></i></button>
          </div> -->
        </form>
      </div>
    </div>
    <!-- /horizotal form -->

  </div>
</div>
<!-- /grid -->
@endsection
