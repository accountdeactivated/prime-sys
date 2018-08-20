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
        <div id="addNewCarModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:black;">Add New Car</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color:black;">
                    <!--car_maker-->
                    <label for="carMaker" style="color:black;">Car Maker</label>
                    <select class="form-control" data-style="btn btn-link" id="carMaker">
                        <option disabled selected>Choose a car company</option>
                        @if(isset($carmakers))
                            @foreach($carmakers as $info)
                                <option data-id="{{$info->id}}" value="{{$info->company}}">{{$info->company}}</option>
                            @endforeach
                        @endif
                    </select>
                    {{--<span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose among the list the car maker of the new car. <b style="color:#E53935;">*Required</b></span>--}}
                    <br>
                    <!--car_model-->
                    <label for="carModel" style="margin-top:20px; color:black;">Car Model</label>
                    <input type="text" class="form-control" id="carModel" placeholder="Enter the model of the car.">
                    {{--<span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the model of the car <b style="color:#E53935;">*Required</b></span>--}}
                    <br>
                     <!--car_year-->
                     <label for="carYearModel" style="margin-top:20px; color:black;">Car Year</label>
                     <input type="year" class="form-control" id="carYearModel" placeholder="Enter the year model of the car.">
                     {{--<span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the year model of the car <b style="color:#E53935;">*Required</b></span>--}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="submitAddNewCar"type="button" class="btn btn-primary">Submit</button>
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
                           <h4 class="card-title ">Car
                              <button id="addNewCarButton" data-toggle="modal" data-target="#addNewCarModal" type=" button" rel="tooltip" title="Add New Car" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                              <i class="material-icons">add_circle</i>
                              </button>
                           </h4>
                           <p class="card-category" style="color:white;"> Here is a list of all the serviced cars of the company. </p>
                        </div>
                        
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table" id="dataTable" width="" height="150">
                                 <thead class="text-primary" style="font-size:20px;">
                                    <th>Car ID</th>
                                    <th><span class="fa fa-vcard" role="icon"></span> Company</th>
                                    <th><span class="fa fa-file-text" role="icon"></span>Model</th>
                                    <th> <span class="fa fa-gears" role="icon"></span> Year</th>
                                    <th> <span class="fa fa-gears" role="icon"></span> Action</th>
                                 </thead>
                                 <tbody id="carList" style="font-size:20px;">
                                    @if(isset($cars))
                                        @foreach($cars as $info)
                                            <tr>
                                                <td>{{$info->id}}</td>
                                                <td>{{$info->fromCompany->company}}</td>
                                                <td>{{$info->model}}</td>
                                                <td>{{$info->year}}</td>
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
        $(document).on('click', '#submitAddNewCar', function(e) {
            var verify = confirm('Do you want to add this company to the list?');
            if (verify==true){
                if($('#carMaker').val()!=null && $('#carModel').val()!=null && $('#carYearModel').val()!=null){
                    $('#addNewCarModal').modal('hide');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    })
                    e.preventDefault(); 
                    var formData = {
                        carMaker:$('#carMaker').find('option:selected').data('id'),
                        carModel:$('#carModel').val(),
                        carYearModel:$('#carYearModel').val(),
                    }
                    
                    $.ajax({
                        type: "POST",
                        url: 'liveAddCar',
                        data: formData,
                        success: function(data){
                            console.log('Car Maker Data:',data);
            
                            $('#carList').append(
                                '<tr><td>'+data.car.id+'</td><td>'+data.carmaker+'</td><td>'+data.car.model+'</td><td>'+data.car.year+'</td>'+
                                '<td><span data-id="'+data.car.id+'" style="color:#4c87ed;" class="fa fa-edit editCarMaker fa-2x" role="icon"></span>'+
                                '<span data-id="'+data.car.id+'" style="color:#E53935; padding-left:10px;" class="fa fa-trash deleteCarMaker fa-2x" role="icon"></span></td></tr>'
                            );
        
                            toastr.success('# '+data.car.id+' Car Model - '+data.car.model, 'Successfully added a new Car!')
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
