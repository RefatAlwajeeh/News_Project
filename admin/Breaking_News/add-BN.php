<?php 
session_start();
include('../includes/config.php');
error_reporting(0);



if(strlen($_SESSION['login'])==0)
  { 
header('location:../index.php');
}
else{

// For adding post  


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
                                    <h4 class="page-title">Add Breaking News </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">BN</a>
                                        </li>
                                        <li>
                                            <a href="#">Add BN </a>
                                        </li>
                                        <li class="active">
                                            Add BN
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


                        <div class="row">
<!--MY CODE-->
                            <?php

                            ?>
                            <link rel="stylesheet" href="css/bootstrap.min.css">
                            <div class="container">
                                <br>

                                <form method="post" action="add_BN_F.php" >
                                    <div class="form-group">
                                        <label>Breaking News :</label><br>
                                        <input type="text" class="form-control"  name="BN_content">
                                    </div>

                                    <div class="form-group">
                                        <label>Duration in Minutes :</label><br>
                                        <input type="text" class="form-control"  name="BN_duration">
                                    </div>


                                    <input type="submit" class="btn btn-primary" style="float: right;" value="add" name="add_time">

                                </form>
                            </div>

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

        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

        <!--Summernote js-->
        <script src="../../plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="../../plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="../../plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="../assets/pages/jquery.blog-add.init.js"></script>


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
<?php } ?>