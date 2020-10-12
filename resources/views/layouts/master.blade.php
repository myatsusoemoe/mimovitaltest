<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" type="text/css" media="screen"  href="{{ asset('css/site.css') }}"> 
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('content/bootstrap.min.css') }}">
     <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
    </head>
<body class="d-flex flex-column">
    <header>
        <nav class="navbar navbar-dark bg-tcs sticky-top">
        <a class="navbar-brand" href="#"><strong class="strong">ミモバイタル・データシステム</strong></a>
    </nav>
    </header>
    <main class="container-fluid flex-fill" id="test">
        <h2>This Navbar isn't fixed</h2>
                <h5>When you scroll down it will disappear</h5>
    </main>
    <footer class="footernavbar sticky-top" id="ftest">
         <p class="alignleft">OCC</p>
  <p class="alignright">Copyright@ OCC Corporation. All Rights Reserved</p>
    </footer>
</body>
<style type="text/css">
    body {
  width: 100vw;
    height: 100vh;
    font-size: 0.875rem;
    overflow-x: hidden;
}

.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 0px;
    border: 1px solid transparent;
}

.footernavbar {
    position: relative;
    min-height: 80px;
    margin-bottom: 0px;
    border: 1px solid transparent;
}

#ftest
{
    background-color: #203354;
}

.flex-fill { 
   flex:1 1 auto;
}

#test
{
    height: 500px;
    background-color: #dcdcdc;
}

.footertext
{
    color: #F77F00;
    margin-left: 500px;
    margin-top: 30px;
}

#footersmall
{
    color: #FFFFFF;
    font-size: 10px;
    margin-left: 550px;
    margin-top: 0px;
}

.alignleft {
    color: #F77F00;
    float: left;
    margin-left: 500px;
    margin-top: 20px;
    font-size: 25px;
    
}
.alignright {
    float: right;
    color: #FFFFFF;
/*    font-size: 10px;*/
    margin-right:  510px;
    margin-top: 32px;
    font-size: 13px;
    
}
}
</style>

</html>
