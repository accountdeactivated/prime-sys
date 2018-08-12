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
        <link href={{asset('css/material-dashboard.css')}} rel="stylesheet" />
        <link href={{asset('demo/demo.css')}} rel="stylesheet" />
        {{-- <link type="text/css" rel="stylesheet" href={{asset('materialize/css/materialize.min.css')}} media="screen,projection"/> --}}
   </head>
   <body class="">
      <div class="wrapper ">
      <div class="sidebar" data-color="purple" data-background-color="white" data-image={{asset('img/sidebar-1.jpg')}}></div>

        <!--modal_starts_here 
        commented by: PrivateAirJET
        -->
        <div id="addNewServiceModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color:black;">

                    <!--service_name-->
                    <label for="serviceName">Service Name</label>
                    <input type="email" class="form-control" id="serviceName" placeholder="Enter the service name">
                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the name of the service. <b style="color:#E53935;">*Required</b></span>

                    <!--service_type-->
                    <label for="serviceType">Service Type</label>
                    <select class="form-control selectpicker" data-style="btn btn-link" id="serviceType">
                        <option selected disabled>Choose a service type</option>
                        <option>Repair</option>
                        <option>Painting</option>
                        <option>Washing</option>
                    </select>
                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the type of the service. <b style="color:#E53935;">*Required</b></span>

                    <!--service_description-->
                    <div class="form-group">
                        <label for="serviceDescription">Service Description</label>
                        <textarea class="form-control" id="serviceDescription" rows="3"></textarea>
                    </div>
                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the brief description of the service. <b style="color:#E53935;">*Required</b></span>

                    <!--service_cost-->
                    <label for="serviceCost">Service Cost</label>
                    <input type="number" class="form-control" id="serviceCost" placeholder="Enter the service cost.">
                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the cost of the service. <b style="color:#E53935;">*Required</b></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="submitAddService"type="button" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </div>
        </div>
       <!--modal_ends_here 
        commented by: PrivateAirJET
        -->

      <div class="main-panel">
         <div class="content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header card-header-primary">
                           <h4 class="card-title ">Services
                              <button id="addNewServiceButton" data-toggle="modal" data-target="#addNewServiceModal" type=" button" rel="tooltip" title="Add New Service" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                              <i class="material-icons">add_circle</i>
                              </button>
                           </h4>
                           <p class="card-category" style="color:white;"> Here is a list of all the services offered</p>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table" id="dataTable" width="" height="150">
                                 <thead class=" text-primary">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Cost</th>
                                    <th class="text-center">Actions</th>
                                 </thead>
                                 <tbody>
                                 </tbody>
                              </table>
                              <div>
                                 <button class="btn btn-default " rel="tooltip" title="Print Service List" onclick="printFunc()"> <i class="material-icons">print</i>   Print </button>
                                 <button type="button" rel="tooltip" title="Back" style="float:right" class="btn btn-primary btn-round">
                                 <i class="material-icons">keyboard_return</i>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <!--general script section-->
      <script src={{asset('js/core/jquery.min.js')}}></script>
      <script src={{asset('js/core/popper.min.js')}}></script>
      <script src={{asset('js/core/bootstrap-material-design.min.js')}}></script>
      <script src={{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}></script>
      <script src={{asset('js/plugins/chartist.min.js')}}></script>
      <script src={{asset('js/plugins/bootstrap-notify.js')}}></script>
      <script src={{asset('js/material-dashboard.min.js')}}></script>
      <script src={{asset('demo/demo.js')}}></script>
      {{-- <script type="text/javascript" src={{asset('materialize/js/materialize.min.js')}}></script> --}}

      <!--start custom script section-->
      {{-- <script type="text/javascript">
        $(document).on('click','#addNewServiceButton',function(){
            $('#addNewServiceModal').modal('open'); 
        });
      </script> --}}
      <!--end custom script section-->

   </body>
</html>
<script type="text/javascript">
  
</script>