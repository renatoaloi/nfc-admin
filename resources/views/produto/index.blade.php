@extends('index')

@section('title', 'Produto')

@section('breadcrumbs')
{!! Breadcrumbs::render('produto') !!}
@endsection

@section('content')
<!-- Table -->
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Lista de Produtos</h5>
		<div class="heading-elements">
			<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
          	</div>
        	</div>

        	<div class="panel-body">
        		Produtos a venda.
        	</div>

	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Preço</th>
					<th>Qtde.</th>
                    <th>Disponível?</th>
                    <th>Actions</th>
				</tr>
			</thead>
			<tbody>
        @foreach($produtos as $item)
  				<tr>
  					<td>{{ $item->id }}</td>
  					<td>{{ $item->nome }}</td>
  					<td>{{ $item->preco }}</td>
  					<td>{{ $item->quantidade }}</td>
                    <td>{{ $item->disponivel ? 'Sim' : 'Não' }}</td>
                    <td>
                        <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->

                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                        <a class="btn btn-small btn-info" href="{{ route('produto.edit', [ 'id' => $item->id]) }}">Edit</a>
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
            href="{{ route('produto.create') }}">Create New</a>
</div>
@endsection
