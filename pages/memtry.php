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
                <li><a href="actry.php"><i class="fa fa-circle-o"></i> Account</a></li>
                <li class="active"><a href="memtry.php"><i class="fa fa-circle-o"></i> Member</a></li>
                <li><a href="sestry.php"><i class="fa fa-circle-o"></i> Session</a></li>
              </ul>
            </li>
            <li><a href="sales.php"><i class="fa fa-money"></i><span>Sales</span></a></li>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="icon fa fa-users"></i> Member</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
      <div class = "alert alert-info">
      <!-- <div> <input name="b_print" type="button" class="btn btn-primary"   onClick="printdiv('div_print');" value=" Print "></div><br> -->
        <table class = "table" class = "table-bordered" border="1" id="div_print">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Session</th>
              <th>Due. Date</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = $conn->query("SELECT * FROM `admin`") or die(mysqli_error());
              while($f_query = $query->fetch_array()){
            ?>
            <tr>
              <td><?php echo $f_query['fname']?></td>
              <td><?php echo $f_query['lname']?></td>
              <td><?php echo $f_query['status']?></td>
              <td><?php echo date('M.d.Y', strtotime(str_replace('-', '/', $f_query['det']))). ' up to ' .date('M.d.Y', strtotime(str_replace('-', '/', $f_query['dettwo'])))?></td>
              <!-- <td><center><a href = "member_edit.php?mem_id=<?php echo $f_query['admin_id']?>" class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span>  Update</a> | <a  href = "delete_admin.php?admin_id=<?php echo $f_query['admin_id']?>" class = "btn btn-danger"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td> -->
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
    <script src = "../js/bootstrap.js"></script>
    <script src="../jst/bootstrap.min.js"></script>
    <script src="../jst/main.js"></script>
    <script src = "../js/script.js"></script>
    <script src = "../js/jquery.dataTables.min.js"></script>
    <script src = "../js/one.js"></script>
    <script src = "../js/two.js"></script>
    <script src = "../js/three.js"></script>
    <script src = "../js/four.js"></script>
    <script type = "text/javascript">
      $(document).ready(function(){
        $('.table').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                  extend: 'print',
                 title: '',
                 exportOptions: {
                    columns: [0,1,2]
                }
    }
            ],
    "footerCallback": function ( row, data, start, end, display ) {
                var api = this.api(), data;
     
                // Remove the formatting to get integer data for summation
                var intVal = function ( i ) {
                    return typeof i === 'string' ?
                        i.replace(/[\₱,]/g, '')*1 :
                        typeof i === 'number' ?
                            i : 0;
                };
     
                // Total over all pages
                total = api
                    .column( 1 )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );
     
                // Total over this page
                pageTotal = api
                    .column( 1, { page: 'current'} )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );
     
                // Update footer
                var numFormat = $.fn.dataTable.render.number( '\,', '.', 2, '&#8369; ' ).display;
                $( api.column( 1 ).footer() ).html(
                   numFormat(pageTotal)
                );
            }
        } );
    } );
    </script>
  </body>
</html>