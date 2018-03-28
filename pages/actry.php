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
    <link href="../css/one.css" rel="stylesheet">
    <link href="../css/two.css" rel="stylesheet">
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
                <li class="active"><a href="actry.php"><i class="fa fa-circle-o"></i> Account</a></li>
                <li><a href="memtry.php"><i class="fa fa-circle-o"></i> Member</a></li>
                <li><a href="sestry.php"><i class="fa fa-circle-o"></i> Session</a></li>
              </ul>
            </li>
            <li><a href="sales.php"><i class="fa fa-money"></i><span>Sales</span></a></li>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div class="div">
            <h1><i class="fa fa-laptop"></i> Account</h1>
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
              <th>Username</th>
              <th>Password</th>
              <th width="200px">Action</th>
              <th width="80">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = $conn->query("SELECT * FROM `admin`") or die(mysqli_error());
              while($f_query = $query->fetch_array()){
            ?>
            <tr>
              <td><?php echo $f_query['username']?></td>
              <td><?php echo md5($f_query['password'])?></td>
              <td><a href = "../update/account_edittry.php?admin_id=<?php echo $f_query['admin_id']?>" class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span>  Update</a> | <a  href = "../update/delete_admin.php?admin_id=<?php echo $f_query['admin_id']?>" onclick="return confirm('Are you sure you want to delete this data?')" class = "btn btn-danger"><span class = "glyphicon glyphicon-trash"></span> Delete</a></td>
              <?php if($f_query['user_status']=='active') {
            echo "<td><a href='../update/update_status.php?userid=$f_query[admin_id]' class='btn btn-info hay'>".$f_query['user_status']."</a></td>";
          }else{
            echo "<td><a href='../update/update_status.php?userid=$f_query[admin_id]' class='btn btn-default'>".$f_query['user_status']."</a></td>";
          } ?>
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
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Member's Registration</h4>
      </div>
      <div class="modal-body">
        <form method = "POST" enctype = "multipart/form-data">
          <div class = "form-group">
            <label>Username</label>
            <input type = "text" class = "form-control" id = "username"/>
          </div>
          <div class = "form-group">
            <label>Password</label>
            <input type = "password" class = "form-control" id = "password"/>
          </div>

          <div class = "form-group">
            <label>Firstname</label>
            <input type = "text" class = "form-control" id = "fname"/>
          </div>

          <div class = "form-group">
            <label>Lastname</label>
            <input type = "text" class = "form-control" id = "lname"/>
            <input type = "hidden" class = "form-control" id="user_status" value="active" />
          </div>

          <div class = "form-group">
            <label for="exampleInputName4">Session</label>
                      <select class="form-control" id = "status">
                        <option selected></option>
                        <option value="Gym">Gym</option>
                        <option value="Zumba">Zumba</option>
                        <option value="Yoga">Yoga</option>
                        </select>
          </div>

          <div class = "form-group">
            <!-- <label>Payable</label>
            <input type = "number" class = "form-control" id = "payable"/> -->
            <label for="exampleInputName4">Month/s</label>
                      <select class="form-control" id = "payable">
                        <option selected></option>
                        <option value="500">1 Month</option>
                        <option value="1000">2 Month</option>
                        <option value="1500">3 Month</option>
                        <option value="2000">4 Month</option>
                        <option value="2500">5 Month</option>
                        <option value="3000">6 Month</option>
                        <option value="3500">7 Month</option>
                        <option value="4000">8 Month</option>
                        <option value="4500">9 Month</option>
                        <option value="5000">10 Month</option>
                        <option value="5500">11 Month</option>
                        <option value="6000">12 Month</option>
                        </select>
          </div>

          <div class = "form-group">
            <!-- <label>Start</label>
            <input type = "date" class = "form-control" id = "det"/> -->
            <label for="exampleInputName4">Starting Month</label>
            <input type="date" class="form-control input-size" id="det">
          </div>

          <div class = "form-group">
            <!-- <label>Expire</label>
            <input type = "date" class = "form-control" id = "dettwo"/> -->
            <label for="exampleInputName4">End Month</label>
            <input type="date" class="form-control input-size" id="dettwo">
          </div>
          <div id = "loading">
            
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" id= "signup" class="btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Save</button>
      </div>
        </form>
    </div>
  </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src = "../js/jquery-3.1.1.js"></script>
    <script src = "../js/bootstrap.js"></script>
    <script src="../jst/plugins/pace.min.js"></script>
    <script src = "../js/script.js"></script>
    <script src="../jst/main.js"></script>
    <script src = "../js/jquery.dataTables.min.js"></script>
    <script src = "../js/one.js"></script>
    <script src = "../js/two.js"></script>
    <script src = "../js/three.js"></script>
    <script src = "../js/four.js"></script>
    <script type = "text/javascript">
      $(document).ready(function(){
        $('#table').DataTable();
      })
    </script>
</html>
<style type="text/css">
  .hay{
    width: 105px;
  }
</style>