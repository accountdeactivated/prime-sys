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
        <div class="sidebar" data-color="purple" data-background-color="white" data-image={{asset('img/sidebar-1.jpg')}}>
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Prime Auto Restoration
                </a>
            </div>
            <div class="sidebar-wrapper">
                @include('layouts.sidebar')
            </div>
        </div>

        <!--modal_starts_here 
        commented by: PrivateAirJET
        -->
        <div id="addNewCarMakerModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:black;">Add New Car Maker</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color:black;">
                    <!--car_maker-->
                    <label for="carMaker" style="color:black;">Car Maker</label>
                    <input type="text" class="form-control" id="carMaker" placeholder="Enter the car company name">
                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the name of the car company. <b style="color:#E53935;">*Required</b></span>
                    <br>
                    <!--car_multiplier-->
                    <label for="carMakerMultiplier" style="margin-top:20px; color:black;">Car Multiplier</label>
                    <input type="number" step="0.01" class="form-control" id="carMakerMultiplier" placeholder="Enter the service cost multiplier.">
                    <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the service multiplier for the company. <b style="color:#E53935;">*Required</b></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="submitAddNewCarMaker"type="button" class="btn btn-primary">Submit</button>
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
                           <h4 class="card-title ">Car Maker
                              <button id="addNewCarMakerButton" data-toggle="modal" data-target="#addNewCarMakerModal" type=" button" rel="tooltip" title="Add New Car Maker" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                              <i class="material-icons">add_circle</i>
                              </button>
                           </h4>
                           <p class="card-category" style="color:white;"> Here is a list of all the registered car makers/brands of the company. </p>
                        </div>
                        
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table" id="dataTable" width="" height="150">
                                 <thead class="text-primary" style="font-size:20px;">
                                    <th>Maker ID</th>
                                    <th><span class="fa fa-vcard" role="icon"></span> Company</th>
                                    <th><span class="fa fa-file-text" role="icon"></span>Multiplier</th>
                                    <th> <span class="fa fa-gears" role="icon"></span> Actions</th>
                                 </thead>
                                 <tbody id="makersList" style="font-size:20px;">
                                    @if(isset($carmakers))
                                        @foreach($carmakers as $info)
                                            <tr>
                                                <td>{{$info->id}}</td>
                                                <td>{{$info->company}}</td>
                                                <td>{{$info->percentage}}</td>
                                                <td>
                                                    <span data-id="{{$info->id}}" style="color:#4c87ed;" class="fa fa-edit editCarMaker fa-2x" role="icon"></span>
                                                    <span data-id="{{$info->id}}" style="color:#E53935; padding-left:10px;" class="fa fa-trash deleteCarMaker fa-2x" role="icon"></span>
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

      <!--start custom script section-->
      <script type="text/javascript">
        $(document).on('click', '#submitAddNewCarMaker', function(e) {
            var verify = confirm('Do you want to add this company to the list?');
            if (verify==true){
                if($('#carMaker').val()!=null && $('#carMakerMultiplier').val()!=null){
                    $('#addNewCarMakerModal').modal('hide');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    })
        
                    e.preventDefault(); 
                    var formData = {
                        carMaker:$('#carMaker').val(),
                        carMakerMultiplier:$('#carMakerMultiplier').val(),
                    }
                    
                    $.ajax({
                        type: "POST",
                        url: 'liveAddCarMaker',
                        data: formData,
                        success: function(data){
                            console.log('Car Maker Data:',data);
            
                            $('#makersList').append(
                                '<tr><td>'+data.carmaker.id+'</td><td>'+data.carmaker.company+'</td><td>'+data.carmaker.percentage+'</td>'+
                                '<td><span data-id="'+data.carmaker.id+'" style="color:#4c87ed;" class="fa fa-edit editCarMaker fa-2x" role="icon"></span>'+
                                '<span data-id="'+data.carmaker.id+'" style="color:#E53935; padding-left:10px;" class="fa fa-trash deleteCarMaker fa-2x" role="icon"></span></td></tr>'
                            );
        
                            toastr.success('# '+data.carmaker.id+' Car Maker Name - '+data.carmaker.company, 'Successfully added a new Car Maker!')
                        },   
                        error: function (data) {
                            console.log('Data Error:', data);
                        }
                    });
                }else{
                    alert('Error processing the request. Please fill out the necessary fields properly!')
                }
            }
            return false;
        });
    </script>
    <!--end custom script section-->
   </body>
</html>
