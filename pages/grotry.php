<!DOCTYPE html>
<?php
  require_once '../sessions/sessionad.php';
  require_once '../sessions/account_name.php';
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
    <link rel = "stylesheet" type = "text/css" href = "../css/chosen.css" />
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
      <header class="main-header hidden-print"><a class="logo" href="home.html">Body-X</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
            <div class="pull-left image"><img style="height: 50px;" class="img-circle" src="../imagest/pael.jpg" alt="User Image"></div>
            <div class="pull-left info">
              <p>ADMIN</p>
              <p class="designation">Pael Gwapo</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="hometry.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>User</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="actry.php"><i class="fa fa-circle-o"></i> Account</a></li>
                <li><a href="member.html"><i class="fa fa-circle-o"></i> Member</a></li>
                <li><a href="sestry.php"><i class="fa fa-circle-o"></i> Session</a></li>
              </ul>
            </li>
            <li><a href="sales.php"><i class="fa fa-money"></i><span>Sales</span></a></li>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
           <button type = "button" class = "btn btn-success"  data-toggle="modal" data-target="#myModal"><span class = "glyphicon glyphicon-plus"></span> Add member</button>
      <a class = "btn btn-success"  href = "sestry.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
      <br/>
      <br/>
      <div class = "alert alert-info">
      <?php
        $c_query = $conn->query("SELECT * FROM `club` WHERE `club_id` = '$_REQUEST[club_id]'") or die(mysqli_error());
        $c_fetch = $c_query->fetch_array();
      ?>
        <div class = "alert alert-success"><b>Student of <?php echo $c_fetch['club_name']?></b></div>
      <table id = "table" class = "table-bordered">
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = $conn->query("SELECT * FROM `group` NATURAL JOIN `admin` NATURAL JOIN `club` WHERE `club_id` = '$c_fetch[club_id]'") or die(mysqli_error());
              while($f_query = $query->fetch_array()){
            ?>
            <tr>
              <td><?php echo $f_query['fname']?></td>
              <td><?php echo $f_query['lname']?></td>
              <td><center><a  href = "../update/delete_group.php?group_id=<?php echo $f_query['group_id']?>&club_id=<?php echo $f_query['club_id']?>" class = "btn btn-danger"><span class = "glyphicon glyphicon-trash"></span> Remove</a></center></td>
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
        <h4 class="modal-title" id="myModalLabel">Club Registration</h4>
      </div>
      <div class="modal-body">
        <form method = "POST" enctype = "multipart/form-data">
          <div class = "form-group">
            <label>Member</label>
            <select id = "member" class = "chosen-select">
              <option value = "">Select a member</option>
              <?php
                $g_query = $conn->query('SELECT * FROM `admin`') or die(mysqli_error());
                while($g_fetch = $g_query->fetch_array()){
                  echo '<option value = "'.$g_fetch['admin_id'].'">'.$g_fetch['fname'].' '.$g_fetch['lname'].'</option>';
                }
              ?>
            </select>
            <input type = "hidden" id = "club" value = "<?php echo $c_fetch['club_id']?>" />
          </div>
          <div id = "loading">
            
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" id= "save_group" class="btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Save</button>
      </div>
        </form>
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
    <script src = "../js/chosen.jquery.js"></script>
    <script src="../jst/main.js"></script>
    <script src = "../js/script.js"></script>
    <script src = "../js/jquery.dataTables.min.js"></script>
    <script type = "text/javascript">
      $(document).ready(function(){
        $('#table').DataTable();
      })
    </script>
    <script type = "text/javascript">
  $('.chosen-select').chosen({width: "100%"});
</script>
</html>