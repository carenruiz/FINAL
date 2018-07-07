@extends('admin.layouts.main')

@section('content')
  <!-- Content Wrapper. Contains page content -->
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

     <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form"  action="{{url('/eventoalta')}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre" required="">
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripcion</label>
                  <input type="text" class="form-control" id="descripcion" placeholder="descripcion" name="descripcion" required="">
                </div>
                <div class="form-group">
                  <label for="horario">Horario</label>
                  <input type="time" class="form-control" id="horario" placeholder="Password" name="horario" required="">
                </div>
                <div class="form-group">
                  <label for="fecha">Fecha</label>
                  <input type="date" class="form-control" id="fecha" placeholder="fecha" name="fecha" required="">
                </div>
                <div class="form-group">
                  <label for="precio">precio</label>
                  <input type="text" class="form-control" id="precio" placeholder="fecha" name="precio" required="">
                </div>
                <div class="form-group">
                  <label for="cantidad">Cantidad</label>
                  <input type="text" class="form-control" id="cantidad" placeholder="cantidad" name="cantidad" required="">
                </div>
                <div class="form-group">
                  <label for="imagen">Imagen</label>
                  <input type="file" id="imagen" name="imagen" required="">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
@endsection