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
  <link href={{asset('css/material-dashboard.css?v=2.1.0')}} rel="stylesheet" />
  <link href={{asset('demo/demo.css')}} rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    </div>
    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                      <h4 class="card-title ">Services
                        <button type="button" rel="tooltip" title="Add New Service" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                        <i class="material-icons">add_circle</i>
                        </button>
                      </h4>
                      <p class="card-category"> Here is a list of all the services offered</p>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                                <table class="table" id="dataTable" width="" height="150">
                                            
                                            <thead class=" text-primary">
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    Type
                                                </th>
                                                <th>
                                                    Cost
                                                </th>
                                                <th class="text-center">
                                                    Actions
                                                </th>

                                            
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
    <div id="myModalView" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                                 <div class="col-lg-12">
                                      <table class="table">
                                           <tr>
                                                <td><b>First Name</b></td>
                                               <td><b id="modal_servicename"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Last Name</b></td>
                                               <td><b id="modal_servicetype"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>User Name</b></td>
                                               <td><b id="modal_description"></b></td>
                                           </tr>
                                           <tr>
                                                <td><b>Contact Number</b></td>
                                               <td><b id="modal_cost"></b></td>
                                           </tr>
                                   </table>
                              </div>
                          </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                </div>

            </div>
        </div>
    </div>
    <div id="delete" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            Are you sure you want to delete this service? <br>
                            (This would lead to a permanent deletion of this information)
                                      
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Yes, I am sure">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
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
     //$('#dataTable').DataTable();
     window.onload = function(){
        $('.viewItem').click(function() {
            var idservices = $(this).attr('value');
            //console.log("Item Code" + itemData);

            var servicename = $(this).data("servicename");
            $("#modal_servicename").html(servicename);
            
            var servicetype = $(this).data("servicetype");
            $("#modal_servicetype").html(servicetype);

            var description = $(this).data("description");
            $("#modal_description").html(description);
            
            var cost = $(this).data("cost");
            $("#modal_cost").html(cost);

        });
         
     }
     
     function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");
          
        for (i = 0; i < tr.length; i++) 
        {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) 
            {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) 
                {
                    tr[i].style.display = "";
                } 
                else 
                {
                    tr[i].style.display = "none";
                }
            } 
        }
    }
     
    function printFunc() {
        window.print();
    }
</script>