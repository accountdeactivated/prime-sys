<html>
    <head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Welcome to Prime Auto Repair
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
    
    <body background="../assets/img/el-alce-web-379807-unsplash.jpg" style="background-attachment: fixed; background-repeat:no-repeat;
   background-size:cover;">
        <form action="<?= site_url('login') ?>" method="post">
        
            
        <span class="align-middle">
        <div class="row">
            <div class="col-md-12">
                
                <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 ">
                   
                    <br>
                     <div class="card card-profile">
                         <div class="card-avatar">
                  <a href="#pablo">
                   
                  </a>
                </div>
                  <br>
                <div class="card-body">
                <br>
                <h2 class="card-title">Prime Auto</h2>
                    <?php if(isset($_SESSION)) {echo $this->session->flashdata('flash_data');}?>
                    <div class="form-group">
                        <input name="userName" type="text" class="form-control" autocomplete="off" placeholder="Username" required/> <br><br>
                        <input name="password" type="password" class="form-control" placeholder="Passsword" required/> <br><br>
                        <input class="btn btn-primary btn-block" type=submit name="loginButton" value="Enter">
                    </div>
                </div>
                </div>
                        
                </div>
                    </div>
                    
            </div>
            
        </div>
    </span>
        

        
        </form>
    </body>
</html>