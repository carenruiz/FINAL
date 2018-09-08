@extends('index')

@section('content')
<div class="col-md-12 flex">
	<div class="container-img col-md-6">
		<img src="{{asset ('front/imagen/tabs1.jpg')}}">
	</div>
	<div class="container-description col-md-6">
		<ul class="title-tabs flex">
			<li class="center active">SINOPSIS</li>
			<li class="center">FICHA TECNICA</li>
		</ul>
		<div class="tabs">
			<div class="tab-one">
				
			</div>
			<div class="tab-two">
				
			</div>			
		</div>
	</div>
</div>

@endsection