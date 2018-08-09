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
      <?php include 'secretaryheader.php';?>
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
                  <h4 class="card-title">Add Inventory</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="Add_Materials_Controller/insert">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Material Name</label>
                          <input type="text" class="form-control" name="materialName" id="materialName">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Material Description</label>
                          <input type="text" class="form-control" name="materialDesc" id="materialDesc">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Material Supplier</label>
                          <input type="text" class="form-control" name="materialSupplier" id="materialSupplier">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Brand</label>
                          <input type="text" class="form-control" name="brand" id="brand">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cost </label>
                          <input type="text" class="form-control" name="cost" id="cost">
                        </div>
                      </div>
                    </div>
                    <div align="right">
                      <button type="button" class="btn btn-primary accountsD" data-toggle="modal" data-target="#myModalView">Submit
                          <i class="material-icons" >check_box</i></button>
                      <button type="button" class="btn btn-primary accountsD" onclick="location.href='<?php echo base_url();?>index.php/restockInventoryC'" >Back
                          <i class="material-icons">keyboard_return</i></button>
                    </div>

                    <div class="clearfix"></div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- View Modal -->
        <div id="myModalView" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">

                    <!--HEAD-->
                    <div class="modal-header">
                        <h4 class="modal-title">Are you sure you want to add the following information?</h4>
                    </div>
                    <!--BODY-->
                    <div class="modal-body">
                        <div id="printableArea">
                            <div class="row">
                                <div class="col-md-12">
                                    <div align="left">
                                        <br>
                                        <h6> Material Name: &nbsp;&nbsp;<b id="modal_materialName"></b></h6>
                                        <h6>Material Description: &nbsp;&nbsp;<b id="modal_materialDesc"></b></h6>
                                        <h6>Material Supplier: &nbsp;&nbsp;<b id="modal_materialSupplier"></b></h6>
                                        <h6>Brand: &nbsp;&nbsp;<b id="modal_brand"></b></h6>
                                        <h6>Cost: &nbsp;&nbsp; <b id="modal_cost"></b></h6>
                                       <input type="hidden"  id="hidden_materialName" />
                                       <input type="hidden" id="hidden_materialDesc" />
                                       <input type="hidden"  id="hidden_materialSupplier" />
                                       <input type="hidden" id="hidden_brand" />
                                       <input type="hidden" id="hidden_cost" />
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FOOTER-->
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Yes, I am Sure">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="material-icons" >clear</i> No</button>
                        </form>
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
<script type="text/javascript">
    //$('#dataTable').DataTable();
    window.onload = function() {
        $('.accountsD').click(function() {
            //var idsuppliers = $(this).attr('value');
            
            var materialName = document.getElementById('materialName').value;
            $("#modal_materialName").html(materialName);
            document.getElementById("hidden_materialName").value = materialName;

            //console.log("Item Name" + Name);

            var materialDesc = document.getElementById('materialDesc').value;
            $("#modal_materialDesc").html(materialDesc);

            var materialSupplier = document.getElementById('materialSupplier').value;
            $("#modal_materialSupplier").html(materialSupplier);

            var brand = document.getElementById('brand').value;
            $("#modal_brand").html(brand);

            //console.log("Item materialDesc" + materialDesc);

            var cost = document.getElementById('cost').value;
            $("#modal_cost").html(cost);

        });

      /*$('.restockItem').click(function() {
            var itemID = $(this).attr('value');

            var itemname = $(this).data("itemname");
            $("#rmodal_itemName").html(itemname);

            var itemID = $(this).data("id");
            $('#rmodal_itemID').val(itemID);
        });*/
    }

    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    
</script>

</html>