<?php
session_start();
ob_start();
include_once("php/config.php");
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
//cek apakah ada URL yg diklik
$page = isset($_GET['page']) ? $_GET['page'] : false;
?>
<?php include 'template/header.php'; ?>
<div id="wrapper"> 
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> 
                        <span><img alt="image" class="img-circle" src="img/profile_small.jpg" /></span>
                        <span class="block m-t-xs" style="color:white;"><strong class="font-bold"><?php echo $_SESSION['namalengkap']; ?></strong></span>
                    </div>
                    <div class="logo-element">
                        Notes
                    </div>
                </li>
                <li>
                    <a <?php if($page == "main-page"){ echo "class='active'"; } ?> href="<?php echo $url_website."/index.php?page=main-page"; ?>"><i class="fa fa-book"></i> <span class="nav-label">Notes</span></a>
                </li>
                <hr>
                <li>
                    <a <?php if($page == "archive"){ echo "class='active'"; } ?> href="<?php echo $url_website."/index.php?page=archive"; ?>"><i class="fa fa-archive"></i> <span class="nav-label">Archive</span></a>
                </li>
                <li>
                    <a <?php if($page == "trash"){ echo "class='active'"; } ?> href="<?php echo $url_website."/index.php?page=trash"; ?>"><i class="fa fa-trash-o"></i> <span class="nav-label">Trash</span></a>
                </li>
                <hr>
                <li>
                    <a <?php if($page == "settings"){ echo "class='active'"; } ?> href="<?php echo $url_website."/index.php?page=settings"; ?>"><i class="fa fa-gears"></i> <span class="nav-label">Settings</span></a>
                </li>
                <li>
                    <a href="logout.php"><i class="fa fa-sign-out"></i><span class="nav-label">Log out</span></a>
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
        </nav>
        </div>
        <div id="content">
            <?php 
                $filename = "pages/$page.php";
					
                if(file_exists($filename)){
                    include_once($filename);
                }else{
                    echo "<h3>Page does not exist.</h3>";
                }
            ?>
		</diV>
        <div class="footer">
            <div>
                <strong>Copyright</strong> Example Company &copy; 2019
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php'; ?>