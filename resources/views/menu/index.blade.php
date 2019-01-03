@extends('index')

@section('title', 'Menu')

@section('breadcrumbs')
{!! Breadcrumbs::render('menu') !!}
@endsection

@section('content')
<!-- Table -->
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="panel panel-flat">
    <div class="panel-heading">
            <h5 class="panel-title">Menu List</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
    </div>

    <div class="panel-body">
            System menus.
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                    <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Link</th>
                            <th>Icon</th>
                            <th>Actions</th>
                    </tr>
            </thead>
            <tbody>
            @foreach($menus as $menu)
                    <tr>
                            <td>{{ $menu->id }}</td>
                            <td>{{ $menu->nome }}</td>
                            <td>{{ $menu->link }}</td>
                            <td>{{ $menu->icone }}</td>
                            <td>
                              <a class="btn btn-small btn-info" 
                                 href="{{ route('menu.edit', [ 'id' => $menu->id ]) }}">Edit</a>
                              <a class="btn btn-small btn-success" 
                                 href="{{ route('menu.roles', [ 'id' => $menu->id ]) }}">Roles</a>
                            </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
    
</div>
<!-- /table -->
<div class="text-right">
        <a class="btn btn-primary" 
            href="{{ route('menu.create') }}">Create New</a>
</div>
@endsection
