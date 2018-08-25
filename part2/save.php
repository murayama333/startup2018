<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  if(is_null($email) || $email == ''
      || strlen($email) > 50){
      die("Input error.");
  }

  $file = "list.txt";
  file_put_contents($file, $email . PHP_EOL, LOCK_EX | FILE_APPEND);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Materialize</title>
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <nav class="green">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">IT CARET</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="about.html">about</a></li>
      </ul>
    </div>
  </nav>


  <div class="white">
    <div class="container">
      <div class="row" style="height:400px">
        <div class="col s12">
          <h2>登録受付完了</h2>
          <h6>登録受付が完了しました。<a href="/index.html">TOPに戻る</a></h6>
        </div>
      </div>
    </div>
  </div>


  <footer class="green darken-1 white-text center">
    <div class="section">
      <h5>お問い合わせ先</h5>
      <ul>
        <li>株式会社クロノス</li>
        <li><a href="http://kronos-jp.net/" target="_blank" class="white-text">http://www.kronos-jp.net/</a></li>
      </ul>
    </div>
    <div class="footer-copyright">
      Kronos Co., Ltd.© Copyright 2017
    </div>
  </footer>

</body>
</html>
