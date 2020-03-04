<?php
session_start();

if(!($_SESSION['type']=="user" || $_SESSION['type']=="Admin")){
  header("Location:login.php");
}

echo $_SESSION['type'];
$U_id = $_SESSION['U_id'];
echo $U_id;
$A_name=$_SESSION['U_name'];
echo $U_name;

require_once ("mvc/post/PostController.php");

$controller = new PostController();
?>

<html lang="en">
<head>
<title></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container">
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="RegisterUser.php">Registe</a>
        <a class="navbar-brand" href="show_article.php">Show Articles</a>
          <a class="navbar-brand" href="create_article.php">Upload Articles</a>
    </div>

  </div>
</nav>

</div>
</body>
</html>
<?php

//$conn=mysqli_connect("localhost","root","","abc");

function addFile(){

    $path="images/".time().".".end(explode(".",$_FILES['img']['name']));


    if(move_uploaded_file($_FILES['img']['tmp_name'],$path))
        return $path;
    return "";

}



if(isset($_POST['add_article'])){
    $img=addFile();
    if($img==""){
        $img="images/default.jpg";
    }

    $data = [
        $_POST["title"],
        $img,
       $_POST["content"],
         $_POST["cat"],
       $A_name,
         $U_id
    ];

    $controller->insertTo($data);

//    mysqli_query($conn,"insert into articles values(null,'$_POST[title]','$img','$_POST[content]','$_POST[cat]',now(),'$U_name','0','$U_id')");

    echo "Added Successful";
    header("Location:admin/Post/add-post.php");
}
else {
    echo "error ........";
}
//mysqli_query($conn,"insert into articles values()");
