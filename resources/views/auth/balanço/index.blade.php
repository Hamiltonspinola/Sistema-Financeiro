@extends('layouts.admin')

@yield('title')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Todos os pedidos</h3>
        <div class="card-tools">      
            <a href="{{ route('deposito') }}" class="btn btn-block btn-primary btn-sm">Recarregar</a> 
            <a href="" class="btn btn-block btn-danger btn-sm">Sacar</a>
        </div>
    </div>

  <div class="card-body">
    
  <div class="col-lg-4 col-md-6 col-sm-6 col-12">

    <div class="small-box bg-info">
      <div class="inner">
        <h3>R${{ number_format($montante, 2, ',', '') }}</h3>
      </div>
      <div class="icon">
        <i class="fas fa-shopping-cart"></i>
      </div>
      <a href="#" class="small-box-footer">
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">
        Histórico
            </font>
        </font><i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  </div>
  <div class="card-footer">
    The footer of the card
  </div>
</div>

@stop