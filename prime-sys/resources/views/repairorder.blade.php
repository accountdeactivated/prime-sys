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


        <!--modal_starts_hre
        commented by: PrivateAirJET
        -->
        <div id="addNewRepairOrderModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:black;">Add New Repair Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color:black;">

                    <!--client_name-->
                    <label for="clientName" style="color:black;">Client Name</label>
                    <select class="form-control" data-style="btn btn-link" id="clientName">
                        <option disabled selected>Choose a client</option>
                        @if(isset($clients))
                            @foreach($clients as $info)
                                <option data-id="{{$info->id}}" value="{{$info->name}}">{{$info->name}}</option>
                            @endforeach
                        @endif
                    </select>
                    {{--<span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the name of the client. <b style="color:#E53935;">*Required</b></span>--}}
                    <br>
                    <!--car_maker-->
                    <label for="carMaker" style="margin-top:20px; color:black;">Car Maker</label>
                    <select class="form-control" data-style="btn btn-link" id="carMaker">
                        <option disabled selected>Choose a manufacturer</option>
                        @if(isset($carmakers))
                            @foreach($carmakers as $info)
                                <option data-percentage="{{$info->percentage}}" data-id="{{$info->id}}" value="{{$info->company}}">{{$info->company}}</option>
                            @endforeach
                        @endif
                    </select>
                    {{--<span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the car manufacturer from the order. <b style="color:#E53935;">*Required</b></span>--}}
                    <br>
                    <!--car_model-->
                    <label for="carModel" style="margin-top:20px; color:black;">Car Model</label>
                    <select class="form-control" data-style="btn btn-link" id="carModel">
                        <option>N/A</option>
                    </select>
                    {{--<span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the model of the car.<b style="color:#E53935;">*Required</b></span>--}}
                    <hr>

                    <!--repair-order-->
                    <div class="row" style="margin-top:20px;">
                        <div class="col s12">
                            <button id="AddServiceButton" style="float:left;" type="button" class="btn btn-success">Add Service</button>
                        </div>
                      
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <h6 style="text-align:center">LIST OF SERVICE ORDER/S</h6>
                        </div>
                    </div>
                
                    <div class="row" style="border: 1px solid black; margin:5px; background-color:#E1BEE7;">
                        <div class="col s12">
                           <div class="table-responsive">
                                <table class="table table-responsive centered" style="width:100%; min-height:100px;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Type</th>
                                            <th>Name</th>
                                            <th>Cost (PHP)</th>
                                        </tr>
                                    </thead>
                                    <tbody id="serviceList">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col s4">
                            <h6 style="text-align:center;">Gross Price: <br> <b id="grossPrice"></b></h6>
                        </div>
                        <div class="col s4">
                            <h6 style="text-align:center;">Multiplier: <br> <b id="multiplier"></b></h6>
                        </div>
                        <div class="col s4">
                            <h6 style="text-align:center;">Total Price: <br> <b id="totalPrice"></b></h6>
                            <input id="totalPriceValue" type="hidden" value="0" />
                        </div>
                    </div>
                    <hr style="margin-bottom:0;">
                    <!--expected_deadline-->
                    <label for="expectedDeadline" style="margin-top:20px; color:black;">Expected Deadline</label>
                    <input type="date" class="form-control" id="expectedDeadline">
                    {{--<span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Enter the repair order/s expected deadline. <b style="color:#E53935;">*Required</b></span>--}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="submitAddRepairService"type="button" class="btn btn-primary">Submit</button>
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
                           <h4 class="card-title ">Repair Order
                              <button id="addRepairOrder" data-toggle="modal" data-target="#addNewRepairOrderModal" type=" button" rel="tooltip" title="Add New Repair Order" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                              <i class="material-icons">add_circle</i>
                              </button>
                           </h4>
                           <p class="card-category" style="color:white;"> Here is a list of all the repair orders of the company.</p>
                        </div>
                        
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table" id="dataTable" width="" height="150">
                                 <thead class="text-primary" style="font-size:20px;">
                                    <th>Order ID</th>
                                    <th><span class="fa fa-vcard" role="icon"></span> OrderID</th>
                                    <th><span class="fa fa-file-text" role="icon"></span> Order Deadline</th>
                                    <th><span class="fa fa-newspaper-o" role="icon"></span> Order Status</th>
                                    <th><span class="fa fa-money" role="icon"></span>Payment Status</th>
                                    <th><span class="fa fa-money" role="icon"></span>Total Amount (PHP)</th>
                                    <th> <span class="fa fa-gears" role="icon"></span> Actions</th>
                                 </thead>
                                 <tbody id="repairslist" style="font-size:20px;">
                                    @if(isset($orders))
                                        @foreach($orders as $info)
                                        <tr id="orderNumber{{$info->id}}">
                                            <td id="orderID{{$info->id}}"><a href="/repairOrder/{{$info->id}}">{{$info->id}}</a></td>
                                            <td id="orderDeadline{{$info->id}}">{{date('Y/m/d',strtotime($info->created_at))}}</td>
                                            <td id="orderDeadline{{$info->id}}">{{$info->orderDeadline}}</td>
                                            <td id="orderStatus{{$info->id}}">{{$info->order_status}}</td>
                                            <td id="paymentStatus{{$info->id}}">{{$info->payment_status}}</td>
                                            <td id="totalAmount{{$info->id}}">PHP {{number_format($info->totalAmount,2)}}</td>
                                            <td>
                                                <a href="/repairOrder/{{$info->id}}"><span data-id={{$info->id}} style="color:#4c87ed;" class="fa fa-edit editOrder fa-2x" role="icon"></span></a>
                                                <span data-id={{$info->id}} style="color:#E53935; padding-left:10px;" class="fa fa-trash deleteOrder fa-2x" role="icon"></span>
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
        var count = 0;
        var grossPrice = 0;
        var multiplier = 0;
        $('#grossPrice').text(0);
        $('#multiplier').text(0);
        $('#totalPrice').text(0);
    </script>

    <script type="text/javascript">
        $(document).on('change', '#carMaker', function(e) {
            multiplier = $('#carMaker').find('option:selected').data('percentage');
            $('#multiplier').html($('#carMaker').find('option:selected').data('percentage'));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })
            var formData = {
                carMaker:$('#carMaker').find('option:selected').data('id'),
            }
         
            $.ajax({
                type: "POST",
                data:formData,
                url: '/liveCarModelUpdate',
                success: function (data) {
                    console.log('Repair Order:',data);
                    $('#carModel').find('option').remove();
                    $('#carModel').append(
                        '<option disabled selected>Choose a car model</option>'
                    );
                    for(var i = 0; i<data.cars.length;i++){
                        $('#carModel').append(
                            '<option data-id="'+data.cars[i].id+'">'+data.cars[i].model+'</option>'
                        );
                    }
                    
                },
                error: function (data) {
                    console.log('Data Error:', data);
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).on('click', '#AddServiceButton', function(e) {
            count = count +1;
            $('#serviceList').append(
                '<tr><td>'+count+'</td><td><select class="form-control serviceTypeChange"><option disabled selected>Choose a service type </option> @if(isset($services)) @foreach($services as $info) <option data-id="{{$info->id}}"> {{$info->type}} </option> @endforeach @endif</select></td>'+
                '<td><select id="serviceNameNum'+count+'" class="form-control serviceNameChange"><option disabled selected>N/A</option></select></td><td id="serviceCost'+count+'"></td></tr>'
            );
        });
    </script>

<script type="text/javascript">
    $(document).on('change', '.serviceTypeChange', function(e) {
        $(this).closest('td').next().find('select').find('option').remove();
        $(this).closest('td').next().find('select').append(
            '<option selected disabled>Choose a service name</option>'
        );
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        var formData = {
            serviceType:$(this).find('option:selected').data('id'),
        }
        var toEdit =  $(this).closest('td').next().find('select');

        $.ajax({
            type: "POST",
            data:formData,
            url: '/liveServiceTypeUpdate',
            success: function (data) {
                console.log('Repair Order:',data);
                for(var i = 0; i<data.services.length;i++){
                    $(toEdit).append(
                        '<option data-id="'+data.services[i].id+'">'+data.services[i].name+'</option>'
                    );
                }
                
            },
            error: function (data) {
                console.log('Data Error:', data);
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).on('change', '.serviceNameChange', function(e) {
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        var formData = {
            serviceName:$(this).find('option:selected').data('id'),
        }

        $.ajax({
            type: "POST",
            data:formData,
            url: '/liveServiceNameUpdate',
            success: function (data) {
                console.log('Repair Order:',data);
                $('#serviceCost'+count).text(data.cost);
                grossPrice = grossPrice+data.price;
                $('#grossPrice').text(grossPrice);
                var totalPrice = 0;
                totalPrice = totalPrice+((grossPrice*multiplier)+grossPrice);
                $('#totalPrice').text('PHP '+totalPrice);
                $('#totalPriceValue').val(totalPrice);
            },
            error: function (data) {
                console.log('Data Error:', data);
            }
        });
    });
</script>
<script type="text/javascript"> 
     $(document).on('click', '#submitAddRepairService', function(e) {
        var verify = confirm('Do you want to add the order');
        if(verify==true){
            $('#addNewRepairOrderModal').modal('hide');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })

            var services = [];
            for(var i = 1; i<=count;i++){
                services.push($('#serviceNameNum'+i).find('option:selected').data('id'));
            }

            var formData = {
                clientName:$('#clientName').find('option:selected').data('id'),
                carMaker:$('#carMaker').find('option:selected').data('id'),
                carModel:$('#carModel').find('option:selected').data('id'),
                expectedDeadline:$('#expectedDeadline').val(),
                totalPrice:$('#totalPriceValue').val(),
                services:services,
            }

            $.ajax({
                type: "POST",
                data:formData,
                url: '/liveAddRepairOrder',
                success: function (data) {
                    console.log('Repair Order:',data);
                    toastr.success('Successfully added a new order!');
                    location.reload();
                },
                error: function (data) {
                    console.log('Data Error:', data);
                }
            });
        }
        return false;
     });
</script>
    <!--end custom script section-->

   </body>
</html>
