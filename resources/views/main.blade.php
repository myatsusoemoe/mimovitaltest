<html>
    <head>
        <title>Master Template having parent </title>
		<!-- <style>
		.sidenav {
		  height: 100%;
		  width: 160px;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: #111;
		  overflow-x: hidden;
		  padding-top: 20px;
		}
		
		.sidenav a {
		  padding: 6px 8px 6px 16px;
		  text-decoration: none;
		  font-size: 25px;
		  color: #818181;
		  display: block;
		}
		
		.container {
		  margin-left: 160px; 
		  font-size: 28px; 
		  padding: 0px 10px;
		}
		</style> -->
		<link rel="stylesheet" type="text/css" media="screen"  href="{{ asset('css/site.css') }}"> 
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('content/bootstrap.min.css') }}">
     <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
         


    <nav class="navbar navbar-dark bg-tcs sticky-top">
        <a class="navbar-brand" href="#"><strong>ミモバイタル・データシステム</strong></a>
    </nav>

    </head>
    <body>
      <main>
    <div class="container" style="height:1500px;background-color: #dcdcdc">
        <div class="row pt-5">
            <div class="col text-center">
                <h2>This Navbar isn't fixed</h2>
                <h5>When you scroll down it will disappear</h5>
            </div>
        </div>
    </div>
</main>
    	<!-- <h3>Helllo</h3>
        @section('sidebar')
            <div class="sidenav">
			  <a href="#">Home</a>
			  <a href="#">Product</a>
			  <a href="#">Service</a>
			  <a href="#">About</a>
			  <a href="#">Contact</a>
			</div>

			<div class="container">
        <h4>This is Master Layout</h4>
        <nav>
          <a href="">HTML</a> |
          <a href="">CSS</a> |
          <a href="">PHP</a> |
          <a href="">CodeIgniter</a> |
          <a href="">Laravel</a>
        </nav> 
        </div> 
        @show

        <div class="container">
            @yield('content')
        </div> -->
        <!-- <div class="mimomaincontainer">
        <nav id="tcs-Navbar" class="navbar navbar-dark bg-tcs sticky-top">
           
              <span class="mimoheader">
   ミモバイタル・データシステム
  </span>          
        </nav>
    
        <div class="navbar mimocontainer">
        	<h3> This is content pane.</h3>
        	<button type="button" class="btn btn-sm bg-tcs text-white">Click Me!</button>
        </div >
        <div class="navbar mimofooter">
        	<h3>OCC</h3>
        </div> -->

<!--         <nav id="tcs-Navbar" class="navbar navbar-dark bg-tcs sticky-top">
            <a class="navbar-brand">ミモバイタル・データシステム</a>            
        </nav> -->
       <!--  </div> -->
    </body>
<html>