<!DOCTYPE html>
<html lang="en">
<?php //session_start(); ?>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Purchase Order
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="<?php echo base_url();?>/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url();?>/assets/demo/demo.css" rel="stylesheet" />



    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <?php include 'secretaryheader.php'; ?>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Purchase Order</a>
                    </div>
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
            <!--<form action="scheduleC/process" method="post">-->

            <div class="content">
                <form class="form-horizontal" action="purchaseOrderC/submit" method="post">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Purchase Order Form</h4>
                                        <!--<p class="card-category">Complete your profile</p>-->
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <?php 
                                                    foreach($poNum->result() as $row){
                                                        $x = (($row->poID)+1001);
                                                        echo '<input type=hidden id="poNumData" value=PO-'.$x.'>';
                                                    }
                                                ?>
                                                <input type="hidden" name="subtotal" id="subtotalData">
                                                <input type="hidden" name="total" id="totalData">
                                                <input type="hidden" name="arrayData1" id="arrayData1">
                                                <input type="hidden" name="arrayData2" id="arrayData2">
                                                <input type="hidden" name="arrayData3" id="arrayData3">
                                                <input type="hidden" name="arrayData4" id="arrayData4">
                                                <center>
                                                    <h4><b>PRIME AUTO REPAIR</b></h4>
                                                    <h6>PURCHASE ORDER FORM</h6>
                                                </center>
                                                <br>
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Prime Auto-Restoration Corp.</label><br>
                                                <label>Marikina-Infanta Hwy,</label><br>
                                                <label>Cainta Rizal, 1900</label><br>
                                                <label>Metro Manila</label>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="col-md-4">
                                            </div>
                                            <div class="col-md-4">

                                                <label class="bmd-label-floating">Date: &nbsp;&nbsp; <?php echo date('Y-m-d');?></label>
                                                <input type="hidden" name="date" value="">
                                                <br>
                                                <label class="bmd-label-floating">Purchase Order # &nbsp;<span  id="poNumDisplay"></span></label>
                                                <!-- <input class="form-control" type="text" name="poNum" id="poNum" placeholder="P.O. Number" > -->

                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Supplier</label>
                                                    <select class="form-control" type="text" name="supplier" id="supplier" placeholder="Supplier Name" required> 
                                                        <option id="default-supplier" value="">- Please Select Supplier -</option>

                                                        <?php 
                                                            foreach($h->result() as $row)
                                                            {
                                                        ?>
                                                                <option> <?php echo $row->supName; ?> </option>
                                                        <?php 
                                                            } 
                                                        ?>
                                                        </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <br>
                                    
                                                <div id="newRow" class="row firstSample">
                                                    <div class="col-md-4">
                                                        <div class="card"><div class="card-body">
                                                    <h4><b>Item 1</b></h4>
                                                            <tr>
                                                                 <input type="text" class="form-control" name="name1" autocomplete="off" placeholder="Name" id="name1">
                                                                 <input type="text" class="form-control" name="desc1" autocomplete="off" placeholder="Description" id="desc1">
                                                                 <input type="number" class="form-control" name="qty1" autocomplete="off" placeholder="Quantity" id="qty1" min=0>
                                                                 <input type="number" class="form-control" name="price1" autocomplete="off" placeholder="Price" id="price1" min=0>
                                                            </tr>
                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary btn-block add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <div align="right">
                                                    <button type="button" class="btn btn-lg btn-primary viewPO" data-toggle="modal" data-target="#myModalView" id="" value="">PROCEED</button>
                                                </div>
                                            </div>
                                        </div>


                                        <!--<div class="clearfix"></div>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- View Modal -->
                    <div id="myModalView" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div id="printableArea">
                                <div class="modal-content">

                                    <!--HEAD-->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Please Verify Puchase Order</h4>
                                    </div>
                                    <!--BODY-->
                                    <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div align="left">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h4>SUPPLIER </h4>
                                                            <h4>P.O. # </h4>
                                                            <h4>Date </h4>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h4><kbd><span align="right" class="label label-info"><b id="modal_supplier"></b></span></kbd></h4>
                                                            <h4><kbd><span align="right" class="label label-info"><b  id="modal_poNum"></b></span></kbd></h4>
                                                            <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                                            <h4><kbd><span align="right" class="label label-info"><b><?php echo date('Y-m-d');?></b></span></kbd></h4>
                                                        </div>
                                                        <div class="col-md-4">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <th>Item Name</th>
                                                        <th>Description</th>
                                                        <th>Quantity</th>
                                                        <th>Unit Price</th>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            for($i=1; $i<=5 ; $i++)
                                                            {
                                                        ?>
                                                            <tr>
                                                                <td>
                                                                    <b id="modal_name<?php echo $i; ?>"></b>

                                                                </td>
                                                                <td>
                                                                    <b id="modal_desc<?php echo $i; ?>"></b>
                                                                </td>
                                                                <td>
                                                                    <b id="modal_qty<?php echo $i; ?>"></b>
                                                                </td>
                                                                <td>
                                                                    <b id="modal_price<?php echo $i; ?>"></b>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                    }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <div align="right">

                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <label class="bmd-label-floating">SUBTOTAL</label>
                                                                </td>
                                                                <td>
                                                                    <span class="decimal" id="modal_subtotal"></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="bmd-label-floating">VAT</label>
                                                                </td>
                                                                <td>
                                                                    <span class="decimal" id="modal_tax">7%</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="bmd-label-floating">TOTAL:</label>
                                                                </td>
                                                                <td>
                                                                    <span class="decimal" id="modal_TOTAL"></span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <br>
                                            </div>
                                            <div class="col-md-4">



                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <!--FOOTER-->
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="SUBMIT">
                                        <input class="btn btn-secondary" type="button" onclick="myFunc()" value="PRINT" />
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </form>
                
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
                            </li>
                            <li>
                                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())

                        </script>, made by
                        <a href="#" target="_blank">TEAM PRIME</a> for a better web.
                    </div>
                </div>
            </footer>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

<script type="text/javascript">
    //$('#dataTable').DataTable();
    window.onload = function() {
        var poNum = document.getElementById('poNumData').value;
        
        $("#poNumDisplay").html(poNum);
        
        $('.viewPO').click(function() {
            
            

            var subtotal = 0;
            var i=0;
            
            var names = [];
            var descs = [];
            var qtys = [];
            var prices = [];
            
            $("#poNumDisplay").html(poNum);
            $("#modal_poNum").html(poNum);
            
            var supplier = document.getElementById('supplier').value;
            if(supplier != "default-supplier"){
                $("#modal_supplier").html(supplier);
            } 
            
            for(i =1; i<x; i++)
            {
                
            var name = document.getElementById('name'+i).value;
            if(supplier != "default-supplier"){
                $("#modal_name"+i).html(name);
            }
            var desc = document.getElementById('desc'+i).value;
            $("#modal_desc"+i).html(desc);
            var qty = document.getElementById('qty'+i).value;
            $("#modal_qty"+i).html(qty);
            var price = document.getElementById('price'+i).value;
            $("#modal_price"+i).html(price);
            subtotal = (price*qty)+subtotal;
                
            if (name !== "") {
                names.push(name);
            }
            if (desc !== "") {
                descs.push(desc);
            }
            if (qty !== "") {
                qtys.push(qty);
            }
            if (price !== "") {
                prices.push(price);
            }
                
            }
			
            
			//subtotal = ((price*qty)+subtotal);
            var SUBTOTAL = subtotal.toFixed(2);
            
            console.log("subtotal: "+SUBTOTAL);
            
            //subtotal
            $("#modal_subtotal").html(SUBTOTAL);
            
            var tax = .07;
            var total = (subtotal*tax)+subtotal;
            //var TOTAL = total;
            var TOTAL = total.toFixed(2);
            
            //vat
            $("#modal_tax").html(tax);
            //total
            $("#modal_TOTAL").html(TOTAL);
            
            console.log("total "+TOTAL);
            document.getElementById("arrayData1").value = names;
            document.getElementById("arrayData2").value = descs;
            document.getElementById("arrayData3").value = qtys;
            document.getElementById("arrayData4").value = prices;
            
        });

        function myFunc() {
            window.print();
        }

        var max_fields = 5;
        //var wrapper = $(".container1");
        var wrapper = $('#newRow');
        var add_button = $(".add_form_field");
        var x = 2;
        
        $(add_button).click(function(e) {
            e.preventDefault();
            if (x <= max_fields) {

                var row =  '<div class="col-md-4"><div class="card"><div class="card-body"><h4><b>Item '+x+'</b></h4><tr><td><input type="text" class="form-control" name="name'+x+'" autocomplete="off" placeholder="Name" id="name'+x+'"></td><td><input type="text" class="form-control" name="desc'+x+'" autocomplete="off" placeholder="Description" id="desc'+x+'"></td><td><input type="number" class="form-control" name="qty'+x+'" autocomplete="off" placeholder="Quantity" id="qty'+x+'"></td><td><input type="number" class="form-control" name="price'+x+'" autocomplete="off" placeholder="Price" id="price'+x+'"></td><td></td><td><button value="'+x+'" id="delete'+x+'" class="btn btn-danger delete">Delete</button></td></tr></div></div></div>';
                $(wrapper).append(row); //add input box
                x++;
            } else {
                alert('You Reached the limits');
            }
        });

        $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
            
            var i = $(this).attr("id");
            
            //var element = document.getElementById(""+i);
            //element.parentNode.removeChild(element);
            for(i = 2; i<=5 ;i++){
                var noData = '';
                document.getElementById('name'+i);
                document.getElementById('desc'+i);
                document.getElementById('qty'+i);
                document.getElementById('price'+i);
                
                $("#modal_name"+i).html(noData);
                $("#modal_desc"+i).html(noData);
                $("#modal_qty"+i).html(noData);
                $("#modal_price"+i).html(noData);
                
                console.log("cute si pat");
            }
        });
        
        


    }

</script>

</html>
