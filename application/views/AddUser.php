<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 -->
<!-- Popper JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 -->
<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 -->
    <!-- Bootstrap core CSS-->
<link href="<?php echo base_url().'/assets/vendor/bootstrap/css/bootstrap.min.css;'?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
<link href="<?php echo base_url().'/assets/vendor/fontawesome-free/css/all.min.css';?>" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url().'/assets/css/sb-admin.css';?>" rel="stylesheet">
   
   
    <title>AddUser</title>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark">

      <a class="navbar-brand mr-1" href="index.html">WebPortal</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <!-- <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          --> <div class="input-group-append">
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h7>Husnain Ajmal</h7>
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="Welcome">
            <h6 class="text-center">
             <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></h6>
          </a>
        </li>
       


       <li class="nav-item">
        <a class="nav-link" href="Stocks">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <h6 class="text-center"><span>View Stocks</span></h6>
        </a> 
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <h6 class="text-center">
     
       <span>Add Stocks</span>
        </h6>
        </a> 
        </li>
        
         <li class="nav-item">
        <a class="nav-link" href="Stocks">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <h6 class="text-center"><span>View Products</span></h6>
        </a> 
        </li>
        
       <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <h6 class="text-center"><span>Add Products</span></h6>
        </a> 
        
        </li>
         
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <h6 class="text-center"><span>View Customer</span></h6>
        </a> 
        </li>
         
        <li class="nav-item">
        <a class="nav-link" href="User">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <h6 class="text-center"><span>Add Customer</span></h6>
      </a>  
        </li>
        
        <li class="nav-item text-center" style="text-align:center;  ">
        <a class="nav-link" href="Stocks">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->    
        <h6 class="text-center"><span>View Supplier</span></h6>
        </a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="User">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <h6 class="text-center"><span>Add Supplier</span></h6>
        </li>

        </ul>
<!-- End of Side panel and header -->

<!-- Rest of the body starts here -->
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add User</li>
          </ol>

<form class="form-horizontal">
<fieldset>


<!-- Text input-->

<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">
      <label class="control-label" for="name">First Name</label>  
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>

   </div>
      <div class="col-md-4 ">
    <div class="form-group">
      <label class="control-label" for="name">Last Name</label>  

      <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>

   </div>

</div>

<!-- Text input-->

<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">
    <label class="control-label" for="emailaddress">Email Address</label>  
    <input id="emailaddress" name="emailaddress" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>

   </div>
    <div class="col-md-4 ">
    <div class="form-group">
    <label class="control-label" for="phone">Phone Number</label>  
    <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" required="">
          
    </div>

   </div>

</div>


<div class = "row">
  <div class="col-md-4 ">
    <div class="form-group">
      <label class="control-label" for="User Type">User Type</label>
        <select id="UserType" name="UserType" class="form-control">
          <option value="1">Supplier</option>
          <option value="2">Customer</option>
        </select>
    </div>
  </div>
</div>

<div class = "row">
   <div class="col-md-8 ">
    <div class="form-group">
    <label class="control-label" for="Address">Address</label>  
    <input id="Address" name="Address" type="text" placeholder="Address" class="form-control input-md" required="">
        
    </div>

   </div>

</div>


<div class = "row">
   <div class="col-md-4 ">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Date</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date"/>
      </div>
   </div>
</div>

<!-- <div class="input-group date" data-provide="datepicker">
        <label class="control-label" for="quantity">Date</label>  
        <input type="text" class="form-control">
</div>
 -->


<div class = "row">
   <div class="col-md-8 ">
      <div class="form-group">
      <label for="comments">Description</label>
      <textarea class="form-control" name="comments" id="comments" rows="7" cols="50"></textarea>
      </div>
  </div>
</div>


<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">
    
    <input name="submit" class="btn btn-md btn-primary" type="submit" value="Add User ">     
    </div>
   </div>
</div>


</fieldset>
</form>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © <b>WGW</b> Solutions 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'/assets/vendor/jquery/jquery.min.js';?>"></script>
    <script src="<?php echo base_url().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js';?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'/assets/vendor/jquery-easing/jquery.easing.min.js';?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url().'/assets/vendor/chart.js/Chart.min.js';?>"></script>
    <script src="<?php echo base_url().'/assets/vendor/datatables/jquery.dataTables.js';?>"></script>
    <script src="<?php echo base_url().'/assets/vendor/datatables/dataTables.bootstrap4.js';?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url().'/assets/js/sb-admin.min.js';?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url().'/assets/js/demo/datatables-demo.js';?>"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        
</div>
<script>
$(function() {
  $('input[name="date"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1901,
    maxYear: parseInt(moment().format('YYYY'),10)
  });
});
</script>
<!-- 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 -->
  </body>

</html>
