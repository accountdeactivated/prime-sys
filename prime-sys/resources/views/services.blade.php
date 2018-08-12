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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
      <link href={{asset('css/material-dashboard.css?v=2.1.0')}} rel="stylesheet" />
      <link href={{asset('demo/demo.css')}} rel="stylesheet" />
   </head>
   <body class="">
      <div class="wrapper ">
      <div class="sidebar" data-color="purple" data-background-color="white" data-image={{asset('img/sidebar-1.jpg')}}></div>


      <div id="addNewService" class="modal">
        <div class="modal-content">
          <h4>Modal Header</h4>
          <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
      </div>
      <div class="main-panel">
         <div class="content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header card-header-primary">
                           <h4 class="card-title ">Services
                              <button data-toggle="modal" data-target="addNewService" type="button" rel="tooltip" title="Add New Service" class="btn btn-primary btn-fab btn-fab-mini btn-round modal-trigger">
                              <i class="material-icons">add_circle</i>
                              </button>
                           </h4>
                           <p class="card-category" style="color:white;"> Here is a list of all the services offered</p>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table" id="dataTable" width="" height="150">
                                 <thead class=" text-primary">
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
  
      <script src={{asset('js/core/jquery.min.js')}}></script>
      <script src={{asset('js/core/popper.min.js')}}></script>
      <script src={{asset('js/core/bootstrap-material-design.min.js')}}></script>
      <script src={{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}></script>
      <script src={{asset('js/plugins/chartist.min.js')}}></script>
      <script src={{asset('js/plugins/bootstrap-notify.js')}}></script>
      <script src={{asset('js/material-dashboard.min.js?v=2.1.0')}}></script>
      <script src={{asset('demo/demo.js')}}></script>
   </body>
</html>
<script type="text/javascript">
  
</script>