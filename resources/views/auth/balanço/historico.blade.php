@extends('layouts.admin')

@yield('title')

@section('content')

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Histórico de Recarga</font></font></h3>
              </div>
            </div>
            <!-- /.box-header -->
            @foreach($historico as $historic)
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><strong>Data da recarga da recarga: </strong></font></font></th>
                  <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><strong>Valor antes da recarga: </strong></font></font></th>
                  <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><strong>Valor recarregado: </strong></font></font></th>
                  <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><strong>Total: </strong></th>
                </tr>
                <tr>
                  <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $historic->created_at->format('d-m-Y H:i:s') }}</font></font></td>
                  <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $historic->total_antes }}</font></font></td>
                  <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $historic->montante }}</font></font></td>
                  <td><span class="label label-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $historic->total_depois }}</font></font></span></td>
                </tr>
              </tbody></table>
            </div>
            @endforeach
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
        </div>
    </div>

@stop