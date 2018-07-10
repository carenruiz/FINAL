@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Panel de Control
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Crear Nuevo evento</h3>
          </div>
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
                <input type="text" class="form-control" id="precio" placeholder="precio" name="precio" required="">
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
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Crear</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection