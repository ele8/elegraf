

<!DOCTYPE html>
<html>
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/stile.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  </head>
  @if (\Request::is('home'))
  @php $bodyClass = "home" @endphp
  @else
  @php $bodyClass = "page" @endphp
  @endif

  <body class="{{ $bodyClass }}">
  	<div class="body-wrapper">
  	<!--===== Header Area =====-->
		<div class="header-wrapper">
			<header class="site-header">
				<div class="header-container">
					<!--logo-->
					<a href="/" class="logo-box">
						<h1 class="logo hidden">Elegraf</h1>
                    </a>

                    <div class="top-wrapper">
                        <!-- Desk Navigation -->
                        <nav class="nav-desk">
                            <ul class="menu-desk">
                                <li class="menu-item"><a href="/servizi">Servizi</a></li>
                                <li class="menu-item"><a href="/pacchetti">Pacchetti</a></li>
                                <li class="menu-item"><a href="/i-nostri-blog">I Nostri Blog</a></li>
                                <li class="menu-item"><a href="/conosciamoci">Conosciamoci</a></li>
                            </ul>
                        </nav>

                        <!-- Mobile Navigation -->

                        <nav class="nav-mobile hmb color-hover transition" onclick="openNav()">
                            <i class="fas fa-ellipsis-h"></i>
                        </nav>
                        <div class="menu-mobile transition" id="menu-mobile">
                            <div onclick="closeNav()"><i class="fas fa-times transition"></i></div>
                            <ul class="menu-mobile-ul">
                                <li class="menu-item"><a href="/servizi">Servizi</a></li>
                                <li class="menu-item"><a href="/pacchetti">Pacchetti</a></li>
                                <li class="menu-item"><a href="/i-nostri-blog">I Nostri Blog</a></li>
                                <li class="menu-item"><a href="/conosciamoci">Conosciamoci</a></li>
                            </ul>
                            <div class="social">
                                <a href="https://www.facebook.com/elegrafstudio"><i class="fab fa-facebook"></i><span class="hidden">Facebook</span></a>
                                <a href="https://www.instagram.com/_elegraf_/"><i class="fab fa-instagram"></i><span class="hidden">Instagram</span></a>
                                <a href="https://www.instagram.com/_elegraf_/"><i class="fab fa-pinterest"></i><span class="hidden">Pinterest</span></a>

                            </div>
                        </div>


                    </div>

				</div><!--header-container-->
			</header>
		</div><!--header-wrapper-->
		<!--===== End Header Area ======-->
        <div class="main-wrapper">
            <div class="main-container">
                @yield('content')
            </div>
        </div>




		<div class="footer-wrapper">
			<footer class="site-footer">
				<div class="footer-container">
                    <div class="newsletterbox"></div>
                    <nav class="nav-foo">
                        <ul class="menu-foo">
                            <li class="menu-item"><a href="/servizi">Servizi</a></li>
                            <li class="menu-item"><a href="/pacchetti">Pacchetti</a></li>
                            <li class="menu-item"><a href="/i-nostri-blog">I Nostri Blog</a></li>
                        </ul>
                    </nav>
                    <div class="copy">© 2020 Elegraf. Design + Sviluppo with <i class="fas fa-heart"></i>by Elegraf.</div>
				</div><!--footer-container-->

			</footer>
		</div><!--footer-wrapper-->

	</div><!--body-wrapper-->
</body>
</html>
<!-- Scripts -->
<script src="{{ asset('assets/bundle.js') }}" defer></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
