<?php 
include_once("../php/config.php");
include 'template/header.php'; 
?>
<div class="text-center" style="margin-top:10px;">
			<a data-toggle="modal" class="btn btn-info btn-lg" href="#modal-form"><span class="glyphicon glyphicon-plus"></span>Add notes</a>
</div>
<div id="modal-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                <h3 class="m-t-none m-b">Create new note...</h3>
                    <form class="m-t" role="form" action="index.php">
                        <div class="form-group"><label>Title</label> <input type="text" name="title" placeholder="Title here" class="form-control"></div>
                        <div class="form-group"><label>Notes</label> <textarea placeholder="Notes here" name="notes" class="form-control" rows="5"></textarea></div>
                        <!--<div class="fileinput fileinput-new" data-provides="fileinput">
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span><input type="file" name="..."/></span>
                            <span class="fileinput-filename"></span>
                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                        </div>--> 
                        <hr>
                        <div>
                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs sweetalert" type="submit"><strong>Save</strong></button>
                            <button class="btn btn-sm btn-primary m-t-n-xs" type="button" data-dismiss="modal"><strong>Close</strong></button>
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
                <h5><span id="titlenotes"></span></h5>
                <div class="ibox-tools">
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a data-toggle="modal" href="#modal-form">Edit</a></li>
                        <li><a href="#">Archive</a></li>
                    </ul>
                    <a class="close-link"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="ibox-content">
                <p>
                   <span id="notes"></span>
                </p>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'template/footer.php'; ?>
<script type="text/javascript">
    $(function(){
       // $('.alert').hide();
        $('.m-t').submit(function(){
            $('.alert').hide();   
            if($('input[name=title]').val() == "") {
                //$('.alert').fadeIn().html('Kotak input <b>Title</b> masih kosong!');
                $('.sweetalert').click(function(){
                    swal({
                        title: "Title Gak Boleh Kosong!",
                        text: "Shut Up, take my money!",
                        type: "error"
                    });
                });
            }else if($('input[name=notes]').val() == ""){
                $('.sweetalert').click(function(){
                    swal({
                        title: "Notes Gak Boleh Kosong!",
                        text: "Shut Up, take my money!",
                        type: "error"
                    });
                });
            }else{
                $.ajax({
                    type: "POST",
                    url: "php/createnote.php",
                    data: $(this).serialize(),
                    success: function(data) {
                        if(data == "ok") window.location = "index.php?page=main-page";
                        else $('.alert').fadeIn().html(data);
                    }
                });
            }
            return false;
        });
    });
</script>