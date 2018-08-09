<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Prime Auto Restoration
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          PRIME CORPORATION
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./Main_Controller">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Reports_Controller">
              <i class="material-icons">file_copy</i>
              <p>Reports</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./Client">
              <i class="material-icons">group</i>
              <p>Clients</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./Employee">
              <i class="material-icons">group</i>
              <p>Employees</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Orders">
              <i class="material-icons">file_copy</i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Add_Users_Controller">
              <i class="material-icons">add_circle</i>
              <p>Add Users</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./Add_Suppliers_Controller">
              <i class="material-icons">group</i>
              <p>Suppliers</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Add_Service_Controller">
              <i class="material-icons">build</i>
              <p>Services</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./restockInventory_Controller">
              <i class="material-icons">file_copy</i>
              <p>Restock Inventory</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">New Client</h4>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact #</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label>Car Brand</label>
                            <div class="form-group">
                              <label class="bmd-label-floating">Ex: Toyota, Honda</label>
                              <textarea class="form-control" rows="1"></textarea>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label>Model</label>
                            <div class="form-group">
                              <label class="bmd-label-floating">Ex: Vios, Montero, Altis</label>
                              <textarea class="form-control" rows="1"></textarea>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label>Plate #</label>
                            <div class="form-group">
                              <label class="bmd-label-floating">Ex: DJRS345</label>
                              <textarea class="form-control" rows="1"></textarea>
                            </div>
                          </div>
                      </div>
                    </div>
                      <button type="button" rel="tooltip" title="Back" style="float:right" class="btn btn-primary btn-round" onclick="location.href='<?php echo base_url();?>index.php/Client'">Submit
                        <i class="material-icons" >check_box</i>
                      </button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>