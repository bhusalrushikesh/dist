
<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript" src="script.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Car Rental System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="carreview.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><i class="fa fa-cab"></i></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><i class="fa fa-cab"></i> Car</b>Rental</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Agency Name</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                Agency Name
                  <small>Member since Nov. 2022</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-center">
              <a class="btn btn-danger" style="width: 100%" href="index.php"><i class="fa fa-spinner fa-spin"></i> Log out</a>                
            </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Agency Name</p>
          <a id="here" href="#"><i class="fa fa-circle text-success"></i> Agency</a>
        </div>
      </div> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigation Forms</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Encoding</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Car</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Costumer</a></li>
          </ul>
        </li>

        <li>
            <a href="#">
              <i class="fa fa-cab"></i> <span>Rental</span>
            </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        <i class="fa fa-keyboard-o"></i> Car Rental Service
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-cab"></i> Add New Car</h3><a href="addCar.php"><button type="button" class="btn btn-success btn-sm" style="margin-left: 2%" >
               <i class="fa fa-plus"></i> Add Car
              </button></a>
              
            </div>
            <div class="box-header">
            <h3 class="box-title" >Recently Booked Car</h3>
            <div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr style="background-color: #c5c5c5;">
                  <th>Name</th>
                  
                  <th>Model</th>
                  
                  <th>Capacity</th>
                  <th>Plate Number</th>
                  <th>Rate</th>
                  <th>Customer</th>
                  <th>Contact</th>
                  <th>Status</th>
                  <th style="width: 7.8%"> </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Tata</td>
                  
                  <td>Safari</td>
                  
                  <td>7 setters</td>
                  <td>MH14DC1111</td>
                  <td align="center"><span class="btn btn-info btn-xs">500</span></td>
                  <td>Jericho</td>
                  <td>899-999-8888</td>
                  <td align="center"><a class="btn btn-primary btn-xs">Confirmed</a></td>
                  </tr>
                <tr>
                  <td>Mahindra</td>
                  
                  <td>Thar</td>
                  
                  <td>5 setters</td>
                  <td>MH14FF0987</td>
                  <td align="center"><span class="btn btn-info btn-xs">300</span></td>
                  <td>Rorito</td>
                  <td>899-000-8888</td>
                  <td align="center"><a class="btn btn-primary btn-xs">Pending</a></td>
                  </tr>
                </tbody>
                <tfoot>
                <tr style="background-color: #c5c5c5;">
                  <th> Name</th>
                  
                  <th>Model</th>
                  
                  <th>Capacity</th>
                  <th>Plate Number</th>
                  <th>Rate</th>
                  <th>Customer</th>
                  <th>Contact</th>
                  <th>Status</th>
                  <th style="width: 7.8%"> </th>
                </tr>
                </tfoot>
              </table>
         </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  
  <div class="control-sidebar-bg"></div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
