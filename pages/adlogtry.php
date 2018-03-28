<!DOCTYPE html>
<?php
  require '../db/conn.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="../csst/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Body-X Membership System</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Body-X Membership w/ DSS System</h1>
      </div>
      <div class="login-box">
        <form enctype = "multipart/form-data" method = "POST" class="login-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>ADMIN</h3>
          <div class = "form-group">
          <label class="control-label">USERNAME</label>
          <input type = "text" placeholder="Username" id = "username" class = "form-control" autofocus/>
        </div>
        <div class = "form-group">
          <label class="control-label">PASSWORD</label>
          <input type = "password" id = "password" class = "form-control" placeholder="Password" autofocus/>
        </div>
        <div id = "loading" class = "text-danger">
        </div>
        <br />
          <div class="form-group btn-container">
            <button type = "button" class="btn btn-primary btn-block" id = "login"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
      </div>
    </section>
  </body>
  <script src = "../js/jquery-3.1.1.js"></script>
  <script src = "../js/bootstrap.js"></script>
  <script src="../jst/bootstrap.min.js"></script>
  <script src="../jst/plugins/pace.min.js"></script>
  <script src="../jst/main.js"></script>
  <script src = "../js/script.js"></script>
</html>