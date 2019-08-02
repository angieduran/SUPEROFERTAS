<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>CONTACTARSE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
			<div id="page-wrapper">
					<header style="background-color:rgba(255,175,75,1);" id="header" class="alt">
							<h1><a href="welcome.blade.php">SUPEROFERTAS</a> by softy</h1>
							<nav id="nav">
								<ul>
								
							
						
								<!-- Authentication Links -->
								@guest
									<li >
										<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
										
									</li>
									
									@if (Route::has('register'))
										<li >
											<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
										</li>
									@endif
								@else
									<li>
										<a  href="#"  class="icon fa-angle-down" >
											{{ Auth::user()->name }} <span class="caret"></span>
										</a>
										 <ul>
										<div>
											<li><a  href="{{ route('logout') }}"
											   onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>
											</li>
			
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
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
			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>Contactanos</h2>
						<p>¿Quieres hacernos lllegar recomendaciones u opciones que deseas en esta pagina?, Escribenos.</p>
					</header>
					<div class="box">
						<form method="post" action="#">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-6 col-12-mobilep">
									<input type="text" name="name" id="name" value="" placeholder="Name" />
								</div>
								<div class="col-6 col-12-mobilep">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
								<div class="col-12">
									<input type="text" name="subject" id="subject" value="" placeholder="Subject" />
								</div>
								<div class="col-12">
									<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" value="Send Message" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
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