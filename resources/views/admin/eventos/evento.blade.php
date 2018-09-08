@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Panel de Control
      </h1>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Eventos</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>Titulo</th>
                  <th>Descripcion</th>
                  <th>Fecha</th>
                  <th>Horario</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th>Eliminar</th>
                  <th>Editar</th>
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
                  <td>
                      <div class="pull-right">
                        <a class="ion ion-close" style="font-size: 150%;" onclick="eventobaja({{$e->id}});"></a>
                    </div>
                  </td>
                  <td>
                    <div class="pull-right">
                        <a class="ion ion-edit" style="font-size: 150%;" href="{{url('/eventoeditar',[$e->id])}}"></a>
                    </div>
                  </td>
                </tr>
                @endforeach
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 @endsection