<?php
session_start();
require_once ("mvc/Controller.php");


$controller = new Controller();

if(isset($_POST['s_btn'])){

    $data1 = [
        $_POST['u_email'],
        $_POST['u_email'],
        $_POST['u_pass']
    ];

    foreach ($controller->login_user($data1) as $r){
    echo $r->Type;

    $_SESSION['type']=$r->Type;
    $_SESSION['U_id']=$r->User_Id;
    $_SESSION['U_name']=$r->User_Name;
    }

    if($r->Type=="Admin"){
      header("Location:home.php");
    }
    elseif($r->Type=="user") {
      header("Location:home.php");
    }
    else {
        header("Location:login.php");
    }


}
else {

}

       //sign up fun





if(isset($_POST['add']) )
{
    function addFile(){

        $path="images/".time().".".end(explode(".",$_FILES['image_prfile']['name']));


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


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login, Register form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/login_style.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-box">
    <div class="lb-header">
      <a href="#" class="active" id="login-box-link">Login</a>
      <a href="#" id="signup-box-link">Sign Up</a>
    </div>
    <div class="social-login">
      <a href="#">
        <i class="fa fa-facebook fa-lg"></i>
        Login in with facebook
      </a>
      <a href="#">
        <i class="fa fa-google-plus fa-lg"></i>
        log in with Google
      </a>
    </div>

          <!--log in form-->

    <form class="email-login" method="post">
      <div class="u-form-group">
        <input type="text" name="u_email" placeholder="User Name"/>
      </div>
      <div class="u-form-group">
        <input type="password" name="u_pass" placeholder="Password"/>
      </div>
      <div class="u-form-group">

          <button type="submit" name="s_btn" class="btn btn-primary">Log in</button>
      </div>

      <div class="u-form-group">
        <a href="#" class="forgot-password">Forgot password?</a>
      </div>
    </form>

        <!-- /log in form-->


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
            <label for="gender" class="col-sm-2 col-sm-offset-2 control-label">Gender:</label>
            <div class="col-sm-12">
                <select class="form-control inputstl" id="gender" name="gender">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>

        </div>

        <div class="u-form-group">
            <label for="selphoto" class="col-sm-8 control-label">Select a Photo of Article :</label>
            <div class="col-sm-12">
                <input type="file" class="btn btn-lg btn-block btn-primary" id="img_prof" name="image_prfile" >
            </div>

        </div>



        <div class="u-form-group">

            <button type="submit" name="add" class="btn btn-lg btn-block btn-primary">Sign Up</button>
      </div>
    </form>

           <!-- /Sign up form-->

  </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="css/login_script.js"></script>

</body>
</html>