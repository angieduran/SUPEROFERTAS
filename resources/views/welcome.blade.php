
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

   
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>SUPEROFERTAS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing is-preload">
			<div id="page-wrapper">
					<header id="header" class="alt">
							<h1><a href="welcome.blade.php">SUPEROFERTAS</a> by softy</h1>
							<nav id="nav">
								<ul>
									
									<li>
										<a href="#" class="icon fa-angle-down">MAS</a>
										<ul>
											<li><a href="generic.blade.php">Ofertas del dia</a></li>
											<li><a href="contact.blade.php">Contactanos </a></li>
											<li><a href="elements.blade.php">Directorio</a></li>
											<li>
												<a href="#">Directorio</a>
												<ul>
													<li><a href="#">Option One</a></li>
													<li><a href="#">Option Two</a></li>
													<li><a href="#">Option Three</a></li>
													<li><a href="#">Option Four</a></li>
												</ul>
											</li>
										</ul>
									</li>
									
							
						
								<!-- Authentication Links -->
								@guest
									<li >
										<a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
										
									</li>
									
									@if (Route::has('register'))
										<li >
											<a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
										</li>
									@endif
								@else
									<li>
										<a  href="#"  class="icon fa-angle-down" >
											{{ Auth::user()->name }} <span class="caret"></span>
										</a>
		                                 <ul>
											 
										<div>
												<li><a href="/vista2.blade.php">Editar Perfil</a></li>
		
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
												</form>
											<li><a  href="{{ route('logout') }}"
											   onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>
											</li>
											
										</div>
		                                 </ul>
									</li>
								@endguest
							</ul>
						</div>
					</div>
				</nav>
			</ul>
		</nav>
			</div>
				<main class="py-4">
					@yield('content')
				</main>
		
			</header>
					

			<!-- Banner -->
				<section id="banner">
					<h2>SUPEROFERTAS</h2>
					<p>Visualiza las ofertas de los supermercados en tu ciudad uwu</p>
					<ul class="actions special">
						<li><a href="generic.blade.php" class="button primary">Ver ofertas del dia</a></li>
						<li><a href="contact.blade.php" class="button">Contactanos</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>¿QUE ES SUPEROFERTAS?
							<br />
							</h2>
							<p>Esta pagina web te mostrará todas las ofertas diarias que tienen los supermercados de tu ciudad.</p>
						</header>
						<span class="image featured"><img src="images/ofertas.jpg" alt="" /></span>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-bolt accent2"></span>
								<h3>Proposito</h3>
								<p>Esta pagina fue creada con el fin de ayudar a los habitantes de la ciudad de neiva para que visualice las ofertas de los supermecados de su ciudad y asi poder manejar de manera mas correcta su presupuesto para las compras del hogar</p>
							</section>
							<section>
								<span class="icon major fa-area-chart accent3"></span>
								<h3>METAS</h3>
								<p>+ Lograr que buena parte de los habitantes de la ciudad de neiva conozcan nuestra pagina y aplicación</p>
								<p>+ Lograr que todos los supermecados de la ciudad de Neiva se asocien a nuestro proyecto</p>
								<p>+ Lograr que los ciudadanos controlen su presupuesto del hogar</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon major fa-cloud accent4"></span>
								<h3>ALABEMOS AL SEÑOR</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
							<section>
								<span class="icon major fa-lock accent5"></span>
								<h3>:D</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
						</div>
					</section>

					<div class="row">
						<div class="col-6 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
								<h3>YA NO SE QUE PONER AIUDA</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions special">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
						<div class="col-6 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>LEVIOSÁ</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions special">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
					</div>

				</section>

			<!-- CTA -->
				<section id="cta">

					<h2>CREA UNA CUENTA PREMIUM</h2>
					<p>A veeeer si te crees muy ricachon paga esta cuenta y llena nuestros bolsillos. Dios te bendiga :3
						pdts: obvio tendras cosillas extra a parte de los pobres uwu.</p>

					<form>
						<div class="row gtr-50 gtr-uniform">
							<div class="col-8 col-12-mobilep">
								<input type="email" name="email" id="email" placeholder="Email Address" />
							</div>
							<div class="col-4 col-12-mobilep">
								<input type="submit" value="Sign Up" class="fit" />
							</div>
						</div>
					</form>

				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>