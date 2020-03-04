<?php
session_start();
//include('includes/config.php');
error_reporting(0);

require_once ("../../mvc/Admin/user/UserController.php");

$controller = new UserController();


if(strlen($_SESSION['login'])==0)
  { 
header('location:../index.php');
}
else
{


?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Newsportal | Add User</title>

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

        <!--log in-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="../../css/login_style.css">
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="../../css/login_style.css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('../includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('../includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add User</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>

                                        <li class="active">
                                            Add User
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Add User </b></h4>
                                    <hr />
                        		


<div class="row">
<div class="col-sm-6">  
<!---Success Message--->
  <!--ssrv  -->

<?php

if(isset($_POST['add']) )
{
    function addFile(){

        $path="../images/".time().".".end(explode(".",$_FILES['image_prfile']['name']));


        if(move_uploaded_file($_FILES['image_prfile']['tmp_name'],$path))
            return $path;
        return "";

    }

    $img=addFile();
    if($img==""){
        $img="images/default.jpg";
    }


    try {

        /* $sql="Insert Into Users(User_Name,Gender,User_Password,Email,States,Image_Profile,Type)
       Values('$_POST[name]','$_POST[gender]','$_POST[password]','$_POST[email]','0','$img','user')";
         mysqli_query($con,$sql);*/
        $data=[
            $_POST['name'],
            $_POST['gender'],
            $_POST['password'],
            $_POST['email'],
            $img

        ];
        $controller->insertUser($data);

        echo "success";

    } catch (Exception $e) {
        die($e->getMessage());
    }
}

?>


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

                                        <!-- Sign up form-->

                                        <form class="email-signup" method="post" enctype="multipart/form-data">

                                            <div class="u-form-group">
                                                <input type="text" name="name" placeholder="User Name"/>
                                            </div>

                                            <div class="u-form-group">
                                                <input type="email" name="email" placeholder="Email"/>
                                            </div>
                                            <div class="u-form-group">
                                                <input type="password" name="password" placeholder="Password"/>
                                            </div>
                                            <div class="u-form-group">
                                                <input type="password" placeholder="Confirm Password"/>
                                            </div>

                                            <div class="u-form-group">
<!--                                                <label for="gender" class="col-sm-2 col-sm-offset-2 control-label">Gender:</label>-->

                                                    <select class="u-form-group inputstl " id="gender" name="gender">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>


                                            </div>

<!--                                            <div class="u-form-group">-->
                                                <label for="selphoto" class="u-form-group control-label">Select a Photo of Article :</label>

                                                    <input type="file" class="btn btn-lg btn-block btn-primary" id="img_prof" name="image_prfile" style="margin-left: 376px;" ><br>


<!--                                            </div>-->



                                            <div class="u-form-group">

                                                <button type="submit" name="add" class="btn btn-lg btn-block btn-primary" style="margin-left: 376px; width: 707px;">Sign Up</button>
                                            </div>
                                        </form>

                                        <!-- /Sign up form-->


                        			</div>


                        			




           
                       


                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('../includes/footer.php');?>

            </div>
        </div>

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

    <!--log in-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../../css/login_script2.js"></script>

    <script>
        // $(".email-signup").hide();
        $("#signup-box-link").click(function(){
            $(".email-login").fadeOut(100);
            $(".email-signup").delay(100).fadeIn(100);
            $("#login-box-link").removeClass("active");
            $("#signup-box-link").addClass("active");
        });
    </script>
    </body>
</html>
<?php } ?>