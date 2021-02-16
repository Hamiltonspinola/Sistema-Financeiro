@extends('layouts.admin')

@yield('title')

@section('content')

    <div class="card-header">
        <h3 class="card-title">Recarga</h3>
    </div>

    <div class="card-body">
        <div class="box box-info">
            <form class="form-horizontal" method="POST" action="{{ route('deposito.store') }}">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Valor do depósito</font></font></label>

                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="value" placeholder="R$ 0,00"><br>
                <input type="submit" class="btn btn-success">Depositar</input>
            </div>
        </div>

        </div>
  </div>
@stop