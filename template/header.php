<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes | Write your thought!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/notes.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jasny -->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity d data  -->
    <script src="js/demo/peity-demo.js"></script>
    
    <!-- Sweetalert -->
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">
    $.ajax({ 
        type:'GET', 
        url: 'http://localhost/notes/php/getNotes.php', 
        dataType: 'json',
        success: function (data) { 
        for(i=0; i<data.length; i++) {
            $('#titlenotes').append('<span>'+data[i].title+'</span>');
            $('#notes').append('<span>'+data[i].notes+'</span>');
        }
        },
        error: function(data){
            alert("Tidak dapat memproses");
        }
    });
</script>
</head>
<body>