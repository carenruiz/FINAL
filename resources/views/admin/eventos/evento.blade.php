@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>Titulo</th>
                  <th>Descripcion</th>
                  <th>Feacha</th>
                  <th>Horario</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($evento as $e)
                <tr>
                  <td>{{$e->nombre}}</td>
                  <td>{{$e->descripcion}}</td>
                  <td>{{$e->fecha}}</td>
                  <td>{{$e->horario}}</td>
                  <td>{{$e->precio}}</td>
                  <td>{{$e->cantidad}}</td>
                  <td><div class="pull-right">
                    <a class="ion ion-close" style="font-size: 150%;" onclick="eventobaja({{$e->id}});"></a>
                </div></td>
                </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @endsection