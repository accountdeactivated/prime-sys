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

        <div id="addNewPOModal" class="modal" tabindex="-2" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color:black; font-family:Helvetica,Arial,sans-serif;">Add Purchase Order/s</h4>
                    </div>
                    <div class="modal-body">

                        {!! Form::open(array('route'=>'supplierOrder.store'))!!}
                            <label for="supplierList" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Supplier:</b></label>
                            <select name="supplier" class="form-control" id="supplierList" style="margin-bottom:10px;">
                                <option selected disabled>Choose a Supplier</option>
                                @if(isset($suppliers))
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Choose one supplier among the list to add an order. <b style="color:#E53935;">*Required</b></span>
                            <br>
                            <div class="row" style="background-color:#F5F5F5; padding:3px;margin-top:10px;">

                                <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Supplier Material Order/s</b></h4>
                                <span class="text-muted" style="font-size:12px; color:black; font-family:Helvetica,Arial,sans-serif;">Note: Select the supplier's material order based on the list. <b style="color:#E53935;">*Required</b></span>
                                <br>
                                <label for="order" class="control-label">
                                    <button id="materialAdd" class="btn btn-primary" style="border-radius: 80px" type="button"><span class="btn-label"><i class="fa fa-plus-square"></i></span> Add Material <div class="ripple-container"></div></button>
                                </label>
                                <div class="table-responsive" style="margin-top:10px;">
                                    <table id="materialOrderTable"class="table color-bordered-table info-bordered-table" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif;">
                                        <thead>
                                        <tr style="font-size:12px; font-weight:700; ">
                                            <th>Material Name</th>
                                            <th>Price per piece</th>
                                            <th>Order Qty </th>
                                            <th><i class="fa fa-gear"></i></th>
                                        </tr>

                                        </thead>
                                        <tbody id="orderMaterialList">
                                        <tr style="color:black;" id="orderListNum1">
                                            <td>
                                                <select style="font-size:12px;" name="materials[]" class="form-control orderName">
                                                    <option selected disabled>Choose a Material </option>
                                                    @foreach ($materials as $material)
                                                        <option value="{{$material->id}}" price="{{$material->price}}">{{$material->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input value="" type="number"  name="prices[]"  min="1" step="0.01" style="font-size:12px;" class="form-control orderInventory addablePrice" placeholder="Price Each" readonly></td>
                                            <td><input value="" type="number" name="qtys[]"  min="1" step="0.01" style="font-size:12px;" class="form-control orderInventory addableQty" placeholder="Quantity Ordered"></td>

                                            <td><i style="font-size:20px; color:#E53935; " class="linea linea-aerrow removeAddOrder" data-icon="&#xe04a;">x</i></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </br>
                        <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Total Payment Amount: </b><p id="totalPayment"></p></label>
                    </div>
                    <div class="modal-footer">
                        <button id="submitOrderList"
                                class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light"
                                style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" onclick="" type="button">Submit</button>

                        <button id="submitOrder"
                                class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light"
                                style="display: none" type="submit">Submit</button>
                    </div>

                    {!! Form::close() !!}
                </div>
                </div>
        </div>
        <div id="displayPOModal" class="modal" tabindex="-2" role="dialog">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title" style="color:black; font-family:Helvetica,Arial,sans-serif;">Purchase Order Details</h4>
                      </div>
                      <div class="modal-body">
                          <label for="supplierList" class="control-label" style="color:black; font-family:Helvetica,Arial,sans-serif;"><b>Supplier:</b></label>
                          <h5  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;">Purchase Order: </h5><b id="dispPOitem">P</b>
                          <br>
                          <div class="row" style="background-color:#F5F5F5; padding:3px;margin-top:10px;">
                              <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Supplier Material Order/s</b></h4>
                              <div class="table-responsive" style="margin-top:10px;">
                                  <table id="materialOrderTable"class="table color-bordered-table info-bordered-table" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif;">
                                      <thead>
                                      <tr style="font-size:12px; font-weight:700; ">
                                          <th>Material Name</th>
                                          <th>Price per piece</th>
                                          <th>Order Qty </th>
                                          <th><i class="fa fa-gear"></i></th>
                                      </tr>
                                      </thead>
                                      <tbody id="dispOrderMaterialList">
                                      <tr>
                                          <td><input type="text" value="" readonly></td>
                                          <td><input type="text" value="" readonly></td>
                                          <td><input type="text" value="" readonly></td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <hr>
                          <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Total Quantity: </b><p id="dispTotalQty"></p></label>
                          <br>
                          <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Total Amount: </b><p id="dispTotalPayment"></p></label>
                      </div>
                  </div>
              </div>
          </div>
         <div class="main-panel">
         <div class="content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header card-header-primary">
                           <h4 class="card-title ">Purchase Orders
                              <button id="addNewServiceButton" data-toggle="modal" data-target="#addNewPOModal" type=" button" rel="tooltip" title="Add New Service" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                              <i class="material-icons">add_circle</i>
                              </button>
                           </h4>
                           <p class="card-category" style="color:white;"> Here is a list of currently ordered supplies from suppliers</p>
                        </div>
                        
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table" id="dataTable" width="" height="150">
                                 <thead class="text-primary" style="font-size:20px;">
                                    <th><span class="fa fa-vcard" role="icon"></span> ORDER ID</th>
                                    <th><span class="fa fa-file-text" role="icon"></span> Supplier</th>
                                    <th><span class="fa fa-file-text" role="icon"></span> Total QTY</th>
                                    <th><span class="fa fa-newspaper-o" role="icon"></span> Created at</th>
                                 </thead>
                                 <tbody id="suppliers" style="font-size:20px;">
                                  @foreach($suppliersorders as $sup)
                                      <tr>
                                          <td><a class="cliq" po="{{$sup->id}}" data-toggle="modal" data-target="#displayPOModal">PO_{{$sup->id}}</a></td>
                                          <td>{{$sup['supplier']['name']}}</td>
                                          <td>{{$sup->total_qty}}</td>
                                          <td>{{$sup->created_at}}</td>
                                      </tr>
                                  @endforeach
                                  </tbody>
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
   </body>
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

</html>
<script>

    var count = 1;
    var count2 = 1;

    $(document).on('click', '#submitSupplier', function() {
        var supplierN = document.getElementById('serviceN').value;
        var supplierA = document.getElementById('serviceA').value;
        var supplierCn = document.getElementById('serviceCn').value;
        var supplierCp = document.getElementById('serviceCp').value;
        if (supplierN != "" && supplierA != "" && supplierCn != "" && supplierCp != ""){
            document.getElementById("submitSupplierEntry").click();
        }
        alert("Please Input The Necessary Details");
    });
    $(document).on('change', '.addablePrice', function (e) {

        var inputsQtys = document.getElementsByClassName('addableQty');
        var inputsPrices = document.getElementsByClassName('addablePrice');
        var sum = 0;

        for(ctr = 0;ctr< inputsQtys.length;ctr++){

                sum+= parseFloat(inputsQtys[ctr].value) * parseFloat(inputsPrices[ctr].value);

        }

        $("#totalPayment").html(sum);
        console.log("total "+sum);

    });
    $(document).on('change', '.orderName', function (e) {

        var inputsQtys = document.getElementsByClassName('addableQty');
        var price = $(this).find('option:selected').attr('price');
        var sum = 0;

        var td = this;
        console.log("xd: "+price);
        $(td).closest('td').next().find('input').val(price);
        console.log($(td).closest('td').next().find('input').attr('price'));

        /*
        for(ctr = 0;ctr< inputsQtys.length;ctr++){

            sum+= parseFloat(inputsQtys[ctr].value) * parseFloat(inputsPrices[ctr].value);

        }

         <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;">Purchase Order<b id="dispPOitem">P</b></h4>
         <br>
         <div class="row" style="background-color:#F5F5F5; padding:3px;margin-top:10px;">
         <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Supplier Material Order/s</b></h4>
         <div class="table-responsive" style="margin-top:10px;">
         <table id="materialOrderTable"class="table color-bordered-table info-bordered-table" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif;">
         <thead>
         <tr style="font-size:12px; font-weight:700; ">
         <th>Material Name</th>
         <th>Price per piece</th>
         <th>Order Qty </th>
         <th><i class="fa fa-gear"></i></th>
         </tr>
         </thead>
         <tbody id="dispOrderMaterialList">
         <tr>
         <td><input type="text" value="" readonly></td>
         <td><input type="text" value="" readonly></td>
         <td><input type="text" value="" readonly></td>
         </tr>
         </tbody>
         </table>
         </div>
         </div>
         </br>
         <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Total Payment Amount: </b><p id="dispTotalQty"></p></label>
         <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b>Total Payment Amount: </b><p id="dispTotalPayment"></p></label>
         </div>

        $("#totalPayment").html(sum);
        console.log("total "+sum);
        */

    });

    $(document).on('click', '.cliq', function(e) {
        var po = $(this).attr('po');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            po_number:po
        };

        $.ajax({
            type: "POST",
            url: 'getPOdetails',
            data: formData,
            success: function(data){
                console.log('PO Data:',data);
                orderdetails = data.orderdetails;
                supplierord = data.supplierorder;

                $('#dispPOitem').html("PO_"+po);
                $('#dispTotalQty').html(supplierord.total_qty);
                $('#dispTotalPayment').html(supplierord.total_price);

                console.log("bobo: "+orderdetails.length);
                $('#dispOrderMaterialList').empty();

                for(i = 0; i<orderdetails.length;i++){
                    $('#dispOrderMaterialList').append(
                        '<tr>' +
                        '<td>'+'<input type="text" class="form-control" value="'+orderdetails[i].materialName+'" readonly>'+'</td>' +
                        '<td>'+'<input type="text" class="form-control" value="'+orderdetails[i].price_each+'" readonly>'+'</td>' +
                        '<td>'+'<input type="text" class="form-control" value="'+orderdetails[i].qty+'" readonly>'+'</td>'+
                        '</tr>'
                    );
                }
            },
            error: function (data) {
                console.log('Data Error:', data);
            }
        });
    });
    $(document).on('click', '#materialAdd', function() {
        count = count +1;
        $('#orderMaterialList').append(
            '@if(isset($materials))<tr id="orderListNum'+count+'" style="color:black;">'+
            '<td> <select style="font-size:12px;" name="materials[]" class="form-control orderName"><option selected> Choose a Material</option>@foreach ($materials as $material)<option value="{{$material->id}}"  price="{{$material->price}}">{{$material->name}}</option> @endforeach</select> </td>' +
            '<td><input value="" type="number" min="1" style="font-size:12px;" name="prices[]" step="0.01" class="form-control orderInventory addablePrice" placeholder="Price Each" readonly></td>' +
            '<td><input value="" type="number" min="1" style="font-size:12px;" name="qtys[]" class="form-control orderInventory addableQty" placeholder="Quantity Ordered"></td> ' +
            '<td><i style="font-size:20px; color:#E53935; " class="linea linea-aerrow removeAddOrder" data-icon="&#xe04a;"></td> ' +
            '</tr>@endif');
    });

    $(document).on('click', '#submitOrderList', function() {
        var supplier = document.getElementById('supplierList').value;
        if (supplier != "Choose a Supplier"){
            document.getElementById("submitOrder").click();
        }
        alert("Please Input The Necessary Details");
    });

    $(document).on('click', '#submitSupplier', function() {
        var supplierN = document.getElementById('serviceN').value;
        var supplierA = document.getElementById('serviceA').value;
        var supplierCn = document.getElementById('serviceCn').value;
        var supplierCp = document.getElementById('serviceCp').value;
        if (supplierN != "" && supplierA != "" && supplierCn != "" && supplierCp != ""){
            document.getElementById("submitSupplierEntry").click();
        }
        alert("Please Input The Necessary Details");
    });
</script>