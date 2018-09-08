@extends('index')

@section('content')
        <div class="owl-carousel uno" id="uno">
            <div>
                <img src="{{asset ('front/imagen/slider.1.jpg') }}">
            </div>
            <div>
                <img src="{{asset ('front/imagen/slider2.jpg') }}">
            </div>
            <div>
                <img src="{{asset ('front/imagen/slider3.jpg') }}">
            </div>
            <div>
                <img src="{{asset ('front/imagen/slider4.jpg') }}">
            </div>
        </div>
        <div class=" owl-carousel dos container" id="dos">
               <div class="tabla">
                    <img src="{{asset ('front/imagen/tabs1.jpg') }}">
                    <div class="btn-compra">
                        <button>Comprar</button>
                    </div>
               </div> 

               <div class="tabla">
                    <img src="{{asset ('front/imagen/tabs2.jpg') }}">
                    <div class="btn-compra">
                        <button>Comprar</button>
                    </div>
               </div> 
               <div class="tabla">
                    <img src="{{asset ('front/imagen/tabs3.jpg') }}">
                    <div class="btn-compra">
                        <button>Comprar</button>
                    </div>
               </div> 
               <div class="tabla">
                    <img src="{{asset ('front/imagen/tabs4.jpg') }}">
                    <div class="btn-compra">
                        <button>Comprar</button>
                    </div>
               </div> 
        </div>
@endsection