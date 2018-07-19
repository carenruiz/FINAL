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
            <h3 class="box-title">{{isset($eventoedit)?'Modificar':'Crear Nuevo'}} evento </h3>
          </div>
          <form role="form"  action="{{isset($eventoedit)?url('/eventoeditar',[$eventoedit->id]):url('/eventoalta')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre" required="" value="{{isset($eventoedit)?$eventoedit->nombre:''}}">
              </div>
              <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" placeholder="descripcion" name="descripcion" required="" value="{{isset($eventoedit)?$eventoedit->descripcion:''}}">
              </div>
              <div class="form-group">
                <label for="horario">Horario</label>
                <input type="time" class="form-control" id="horario" placeholder="Password" name="horario" required="" value="{{isset($eventoedit)?$eventoedit->horario:''}}">
              </div>
              <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" placeholder="fecha" name="fecha" required="" value="{{isset($eventoedit)?$eventoedit->fecha:''}}">
              </div>
              <div class="form-group">
                <label for="precio">precio</label>
                <input type="text" class="form-control" id="precio" placeholder="precio" name="precio" required="" value="{{isset($eventoedit)?$eventoedit->precio:''}}">
              </div>
              <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="text" class="form-control" id="cantidad" placeholder="cantidad" name="cantidad" required="" value="{{isset($eventoedit)?$eventoedit->cantidad:''}}">
              </div>
              @if(isset($eventoedit)) 
              
              @else
              <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" required="">
              </div>
              @endif
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">{{isset($eventoedit)?'Modificar':'Crear'}}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection