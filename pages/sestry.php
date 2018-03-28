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
            <li><a href="hometry.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>User</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="actry.php"><i class="fa fa-circle-o"></i> Account</a></li>
                <li><a href="memtry.php"><i class="fa fa-circle-o"></i> Member</a></li>
                <li class="active"><a href="sestry.php"><i class="fa fa-circle-o"></i> Session</a></li>
              </ul>
            </li>
            <li><a href="sales.php"><i class="fa fa-money"></i><span>Sales</span></a></li>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-archive"></i> Session</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <button type = "button" class = "btn btn-success"  data-toggle="modal" data-target="#myModal"><span class = "glyphicon glyphicon-plus"></span> Add new</button>
      <br/>
      <br/>
      <div class = "alert alert-info">
        <table id = "table" class = "table-bordered">
          <thead>
            <tr>
              <th>Instructor</th>
              <th>Session</th>
              <th width="400">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = $conn->query("SELECT * FROM `club`") or die(mysqli_error());
              while($f_query = $query->fetch_array()){
            ?>
            <tr>
              <td><?php echo $f_query['club_name']?></td>
              <td><?php echo $f_query['session']?></td>
              <td><center><a href = "grotry.php?club_id=<?php echo $f_query['club_id']?>" class = "btn btn-info"><span class = "glyphicon glyphicon-eye-open"></span>  Member List</a> | <a href = "../update/club_edittry.php?club_id=<?php echo $f_query['club_id']?>" class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span>  Update</a> | <a  href = "../update/delete_club.php?club_id=<?php echo $f_query['club_id']?>" class = "btn btn-danger"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
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