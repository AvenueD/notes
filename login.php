<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name" style="font-size:100px;">Notes</h1>

            </div>
			<br/>
            <h3>Welcome to Notes</h3>
            <div class="alert alert-danger" role="alert"> </div>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="forgot_password.php"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.php">Create an account</a>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(function(){
        $('.alert').hide();
        $('.m-t').submit(function(){
            $('.alert').hide();
            /**             
            if($('input[name=username]').val() == "") {
                $('.alert').fadeIn().html('Kotak input <b>Username</b> masih kosong!');
            }else if($('input[name=password]').val() == ""){
                $('.alert').fadeIn().html('Kotak input <b>Password</b> masih kosong!');
            }else{
            */
                $.ajax({
                    type: "POST",
                    url: "php/login_cek.php",
                    data: $(this).serialize(),
                    success: function(data) {
                        if(data == "ok") window.location = "index.php?page=main-page";
                        else $('.alert').fadeIn().html(data);
                    }
                });
            //}
            return false;
        });
    });
    </script>

</body>

</html>
