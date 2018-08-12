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
        {{-- <link type="text/css" rel="stylesheet" href={{asset('materialize/css/materialize.min.css')}} media="screen,projection"/> --}}
   </head>
   <body class="">
      <div class="wrapper ">
      <div class="sidebar" data-color="purple" data-background-color="white" data-image={{asset('img/sidebar-1.jpg')}}></div>

        <!--modal_starts_here 
        commented by: PrivateAirJET
        -->
      <div id="addNewServiceModal" class="modal">
        <div class="modal-header">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>

        <div class="modal-content">
          <h4>Modal Header</h4>
          <p>A bunch of text</p>
        </div>

        <div class="modal-footer">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
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
                              <button id="addNewServiceButton"type="button" rel="tooltip" title="Add New Service" class="btn btn-primary btn-fab btn-fab-mini btn-round">
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
      <script src={{asset('js/material-dashboard.min.js?v=2.1.0')}}></script>
      <script src={{asset('demo/demo.js')}}></script>
      {{-- <script type="text/javascript" src={{asset('materialize/js/materialize.min.js')}}></script> --}}

      <!--start custom script section-->
      <script type="text/javascript">
        $(document).on('click','#addNewServiceButton',function(){
            $('#addNewServiceModal').modal('open'); 
        });
      </script>
      <!--end custom script section-->

   </body>
</html>
<script type="text/javascript">
  
</script>