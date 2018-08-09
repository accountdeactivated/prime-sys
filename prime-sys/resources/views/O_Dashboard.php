
<?php 


?>
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
      <?php include 'SAheader.php'; ?>
    </div>
    <div class="main-panel">
        
      <!-- Navbar -->
         <?php include 'navbar.php' ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">today</i>
                  </div>
                  <p class="card-category">Clients this Month</p>
                  <h3 class="card-title">20
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">update</i>Weekly Report
                  </div>
                </div>
              </div>
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">today</i>
                  </div>
                  <p class="card-category"></p>
                  <h3 class="card-title">20
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">update</i>Weekly Report
                  </div>
                </div>
              </div>
            </div>
            


             <!--
             -->                           
                                        
<div class="content" style="width: 100%">
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
                                  <tr >
                                      <td>
                                          nani
                                      </td>
                                      <td>
                                          sdfsdf
                                      </td>
                                      <td>
                                          sdfsdfd
                                      </td>
                                      <td class="text-center">
                                         fuck
                                      </td>
                                      <td class="text-center">
                                        harkansaw
                                      </td>
                                      <td class="text-center">
                                          <button class="btn btn-default " onclick="printFunc()"> <i class="material-icons">print</i>   Print </button>
                                      </td>
                                  </tr>
                              

                              </form>
                          </tbody>

                      </table>
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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>