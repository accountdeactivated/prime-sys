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

    <div id="addClientModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:black;">Add New Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {!! Form::open(array('route'=>'clients.store'))!!}
                <div class="modal-body" style="color:black;">
                    <label for="serviceName" style="color:black;">Client Name</label>
                    <input type="text" class="form-control" id="materialN" name="clientname" placeholder="" required>
                    <br>

                    <label for="serviceName" style="color:black;">Email</label>
                    <input type="email" class="form-control" id="curQty" name="clientemail" placeholder="" min="0" required>
                    <br>

                    <label for="serviceName" style="color:black;">Contact</label>
                    <input type="text" class="form-control" id="price" name="clientcontact" placeholder="" min="0" required>
                    <br>

                    <label for="serviceName" style="color:black;">Address</label>
                    <input type="text" class="form-control" id="price" name="clientaddress" placeholder="" min="0" required>
                    <br>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" id="submitSupplierEntry" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>

    <div id="editClientModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:black;">Add New Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {!! Form::open(['route'=>['upd'],'method'=>'POST'])!!}
                <div class="modal-body" style="color:black;">
                    <label for="serviceName" style="color:black;">Client Name</label>
                    <input type="text" class="form-control" id="editname" name="name" placeholder="" required>
                    <br>

                    <label for="serviceName" style="color:black;">Email</label>
                    <input type="email" class="form-control" id="editemail" name="email" placeholder="" min="0" required>
                    <br>

                    <label for="serviceName" style="color:black;">Contact</label>
                    <input type="text" class="form-control" id="editcontact" name="contact" placeholder="" min="0" required>
                    <br>
                    <input type="hidden" value="" id="cid" name="id">
                    <label for="serviceName" style="color:black;">Address</label>
                    <input type="text" class="form-control" id="editaddress" name="address" placeholder="" min="0" required>
                    <br>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" id="submitSupplierEntry" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                </div>
                {!!Form::close()!!}
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
                                <h4 class="card-title ">Client List
                                    <button id="addNewServiceButton" data-toggle="modal" data-target="#addClientModal" type=" button" rel="tooltip" title="Add New Client" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                        <i class="material-icons">add_circle</i>
                                    </button>
                                </h4>
                                <p class="card-category" style="color:white;"> Here is a list of all the clients</p>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="dataTable" width="" height="150">
                                        <thead class="text-primary" style="font-size:20px;">

                                        <th><span class="fa fa-vcard" role="icon"></span> Client ID</th>
                                        <th> Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                        </thead>
                                        <tbody id="suppliers" style="font-size:20px;">
                                        @foreach($clients as $client)
                                            <tr>
                                                <td>{{$client->id}}</td>
                                                <td>{{$client->name}}</td>
                                                <td>{{$client->email}}</td>
                                                <td>{{$client->contact}}</td>
                                                <td>{{$client->address}}</td>

                                                <td>

                                                    {!! Form::open(['route'=>['clients.destroy',$client->id],'method'=>'DELETE','enctype'=>'multipart/form-data','class'=>'removeclient','style'=>'display:inline;margin-left:5px']) !!}
                                                    <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Delete Client">

                                                        <i class="material-icons" style="display:inline;margin-left:5px" >delete</i>
                                                        <div class="ripple-container"></div></button>
                                                    {!! Form::close() !!}

                                                    <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Client">
                                                        <i class="material-icons update" data-toggle="modal" style="display:inline;margin-left:5px" data-target="#editClientModal"
                                                           cid="{{$client->id}}"
                                                           name="{{$client->name}}"
                                                           email="{{$client->email}}"
                                                           contact="{{$client->contact}}"
                                                           address="{{$client->address}}">edit</i>
                                                        <div class="ripple-container"></div></button>

                                                </td>
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
    $(document).on('click', '.removeclient', function() {
        var verify = confirm("Are you sure you want to client?");
        if(verify==true){
            $(this).submit();
            $(this).closest('tr').remove();
        }
        return false;
    });
    $(document).on('click', '.update', function() {
        $('#editname').val($(this).attr('name'));
        $('#editemail').val($(this).attr('email'));
        $('#editcontact').val($(this).attr('contact'));
        $('#editaddress').val($(this).attr('address'));
        $('#cid').val($(this).attr('cid'));

        return false;
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

        $("#totalPayment").html(sum);
        console.log("total "+sum);
        */

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

    // $(document).on('click', '#submitSupplier', function() {
    //     var supplierN = document.getElementById('serviceN').value;
    //     var supplierA = document.getElementById('serviceA').value;
    //     var supplierCn = document.getElementById('serviceCn').value;
    //     var supplierCp = document.getElementById('serviceCp').value;
    //     if (supplierN != "" && supplierA != "" && supplierCn != "" && supplierCp != ""){
    //         document.getElementById("submitSupplierEntry").click();
    //     }
    //     alert("Please Input The Necessary Details");
    // });
</script>