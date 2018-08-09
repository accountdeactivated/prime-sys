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
      <?php include 'SAheader.php';?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
     <?php include 'navbar.php'; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Supplier</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="Add_Suppliers_Controller/insert">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Supplier Name</label>
                          <input type="text" class="form-control" name="supName" id="supName">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact Person</label>
                          <input type="text" class="form-control" name="contactperson" id="contactperson">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact #</label>
                          <input type="text" class="form-control" name="contactnum" id="contactnum">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Address</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Example: Bergnaum Wall Suite 851, Poblacion, Batangas City </label>
                            <textarea class="form-control" rows="5" name="address" id="address"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div align="right">
                      <button type="button" class="btn btn-primary suppD" data-toggle="modal" data-target="#myModalView">Submit
                          <i class="material-icons" >check_box</i></button>
                      <button type="button" class="btn btn-primary suppD" onclick="location.href='<?php echo base_url();?>index.php/Supplier_Controller3'" >Back
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
                                        <h6>Supplier Name: &nbsp;&nbsp;<b id="modal_supName"></b></h6>
                                        <h6>Contact #:&nbsp;&nbsp; <b id="modal_contactnum"></b></h6>
                                        <h6>Contact Person:&nbsp;&nbsp; <b id="modal_contactperson"></b></h6>
                                        <h6>Address:&nbsp;&nbsp; <b id="modal_contactperson"></b></h6><b id="modal_address"></b>
                                       <input type="hidden"  id="hidden_supName" />
                                       <input type="hidden" id="hidden_contactnum" />
                                       <input type="hidden" id="hidden_contactperson" />
                                       <input type="hidden"  id="hidden_address" />
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FOOTER-->
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Yes, I am Sure">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="material-icons" >clear</i> No</button>

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
        $('.suppD').click(function() {
            //var idsuppliers = $(this).attr('value');
            
            var supName = document.getElementById('supName').value;
            $("#modal_supName").html(supName);
            document.getElementById("hidden_supName").value = supName;

            //console.log("Item Name" + Name);

            var contactperson = document.getElementById('contactperson').value;
            $("#modal_contactperson").html(contactperson);

            //console.log("Item contactperson" + contactperson);

            var contactnum = document.getElementById('contactnum').value;
            $("#modal_contactnum").html(contactnum);

            var address = document.getElementById('address').value;
            $("#modal_address").html(address);
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