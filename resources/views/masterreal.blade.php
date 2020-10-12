<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">

    </head>
    <body>
    	<h3>Hello</h3>

    	<table id="dtBasicExample" class="table table-striped table-bordered" style="width:100%">
  
        <thead>
            <tr>
                <th>Name</th>
                <th>Password</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Yamin Nixon</td>
                <td>System Architect</td> 
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td> 
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td> 
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td> 
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td> 
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td> 
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td> 
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td> 
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td> 
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td> 
            </tr>
                 
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Password</th>
                 
            </tr>
        </tfoot>
    </table>


    </body>

    <script src="{{ asset('js/jquery/jquery-2.1.1.min.js') }}" ></script>
    <script src="{{ asset('js/app.config.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery-touch/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('js/jquery/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/jquery/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript"> 
 $(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "paging": true ,// false to disable pagination (or any other option)
    "iDisplayLength": 5
  });
  $('.dataTables_length').addClass('bs-select');
});
</script>
    </html>