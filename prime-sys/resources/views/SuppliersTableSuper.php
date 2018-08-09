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
      <?php include 'supervisorheader.php';?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include 'navbar.php'; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                      <h4 class="card-title ">Suppliers
                       <!--  <button type="button" rel="tooltip" title="Add New Supplier" class="btn btn-primary btn-fab btn-fab-mini btn-round" onclick="location.href='<?php echo base_url();?>index.php/Add_Suppliers_Controller'">
                        <i class="material-icons">add_circle</i>
                        </button> -->
                      </h4>
              

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="dataTable" width="" height="150">
                                            
                                            <thead class=" text-primary">
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Address
                                                </th>
                                                <th>
                                                    Contact Person
                                                </th>
                                                <th>
                                                    Contact Number
                                                </th>
                                            
                                            </thead>
                                            <tbody>
                                                <form method="POST" action="Supplier_Controller2/get_item" name="rowItem">
                                                <?php
                                                    foreach($h->result() as $row)
                                                    {
                                                ?>
                                                    <tr >
                                                        <td>
                                                            <?php echo $row->supName; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->address; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->contactperson; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->contactnum; ?>
                                                        </td>
                                                        <td>
                                                             <button type="button" name="viewItem" data-id="<?php echo $row->idsuppliers; ?>"
                                                                    data-idsuppliers ="<?php echo $row->idsuppliers; ?>" 
                                                                    data-supname ="<?php echo $row->supName; ?>" 
                                                                    data-address ="<?php echo $row->address; ?>" 
                                                                    data-contactperson ="<?php echo $row->contactperson; ?>" 
                                                                    data-contactnum ="<?php echo $row->contactnum; ?>" 
                                                                  
                                                                    class="btn btn-primary viewItem" data-toggle="modal" data-target="#myModalView" id="<?php echo $row->idsuppliers;?>" value="<?php echo $row->idsuppliers;?>">
                                                                    <i class="material-icons">search</i>  View</button>
                                                        </td>
                                                        <!-- <td>
                                                            <button type="button" class="btn btn-warning" name="edit" data-id="<?php echo $row->idsuppliers;?>">
                                                                    <i class="material-icons">search</i>  Edit</button>
                                                        </td> -->
                                                         <!-- <td>
                                                            <button type="button" name="delete" data-id="<?php echo $row->idsuppliers;?>"
                                                                    
                                                                    class="btn btn-danger" data-toggle="modal" data-target="#delete" id="<?php echo $row->idsuppliers;?>" value="<?php echo $row->idsuppliers;?>">
                                                                    <i class="material-icons">delete_outline</i>  Delete</button>
                                                        </td> -->
                                                

                                                       <!--  <td>
                                                            <button type="button" name="restockItem" data-id="<?php echo $row->idsuppliers;?>"
                                                                    data-idsuppliers="<?php echo $row->idsuppliers; ?>" 
                                                                    data-itemname="<?php echo $row->materialName; ?>" 
                                                                    data-materialdesc="<?php echo $row->materialDesc; ?>" 
                                                                    data-brandname="<?php echo $row->brand; ?>" 
                                                                    data-supplier="<?php echo $row->materialSupplier; ?>" 
                                                                    data-quantitys="<?php echo $row->materialQty; ?>" 
                                                                    data-price="<?php echo $row->cost; ?>" 
                                                                    data-dateRestock="<?php echo $row->lastRestock; ?>"
                                                                    class="btn btn-primary restockItem" data-toggle="modal" data-target="#myModalRestock" id="<?php echo $row->idsuppliers;?>">
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
  <!-- View Modal -->
    <div id="myModalView" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">

                <!--HEAD-->
                <div class="modal-header">
                    <h4 class="modal-title">View Supplier</h4>
                </div>
                <!--BODY-->
                <div class="modal-body">
                    <div class="row">
                                 <div class="col-lg-12">
                                      <table class="table">
                                           <tr>
                                                <td><b>Supplier Name</b></td>
                                               <td><b id="modal_supname"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Address</b></td>
                                               <td><b id="modal_address"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Contact #</b></td>
                                               <td><b id="modal_contactnum"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Contact Person</b></td>
                                               <td><b id="modal_contactperson"></b></td>
                                           </tr>
                                           
                                   </table>
                              </div>
                          </div>
                </div>
                <!--FOOTER-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
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
                        <div class="col-lg-12">
                            Are you sure you want to delete this Supplier? <br>
                            (This would lead to a permanent deletion of this supplier's information)
                                      
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

<script type="text/javascript">
     //$('#dataTable').DataTable();
     window.onload = function(){
        $('.viewItem').click(function() {
            var idsuppliers = $(this).attr('value');
            //console.log("Item Code" + itemData);

            var supname = $(this).data("supname");
            $("#modal_supname").html(supname);
            
            var address = $(this).data("address");
            $("#modal_address").html(address);

            var contactnum = $(this).data("contactnum");
            $("#modal_contactnum").html(contactnum);
            
            var contactperson = $(this).data("contactperson");
            $("#modal_contactperson").html(contactperson);

            
            
        });
         
     }
     
     function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");
          
        for (i = 0; i < tr.length; i++) 
        {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) 
            {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) 
                {
                    tr[i].style.display = "";
                } 
                else 
                {
                    tr[i].style.display = "none";
                }
            } 
        }
    }
     
    function printFunc() {
        window.print();
    }
</script>