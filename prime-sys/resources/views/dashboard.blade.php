<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="../assets/img/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Prime Auto Restoration</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
      <link href={{asset('css/material-dashboard.css?v=2.1.0')}} rel="stylesheet" />
      <link href={{asset('demo/demo.css')}} rel="stylesheet" />
   </head>
   <body class="">
      <div class="wrapper ">
         <div class="sidebar" data-color="purple" data-background-color="white" data-image={{asset('img/sidebar-1.jpg')}}>
            <div class="logo">
               <a href="http://www.creative-tim.com" class="simple-text logo-normal">
               Prime Auto Restoration
               </a>
            </div>
            <div class="sidebar-wrapper">
               <ul class="nav">
                  <li class="nav-item active  ">
                     <a class="nav-link" href="./Main_Controller">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="./Reports_Controller">
                        <i class="material-icons">person</i>
                        <p>Reports</p>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="./Accounts_Controller">
                        <i class="material-icons">group</i>
                        <p>Accounts</p>
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
                     <a class="nav-link" href="./Supplier_Controller">
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
               </ul>
            </div>
         </div>
         <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
               <div class="container-fluid">
                  <div class="navbar-wrapper">
                     <a class="navbar-brand" href="#pablo">Welcome General Manager!</a>
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
                           <i class="material-icons">person</i>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" >
                              <a>Logout</a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
            <div class="content">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                           <div class="card-header card-header-warning card-header-icon">
                              <div class="card-icon">
                                 <i class="material-icons">today</i>
                              </div>
                              <p class="card-category">Total Clients</p>
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
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                           <div class="card-header card-header-success card-header-icon">
                              <div class="card-icon">
                                 <i class="material-icons">store</i>
                              </div>
                              <p class="card-category">Walk-in Clients</p>
                              <h3 class="card-title">5</h3>
                           </div>
                           <div class="card-footer">
                              <div class="stats">
                                 <i class="material-icons">update</i>Weekly Report
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                           <div class="card-header card-header-danger card-header-icon">
                              <div class="card-icon">
                                 <i class="material-icons">info_outline</i>
                              </div>
                              <p class="card-category">Pending Requests</p>
                              <h3 class="card-title">3</h3>
                           </div>
                           <div class="card-footer">
                              <div class="stats">
                                 <i class="material-icons">local_offer</i> Check notifications
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                           <div class="card-header card-header-info card-header-icon">
                              <div class="card-icon">
                                 <i class="material-icons">payment</i>
                              </div>
                              <p class="card-category">Revenue</p>
                              <h3 class="card-title">5,234 php</h3>
                           </div>
                           <div class="card-footer">
                              <div class="stats">
                                 <i class="material-icons">date_range</i> Last 24 Hours
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6 col-md-12">
                        <div class="card">
                           <div class="card-header card-header-tabs card-header-primary">
                              <div class="nav-tabs-navigation">
                                 <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">Tasks:</span>
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                       <li class="nav-item">
                                          <a class="nav-link active" href="#profile" data-toggle="tab">
                                             <i class="material-icons">schedule</i> Appointments
                                             <div class="ripple-container"></div>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="#messages" data-toggle="tab">
                                             <i class="material-icons">wc</i> Walk-in
                                             <div class="ripple-container"></div>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="#settings" data-toggle="tab">
                                             <i class="material-icons">contacts</i> Manage
                                             <div class="ripple-container"></div>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="tab-content">
                                 <div class="tab-pane active" id="profile">
                                    <table class="table">
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <label class="form-check-label">
                                                   <input class="form-check-input" type="checkbox" value="" checked>
                                                   <span class="form-check-sign">
                                                   <span class="check"></span>
                                                   </span>
                                                   </label>
                                                </div>
                                             </td>
                                             <td>Full Automotive Body Repair for Mr. Mark Quinton's vehicle</td>
                                             <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                                </button> 
                                                <button type="button" rel="tooltip" title="View Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">search</i>
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <label class="form-check-label">
                                                   <input class="form-check-input" type="checkbox" value="">
                                                   <span class="form-check-sign">
                                                   <span class="check"></span>
                                                   </span>
                                                   </label>
                                                </div>
                                             </td>
                                             <td>Collect Payment of Mark Quinton</td>
                                             <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="View Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">search</i>
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <label class="form-check-label">
                                                   <input class="form-check-input" type="checkbox" value="">
                                                   <span class="form-check-sign">
                                                   <span class="check"></span>
                                                   </span>
                                                   </label>
                                                </div>
                                             </td>
                                             <td>Engine Repair for Mr. Phillip Chaney's vehicle
                                             </td>
                                             <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="View Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">search</i>
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <label class="form-check-label">
                                                   <input class="form-check-input" type="checkbox" value="" checked>
                                                   <span class="form-check-sign">
                                                   <span class="check"></span>
                                                   </span>
                                                   </label>
                                                </div>
                                             </td>
                                             <td>Collect Payment of Mr. Phillip Chaney</td>
                                             <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="View Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">search</i>
                                                </button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="tab-pane" id="messages">
                                    <table class="table">
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <label class="form-check-label">
                                                   <input class="form-check-input" type="checkbox" value="" checked>
                                                   <span class="form-check-sign">
                                                   <span class="check"></span>
                                                   </span>
                                                   </label>
                                                </div>
                                             </td>
                                             <td>Bumper Replacement for Mr. Rev Enue's vehicle
                                             </td>
                                             <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="View Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">search</i>
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <label class="form-check-label">
                                                   <input class="form-check-input" type="checkbox" value="">
                                                   <span class="form-check-sign">
                                                   <span class="check"></span>
                                                   </span>
                                                   </label>
                                                </div>
                                             </td>
                                             <td>Collect downpayment from Mr. Rev Enue</td>
                                             <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="View Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">search</i>
                                                </button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="tab-pane" id="settings">
                                    <table class="table">
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <label class="form-check-label">
                                                   <input class="form-check-input" type="checkbox" value="">
                                                   <span class="form-check-sign">
                                                   <span class="check"></span>
                                                   </span>
                                                   </label>
                                                </div>
                                             </td>
                                             <td>Paint Restock arrives today</td>
                                             <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="View Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">search</i>
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <label class="form-check-label">
                                                   <input class="form-check-input" type="checkbox" value="" checked>
                                                   <span class="form-check-sign">
                                                   <span class="check"></span>
                                                   </span>
                                                   </label>
                                                </div>
                                             </td>
                                             <td>New Account Request by 
                                             </td>
                                             <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="View Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">search</i>
                                                </button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
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
      <script src={{asset('js/core/jquery.min.js')}}></script>
      <script src={{asset('js/core/popper.min.js')}}></script>
      <script src={{asset('js/core/bootstrap-material-design.min.js')}}></script>
      <script src={{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}></script>
      <script src={{asset('js/plugins/chartist.min.js')}}></script>
      <script src={{asset('js/plugins/bootstrap-notify.js')}}></script>
      <script src={{asset('js/material-dashboard.min.js?v=2.1.0')}}></script>
      <script src={{asset('demo/demo.js')}}></script>
      {{-- GOOGLE MAPS API Commented Out By: PrivateAirJET <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}

      <script>
         $(document).ready(function() {
           md.initDashboardPageCharts();
         });
      </script>
      
   </body>
</html>