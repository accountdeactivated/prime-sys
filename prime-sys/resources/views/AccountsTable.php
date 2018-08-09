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
            
                <?php include 'SAheader.php';?>
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
                                    <h4 class="card-title ">Accounts
                                    
                                             <button type="button" rel="tooltip" title="Add New Account" class="btn btn-primary btn-fab btn-fab-mini btn-round" onclick="location.href='<?php echo base_url();?>index.php/Add_Accounts_Controller'">
                                    
                                       
                                        

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
                                                    Account Name
                                                </th>
                                                <th>
                                                    Username
                                                </th>
                                                <th>
                                                    Contact Number
                                                </th>
                                                <th class="text-center">
                                                    Position
                                                </th>
                                                <th class="text-center">
                                                    Status
                                                </th>
                                                <th class="text-center">
                                                    Actions
                                                </th>
                                            
                                            </thead>
                                            <tbody>
                                                <form method="POST" action="Accounts_Controller/get_item" name="rowItem">
                                                <?php
                                                    foreach($h->result() as $row)
                                                    {
                                                ?>
                                                    <tr >
                                                        <td>
                                                            <?php echo $row->firstName, ' ', $row->lastName; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->userName; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->contactNum; ?>
                                                        </td>
                                                        <td class="text-center">
                                                           <?php

                                                            if ($row->typeofuser == '1') {
                                                            ?> <button class="btn btn-sm btn-info"> Service Adviser </button>
                                                            <?php } else if ($row->typeofuser == '2'){?>
                                                                 <button class="btn btn-sm btn-info"> Secretary </button>
                                                            <?php } else if ($row->typeofuser == '3'){?>
                                                                 <button class="btn btn-sm btn-info"> Worker </button>
                                                            <?php } else if ($row->typeofuser == '4'){?>
                                                                 <button class="btn btn-sm btn-info"> Supervisor </button>
                                                            <?php } else if ($row->typeofuser == '5'){?>
                                                                 <button class="btn btn-sm btn-info"> Executive </button>

                                                            <?php
                                                            }
                                                            ?>

                                                        </td>
                                                        <td class="text-center">
                                                            <!-- Need to add some sort of slider -->
                                                            <!-- Checks their accountStat if activated or deactivated -->
                                                            <?php
                                                                if ($row->accountStat == 'Inactive') 
                                                                {
                                                            ?> 
                                                            <button class="btn btn-sm btn-danger"> Inactive </button>
                                                            <?php 
                                                                } 
                                                                else if ($row->accountStat == 'Active')
                                                                {
                                                            ?>
                                                                 <button class="btn btn-sm btn-success"> Active </button>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                

                                                        <td class="text-center">
                                                            <button type="button" name="viewItem" data-id="<?php echo $row->accountsID; ?>"
                                                                    data-accountsID ="<?php echo $row->accountsID; ?>" 
                                                                    data-firstname ="<?php echo $row->firstName; ?>" 
                                                                    data-lastname ="<?php echo $row->lastName; ?>" 
                                                                    data-username ="<?php echo $row->userName; ?>" 
                                                                    data-contactnum ="<?php echo $row->contactNum; ?>" 
                                                                    data-email ="<?php echo $row->email; ?>" 
                                                                    data-address ="<?php echo $row->address; ?>" 
                                                                    
                                                                    class="btn btn-primary viewItem" data-toggle="modal" data-target="#myModalView" id="<?php echo $row->accountsID;?>" value="<?php echo $row->accountsID;?>">
                                                                    <i class="material-icons">search</i>  View</button>

                                                            <button type="button" name="edit" data-id="<?php echo $row->accountsID;?>"
                                                                    
                                                                    class="btn btn-warning viewItem" data-toggle="modal" data-target="#edit" id="<?php echo $row->accountsID;?>" value="<?php echo $row->accountsID;?>">
                                                                    <i class="material-icons">edit</i>  Edit</button>

                                                            <button type="button" name="delete" data-id="<?php echo $row->accountsID;?>"
                                                                    
                                                                    class="btn btn-danger viewItem" data-toggle="modal" data-target="#delete" id="<?php echo $row->accountsID;?>" value="<?php echo $row->accountsID;?>">
                                                                    <i class="material-icons">delete</i>  Delete</button>

                                                            <button class="btn btn-default " onclick="printFunc()"> <i class="material-icons">print</i>   Print </button>
                                                        </td>

                                                    </tr>
                                                <?php
                                                    }
                                                ?>
                                                </form>
                                            </tbody>

                                        </table>
                                         <button type="button" rel="tooltip" title="Back" style="float:right" class="btn btn-primary btn-round" onclick="location.href='<?php echo base_url();?>index.php/SADashboard_Controller'">
                                            <i class="material-icons" >keyboard_return</i>
                                          </button>
                                        </div>
                                        
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
                                                <td><b>First Name</b></td>
                                               <td><b id="modal_firstName"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Last Name</b></td>
                                               <td><b id="modal_lastName"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>User Name</b></td>
                                               <td><b id="modal_userName"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Contact Number</b></td>
                                               <td><b id="modal_contactNum"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Email</b></td>
                                                <td><b id="modal_email"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Address</b></td>
                                                <td><b id="modal_address"></b></td>
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
                            Are you sure you want to delete this account? <br>
                            (Take note that this would lead to a permanent deletion of the account)
                                      
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
            var accountsID = $(this).attr('value');
            //console.log("Item Code" + itemData);

            var accountStat = $(this).data("accountStat");
            $("#modal_accountStat").html(accountStat);
            
            var firstName = $(this).data("firstname");
            $("#modal_firstName").html(firstName);

            var lastName = $(this).data("lastname");
            $("#modal_lastName").html(lastName);
            
            var userName = $(this).data("username");
            $("#modal_userName").html(userName);

            var contactNum = $(this).data("contactnum");
            $("#modal_contactNum").html(contactNum);
            
            var email = $(this).data("email");
            $("#modal_email").html(email);
            
            var address = $(this).data("address");
            $("#modal_address").html(address);
            
            
            console.log("firstname: "+email);
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