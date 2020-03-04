<?php 
session_start();
include('../includes/config.php');
error_reporting(0);


require_once ("../../mvc/Admin/breaking_news/BNController.php");

$controller = new BNController();

if(strlen($_SESSION['login'])==0)
  { 
header('location:../index.php');
}
else{
    if(isset($_POST['update_bn'])){

        $bn_id =$_POST['bn_id'];
//        echo $_POST["bn_content"];


        $data = [
            $_POST["bn_content"],
            $_SESSION["U_name"],
            $_POST["bn_id"]


        ];

        $controller->UpdateBN($data);


        echo "Edit Successful";
        header("Location:manage-BN.php");
    }
    else {
        echo "error ........";
    }


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">
        <!-- App title -->
        <title>Newsportal | Add Post</title>

        <!-- Summernote css -->
        <link href="../../plugins/summernote/summernote.css" rel="stylesheet" />

        <!-- Select2 -->
        <link href="../../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="../../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../plugins/switchery/switchery.min.css">
        <script src="../assets/js/modernizr.min.js"></script>

 <script>
function getSubCat(val) {
  $.ajax({
  type: "POST",
  url: "get_subcategory.php",
  data:'catid='+val,
  success: function(data){
    $("#subcategory").html(data);
  }
  });
  }
  </script>
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('../includes/topheader.php');?>
            <!-- ========== Left Sidebar Start ========== -->
             <?php include('../includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Edit Post </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"> Posts </a>
                                        </li>
                                        <li class="active">
                                            Add Post
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>

<?php
$postid=intval($_GET['pid']);
//$query=mysqli_query($con,"select articles.art_id as postid,articles.image,articles.title as title,articles.content,categories.cat_title as category,categories.cat_id as catid from articles left join categories on categories.cat_id=articles.cat where articles.art_id='$postid' and articles.States=1 ");

//while($row=mysqli_fetch_array($query))
    if(isset($_POST['update_BN'])){
$BN_id =$_POST['BN_id'];
//echo $BN_id;
        echo $_SESSION["U_name"];
    foreach ( $controller->getOneBN($BN_id) as $r)
{
?>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">


                                        <form method="post" >
                                            <div class="form-group">
                                                <label>Content :</label><br>
                                                <input type="text" class="form-control" value="<?php echo htmlentities($r->content);?>"  name="bn_content">
                                            </div>



                                            <div class="form-group">
                                                <label>Start Time :</label><br>
<!--                                                <textarea name="content" cols="123"  rows="7">--><?php //echo htmlentities($r->content);?><!--</textarea>-->
                                            </div>

                                            <input type="hidden" value="<?php echo $BN_id;?>" name="bn_id">
                                            <input type="submit" class="btn btn-primary" style="float: right;" value="update" name="update_bn">

                                        </form>



<?php } ?>

<!--<button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update </button>-->

                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

           <?php include('../includes/footer.php');?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/detect.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/jquery.blockUI.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>
        <script src="../../plugins/switchery/switchery.min.js"></script>


        <!--Summernote js-->
        <script src="../../plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="../../plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="../../plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="../assets/pages/jquery.blog-add.init.js"></script>


        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

        <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
  <script src="../../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../../plugins/summernote/summernote.min.js"></script>



    </body>
</html>
<?php }  } ?>