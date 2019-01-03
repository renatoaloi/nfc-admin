@extends('index')

@section('title', 'Create New Produto')

@section('breadcrumbs')
{!! Breadcrumbs::render('produto.create') !!}
@endsection

@section('content')
<!-- Grid -->
<div class="row">
  <div class="col-md-6">

    <!-- Horizontal form -->
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h5 class="panel-title">Create New Produto</h5>
        <div class="heading-elements">
          <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="close"></a></li>
                  </ul>
                </div>
              </div>

      <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('produto.store') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
              <label for="nome" class="col-md-4 control-label">Nome</label>
              <div class="col-md-6">
                  <input id="nome" type="text" class="form-control" 
                         name="nome" value="" required autofocus>
                  @if ($errors->has('nome'))
                      <span class="help-block">
                          <strong>{{ $errors->first('nome') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('preco') ? ' has-error' : '' }}">
              <label for="preco" class="col-md-4 control-label">Preço</label>
              <div class="col-md-6">
                  <input id="preco" type="text" class="form-control" 
                         name="preco" value="" required>
                  @if ($errors->has('preco'))
                      <span class="help-block">
                          <strong>{{ $errors->first('preco') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          
          <div class="form-group{{ $errors->has('quantidade') ? ' has-error' : '' }}">
              <label for="quantidade" class="col-md-4 control-label">Quantidade</label>
              <div class="col-md-6">
                  <input id="quantidade" type="number" class="form-control" 
                         name="quantidade" value="0" required>
                  @if ($errors->has('quantidade'))
                      <span class="help-block">
                          <strong>{{ $errors->first('quantidade') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          
          <div class="form-group{{ $errors->has('disponivel') ? ' has-error' : '' }}">
              <label for="disponivel" class="col-md-4 control-label">Disponível?</label>
              <div class="col-md-6">
                  <input id="disponivel" type="checkbox" class="form-control" 
                         name="disponivel" value="1" checked>
                  @if ($errors->has('disponivel'))
                      <span class="help-block">
                          <strong>{{ $errors->first('disponivel') }}</strong>
                      </span>
                  @endif
              </div>
          </div>


          <div class="form-group" style="border: solid 0px black;">
            <div class="col-md-4">
              <a href="{{ route('produto') }}" class="btn btn-primary"><i class="icon-arrow-left13 position-left"></i> Back</a>
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
