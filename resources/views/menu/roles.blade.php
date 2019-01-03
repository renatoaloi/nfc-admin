@extends('index')
@section('title', 'Menu Roles')

@section('breadcrumbs')
{!! Breadcrumbs::render('menu.roles', $menu->id) !!}
@endsection

@section('content')

<!-- Grid -->
<div class="row">
  <div class="col-md-6">

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
      
    <!-- Horizontal form -->
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h5 class="panel-title">Edit Menu Roles #{{ $menu->id }}</h5>
        <div class="heading-elements">
          <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="close"></a></li>
                  </ul>
                </div>
              </div>

      <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('menu.roles_update', ['id' => $menu->id]) }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
              <label for="role_id" class="col-md-4 control-label">Roles</label>
              <div class="col-md-6">
                  <select id="role_id" name="role_id[]" multiple class="select">
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" 
                                {{ count($menu->roles()->find($role->id)) ? ($menu->roles()->find($role->id)->name == $role->name ? "selected" : "not") : "" }}
                                >{{ $role->name }}</option>
                    @endforeach
                  </select>
                  
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