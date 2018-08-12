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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link href={{asset('css/material-dashboard.css')}} rel="stylesheet" />
        <link href={{asset('demo/demo.css')}} rel="stylesheet" />
        <meta name="_token" content="{!! csrf_token() !!}">
        {{-- <link type="text/css" rel="stylesheet" href={{asset('materialize/css/materialize.min.css')}} media="screen,projection"/> --}}
   </head>
   <body class="">
      <div class="wrapper ">
      <div class="sidebar" data-color="purple" data-background-color="white" data-image={{asset('img/sidebar-1.jpg')}}></div>

        <!--modal_starts_here 
        commented by: PrivateAirJET
        -->
        <div id="addNewSupplierModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:black;">Add New Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color:black;">

                    <!--service_name-->
                    <label for="serviceName" style="color:black;">Service Name</label>
                    <input type="email" class="form-control" id="serviceName" placeholder="Enter the service name">
                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the name of the service. <b style="color:#E53935;">*Required</b></span>
                    <br>
                </div>
            </div>
        </div>
       <!--modal_ends_here 
        commented by: PrivateAirJET
        -->

        <!--modal_starts_here 
        commented by: PrivateAirJET
        -->
        <div id="editSupplierModal" class="modal" tabindex="-1" role="dialog">
           
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
                                 <thead class="text-primary" style="font-size:20px;">
                                    <th>Service ID</th>
                                    <th><span class="fa fa-vcard" role="icon"></span> Name</th>
                                    <th><span class="fa fa-file-text" role="icon"></span> Type</th>
                                    <th><span class="fa fa-newspaper-o" role="icon"></span> Description</th>
                                    <th><span class="fa fa-money" role="icon"></span> Cost (PHP)</th>
                                    <th> <span class="fa fa-gears" role="icon"></span> Actions</th>
                                 </thead>
                                 <tbody id="servicesList" style="font-size:20px;">
                                    @if(isset($services))
                                        @php($count=0)
                                        @foreach($services as $service)
                                        @php($count=$count+1)
                                        <tr id="serviceNumber{{$service->id}}">
                                            <td id="serviceID{{$service->id}}">{{$service->id}}</td>
                                            <td id="serviceName{{$service->id}}">{{$service->name}}</td>
                                            <td id="serviceType{{$service->id}}">{{$service->type}}</td>
                                            <td id="serviceDescription{{$service->id}}">{{$service->description}}</td>
                                            <td id="serviceCost{{$service->id}}">{{$service->cost}}</td>
                                            <td>
                                                <span data-id={{$service->id}} data-name={{$service->name}} data-type={{$service->type}} data-description={{$service->description}} data-cost={{$service->cost}} style="color:#4c87ed;" class="fa fa-edit editService fa-2x" role="icon"></span>
                                                <span data-id={{$service->id}} style="color:#E53935; padding-left:10px;" class="fa fa-trash deleteService fa-2x" role="icon"></span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
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
      
      <!--general script section-->
      <script src={{asset('js/core/jquery.min.js')}}></script>
      <script src={{asset('js/core/popper.min.js')}}></script>
      <script src={{asset('js/core/bootstrap-material-design.min.js')}}></script>
      <script src={{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}></script>
      <script src={{asset('js/plugins/chartist.min.js')}}></script>
      <script src={{asset('js/plugins/bootstrap-notify.js')}}></script>
      <script src={{asset('js/material-dashboard.min.js')}}></script>
      <script src={{asset('demo/demo.js')}}></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>
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
