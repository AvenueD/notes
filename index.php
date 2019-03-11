<?php
session_start();
ob_start();

// mengatur batas login
$timeout = $_SESSION['timeout'];
if(time()<$timeout) {
    $_SESSION['timeout'] = time()+5000;
}else{
    $_SESSION['login'] = 0;
}

// mengecek status login
if(empty($_SESSION['username']) or empty($_SESSION['password']) or $_SESSION['login']==0) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Notes | Write your thought!</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Username</strong>
                             </span> <span class="text-muted text-xs block"><b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#">Menu 1</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        Notes
                    </div>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-book"></i> <span class="nav-label">Notes</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-archive"></i> <span class="nav-label">Archive</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-trash-o"></i> <span class="nav-label">Trash</span></a>
                </li>
				<li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-gears"></i> <span class="nav-label">Settings</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search your existing note..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
		
		<div class="text-center">
			<a data-toggle="modal" class="btn btn-info btn-lg" href="#modal-form"><span class="glyphicon glyphicon-plus"></span>Add notes</a>
        </div>
		
		<div id="modal-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
											<h3 class="m-t-none m-b">Create new note...</h3>

                                                    <form role="form">
                                                        <div class="form-group"><label>Title</label> <input type="text" placeholder="Title here" class="form-control"></div>
                                                        <div class="form-group"><label>Notes</label> <textarea placeholder="Notes here" class="form-control"></textarea></div>
														
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<span class="btn btn-default btn-file"><input type="file" name="#"></span>
															<span class="fileinput-filename"></span>
														</div>
														
                                                        <div>
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                                        </div>
                                                    </form>
                                                
                                        </div>
                                    </div>
                                    </div>
                                </div>
        </div>
		
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row" id="sortable-view">
                <div class="col-md-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Drag&amp;Drop</h5>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                This is simple box container
                            </h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div>
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Drag&amp;Drop</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                This is simple box container
                            </h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.
                            </p>
                        </div>
                    </div>

                </div>
                
				<div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Drag&amp;Drop</h5>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                This is simple box container
                            </h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.
                            </p>
                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Drag&amp;Drop</h5>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                This is simple box container
                            </h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Drag&amp;Drop</h5>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                This is simple box container
                            </h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.
                            </p>
                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Drag&amp;Drop</h5>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                This is simple box container
                            </h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
		
        <div class="footer">
            <div>
                <strong>Copyright</strong> Example Company &copy; 2019
            </div>
        </div>

        </div>
        </div>



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

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity d data  -->
    <script src="js/demo/peity-demo.js"></script>

    <script>
         $(document).ready(function(){
             <!-- Enable portlets -->
            WinMove();
        });
    </script>

</body>

</html>
