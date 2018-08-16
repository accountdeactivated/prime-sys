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
          <li class="nav-item active">
            <a class="nav-link" href="./Reports_Controller">
              <i class="material-icons">file_copy</i>
              <p>Reports</p>
            </a>
          </li>
          <li class="nav-item ">
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
          <li class="nav-item ">
            <a class="nav-link" href="./Orders">
              <i class="material-icons">file_copy</i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./Add_Users_Controller">
              <i class="material-icons">add_circle</i>
              <p>Add Users</p>
            </a>
          </li>
          <li class="nav-item">
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary text-center">
                      <h4 class="card-title ">Prime Auto Restoration Corp
                      </h4>
                      <p class="card-category"> Inventory Report</p>
                      <div>
                      From <input type="date"  rel="tooltip" title="Enter Start Date" name="Start"> to 
                      <input type="date"  rel="tooltip" title="Enter End Date" name="End">
                      </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary text-center">
                        <th>
                          Item Name
                        </th>
                        <th>
                          Brand
                        </th>
                        <th class="text-center">
                          Supplier
                        </th>
                        <th>
                          Qty in Stock
                        </th>
                        <th>
                          Qty Committed
                        </th>
                      </thead>
                      <tbody class="text-center">
                        <tr>
                          <td>
                            Paint
                          </td>
                          <td>
                            Boysen
                          </td>
                          <td class="text-center">
                            Paint Magic
                          </td>
                          <td>
                            10 cans
                          </td>
                          <td>
                            4 cans
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Paint
                          </td>
                          <td>
                            Olympic
                          </td>
                          <td>
                            Paint Magic
                          </td>
                          <td>
                            5 cans
                          </td>
                          <td>
                            3 cans
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Paint
                          </td>
                          <td>
                            Wilcon
                          </td>
                          <td>
                            New Husky
                          </td>
                          <td>
                            3 cans
                          </td>
                          <td>
                            2 cans
                          </td>
                        </tr>
                        <tr style="font-weight:bold">
                          <td>
                              Total
                          </td>
                          <td>
                              
                          </td>
                          <td>
                              
                          </td>
                          <td>
                              18 cans
                          </td>
                          <td>
                              9 cans
                          </td>
                        </tr>
                      </tbody>
                      
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                     <p class="card-category text-center">--------------------End of Report----------------</p>

                    <button type="button" rel="tooltip" title="Back" style="float:right" class="btn btn-primary btn-round">
                        <i class="material-icons" onclick="location.href='<?php echo base_url();?>index.php/Reports_Controller'">keyboard_return</i>
                      </button>
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