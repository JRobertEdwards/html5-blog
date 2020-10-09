<html>
    <head>
        <title>Josh Edwards - @yield('title', 'Home')</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

    <body class="is-preload">
		<div id="wrapper">

			@section('sidebar')

			<header id="header">
                <nav>
                    <ul>
						<li><a class="{{ (request()->is('/')) ? 'active' : '' }}" href="/">Home</a></li>
						<li><a class="{{ (request()->is('about')) ? 'active' : '' }}" href="/about">About</a></li>
                        <li><a class="{{ (request()->is('work')) ? 'active' : '' }}" href="/work">Work</a></li>
                        <li><a class="{{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">Contact</a></li>
                    </ul>
                </nav>
			</header>
        	@show

            <header id="header">	
            	<div class="container">
            	    @yield('content')
            	</div>
			</header>

			<!-- Footer -->
            <footer id="footer">
				<ul class="icons">
					<li><a href="https://www.linkedin.com/in/joshrobertedwards/" class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
					<li><a href="https://twitter.com/CorkyJosh" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.instagram.com/jredwards91" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="https://github.com/JRobertEdwards" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
				</ul>
				<h6 class="photo-credit">{{ $photoName ?? '' }} | </h6>
				<h6 class="design">Design: <a href="https://html5up.net">HTML5 UP</a>.</h6>
				<h6 class="source">Source code available <a href="https://github.com/JRobertEdwards/html5-blog">Here</a></h6>
			</footer>
		</div>

		<!-- BG -->
		<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>

	<style>

		a.active {
			text-decoration: line-through;
		}
		#active {
			background-color: red;
		}
		h6.photo-credit {
			opacity: 45%;
			float: left;
			display: inline;
		}
		h6.design {
			padding-left: 10px;
			opacity: 30%;
			float: left;
			display: block;
		}

		h6.source {
			opacity: 45%;
			float:right;
			display: block;
		}

	</style>

</html>