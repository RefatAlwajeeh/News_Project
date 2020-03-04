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

//if($_GET['action']='del')
//{
//$postid=intval($_GET['pid']);
//$query=mysqli_query($con,"update tblposts set Is_Active=0 where id='$postid'");
//if($query)
//{
//$msg="Post deleted ";
//}
//else{
//$error="Something went wrong . Please try again.";
//}
//}
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
        <title>Newsportal | Manage Breaking News</title>

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
        <script src="../assets/js/modernizr.min.js"></script>

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
                                    <h4 class="page-title">Manage Breaking News </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Posts</a>
                                        </li>
                                        <li class="active">
                                            Manage BN
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
                                    <th>Content</th>
                                    <th>Start Time</th>
                                    <th>Date</th>
                                    <th>Updated By</th>
                                    <th>status</th>


                                </tr>
                                </thead>
                                <tbody>
                                <td>
                                    <?php
                                    $n=Date( 'Y-m-d',strtotime("now"));

                                    foreach ($controller->getBN($n) as $r){
                                        echo "<tr>";


                                        echo "<td>".$r->id."</td>";
                                        echo "<td>".$r->content."</td>";
                                        echo "<td>".$r->s_time."</td>";
                                        echo "<td>".$r->s_date."</td>";
                                        echo "<td>".$r->updated_by."</td>";
                                        echo "<td>".$r->status."</td>";


                                        $BN_id=$r->id;


                                        echo     "<td>". "<form action='edit-BN.php' method='post'>".

                                            "  <input type='hidden' name='BN_id' value='$BN_id'>".
                                            "<input class='btn btn-primary' value='Update' name='update_BN' type='submit'>".
                                            "</form>"."</td>";
//                echo "</tr>";

                                        echo     "<td>". "<form action='delete_BN.php' method='post'>".

                                            "  <input type='hidden' name='BN_id' value='$BN_id'>".

                                            "<input class='btn btn-primary' value='Delete' name='delete_BN' type='submit'>".
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