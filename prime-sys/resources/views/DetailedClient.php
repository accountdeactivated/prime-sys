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
          Creative Tim
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
          <li class="nav-item ">
            <a class="nav-link" href="./Reports_Controller">
              <i class="material-icons">file_copy</i>
              <p>Reports</p>
            </a>
          </li>
          <li class="nav-item active ">
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Mark Quinton</h4>
                  <p class="card-category">List of orders by Client # CSN1567894</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Service Number
                        </th>
                        <th>
                          Service Name
                        </th>
                        <th>
                          Service Type
                        </th>
                        <th>
                          Start Date
                        </th>
                        <th>
                          End Date
                        </th>
                        <th>
                          Handled By
                        </th>
                        <th>
                          Vehicle
                        </th>
                        <th>
                          Plate #
                        </th>
                        <th>
                          Service Price
                        </th>
                        <th>
                          Status
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            VSN1957894
                          </td>
                          <td>
                            Fix Engine
                          </td>
                          <td>
                            Repair
                          </td>
                          <td>
                            03/14/17 10:00AM
                          </td>
                          <td>
                            03/14/17 2:00PM
                          </td>
                          <td>
                            Jemuel Aranda
                          </td>
                          <td>
                            Fortuner
                          </td>
                          <td>
                            DJRS345
                          </td>
                          <td class="text-primary">
                            5,000php
                          </td>
                          <td class="btn btn-success">
                            Completed
                          </td>
                          <td>
                              <button type="button" rel="tooltip" title="View" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons" href="./">search</i>
                              </button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            VSN1957896
                          </td>
                          <td>
                            Full Body Tier
                          </td>
                          <td>
                            Repair/Tint
                          </td>
                          <td>
                            12/12/17 12:30PM
                          </td>
                          <td>
                            12/17/17 3:00PM
                          </td>
                          <td>
                            Jeremy Ocampo
                          </td>
                          <td>
                            Fortuner
                          </td>
                          <td>
                            DJRS345
                          </td>
                          <td class="text-primary">
                            7,000 php
                          </td>
                          <td class="btn btn-success">
                            Completed
                          </td>
                          <td>
                              <button type="button" rel="tooltip" title="View" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">search</i>
                              </button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            VSN1957987
                          </td>
                          <td>
                            Medium Tint
                          </td>
                          <td>
                            Tint
                          </td>
                          <td>
                            06/08/17 10:00AM
                          </td>
                          <td>
                            Ongoing
                          </td>
                          <td>
                            Jericho Mendoza
                          </td>
                          <td>
                            Fortuner
                          </td>
                          <td>
                            DJRS345
                          </td>
                          <td class="text-primary">
                            1,000php
                          </td>
                          <td class="btn btn-warning">
                            In Progress
                          </td>
                          <td>
                              <button type="button" rel="tooltip" title="View" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons" href="./">search</i>
                              </button>
                          </td>
                        </tr>
                        
                        </tr>
                        
                        </tr>
                      </tbody>
                      
                    </table>
                     <button type="button" rel="tooltip" title="Back" style="float:right" class="btn btn-primary btn-round">
                        <i class="material-icons" onclick="location.href='<?php echo base_url();?>index.php/Client'">keyboard_return</i>
                      </button>
                  </div>
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