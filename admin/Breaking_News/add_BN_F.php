<link rel="stylesheet" href="./style.css">

<?php
session_start();

if(!($_SESSION['type']=="user" || $_SESSION['type']=="Admin")){
    header("Location:../login.php");
}

require_once ("../../mvc/Admin/breaking_news/BNController.php");

$controller = new BNController();


$U_id = $_SESSION['U_id'];

$A_name=$_SESSION['A_name'];

if(isset($_POST['add_time'])){

    $u = date('H:i:s');
    echo $u;



    $data = [
        $u,
        $_POST['BN_content'],
        $A_name,
        $U_id,
        $_POST['BN_duration']
    ];



    $controller->insertBN($data);



    echo "Added Successful";
    header("Location:add-BN.php");
}
else {
    echo "error ........";
}

 ?>



<form method="post">

<input type="submit" class="btn btn-primary" style="float: right;" value="add" name="add_time">

</form>

