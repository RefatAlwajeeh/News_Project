<?php 
session_start();
include('../includes/config.php');
error_reporting(0);




require_once ("../../mvc/Admin/post/PostController.php");

$post_controller = new PostController();

if(strlen($_SESSION['login'])==0)
  { 
header('location:../index.php');
}
else{

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
        <title>Newsportal | Manage Posts</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="../../plugins/morris/morris.css">

        <!-- jvectormap -->
        <link href="../../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../../plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="../assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('../includes/topheader.php');?>

            <!-- ========== Left Sidebar Start ========== -->
           <?php include('../includes/leftsidebar.php');?>


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
                                    <h4 class="page-title">Manage Posts </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Posts</a>
                                        </li>
                                        <li class="active">
                                            Manage Post  
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->




                        <div class="row">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Create By</th>
                                    <th>Image</th>
                                    <th>State</th>


                                </tr>
                                </thead>
                                <tbody>
                                <td>
                                    <?php

                                    foreach ($post_controller->Get_All_Arts() as $r){
                                        echo "<tr>";
                                        $img_src =$r->image;

                                        echo "<td>".$r->art_id."</td>";
                                        echo "<td>".$r->title."</td>";


//                                        echo "<td>".$r->content."</td>";
                                     echo   "<td> <textarea  cols='80'  rows='3'>".$r->content."</textarea></td>";
                                        echo "<td>".$r->updated_by."</td>";
                                        echo "<td><img src='../../$r->image' alt='' style='width: 86px;height: 69px;'></td>";



                                        $a_id=$r->art_id;





                                        echo     "<td>". "<form action='edit-post.php' method='post'>".

                                            "  <input type='hidden' name='a_id' value='$a_id'>".

                                            "<input class='btn btn-primary' value='Edit' name='update_art' type='submit'>".
//                                            "<button class=\"btn\"><i class=\"fa fa-bars\" name='update_art' type='submit' ></i></button>".

                                            "</form>"."</td>";
//                echo "</tr>";

                                        echo     "<td>". "<form action='delete_art.php' method='post'>".

                                            "  <input type='hidden' name='a_id' value='$a_id'>".

                                            "<input class='btn btn-primary' value='Del' name='delete_art' type='submit'>".

                                            "</form>"."</td>";

                                        echo     "<td>". "<form action='active_art.php' method='post'>".

                                            "  <input type='hidden' name='a_id' value='$a_id'>".

                                            "<input class='btn btn-primary' value='Actvie' name='active_art' type='submit'>".
                                            "</form>"."</td>";
                                        echo "</tr>";


                                    }
                                    ?>

                                    <!--            <input type="submit" class="btn btn-primary" style="float: right;" value="DDDD" name="update_article">-->

                                </tbody>
                            </table>
                        </div>



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

        <!-- CounterUp  -->
        <script src="../../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../../plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="../../plugins/morris/morris.min.js"></script>
		<script src="../../plugins/raphael/raphael-min.js"></script>

        <!-- Load page level scripts-->
        <script src="../../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../../plugins/jvectormap/gdp-data.js"></script>
        <script src="../../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>


        <!-- Dashboard Init js -->
		<script src="../assets/pages/jquery.blog-dashboard.js"></script>

        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>