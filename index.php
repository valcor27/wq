<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebQuest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="virtual/css/estilos.min.css">
    <style>
        .image-container {
            width: 100%;
            
            position: relative;
            display: inline-block;
        }

        .image-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Color oscuro con opacidad */
            pointer-events: none; /* Evita que el pseudo-elemento afecte los clics */
            opacity: 1; /* Ajusta la opacidad según sea necesario */
            transition: opacity 0.3s ease; /* Agrega una transición suave */
        }
        #detalles .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between; /* Distribuir el espacio entre las columnas */
    }
    #detalles .col-lg-3 {
        flex: 0 0 calc(25% - 15px); /* Establecer el ancho de las columnas */
        margin-bottom: 30px; /* Espacio entre las filas */
    }
    .details {
        display: flex;
        flex-direction: column;
        height: 100%; /* Para asegurar que todas las columnas tengan la misma altura */
        align-items: center; /* Centrar elementos verticalmente */
        text-align: center; /* Centrar texto */
    }
    .details img {
        margin-bottom: 15px; /* Espacio entre la imagen y el texto */
    }
    </style>
</head>
<body>
<header>
		<nav class="navbar navbar-expand-lg bg-light fixed-top" id="menu">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="virtual/img/lfsa.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#Inicio">INICIO</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#detalles">DETALLES</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<main>
		<div id="Inicio" class="carousel slide carousel-fade mt-5" data-bs-ride="false">
			<div class="carousel-inner">
				<div class="carousel-item active image-container">
					<img src="virtual/img/img3.jpg" class="d-block w-100" alt="INICIO">
					<div class="carousel-caption">
						<h5 class="d-block">WEBQUEST</h5>
						<p class="lead d-none d-sm-block">¡Si lo puedes imaginar lo puedes programar!</p>
					</div>
				</div>
			</div>
		</div>
		<section id="detalles">
			<div class="container marketing">
				<div class="row">
					<div class="col-lg-3 details">
						<img src="virtual/img/introduccion.jpg" alt="Cosméticos" class="bd-placeholder-img rounded-circle" width="140" height="140">
						<h5 class="card-title">Introducción</h5>
						<p class="card-producto-text">Es la sección donde se presenta el tema de la WebQuest y se motiva a los estudiantes para participar en la actividad.</p>
						<p class="btn-more-details"><a class="btn btn-primary" href="#productos"><i class="fa-solid fa-hand-point-right"></i> Más detalles</a></p>
					</div>
					<div class="col-lg-3 details">
						<img src="virtual/img/tarea.jpg" alt="Cosméticos" class="bd-placeholder-img rounded-circle" width="140" height="140">
						<h5 class="card-title">Tarea</h5>
						<p class="card-producto-text">Define los objetivos de aprendizaje y las metas que deben alcanzarse.</p>
						<p class="btn-more-details"><a class="btn btn-primary" href="#productos"><i class="fa-solid fa-hand-point-right"></i> Más detalles</a></p>
					</div>
					<div class="col-lg-3 details">
						<img src="virtual/img/proceso.jpg" alt="Cosméticos" class="bd-placeholder-img rounded-circle" width="140" height="140">
						<h5 class="card-title">Proceso</h5>
						<p class="card-producto-text">Detalla los pasos específicos que los estudiantes deben seguir para completar la tarea.</p>
						<p class="btn-more-details"><a class="btn btn-primary" href="#productos"><i class="fa-solid fa-hand-point-right"></i> Más detalles</a></p>
					</div>
					<div class="col-lg-3 details">
						<img src="virtual/img/recursos.jpg" alt="Cosméticos" class="bd-placeholder-img rounded-circle" width="140" height="140">
						<h5 class="card-title">Recursos</h5>
						<p class="card-producto-text">Enumera los materiales y fuentes de información que los estudiantes pueden utilizar para llevar a cabo la tarea.</p>
						<p class="btn-more-details"><a class="btn btn-primary" href="#productos"><i class="fa-solid fa-hand-point-right"></i> Más detalles</a></p>
					</div>
                    <div class="col-lg-3 details">
						<img src="virtual/img/evaluacion.jpg" alt="Cosméticos" class="bd-placeholder-img rounded-circle" width="140" height="140">
						<h5 class="card-title">Evaluación</h5>
						<p class="card-producto-text"> Especifica cómo se evaluará el trabajo de los estudiantes.</p>
						<p class="btn-more-details"><a class="btn btn-primary" href="#productos"><i class="fa-solid fa-hand-point-right"></i> Más detalles</a></p>
					</div>
                    <div class="col-lg-3 details">
						<img src="virtual/img/conclusion.jpg" alt="Cosméticos" class="bd-placeholder-img rounded-circle" width="140" height="140">
						<h5 class="card-title">Conclusión</h5>
						<p class="card-producto-text">Resume los resultados de la actividad y proporciona oportunidades para que los estudiantes reflexionen sobre lo que han aprendido.</p>
						<p class="btn-more-details"><a class="btn btn-primary" href="#productos"><i class="fa-solid fa-hand-point-right"></i> Más detalles</a></p>
					</div>
                    <div class="col-lg-3 details">
						<img src="virtual/img/conclusion.jpg" alt="Cosméticos" class="bd-placeholder-img rounded-circle" width="140" height="140">
						<h5 class="card-title">Creditos</h5>
						<p class="card-producto-text">Reconoce la autoría de los recursos utilizados en la WebQuest y agradece a quienes han contribuido al desarrollo de la actividad.</p>
						<p class="btn-more-details"><a class="btn btn-primary" href="#productos"><i class="fa-solid fa-hand-point-right"></i> Más detalles</a></p>
					</div>
				</div>
			</div>
		</section>
		<section id="nosotros" class="nosotros">
			<svg id="curva" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 185.46"><path class="cls-1" d="M0,263.42S311,41.91,700,195.54s700,67.88,700,67.88v63.34H0Z" transform="translate(0 -141.3)"/></svg>
			<div class="container">
				<div class="row featurette align-items-center">
					<div class="col-md-7 mt-5 order-2 order-lg-1">
						<h4 class="text-center"><span class="text-muted">INTRODUCCIÓN</span></h4>
						<p class="lead text-justify">¡Bienvenidos! En esta WebQuest, exploraremos los fundamentos de la programación web. La programación web es una habilidad fundamental en la era digital, ya que permite crear sitios web interactivos y dinámicos. A lo largo de esta actividad, aprenderás los conceptos básicos de HTML, CSS y JavaScript, y aplicarás tus conocimientos para desarrollar tu propio sitio web.</p>
					</div>
					<div class="col-md-5 mt-5 hero-img order-1 order-lg-2">
						<img src="virtual/img/inicio.png" alt="LOGO" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto animated" width="500" height="500">
					</div>
				</div>
			</div>
		</section>
		<section id="productos" class="productos">
			<svg id="curva2" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 185.46"><path class="cls-1" d="M0,263.42S311,41.91,700,195.54s700,67.88,700,67.88v63.34H0Z" transform="translate(0 -141.3)"/></svg>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h5 class="titulo-sec text-center"><b class="titulo-fondo">PUNTOS INDIVIDUALES</b></h5>
					</div>
				</div>
				<div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
					<div class="col">
						<div class="card">
							<img src="virtual/img/tarea.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Tarea</h5>
								<p class="text-start">
									<i class="fa-regular fa-circle-check icon-pro"></i> Tu tarea es comprender los conceptos básicos de la programación web y aplicarlos en la creación de tu propio sitio web. Al finalizar esta WebQuest, deberás ser capaz de diseñar y desarrollar un sitio web simple utilizando HTML, CSS y JavaScript.
								</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="virtual/img/proceso.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Proceso</h5>
								<p class="text-start">
									<i class="fa-regular fa-circle-check icon-pro"></i> Investigación sobre HTML: Investiga qué es HTML (HyperText Markup Language) y cómo se utiliza para crear la estructura de un sitio web. Aprende sobre las etiquetas HTML básicas, como < html>, < head>, < body>, < div>, < p>, < h1>, < img>, etc..
								</p>
								<p class="text-start">
									<i class="fa-regular fa-circle-check icon-pro"></i> Exploración de CSS: Explora CSS (Cascading Style Sheets) y su función en la presentación de un sitio web. Aprende a aplicar estilos a elementos HTML para cambiar su apariencia, como el color, el tamaño de fuente, el espaciado, etc.
								</p>
								<p class="text-start">
									<i class="fa-regular fa-circle-check icon-pro"></i> Introducción a JavaScript: Familiarízate con JavaScript y su papel en la programación web interactiva. Aprende los conceptos básicos de JavaScript, como variables, funciones, eventos, etc.
								</p>
								<p class="text-start">
									<i class="fa-regular fa-circle-check icon-pro"></i> Desarrollo de tu sitio web: Diseña y desarrolla tu propio sitio web simple utilizando HTML, CSS y JavaScript. Puedes elegir un tema que te interese, como un portafolio personal, un blog, una página de inicio, etc.
								</p>
								<p class="card-text text-justify mb-2 card-title">Información adicional</p>
								<p class="text-start">
									<i class="fa-solid fa-circle-info icon-pro"></i> Puedes utilizar fameworks de CSS, tal es el caso de Bootstrap (estamos utilizando bootstrap para este ejemplo).
                                </p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="virtual/img/recursos.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Recursos</h5>
								<p class="text-start">
									<i class="fa-regular fa-circle-check icon-pro"></i> Tutoriales en línea sobre HTML, CSS y JavaScript.
								</p>
								<p class="text-start">
									<i class="fa-regular fa-circle-check icon-pro"></i> Ejemplos de código HTML, CSS y JavaScript.
								</p>
								<p class="text-start">
									<i class="fa-regular fa-circle-check icon-pro"></i> Plataformas de desarrollo web, como CodePen, JSFiddle, etc.
								</p>
								<div class="row">
									<div class="col-md-12 d-grid gap-2">
										<a href="https://www.youtube.com/@FalconMasters" target="_blank" class="btn btn-outline-primary">
                                            <i class="fa-solid fa-book"></i> Video Recursos
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="virtual/img/evaluacion.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Evaluación</h5>
                                <p class="text-start">
                                    Tu trabajo será evaluado en función de los siguientes criterios:
                                </p>
								<p class="text-start">
									<i class="fa-regular fa-circle-check icon-pro"></i> Comprensión de los conceptos básicos de HTML, CSS y JavaScript.
								</p>
								<p class="text-start">
									<i class="fa-regular fa-circle-check icon-pro"></i> Aplicación efectiva de HTML, CSS y JavaScript en la creación de tu sitio web.
								</p>
								<p class="text-start">
									<i class="fa-regular fa-circle-check icon-pro"></i> Diseño y funcionalidad del sitio web desarrollado.
								</p>
								<p class="text-start">
									<i class="fa-regular fa-circle-check icon-pro"></i> Claridad y organización del código.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="container">
			<div class="row py-4 align-items-center justify-content-center">
				<div class="col-md-6 col-lg-5 text-center text-start mb-4 mb-md-0">
					<h6 class="text-uppercase mb-0 text-white">Nuestras redes sociales, Contactanos!</h6>
				</div>
				<div class="col-md-6 col-lg-7  text-end redes">
					<a href="https://www.facebook.com/FamilySystemsIT" class="fb" target="_blank"><i class="reicon fa-brands fa-square-facebook mr-4"></i></a>
					<a href="https://web.whatsapp.com/send?phone=522229094261" class="whats" target="_blank"><i class="reicon fa-brands fa-whatsapp"></i></a>
					<a href="https://www.youtube.com/@familysystems9938" class="you" target="_blank"><i class="reicon fa-brands fa-youtube"></i></a>
				</div>
			</div>
			<div class="row text-white justify-content-center">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mx-auto mb-md-0 mb-4 mt-5" >
					<h6 class="text-uppercase font-weight-bold">Conclusión</h6>
					<hr class="deep-purple accent-2 mb-4 mt-1 d-inline-block mx-auto" style="width: 20%;">
					<p class="text-center text-md-start">En esta WebQuest, has explorado los fundamentos de la programación web y has aplicado tus conocimientos para desarrollar tu propio sitio web. La programación web es una habilidad valiosa en el mundo digital actual, y espero que esta actividad te haya ayudado a comenzar tu viaje en este emocionante campo.</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mx-auto mb-md-0 mb-4 mt-5">
					<h6 class="text-uppercase font-weight-bold">Contacto</h6>
					<hr class="deep-purple accent-2 mb-4 mt-1 d-inline-block mx-auto" style="width: 20%;">
					<p>
						<i class="fas fa-home mr-3"></i> Izúcar de Matamoros, Puebla
					</p>
					<p>
						<a href="mailto:eviaaceite@gmail.com">
							<i class="far fa-envelope mr-3"></i> contacto@familysystems.com
						</a>
					</p>
					<p>
						<i class="fas fa-phone mr-3"></i> 222 909 4261  
					</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mx-auto mb-md-0 mb-4 mt-5">
					<a href="https://familysystems.com.mx/" target="_blank"><img class="fs" src="virtual/img/dlfsb.png" alt=""></a>
				</div>
			</div>
		</div>
	</footer>
    <script src="virtual/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>