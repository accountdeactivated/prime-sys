<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    Prime Auto Restoration
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href={{asset('css/material-dashboard.css')}} rel="stylesheet" />


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

    <!-- Calendar Dependencies --><!-- Calendar Dependencies --><!-- Calendar Dependencies -->
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>


  <link href="{{asset('dist/equinox.css')}}" rel="stylesheet" type="text/css">
  <script src="{{asset('dist/equinox.min.js')}}"></script>

    <meta name="_token" content="{!! csrf_token() !!}">
  <!-- Calendar Dependencies --><!-- Calendar Dependencies --><!-- Calendar Dependencies -->
</head>

<div id="displayPOModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="color:black; font-family:Helvetica,Arial,sans-serif;" id="dispPOitem">Event Details</h4>
            </div>
            <div class="modal-body">

                <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;">Posting Date:</label>
                <input type="text" id="displayPostdate"  style="padding-left: 10px" class="form-control" value="" readonly/>

                <div class="row" style="background-color:#F5F5F5; padding:3px;margin-top:10px;">
                    <h4  style="font-size:14px; color:black; font-family:Helvetica,Arial,sans-serif;"><b>Supplier Material Order/s</b></h4>
                    <div class="table-responsive" style="margin-top:10px;">
                        <table id="materialOrderTable"class="table color-bordered-table info-bordered-table" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); font-family:Helvetica,Arial,sans-serif;">
                            <thead>
                            <tr style="font-size:12px; font-weight:700; ">
                                <th>Material Name</th>
                                <th>Price per piece</th>
                                <th>Order Qty </th>
                            </tr>
                            </thead>
                            <tbody class="dispOrderMaterialList">
                            <tr>
                                <td><input type="text" value="" readonly required></td>
                                <td><input type="text" value="" readonly required></td>
                                <td><input type="text" value="" readonly required></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <label for="client" class="control-label" style=" color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b style="display: inline;">Total Quantity: </b><p id="dispTotalQty" style="display: inline;"></p></label>
                <br>
                <label for="client" class="control-label" style="color:black; margin-top:10px; font-family:Helvetica,Arial,sans-serif;"><b style="display: inline;">Total Amount: P</b><p id="dispTotalPayment" style="display: inline;"></p></label>
            </div>
        </div>
    </div>
</div>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          PRIME CORPORATION
        </a>
      </div>
      <div class="sidebar-wrapper">
        @include('layouts.sidebar')
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">


          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <button id="showclick" data-toggle="modal" data-target="#displayPOModal"  style="display: none" type=" button" >
            <i class="material-icons">add_circle</i>
        </button>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title ">
                        Schedules of Services
                    </h4>
                    <p class="card-category">Calendar of Services Due</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="event-calendar"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<script>
    function redirect() {
        window.location = "http://localhost:8000/home";
    }
    function ajax_supplierorder(val){
        console.log("ajax="+val);
        var po = val;

       // e.preventDefault();

        var formData = {
            po_number:po
        };
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: 'getPOdetails',
            data: formData,
            success: function(data){
                console.log('PO Data:',data);
                orderdetails = data.supplierorder.orderdetails;
                supplierord = data.supplierorder;

                $('#dispPOitem').html("PO_"+po+" "+data.supname);
                $('#dispTotalQty').html(supplierord.total_qty);
                $('#dispTotalPayment').html(supplierord.total_price);
                $('#displayPostdate').val(supplierord.posted_date);
                console.log("bobo: "+orderdetails.length);
                $('.dispOrderMaterialList').empty();


                Object.keys( orderdetails ).forEach(function( key ) {
                    $('.dispOrderMaterialList').append(
                        '<tr>' +
                        '<td>'+'<input type="text" class="form-control" value="'+orderdetails[key].materialName+'" readonly required>'+'</td>' +
                        '<td>'+'<input type="text" class="form-control" value="'+orderdetails[key].price_each+'" readonly required>'+'</td>' +
                        '<td>'+'<input type="text" class="form-control" value="'+orderdetails[key].qty+'" readonly required>'+'</td>'+
                        '</tr>'
                    );
                });
            },
            error: function (data) {
                console.log('Data Error:', data);
            }
        });
    }
    function ajax_clientorder(val) {

    }
    function henlo(val,type){
        //0 is supplier order, 1 is client orders
        if(type === 0){
            console.log("inside type 1");
            ajax_supplierorder(val);
            $('#showclick').click();
        }
        else{
            ajax_clientorder();
            $('#showclick').click();
        }

    }
    $('.event-calendar').equinox({
        onEventClick: function(){
        },
        events: [
            @foreach($SOschedules as $schedule)
            {
                start: '{{$schedule->posted_date}}',
                end: '{{$schedule->posted_date}}',
                title: '[PO_{{$schedule->id}}] Supplier Purchase from {{$schedule->supname}}',
                url: 'javascript:henlo({{$schedule->id}},0)',
                class: '',
                color: '#{{$schedule->color}}',
                data: {bobo:'bobo'}
            },
            @endforeach

            @foreach($ROschedules as $schedule)
            {
                /* To add after jet is done.
                start: '{{$schedule->posted_date}}',
                end: '{{$schedule->posted_date}}',
                title: '[PO_{{$schedule->id}}] Supplier Purchase from {{$schedule->supname}}',
                url: 'javascript:henlo({{$schedule->id}},0)',
                class: '',
                color: '#{{$schedule->color}}',
                data: {bobo:'bobo'}
                */
            },
            @endforeach
        ]
    });
</script>

</script>