@extends('index')

@section('title', 'User')

@section('breadcrumbs')
{!! Breadcrumbs::render('user') !!}
@endsection

@section('content')
<!-- Table -->
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">User List</h5>
		<div class="heading-elements">
			<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
          	</div>
        	</div>

        	<div class="panel-body">
        		Users are just users.
        	</div>

	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>E-Mail</th>
					<th>Role</th>
          <th>Actions</th>
				</tr>
			</thead>
			<tbody>
        @foreach($users as $user)
  				<tr>
  					<td>{{ $user->id }}</td>
  					<td>{{ $user->name }}</td>
  					<td>{{ $user->email }}</td>
  					<td>{{ $user->role->name }}</td>
            <td>
              <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
              <!-- we will add this later since its a little more complicated than the other two buttons -->

              <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
              <a class="btn btn-small btn-info" href="{{ route('user.edit', [ 'id' => $user->id]) }}">Edit</a>
            </td>
  				</tr>
        @endforeach
			</tbody>
		</table>
	</div>
</div>
<!-- /table -->
@endsection
