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
                      <h4 class="card-title ">Clients
                        <button type="button" rel="tooltip" title="Add New Client" class="btn btn-primary btn-fab btn-fab-mini btn-round" onclick="location.href='<?php echo base_url();?>index.php/Add_Clients_Controller'">
                        <i class="material-icons">add_circle</i>
                        </button>
                      </h4>
                      <p class="card-category"> Here is a list of all the clients</p>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="dataTable" width="" height="150">
                                            
                                            <thead class=" text-primary">
                                                <th>
                                                    Full Name
                                                </th>
                                                <th>
                                                    Car
                                                </th>
                                                <th>
                                                    Plate #
                                                </th>
                                                <th>
                                                    Contact #
                                                </th>
                                                <th>
                                                    Address
                                                </th>
                                            
                                            </thead>
                                            <tbody>
                                                <form method="POST" action="Client/get_item" name="rowItem">
                                                <?php
                                                    foreach($h->result() as $row)
                                                    {
                                                ?>
                                                    <tr >
                                                        <td>
                                                            <?php echo $row->firstname, ' ', $row->lastname; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->brand, ' ', $row->model; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->platenum; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->contactnum?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->address?>
                                                        </td>
                                                        <td>
                                                            <button type="button" name="delete" data-id="<?php echo $row->idclient;?>"
                                                                    
                                                                    class="btn btn-primary viewItem" data-toggle="modal" data-target="#delete" id="<?php echo $row->idclient;?>" value="<?php echo $row->idclient;?>">
                                                                    <i class="material-icons">search</i>  View</button>
                                                        </td>
                                                        <td>
                                                            <button type="button" name="edit" data-id="<?php echo $row->idclient;?>"
                                                                    
                                                                    class="btn btn-warning viewItem" data-toggle="modal" data-target="#edit" id="<?php echo $row->idclient;?>" value="<?php echo $row->idclient;?>">
                                                                    <i class="material-icons">search</i>  Edit</button>
                                                        </td>
                                                         <td>
                                                            <button type="button" name="delete" data-id="<?php echo $row->idclient;?>"
                                                                    
                                                                    class="btn btn-danger viewItem" data-toggle="modal" data-target="#delete" id="<?php echo $row->idclient;?>" value="<?php echo $row->idclient;?>">
                                                                    <i class="material-icons">delete_outline</i>  Delete</button>
                                                        </td>
                                                        <!--<td>
                                                            <button type="button" name="viewItem" data-id="<?php echo $row->inventoryID;?>"
                                                                    data-itemID="<?php echo $row->inventoryID; ?>" 
                                                                    data-itemname="<?php echo $row->materialName; ?>" 
                                                                    data-materialdesc="<?php echo $row->materialDesc; ?>" 
                                                                    data-brandname="<?php echo $row->brand; ?>" 
                                                                    data-supplier="<?php echo $row->materialSupplier; ?>" 
                                                                    data-quantitys="<?php echo $row->materialQty; ?>" 
                                                                    data-quantityc="<?php echo $row->materialDim; ?>" 
                                                                    data-price="<?php echo $row->cost; ?>" 
                                                                    data-dateRestock="<?php echo $row->lastRestock; ?>"
                                                                    class="btn btn-secondary viewItem" data-toggle="modal" data-target="#myModalView" id="<?php echo $row->inventoryID;?>" value="<?php echo $row->inventoryID;?>">
                                                                    <i class="material-icons">search</i>  View</button>
                                                        </td>
                                                        <td>
                                                            <button type="button" name="restockItem" data-id="<?php echo $row->inventoryID;?>"
                                                                    data-itemID="<?php echo $row->inventoryID; ?>" 
                                                                    data-itemname="<?php echo $row->materialName; ?>" 
                                                                    data-materialdesc="<?php echo $row->materialDesc; ?>" 
                                                                    data-brandname="<?php echo $row->brand; ?>" 
                                                                    data-supplier="<?php echo $row->materialSupplier; ?>" 
                                                                    data-quantitys="<?php echo $row->materialQty; ?>" 
                                                                    data-price="<?php echo $row->cost; ?>" 
                                                                    data-dateRestock="<?php echo $row->lastRestock; ?>"
                                                                    class="btn btn-primary restockItem" data-toggle="modal" data-target="#myModalRestock" id="<?php echo $row->inventoryID;?>">
                                                                    <i class="material-icons">drive_eta</i> Restock</button>
                                                        </td>-->
                                                    </tr>
                                                <?php
                                                    }
                                                ?>
                                                </form>
                                            </tbody>

                                        </table>
                        <button type="button" rel="tooltip" title="Back" style="float:right" class="btn btn-primary btn-round" onclick="location.href='<?php echo base_url();?>index.php/SuperDashboard_Controller'">
                        <i class="material-icons" >keyboard_return</i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

  <!-- Delete Modal -->
    <div id="delete" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">

                <!--BODY-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            Are you sure you want to delete this client? <br>
                            (This would lead to a permanent deletion of client information)
                                      
                        </div>
                    </div>
                </div>
                <!--FOOTER-->
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Yes, I am sure">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
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