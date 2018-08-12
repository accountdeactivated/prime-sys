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
        <div id="addNewServiceModal" class="modal" tabindex="-1" role="dialog">
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
                    <!--service_type-->
                    <label for="serviceType" style="margin-top:20px; color:black;">Service Type</label>
                    <select class="form-control" data-style="btn btn-link" id="serviceType">
                        <option selected disabled>Choose a service type</option>
                        <option>Repair</option>
                        <option>Painting</option>
                        <option>Washing</option>
                    </select>
                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the type of the service. <b style="color:#E53935;">*Required</b></span>
                    <br>
                    <!--service_description-->
                    <label for="serviceDescription" style="margin-top:20px; color:black;">Service Description</label>
                    <textarea class="form-control" id="serviceDescription" rows="2"></textarea>
                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the brief description of the service. <b style="color:#E53935;">*Required</b></span>
                    <br>
                    <!--service_cost-->
                    <label for="serviceCost" style="margin-top:20px; color:black;">Service Cost</label>
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

        <!--modal_starts_here 
        commented by: PrivateAirJET
        -->
        <div id="editServiceModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:black;">Update Service Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color:black;">
                    <input type="hidden" id="serviceIDEdit" name="serviceIDEdit">
                    <!--service_name-->
                    <label for="serviceNameEdit" style="color:black;">Service Name</label>
                    <input type="email" class="form-control" id="serviceNameEdit" placeholder="Enter the service name">
                    <br>
                    <!--service_type-->
                    <label for="serviceTypeEdit" style="margin-top:20px; color:black;">Service Type</label>
                    <select class="form-control" data-style="btn btn-link" id="serviceTypeEdit">
                        <option selected disabled>Choose a service type</option>
                        <option>Repair</option>
                        <option>Painting</option>
                        <option>Washing</option>
                    </select>
                    <br>
                    <!--service_description-->
                    <label for="serviceDescriptionEdit" style="margin-top:20px; color:black;">Service Description</label>
                    <textarea class="form-control" id="serviceDescriptionEdit" rows="2"></textarea>
                    <br>
                    <!--service_cost-->
                    <label for="serviceCostEdit" style="margin-top:20px; color:black;">Service Cost</label>
                    <input type="number" class="form-control" id="serviceCostEdit" placeholder="Enter the service cost.">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="submitEditService"type="button" class="btn btn-primary">Submit</button>
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
      <script type="text/javascript">
        $(document).on('click', '#submitAddService', function(e) {
            var verify = confirm('Do you want to add this service to the list?');
            if (verify==true){
                $('#addNewServiceModal').modal('hide');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })
    
                e.preventDefault(); 
                var formData = {
                    serviceName:$('#serviceName').val(),
                    serviceType:$('#serviceType').val(),
                    serviceDescription:$('#serviceDescription').val(),
                    serviceCost:$('#serviceCost').val(),
                }
                
                $.ajax({
                    type: "POST",
                    url: 'liveAddService',
                    data: formData,
                    success: function(data){
                        console.log('Service Data:',data);
        
                        $('#servicesList').append(
                            '<tr><td>'+data.service.id+'</td><td>'+data.service.name+'</td><td>'+data.service.type+'</td><td>'+data.service.description+'</td><td>'+data.service.cost+'</td>'+
                            '<td><span data-id="'+data.service.id+'" style="color:#4c87ed;" class="fa fa-edit editService fa-2x" role="icon"></span>'+
                            '<span data-id="'+data.service.id+'" style="color:#E53935; padding-left:10px;" class="fa fa-trash deleteService fa-2x" role="icon"></span></td></tr>'
                        );
    
                        toastr.success('# '+data.service.id+' Service Name - '+data.service.name, 'Successfully added a service!')
                    },   
                    error: function (data) {
                        console.log('Data Error:', data);
                    }
                });
            }
            return false;
        });
    </script>
    <script type="text/javascript">
        $(document).on('click', '.editService', function(e) {
            $('#serviceIDEdit').val($(this).data('id'));
            $('#serviceNameEdit').val($(this).data('name'));
            $('#serviceTypeEdit').val($(this).data('type'));
            $('#serviceDescriptionEdit').val($(this).data('description'));
            $('#serviceCostEdit').val($(this).data('cost'));
            $('#editServiceModal').modal('show');
        });

        $(document).on('click', '.deleteService', function(e) {
           var verify = confirm('Warning: Do you want to delete the service?')
           if(verify==true){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })
            
                var serviceID = $(this).data('id');

                $.ajax({
                    type: "DELETE",
                    url: window.location.pathname + '/' + serviceID,
                    success: function (data) {
                        console.log('Deleted Service:',data);
                        toastr.success('Successfully deleted a service!')
                    },
                    error: function (data) {
                        console.log('Data Error:', data);
                        toastr.error('System Error has occurred!')
                    }
                });
           }
           return false;
        });
    </script>
    <script type="text/javascript">
        $(document).on('click', '#submitEditService', function(e) {
            var verify = confirm('Do you want to edit this service?');
            if (verify==true){
                $('#editServiceModal').modal('hide');
                var holder = $('#serviceIDEdit').val();
                if($('#serviceName'+holder).text()!=$('#serviceNameEdit').val() || $('#serviceType'+holder).text()!=$('#serviceTypeEdit').val() || $('#serviceDescription'+holder).text()!=$('#serviceDescriptionEdit').val() ||
                $('#serviceCost'+holder).text()!=$('#serviceCostEdit').val()){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    })
                    
                    e.preventDefault(); 
                    
                    var formData = {
                        serviceID:$('#serviceIDEdit').val(),
                        serviceName:$('#serviceNameEdit').val(),
                        serviceType:$('#serviceTypeEdit').val(),
                        serviceDescription:$('#serviceDescriptionEdit').val(),
                        serviceCost:$('#serviceCostEdit').val(),
                    }
                    
                    $.ajax({
                        type: "POST",
                        url: 'liveEditService',
                        data: formData,
                        success: function(data){
                            console.log('Service Data:',data);

                            $('#serviceNumber'+data.service.id).closest('tr').find('td:first').html(data.service.id);
                            $('#serviceNumber'+data.service.id).closest('tr').find('td:first').next().html(data.service.name);
                            $('#serviceNumber'+data.service.id).closest('tr').find('td:first').next().next().html(data.service.type);
                            $('#serviceNumber'+data.service.id).closest('tr').find('td:first').next().next().next().html(data.service.description);
                            $('#serviceNumber'+data.service.id).closest('tr').find('td:first').next().next().next().next().html(data.service.cost);
                            $('#serviceNumber'+data.service.id).closest('tr').find('td:first').next().next().next().next().next().find('span:first').data({
                                'name':data.service.name,'type':data.service.type,'description':data.service.description,'cost':data.service.cost
                            });

                            toastr.success('# '+data.service.id+' Service Name - '+data.service.name, 'Successfully edited a service!');
                        },   
                        error: function (data) {
                            console.log('Data Error:', data);
                            toastr.error('System Error has occurred!')
                        }
                    });
                }else{
                    alert('There is no changes made with this service!');
                }
            }
            return false;
        });
    </script>
   </body>
</html>
