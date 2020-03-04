<?php
session_start();

//if(!($_SESSION['type']=="user" || $_SESSION['type']=="Admin")){
//  header("Location:login.php");
//}

require_once ("../../mvc/Admin/post/PostController.php");

$controller = new PostController();

?>

<html lang="en">
<head>
<title></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mystyle.css">

    <style>
        .yesno{
            margin: 0 auto;
            padding: 10px;
        }

        .yesno a  {
            border: 2px solid;
            background:
                    #3ffcb5;
            padding: 12px;
            margin: 0 auto;
            font-size: 21px;
        }

    </style>
</head>

<body>
  <div class="container">
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="RegisterUser.php">Registe</a>
        <a class="navbar-brand" href="home.php">Show Articles</a>
          <a class="navbar-brand" href="create_article.php">Upload Articles</a>
    </div>

  </div>
</nav>

      <?php

      if(isset($_POST['active_art'])) {
          $a_id =$_POST['a_id'];


          $data = [
              $a_id
          ];

          $controller->ActiveArt($data);
          header('Location: manage-posts.php');

//          echo "Do You Want To Delete :".$a_id;
//          ?>
<!--          <div class="yesno">-->
<!--              <a href="delete_art.php?id=--><?//=$a_id?><!--&confirm=yes">Yes</a>-->
<!--              <a href="delete_art.php?id=--><?//=$a_id?><!--&confirm=no">No</a>-->
<!--          </div>-->
<!---->
<!--          --><?php



      }

//      if (isset($_GET['confirm'])) {
//          if ($_GET['confirm'] == 'yes') {
//
//              $data = [
//                  $_GET['id']
//              ];
//
//              $delete->DeleteArt($data);
//
//              echo "Delete";
//          } else {
//              // User clicked the "No" button, redirect them back to the read page
//              echo "no delete";
//              header('Location: manage-posts.php');
//              exit;
//          }
//      }



      ?>



  </div>
</body>
</html>

