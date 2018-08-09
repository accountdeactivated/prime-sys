<html>

<head>
    <title>Login | Barleta Precision Manufacturing Inc.</title>

    <link rel="icon" href="../../../public/img/favicon%2032.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>

<!--<body style="background: #c0392b;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #8e44ad, #c0392b);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #8e44ad, #c0392b); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">-->
    
<body background="../../../public/img/gradient-bg.jpg" style="background-attachment: fixed; background-repeat:no-repeat;
   background-size:cover;">

    <div class="container">
        <div class="row">
            <div class="card-panel col s5 z-depth-4" style="margin: 80 300px 50 300px; padding:20px;">
                <center><img src="../../../public/img/Barleta-GIF.gif" width="300px;">
                </center>
                <center>
                    <h5><b>LOGIN</b></h5>
                </center>
                <div class="divider"></div>
                <blockquote>
                    <?php if(isset($_SESSION)) {
                        echo $this->session->flashdata('flash_data');
                    } ?>
                </blockquote>
                <form action="<?= site_url('login') ?>" method="post">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="userName" type="text" class="validate" />
                        <label for="userName">Username</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input name="password" type="password" class="validate" />
                        <label for="password">Password</label>
                    </div>
                    <br>
                    <button class="btn waves-effect waves-light  col s12" type="submit" name="action">Login</button>
                    <br><br><br>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <p class="margin medium-small"><a href="<?= site_url('createAccount') ?>">Register Now!</a></p>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password?</a></p>
                        </div>
                    </div>
                </form>
            </div>
            <br><br>
        </div>
    </div>

    <!--<footer class="page-footer blue darken-4" >
        <center>© Barleta Precision Manufacturing, Inc. Copyright 2018</center>
    </footer>-->

</body>

</html>
