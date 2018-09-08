<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="front/css/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="front/css/style.css">
    <link rel="stylesheet" type="text/css" href="front/css/app.css">
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
                    <div id="menu">
                        <i class="fas fa-bars icon-menu"></i>
                    </div>
                    <a href="#popup-menu" data-fancybox id="pop-up">
                        <div id="user">
                            <i class="fas fa-user"></i>
                        </div>
                    </a>
                    <div id="popup-menu" style="display:none">
                        <div class="center">
                            <h4>Ingresa con tu correo electronico</h4>
                            <input type="text" name="" placeholder="Email">
                            <br>
                            <input type="text" name="" placeholder="Contraseña">
                            <button class="btn">INGRESAR</button>
                            <a href=""><p>¿Olvidaste tu contraseña?</p></a>
                            <div class="bottom-popup">
                                <p>¿No tienes una cuenta?</p>
                                <a href=""><p>Registrate aqui</p></a>
                            </div>
                        </div>
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
    <div class="wrapper container">
        @yield('content')
    </div>
	<footer>
        <div class="col-md-12 flex center">
            <div class="col-md-4">
                <img src="{{asset ('front/imagen/claqueta.png') }}">
                <h5>CINEMA TICKET</h5>
                <p>Nosotros</p>   
                <p>Contactanos</p>

            </div>
            <div class="col-md-4">
                <img src="{{asset ('front/imagen/popcorn.png') }}">
                <h5>CANDY BAR</h5>
                <p>Como comprar</p>
                <p>Info y Precios</p>                
            </div>
            <div class="col-md-4">
                <img src="{{asset ('front/imagen/entradas.png') }}">
                <h5>Suscribite al newsletter</h5>
                <p>Para recibir las mejores promociones</p>
                <div class="action">
                    <input type="email" value="Ingresá tu dirección de e-mail…" onfocus="FOOTER.newsSelect(this,'Ingresá tu dirección de e-mail…');" onblur="FOOTER.newsLeave(this,'Ingresá tu dirección de e-mail…');" autocapitalize="off" autocorrect="off" spellcheck="false" name="email" id="newsletter" title="Suscríbase a nuestras noticias" class="input-text required-entry validate-email">
                    <button><i class="far fa-envelope"></i></button>            
                </div>               
            </div>
        </div>
        <div class="col-md-12 center">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-github"></i>
            <i class="fab fa-instagram"></i>
        </div>
    </footer>
</body>
</html>

<script src="front/libraries/OwlCarousel/docs/assets/vendors/jquery.min.js"></script>
<script src="front/libraries/OwlCarousel/docs/assets/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="front/js/custom.js"></script>
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="front/js/jquery.fancybox.min.js"></script>
