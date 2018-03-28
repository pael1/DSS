<!-- club.PHP -->
<!DOCTYPE html>
<?php
  require_once '../sessions/sessionad.php';
  require_once '../sessions/admin_name.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
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
      <header class="main-header hidden-print"><a class="logo" href="hometry.php">Body-X</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img  style="height: 50px;"  class="img-circle" src="../imagest/pael.jpg" alt="User Image"></div>
            <div class="pull-left info">
              <p>ADMIN</p>
              <p class="designation">Pael Gwapo</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li><a href="../pages/hometry.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>User</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pages/actry.php"><i class="fa fa-circle-o"></i> Account</a></li>
                <li><a href="../pages/memtry.php"><i class="fa fa-circle-o"></i> Member</a></li>
                <li class="active"><a href="../pages/sestry.php"><i class="fa fa-circle-o"></i> Session</a></li>
              </ul>
            </li>
            <li><a href="../pages/sales.php"><i class="fa fa-money"></i><span>Sales</span></a></li>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-archive"></i> Update Session</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
      <a class = "btn btn-success" href = "../pages/sestry.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
      <br/>
      <br/>
      <div class = "row"> 
        <div class = "col-md-2 ">
        </div>
        <div class = "col-md-2">
        </div>
        <div class = "col-md-4">
          <?php
            $acc_query = $conn->query("SELECT * FROM `club` WHERE club_id = '$_REQUEST[club_id]'") or die(mysqli_error());
            $acc_fetch = $acc_query->fetch_array();
          ?>
          <form method = "POST">
            <div class = "form-group">
              <label>Club name</label>
              <input  id = "club" type = "text" value = "<?php echo $acc_fetch['club_name']?>" class = "form-control" />
              <input  id = "club_id" type = "hidden" value = "<?php echo $acc_fetch['club_id']?>" class = "form-control" />
            </div>
            <div id = "loading">
            </div>
            <br />
            <div class = "form-group">
              <button  type = "button" id = "club_edit" class = "btn btn-warning form-control"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
            </div>
          </form>
        </div>
    </div>
    </div>
  </div>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Session Registration</h4>
      </div>
      <div class="modal-body">
        <form method = "POST" enctype = "multipart/form-data">
          <div class = "form-group">
            <label>Instructor Name</label>
            <input type = "text" class = "form-control" id = "club"/>
          </div>
          <div class = "form-group">
            <label>Session</label>
            <select class="form-control" id = "session">
                        <option selected></option>
                        <option value="Zumba">Zumba</option>
                        <option value="Yoga">Yoga</option>
                        <option value="Gym">Gym</option>
                        </select>
          </div>
          <div id = "loading">
            
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" id= "save_club" class="btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Save</button>
      </div>
        </form>
    </div>
  </div>
  </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Javascripts-->
    <script src = "../js/jquery-3.1.1.js"></script>
    <script src = "../js/bootstrap.js"></script>
    <script src="../jst/bootstrap.min.js"></script>
    <script src="../jst/main.js"></script>
    <script src = "../js/script.js"></script>
    <script src = "../js/jquery.dataTables.min.js"></script>
    <script type = "text/javascript">
      $(document).ready(function(){
        $('#table').DataTable();
      })
    </script>
</html>