<!DOCTYPE html>
<html lang="en">

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
    <link href="<?php echo base_url(); ?>/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url(); ?>/assets/demo/demo.css" rel="stylesheet" />



    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
         <?php include 'SAheader.php'; ?>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
                <?php include 'navbar.php'; ?>
            </nav>
            <!-- End Navbar -->
            <!--<form action="scheduleC/process" method="post">-->

            <div class="content">
                
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
                                                        <div class="col-md-5">
                                                            <label class="bmd-label-floating">First Name</label>
                                                            <input type="text" class="form-control" name="firstname" id="fn" autocomplete="off" required>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label class="bmd-label-floating">Last Name</label>
                                                            <input type="text" class="form-control" name="lastname" id="ln" autocomplete="off" required>
                                                        </div>
                                                        <div class="col-md-2">
                                                             <button type="button" class="btn btn-lg btn-primary viewCD" data-toggle="modal" data-target="#myModalView" id="" value="">Next</button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                        </div>
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
                    <form class="form-horizontal" action="repairOrderC/submitCi" method="post">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div id="printableArea">
                            <div class="modal-content">

                                <!--HEAD-->

                                <div class="modal-header">
                                    <h4 class="modal-title">Please Verify Customer Information</h4>
                                </div>

                                <!--BODY-->
                                <div class="modal-body">
                                    
                                   <?php 
                                        foreach($h as $row)
                                        {
                                    ?>
                                        <input type="hidden" value="" 
                                               fname="<?php echo $row->firstname; ?>" 
                                               lname="<?php echo $row->lastname; ?>"
                                               contact="<?php echo $row->contactnum; ?>" 
                                               email="<?php echo $row->email; ?>" 
                                               platenum="<?php echo $row->platenum; ?>" 
                                               brand="<?php echo $row->brand; ?>" 
                                               model="<?php echo $row->model; ?>" 
                                               address="<?php echo $row->address; ?>"  
                                               name="custinfo" id="customerInfo"> 

<!--                                        <option>  </option>-->
                                    <?php 
                                        } 
                                    ?>           

                                    <div class="row">
                                        <div class="col-md-12">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h4>First Name </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_fn"> </b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Last Name </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_ln"></b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                 <h4>Contact Number </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_contactN"></b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Email </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_email"></b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Home Address </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_address"></b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                 <h4>Car Brand </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_cb"></b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Car Model </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_cm"></b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Car Platenumber </h4>
                                                            </td>
                                                            <td>
                                                                <h4><kbd><span align="right" class="label label-info"><b id="modal_cp"></b></span></kbd></h4>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
<!--
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div align="left">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4>First Name </h4>
                                                        <h4>Last Name </h4>
                                                        <h4>Contact Number </h4>
                                                        <h4>Email </h4>
                                                        <h4>Home Address </h4>
                                                        <h4>Car Brand </h4>
                                                        <h4>Car Model </h4>
                                                        <h4>Car Platenumber </h4>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h4><kbd><span align="right" class="label label-info"><b id="modal_fn"> </b></span></kbd></h4>
                                                        <h4><kbd><span align="right" class="label label-info"><b id="modal_ln"></b></span></kbd></h4>
                                                        <h4><kbd><span align="right" class="label label-info"><b id="modal_contactN"></b></span></kbd></h4>
                                                        <h4><kbd><span align="right" class="label label-info"><b id="modal_email"></b></span></kbd></h4>
                                                        <h4><kbd><span align="right" class="label label-info"><b id="modal_address"></b></span></kbd></h4>
                                                        <h4><kbd><span align="right" class="label label-info"><b id="modal_cb"></b></span></kbd></h4>
                                                        <h4><kbd><span align="right" class="label label-info"><b id="modal_cm"></b></span></kbd></h4>
                                                        <h4><kbd><span align="right" class="label label-info"><b id="modal_cp"></b></span></kbd></h4>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
-->
                                    <input type="hidden" id='firstname' name='firstname'>
                                    <input type="hidden" id='lastname' name='lastname'>
                                    <input type="hidden" id='contactnum' name='contactnum'>
                                    <input type="hidden" id='email' name='email'>
                                    <input type="hidden" id='address' name='address'>
                                    <input type="hidden" id='brand' name='brand'>
                                    <input type="hidden" id='model' name='model'>
                                    <input type="hidden" id='platenum' name='platenum'>
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

        $('.viewCD').click(function() {
                var cust_infos = document.getElementsByName('custinfo');
            
                var user = document.getElementById('customerInfo').value;
                var firstname = document.getElementById('fn').value;
                var lastname = document.getElementById('ln').value;
                
                for(x = 0; x < cust_infos.length; x++){
                    if(cust_infos[x].getAttribute('fname') == firstname && cust_infos[x].getAttribute('lname') == lastname){
                        //alert('matched!');
                        $("#modal_fn").html(cust_infos[x].getAttribute('fname'));
                        $("#modal_ln").html(cust_infos[x].getAttribute('lname'));
                        $("#modal_contactN").html(cust_infos[x].getAttribute('contact'));
                        $("#modal_email").html(cust_infos[x].getAttribute('email'));
                        $("#modal_address").html(cust_infos[x].getAttribute('address'));
                        $("#modal_cp").html(cust_infos[x].getAttribute('platenum'));
                        $("#modal_cm").html(cust_infos[x].getAttribute('model'));
                        $("#modal_cb").html(cust_infos[x].getAttribute('brand'));
                    }
                }

            /*
                var i = 0;
                for(i =0; i<user.length; i++){
                    if(user[i].getAttribute('firstname') == firstname && user[i].getAttribute('lastname'));
                }

            */
            
        });

    }
    
</script>


</html>