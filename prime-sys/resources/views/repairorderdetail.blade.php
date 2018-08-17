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
		<input id="repairOrderID" type="hidden" value="{{$order->id}}"/>
		<div id="updatePaymentStatusModal" class="modal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" style="color:black;">Update Payment Status</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="color:black;">
						<label for="paymentStatus" style="margin-top:20px; color:black;">Order Status</label>
						<select class="form-control" data-style="btn btn-link" id="paymentStatus">
							<option selected disabled>Choose a payment status</option>
							<option>Processing</option>
							<option>Completed</option>
						</select>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button id="submitPaymentStatus"type="button" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</div>
		<div id="updateServiceDetailStatus" class="modal" tabindex="-1" role="dialog">
		    <input id="serviceDetailID" type="hidden" value=""/>
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" style="color:black;">Update Service Detail Status</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="color:black;">
						<label for="serviceStatus" style="margin-top:20px; color:black;">Service Status</label>
						<select class="form-control" data-style="btn btn-link" id="serviceStatus">
							<option selected disabled>Choose a service status</option>
							<option>Processing</option>
							<option>Completed</option>
						</select>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button id="submitServiceStatus"type="button" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
							<div class="card card-nav-tabs">
								<div class="card-body">
									@if($order->payment_status!="Completed")<button id="updatePaymentStatus" data-toggle="modal" data-target="#updatePaymentStatusModal"class="btn btn-primary">Update Payment Status</button>@endif
									<hr>
									<h4 class="card-title">Payment Status</h4>
									<p class="card-text"> @if($order->payment_status=="Processing")<span style="width:100%; font-size:24px;" class="badge badge-pill badge-primary">@elseif($order->payment_status=="Completed")<span style="width:100%; font-size:24px;" class="badge badge-pill badge-success">@endif {{$order->payment_status}}</span></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"><b>Car Model</b></h4>
									<p class="category">{{$order->fromCar->model}}</p>
									The place order is about to be delivered on or before <b>{{$order->orderDeadline}}.</b>
								</div>
								<div class="card-body">
									TOTAL PRICE: <b>PHP {{number_format($order->totalAmount,2)}}</b>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title ">Repair Order #RO{{$order->id}}</h4>
									<p class="card-category" style="color:white;"> Here is a list of all the services for this order</p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table" id="dataTable" width="" height="150">
											<thead class="text-primary" style="font-size:20px;">
												<th>Service ID</th>
												<th><span class="fa fa-file-text" role="icon"></span> Service Name</th>
												<th><span class="fa fa-newspaper-o" role="icon"></span> Service Status</th>
												<th> <span class="fa fa-gears" role="icon"></span> Actions</th>
											</thead>
											<tbody id="repairslist" style="font-size:20px;">
												@if(isset($details))
												@foreach($details as $info)
												<tr id="detailNumber{{$info->id}}">
													<td id="serviceID{{$info->id}}">{{$info->id}}</td>
													<td id="serviceName{{$info->id}}">{{$info->fromService->name}}</td>
													<td id="serviceStatus{{$info->id}}">{{$info->status}}</td>
													<td>
														<span data-id={{$info->id}} style="color:#4c87ed;" class="fa fa-edit editDetail fa-2x" role="icon"></span>
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
			$(document).on('click', '#submitPaymentStatus', function(e) {
			    var verify = confirm('Do you want to update the status?');
			    if(verify==true){
			        $('#updatePaymentStatusModal').modal('hide');
			        $.ajaxSetup({
			            headers: {
			                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			            }
			        })
			
			        var formData = {
			            paymentStatus:$('#paymentStatus').find('option:selected').val(),
			            orderID:$('#repairOrderID').val(),
			        }
			
			        $.ajax({
			            type: "POST",
			            data:formData,
			            url: '/liveRepairOrderStatusUpdate',
			            success: function (data) {
			                console.log('Repair Order:',data);
			                toastr.success('Successfully updated the payment status!');
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

        <script type="text/javascript"> 
			$(document).on('click', '.editDetail', function(e) {
                $('#updateServiceDetailStatus').modal('show');
                $('#serviceDetailID').val($(this).data('id'));
            });
        </script>

		<script type="text/javascript"> 
			$(document).on('click', '#submitServiceStatus', function(e) {
			    var verify = confirm('Do you want to update the service status?');
			    if(verify==true){
			        $('#updateServiceDetailStatus').modal('hide');
			        $.ajaxSetup({
			            headers: {
			                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			            }
			        })
                    
			        var formData = {
			            serviceStatus:$('#serviceStatus').find('option:selected').val(),
			            serviceID:$('#serviceDetailID').val(),
			            orderID:$('#repairOrderID').val(),
			        }
			
			        $.ajax({
			            type: "POST",
			            data:formData,
			            url: '/liveRepairOrderDetailStatusUpdate',
			            success: function (data) {
			                console.log('Repair Order:',data);
			                toastr.success('Successfully updated the detail status!');
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