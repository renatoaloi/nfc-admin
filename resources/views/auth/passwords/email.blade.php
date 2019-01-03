@extends('index')

@section('title', 'Request Reset Password')

@section('breadcrumbs')
{!! Breadcrumbs::render('password.email') !!}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-flat">
              <div class="panel-heading">
                <h5 class="panel-title">Reset Password</h5>
                <div class="heading-elements">
                  <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="close"></a></li>
                          </ul>
                        </div>
                      </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="text-right">

                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link <i class="icon-arrow-right14 position-right"></i>
                                </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
