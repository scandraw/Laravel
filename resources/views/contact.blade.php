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
		<div id="main-content">
			<div class="container">
				<article>
					<div class="heading">
						<h2>
							<span class="hr">Contact</span>
						</h2>
					</div>
					<div class="row">
						<div class='embed-container maps'>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
						</div>
						<div class="col-md-4 box-item">
							<h3>Contact Info</h3>
							<br>
							<p>JL.Pasundan no.64b Kel.Balonggede Kec.Regol<br>
								Bandung-Indonesia</p>
							   <p>+6222 7536405 <br>
								+6222 7536201</p>
							<p>info@ulintour.com</p>
						</div>
						
						
					</div>
				</article>
			</div>
		</div>
	</div>
@endsection