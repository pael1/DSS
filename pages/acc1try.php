<!DOCTYPE html>
<?php
  require_once '../sessions/session.php';
  require_once '../sessions/account_user.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="../csst/main.css">
    <link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../imagest/icon.jpg" />
    <title>Body-X Membership System</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="userhometry.php">Body-X</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                <li><a href="account1.php">Account Setting</a></li>
                  <li><a href="logout1.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <?php
              $query = $conn->query("SELECT * FROM `admin` WHERE `username`= '$acc_name'") or die(mysqli_error());
              while($f_query = $query->fetch_array()){
            ?>
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image fa-user-circle-o"></div>
            <div class="pull-left info">
            <p class="text-capitalize"><?php echo $f_query['fname']?></p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="treeview"><a href="#"><i class="fa fa-user-circle-o"></i><span style="margin-left: 30px;">Information</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li class="text-capitalize"><a href="actry.php"><i></i>Firstname: <?php echo $f_query['fname']?></a></li>
                <li class="text-capitalize"><a href="memtry.php"><i></i>Lastname: <?php echo $f_query['lname']?></a></li>
                <li class="text-capitalize"><a href="sestry.php"><i></i>Session: <?php echo $f_query['status']?></a></li>
                <li><a href="sestry.php"><i></i>Due. Date: </a></li>
                <li><a href="sestry.php"><i></i><?php echo date('M.d.Y', strtotime(str_replace('-', '/', $f_query['det'])))." up to ". date('M.d.Y', strtotime(str_replace('-', '/', $f_query['dettwo'])))?></a></li>
              </ul>
            </li>
            <?php
              }
            ?>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
          </div>
          <div>
            <ul class="breadcrumb">
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <a class = "btn btn-success" href = "../pages/userhometry.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a><br><br>
              <div class = "alert alert-info">
        <table id = "table" class = "table-bordered">
          <thead>
            <tr>
              <th>Username</th>
              <th>Password</th>
              <th>Session</th>
              <th>Privacy</th>
            </tr>
          </thead>
          <tbody>
          <?php
              $query = $conn->query("SELECT * FROM `admin` WHERE `username`= '$acc_name'") or die(mysqli_error());
              while($f_query = $query->fetch_array()){
            ?>
            <tr>
              <td><?php echo $f_query['username']?></td>
              <td><?php echo md5($f_query['password'])?></td>
              <td><?php echo $f_query['status']?></td>
              <td><center><a href = "../update/acc_edit1try.php?admin_id=<?php echo $f_query['admin_id']?>" class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span>Update</a>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src = "../js/jquery-3.1.1.js"></script>
    <script src="../jst/bootstrap.min.js"></script>
    <script src = "../js/bootstrap.js"></script>
    <script src="../jst/plugins/pace.min.js"></script>
    <script src = "../js/jquery.dataTables.min.js"></script>
    <script src="../jst/main.js"></script>
    <script src = "../js/script.js"></script>
    <script type = "text/javascript">
  $(document).ready(function(){
    $('#table').DataTable();
  })
</script>
  </body>
</html>
<style type="text/css">
  .main-sidebar {
  position: absolute;
  top: 0;
  left: 0;
  padding-top: 50px;
  min-height: 100vh;
  width: 250px;
  z-index: 810;
  -webkit-box-shadow: 0px 8px 17px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 8px 17px rgba(0, 0, 0, 0.2);
  -webkit-transition: width 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
  transition: width 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
  -o-transition: transform 0.3s ease-in-out, width 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, width 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, width 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
}
.page-title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  background-color: #FFF;
  margin-top: -30px;
  margin-left: -10px;
  margin-right: -30px;
  margin-bottom: 30px;
  padding: 20px 30px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
          box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.row {
  margin-left: -10px;
  margin-right: -15px;
}
</style>