<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" type="text/css" media="screen"  href="{{ asset('css/site.css') }}"> 
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('content/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Changa' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Black Ops One' rel='stylesheet'>
</head>
<body class="d-flex flex-column">
    <header>
        <nav class="headernavbar navbar-dark bg-tcs sticky-top">
        <a class="navbar-brand" href="#"><strong class="strong">ミモバイタル・データシステム</strong></a>
    </nav>
    </header>
    <main class="container-fluid" id="test">
        <h4><strong>個人ID 0010010010001 の異常データ集計</strong></h4>
                
        <div id="content" style="opacity: 1;">
            @yield('content')
        </div>
        <div class="form-container">
            <form class="form-horizontal " action="#">
                <button type="submit" class="btn bg-tcs text-white" style="margin-top: 10px;">
                    <i class="fa fa-arrow-left">メインページへ</i>
                </button>
                <div class="form-group row" style="margin-top: 40px;">
                    <label for="personal_id" class="col-sm-2 col-form-label">個人 ID</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext flex-fill" id="personal_id" value="0010010010001">
                    </div>
                </div>
                <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col" class="text-center">日付</th>
                          <th scope="col" class="text-center">異常なし(秒)</th>
                          <th scope="col" class="text-center">体動判定NG(秒)</th>
                          <th scope="col" class="text-center">心拍判定NG(秒)</th>
                          <th scope="col" class="text-center">呼吸判定NG(秒)</th>
                          <th scope="col" class="text-center">詳細</th>
                        </tr>
                      </thead>
                      <tbody class="table-white text-center">
                        <tr>
                          <td>2019/08/05</td>
                          <td>600</td>
                          <td>10</td>
                          <td>0</td>
                          <td>0</td>
                          <td><a href="#">異常データ詳細帳票</a></td>
                        </tr>
                        <tr>
                          <td>2019/08/06</td>
                          <td>1200</td>
                          <td>100</td>
                          <td>1</td>
                          <td>0</td>
                          <td><a href="#">異常データ詳細帳票</a></td>
                        </tr>
                        <tr>
                          <td>2019/08/09</td>
                          <td>900</td>
                          <td>50</td>
                          <td>0</td>
                          <td>0</td>
                          <td><a href="#">異常データ詳細帳票</a></td>
                        </tr>
                        <tr>
                          <td>2019/08/12</td>
                          <td>800</td>
                          <td>60</td>
                          <td>1</td>
                          <td>0</td>
                          <td><a href="#">異常データ詳細帳票</a></td>
                        </tr>
                      </tbody>
                    </table>
            </form>
        </div>
    </main>
    <footer class="footernavbar sticky-top" id="ftest">
        <p class="alignleft testfont">OCC</p>
        <!-- <img src="OCCLOGO（ロゴ） (1).jpg" alt="Girl in a jacket" width="10" height="20"> -->
        <p class="alignright">Copyright@ OCC Corporation. All Rights Reserved</p>
    </footer>
</body>
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
