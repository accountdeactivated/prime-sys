<!DOCTYPE html>
<html lang="en">

<style>
    #myInput {
        background-color: white;
        background-position: 10px 12px; /* Position the search icon */
        background-repeat: no-repeat; /* Do not repeat the icon image */
        font-size: 16px; /* Increase font-size */
        padding: 12px 20px 12px 20px; /* Add some padding */
        border: 1px solid #ddd; /* Add a grey border */
        margin-top: 12px;
        margin-bottom: 12px; /* Add some space below the input */
    }
    .tabil {
        overflow: auto;
    }
    .span3 {  
        /*height: 450px !important; 
        overflow: auto;  */
    }
</style>

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
            
                <?php include 'secretaryheader.php';?>
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
                                    <h4 class="card-title ">Inventory
                                    <button type="button" rel="tooltip" title="Add New Supplier" class="btn btn-primary btn-fab btn-fab-mini btn-round" onclick="location.href='<?php echo base_url();?>index.php/Add_Materials_Controller'">
                                            <i class="material-icons">add_circle</i>
                                    </button>
                                    </h4>
                                        <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search">
                                    <!--<p class="card-category"> Here is a subtitle for this table</p>-->
                                </div>
                                 
                                <!--<div class="bootstrap">-->
                                <div class="card-body">
                                    <div class="span3">
                                    <div class="table-responsive tabil">
                                    
                                        <table class="table" id="dataTable" width="" height="150">
                                            
                                            <thead class=" text-primary">
                                                <th>
                                                    Material Name
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    Brand
                                                </th>
                                                <th>
                                                    Quantity Left
                                                </th>
                                            
                                            </thead>
                                            <tbody>
                                                <form method="POST" action="restockInventoryC/get_item" name="rowItem">
                                                <?php
                                                    foreach($h->result() as $row)
                                                    {
                                                ?>
                                                    <tr >
                                                        <td>
                                                            <?php echo $row->materialName; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->materialDesc; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->brand; ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $row->materialQty - $row->materialDim; ?>
                                                        </td>
                                                

                                                        <td>
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
                                                                    class="btn btn-primary viewItem" data-toggle="modal" data-target="#myModalView" id="<?php echo $row->inventoryID;?>" value="<?php echo $row->inventoryID;?>">
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
                                                                    class="btn btn-warning restockItem" data-toggle="modal" data-target="#myModalRestock" id="<?php echo $row->inventoryID;?>">
                                                                    <i class="material-icons">drive_eta</i> Restock</button>
                                                        </td>
                                                        <td>
                                                            <button type="button" name="delete" data-id="<?php echo $row->inventoryID;?>"
                                                                   
                                                                    class="btn btn-danger delete" data-toggle="modal" data-target="#delete" id="<?php echo $row->inventoryID;?>">
                                                                    <i class="material-icons">delete_outline</i> Delete</button>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    }
                                                ?>
                                                </form>
                                            </tbody>

                                        </table>
                                        <h5 class="text-center"> ----------End of Report----------</h5>
                                        </div>
                                        
                                        </div>
                                    <div class="row">
                                    <button type="button" rel="tooltip" title="Back" style="float:right" class="btn btn-primary btn-round">
                                              <i class="material-icons" onclick="location.href='<?php echo base_url();?>index.php/SADashboard_Controller'">keyboard_return</i>
                                          </button>
                                    <button class="btn btn-md" onclick="printFunc()">Print this page</button>
                                    </div>
                                    </div>
                                <!--</div>-->
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <!-- Restock Modal -->
    <div id="myModalRestock" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form action="restockInventoryC/restock" method="POST" name="modalForm">
                <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                    <h4 class="modal-title">Restock</h4>
                </div>
                    
                    <div class="modal-body">
                        <div class="row" id="itemName">
                            <div class="col-md-12">
                                <label class="bmd-label-floating">Item Name</label>
                                <h4 id="rmodal_itemName"></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                        <input type="hidden" class="form-control" name="itemID" id="rmodal_itemID">
                                    <label class="bmd-label-floating">Quantity to Restock</label>
                                        <input type="number" class="form-control" name="qtyR" autocomplete="off" min="1" required>
                                    <label class="bmd-label-floating">Supplier</label>
                                        <input type="text" class="form-control" name="supplierR" autocomplete="off" required>
                                    <label class="bmd-label-floating">Date Restocked</label>
                                        <input type='date' class="form-control" id='date' name="dateR" value="<?php echo date('Y-m-d'); ?>" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Submit">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <!-- View Modal -->
    <div id="delete" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">

                <!--BODY-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            Are you sure you want to delete this item? <br>
                            (Take note that this would lead to a permanent deletion of the item)
                                      
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
    <!-- View Modal -->
    <div id="myModalView" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">

                <!--HEAD-->
                <div class="modal-header">
                    <h4 class="modal-title">View Item</h4>
                </div>
                <!--BODY-->
                <div class="modal-body">
                    <div class="row">
                                 <div class="col-lg-12">
                                      <table class="table">
                                           <tr>
                                                <td><b>Item Name</b></td>
                                               <td><b id="modal_itemName"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Description</b></td>
                                               <td><b id="modal_materialDesc"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Brand Name</b></td>
                                               <td><b id="modal_itemBrand"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Quantity in Stock</b></td>
                                                <td><b id="modal_itemQty"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Quantity Committed</b></td>
                                                <td><b id="modal_itemQtyCommit"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Supplier</b></td>
                                                <td><b id="modal_supplier"></b></td>         
                                           </tr>
                                           <tr>
                                                <td><b>Price</b></td>
                                                <td><b id="modal_price"></b></td>           
                                           </tr> 
                                           <tr>
                                                <td><b>Date of Last Restock</b></td>
                                                <td><b id="modal_dateRestock"></b></td>           
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
     <!-- jQuery JS CDN -->
     <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
     <!-- jQuery DataTables JS CDN -->
     <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
     <!-- Bootstrap JS CDN -->
     <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
     <!-- Bootstrap JS CDN -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <!-- DataTables CSS CDN -->
    
</body>

</html>
 <script type="text/javascript">
     //$('#dataTable').DataTable();
     window.onload = function(){
        $('.viewItem').click(function() {
            var itemID = $(this).attr('value');
            //console.log("Item Code" + itemData);
            var itemname= $(this).data("itemname");
            $("#modal_itemName").html(itemname);
            
            var itembrand= $(this).data("brandname");
            $("#modal_itemBrand").html(itembrand);

            var materialdesc= $(this).data("materialdesc");
            $("#modal_materialDesc").html(materialdesc);
            
            var itemqtys= $(this).data("quantitys");
            $("#modal_itemQty").html(itemqtys);
            
            var itemqtyc= $(this).data("quantityc");
            $("#modal_itemQtyCommit").html(itemqtyc);
            
            var itemsupplier= $(this).data("supplier");
            $("#modal_supplier").html(itemsupplier);
            
            var itemprice= $(this).data("price");
            $("#modal_price").html("P "+itemprice);
            
            var itemdateRestock= $(this).data("dateRestock");
            $("#modal_dateRestock").html(itemdateRestock);
            console.log("date "+itemdateRestock);
        });
         
        $('.restockItem').click(function(){
            var itemID = $(this).attr('value');
            
            var itemname = $(this).data("itemname");
            $("#rmodal_itemName").html(itemname);
            
            var itemID = $(this).data("id");
            $('#rmodal_itemID').val(itemID);
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