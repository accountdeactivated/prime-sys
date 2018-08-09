<!DOCTYPE html>
<html lang="en">
<?php
//include 'localhost/SYSTIMP-INTG/application/controllers/repairOrderC.php';
//session_start();
?>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Repair Order
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
<!--    <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />-->
    <link href="<?php echo base_url(); ?>/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
<!--    <link href="../assets/demo/demo.css" rel="stylesheet" />-->
    <link href="<?php echo base_url(); ?>/assets/demo/demo.css" rel="stylesheet" />



    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url(); ?>/assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="" class="simple-text logo-normal">
          PRIME AUTO-REPAIR
        </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item  ">
                        <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user.html">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."index.php/"; ?>orderServiceC">
              <i class="material-icons">event</i>
              <p>Order Service</p>
            </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url(); ?>restockInventoryC">
              <i class="material-icons">content_paste</i>
              <p>Restock Inventory</p>
            </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url()."index.php/"; ?>purchaseOrderC">
              <i class="material-icons">event</i>
              <p>Purchase Order</p>
            </a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link" href="<?php echo base_url()."index.php/"; ?>repairOrderC">
              <i class="material-icons">event</i>
              <p>Repair Order</p>
            </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Repair Order</a>
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
                <form method="POST" action="<?php echo base_url(); ?>index.php/repairOderC/postorder">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Repair Order Form</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h6>Customer Information</h6>
                                            </div>
                                            <div class="card-body">
                                                
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h4>First Name </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_fn">Jeremy</b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Last Name </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_ln">Ocampo</b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                 <h4>Contact Number </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_contactN">09369455269</b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Email </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_email">itsoneseno@gmail.com</b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Home Address </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_address">140 Kapitan Tiago St., Rizal Village, Alabang</b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                 <h4>Car Brand </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_cb">Toyota</b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Car Model </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_cm">Vios</b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Car Platenumber </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_cp">XCD-963</b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                        </div>
                                                      
                                                    </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card">
                                            <div class="card-header">
                                                <h6>Order Information</h6>
                                            </div>
                                            <div class="card-body">
                                                
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="bmd-label-floating">Date: &nbsp;&nbsp; <?php echo date('Y-m-d');?></label>
                                                            <input type="hidden" name="date" value="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            
                                                        <div id="newRow" class="row firstSample">
                                                        <div class="col-md-4">
                                                        <div class="card"><div class="card-body">
                                                            <h4><b>Service 1</b></h4>
                                                            <tr>
                                                                <input type="text" class="form-control" name="name1" autocomplete="off" placeholder="Service Name" id="name1">
                                                                <input type="text" class="form-control" name="category1" autocomplete="off" placeholder="Category" id="category1">
                                                                <textarea class="form-control" rows="3" name="desc1" id="desc1" placeholder="Description"></textarea>
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
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12" align="right">
                                                            <input type="button" class="btn btn-lg btn-primary viewPO" data-toggle="modal" data-target="#myModalView" id="" value="PROCEED">
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div id="myModalView" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div id="printableArea">
                                <div class="modal-content">

                                    <!--HEAD-->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Please Verify Repair Order</h4>
                                    </div>
                                    <!--BODY-->
                                    <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div align="left">
                                                    <div class="row">
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
                                                        <th>Category</th>
                                                        <th>Description</th>
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
                                                                    <b id="modal_category<?php echo $i; ?>"></b>
                                                                </td>
                                                                <td>
                                                                    <b id="modal_desc<?php echo $i; ?>"></b>
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
        <script src="<?php echo base_url(); ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chartist JS -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="<?php echo base_url(); ?>/assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="<?php echo base_url(); ?>/assets/demo/demo.js"></script>
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
            
            for(i =1; i<x; i++)
            {
                
            var name = document.getElementById('name'+i).value;
            $("#modal_name"+i).html(name);
            
            var desc = document.getElementById('category'+i).value;
            $("#modal_category"+i).html(desc);
            var qty = document.getElementById('desc'+i).value;
            $("#modal_description"+i).html(qty);
            var price = document.getElementById('price'+i).value;
            $("#modal_price"+i).html(price);
            subtotal = price+subtotal;
                
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

        
    }
    
    function myFunc(){
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

                var row =  '<div class="col-md-4"><div class="card"><div class="card-body"><h4><b>Service '+x+'</b></h4><tr><td><input type="text" class="form-control" name="name'+x+'" autocomplete="off" placeholder=" Serivce Name" id="name'+x+'"></td><td><input type="text" class="form-control" name="category'+x+'" autocomplete="off" placeholder="Category" id="category'+x+'"></td><td><textarea class="form-control" rows="3" name="desc'+x+'" id="desc'+x+'" placeholder="Description"></textarea></td><td><input type="number" class="form-control" name="price'+x+'" autocomplete="off" placeholder="Price" id="price'+x+'"></td><td></td><td><button value="'+x+'" id="delete'+x+'" class="btn btn-danger delete">Delete</button></td></tr></div></div></div>';
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
    

</script>

</html>
