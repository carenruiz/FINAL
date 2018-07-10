<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="front/css/style.css">
    <link rel="stylesheet" type="text/css" href="front/libraries/fontawesome-free-5.0.12/web-fonts-with-css/css/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="front/libraries/OwlCarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="front/libraries/OwlCarousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css">

</head>
<body>
	<div>
        <header id="header">
    		<div class="mini-menu">
    			<div class="container-image">
    				<div class="image-logo">
                        <img src="{{asset ('front/imagen/logodos.png') }}">
    				</div>
    			</div>
    			<div class="search-container">
    				<input type="" name="" id="search" placeholder="Buscar">
    				<button class="button-search"><i class="fas fa-search"></i></button>
    			</div>	
    			<div class="container-user">
    				<div class="my-acount-container">
    					<span class="my-acount">Mi cuenta</span>
                        <ul id="header-acount">
                            <li><a href="">Mi cuenta</a></li>
                            <li><a href="">Iniciar sesion</a></li>
                            <li><a href="">Registrarme</a></li>
                            
                        </ul>
    				</div>
    				<div class="bag-container">
    					<span class="bag"></span>
    					<span class="count-bag"></span>
    				</div>
    			</div>

    		</div>
    		<nav id="nav">
    			<a href="">Cine</a> 
    			<a href=""> Cartelera</a>
    			<a href="">Promociones</a>
    			<a href="">Como comprar</a>
    		</nav> 
        </header>   
	</div>
    <div class="wrapper">
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
    </div>
	<footer>
        <div class="newsletter">
            <span class="bold">Suscribite al newsletter</span>
            <span class="subtitulo">Para recibir noticias y promociones</span>
            <div class="action">
                <input type="email" value="Ingresá tu dirección de e-mail…" onfocus="FOOTER.newsSelect(this,'Ingresá tu dirección de e-mail…');" onblur="FOOTER.newsLeave(this,'Ingresá tu dirección de e-mail…');" autocapitalize="off" autocorrect="off" spellcheck="false" name="email" id="newsletter" title="Suscríbase a nuestras noticias" class="input-text required-entry validate-email">
                <button><i class="far fa-envelope"></i></button>            
            </div>

        </div>
        <div class="footer">
            <div class="imagen-footer">
                <img src="{{asset ('front/imagen/CT.png') }}">
            </div>
            <div class="display-center iconos">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-github"></i>
            </div>
            <div class="display contenedor-bottomf">
                <div class="cuarto">
                    <p>METODO DE PAGO</p>
                </div>
                <div class="cuarto">
                    <p>CAMBIOS Y DEBOLUCIONES</p>
                </div>
                <div class="cuarto">
                    <p>TERMINOS Y CONDICIONES</p>
                </div>
                <div class="cuarto">
                    <p>COMO COMPRAR</p>
                </div>
            </div>
            <div class="bottom-footer display-space">
                <div>
                    <p>UAI</p>
                </div>
                <div>
                    <p>CAREN RUIZ</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

    <script src="front/libraries/OwlCarousel/docs/assets/vendors/jquery.min.js"></script>
    <script src="front/libraries/OwlCarousel/docs/assets/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="front/js/custom.js"></script>
