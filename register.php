<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name" style="font-size:100px;">Notes</h1>

            </div>
            <h3>Register to Notes</h3>
            <div class="alert alert-danger" role="alert"> </div>
            <form class="m-t" role="form" action="login.html">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="namalengkap" placeholder="Nama Lengkap" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="passre" placeholder="Re-type Password" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Phone" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
    <!-- Mainly scripts -->
    <script type="text/javascript">
    $(function(){
        $('.alert').hide();
        $('.m-t').submit(function(){
            $('.alert').hide();
            
            if($('input[name=username]').val() == "") {
                $('.alert').fadeIn().html('Kotak input <b>Username</b> masih kosong!');
            }else if($('input[name=email]').val() == "") {
                $('.alert').fadeIn().html('Kotak input <b>Email</b> masih kosong!');
            }else if($('input[name=namalengkap]').val() == "") {
                $('.alert').fadeIn().html('Kotak input <b>Nama Lengkap</b> masih kosong!');
            }else if($('input[name=pass]').val() == ""){
                $('.alert').fadeIn().html('Kotak input <b>Password</b> masih kosong!');
            }else if($('input[name=passre]').val() == ""){
                $('.alert').fadeIn().html('Kotak input <b>Re-type Password</b> masih kosong!')
            }else if($('input[name=passre]').val() != $('input[name=pass]').val()){
                    $('.alert').fadeIn().html('Password tidak sama!');
            }else{
                $.ajax({
                    type: "POST",
                    url: "php/register_cek.php",
                    data: $(this).serialize(),
                    success: function(data) {
                        if(data == "ok") window.location = "index.php";
                        else $('.alert').fadeIn().html(data);
                    },
                    error: function(){
                        $('.alert').fadeIn().html('Register Gagal!');
                    }
                });
            }
            return false;
        });
    });
    </script>
</body>

</html>
