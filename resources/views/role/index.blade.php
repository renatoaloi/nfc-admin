@extends('index')

@section('title', 'Role')

@section('breadcrumbs')
{!! Breadcrumbs::render('role') !!}
@endsection

@section('content')
<!-- Table -->
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Role List</h5>
		<div class="heading-elements">
			<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
          	</div>
        	</div>

        	<div class="panel-body">
        		Roles defines what the user can access or not.
        	</div>

	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Description</th>
					<th>Created Date</th>
          <th>Actions</th>
				</tr>
			</thead>
			<tbody>
        @foreach($roles as $role)
  				<tr>
  					<td>{{ $role->id }}</td>
  					<td>{{ $role->name }}</td>
  					<td>{{ $role->description }}</td>
  					<td>{{ $role->created_at }}</td>
            <td>
              <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
              <!-- we will add this later since its a little more complicated than the other two buttons -->

              <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
              <a class="btn btn-small btn-info" href="{{ route('role.edit', [ 'id' => $role->id]) }}">Edit</a>
            </td>
  				</tr>
        @endforeach
			</tbody>
		</table>
	</div>
</div>
<!-- /table -->
@endsection
