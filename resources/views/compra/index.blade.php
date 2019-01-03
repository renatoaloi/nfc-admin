@extends('index')

@section('title', 'Compras')

@section('breadcrumbs')
{!! Breadcrumbs::render('compra') !!}
@endsection

@section('content')
<!-- Table -->
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Lista de Compras</h5>
		<div class="heading-elements">
			<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
          	</div>
        	</div>

        	<div class="panel-body">
        		Compras efetuadas.
        	</div>

	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Produto</th>
					<th>Preço</th>
					<th>Data/Hora</th>
				</tr>
			</thead>
			<tbody>
        @foreach($compras as $item)
  				<tr>
  					<td>{{ $item->id }}</td>
  					<td>{{ $item->produto->nome }}</td>
  					<td>{{ $item->preco }}</td>
  					<td>{{ $item->created_at }}</td>
  				</tr>
        @endforeach
			</tbody>
		</table>
	</div>
</div>
<!-- /table -->
@endsection
