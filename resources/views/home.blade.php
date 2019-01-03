@extends('index')

@section('title', 'Home')
@section('breadcrumbs')
{!! Breadcrumbs::render('home') !!}
@endsection

@section('content')
<div class="panel panel-flat">
  <div class="panel-heading">
    <h5 class="panel-title">Dashboard</h5>
    <div class="heading-elements">
      <ul class="icons-list">
        <li><a data-action="collapse"></a></li>
        <li><a data-action="close"></a></li>
      </ul>
    </div>
  </div>
</div>
@endsection
