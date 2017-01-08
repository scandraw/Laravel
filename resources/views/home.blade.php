@extends('layouts.app')

@section('content')
<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">UlinTour</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/tentang')}}">Tentang Kami</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/galeri')}}">Galeri</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/pkt')}}">Paket Tour</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/contact')}}">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/login')}}">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->
	<header class="container">
		
		<!-- CAROUSEL -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
		 
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/banner5.png" alt="...">
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<h1>One Day Tour <br/>Lembang</h1></br>
						<p>Berwisata dan mengunjungi tempat-tempat menarik di Lembang</p>
						<a href="lembang.html" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
					</div><!-- /header-text -->
				</div>
				<div class="item">
					<img src="images/banner8.png" alt="...">
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<h1>One Day Tour <br/>Ciwidey</h1></br>
						<p>Berwisata dan mengunjungi tempat-tempat menarik di Ciwidey</p>
						<a href="ciwidey.html" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
					</div><!-- /header-text -->
				</div>
				<div class="item">
					<img src="images/banner7.png" alt="...">
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<h1>One Day Rafting <br/>Bandung</h1></br>
						<p>Memacu adrenalin menyusuri sungai di Bandung</p>
						<a href="rafting.html" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
					</div><!-- /header-text -->
				</div>
			</div>
		 
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div> <!-- Carousel -->
	</header>

	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
	
		<!-- ////////////Content Box 01 -->
		<section class="box-content box-1">
			<div class="container">
				<div class="heading">
					<h2>
						<span class="hr">Welcome!</span>
					</h2>
					<div class="intro">Selamat Datang di UlinTour. Kami akan mengajak anda berwisata dan mengunjungi tempat-tempat menarik di kota Bandung.</div>
				</div>
				
			</div>
		</section>
@endsection
