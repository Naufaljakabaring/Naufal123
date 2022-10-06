<!doctype html>
<html lang="en">
  <head>
  	<title>@yield('judul')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css1/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images1/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            
                <li>
                    <a href="/kegiatanend">kegiatan</a>
                </li>
                <li>
                    <a href="galeriend">galeri</a>
                </li>
                <li>
                    <a href="anggotabaru">daftar anggota baru</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </li>
             
                </li>
              </ul>
	          </li>
	          <li>
              
	          </li>
	          <li>
            
              
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> selamat datang kembali  <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">M. Naufal Gso25a Palcomtech opi mall</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
          

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
               
                </li>
                <a href="/" class="nav-item nav-link active">beranda</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        @yield('isi')
      </div> 
		</div>

    <script src="js1/jquery.min.js"></script>
    <script src="js1/popper.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/main.js"></script>

    
  </body>
</html>