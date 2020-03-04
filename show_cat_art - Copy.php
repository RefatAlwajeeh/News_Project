<?php
session_start();

if(!($_SESSION['type']=="user" || $_SESSION['type']=="Admin")){
  header("Location:login.php");
}

require_once ("mvc/Controller.php");

$show = new Controller();

?>

<html lang="en">
<head>
  <title>Android Articles</title>

</head>
<body>
<div class="container">



  <!-- Page Header -->
    <?php
    include('header.php');
    ?>
    <!-- /Page Header -->




  <div class="row" id="big_row">
    <div class="col-md-12">
      <div class="section-title">
        <h2>Android Posts</h2>
      </div>
    </div>
<?php

$cc_id = $_GET['cc_id'];
foreach ($show->getArtsCat($cc_id) as $r){

    $img_src =$r->image;

    $cat_name = $r->cat_title;
    $A_id=$r->art_id;


        echo "<div class='col-md-4'>";
        echo "<div class='post'>";
          echo  "<a class='post-img' href='blog-post.php?id=$A_id'><img src='$img_src' alt=''></a>";
          echo  "<div class='post-body'>";
          echo    "<div class='post-meta'>";
            echo    "<a class='post-category cat-3' href='".$cat_name.".php'>".$cat_name."</a>";
            echo    "<span class='post-date'>".$r->art_date."</span>";
            echo  "</div>";
            echo  "<h3 class='post-title'><a href='blog-post.php?id=$A_id'>".$r->title."</a></h3>";

          echo  "</div>";
        echo  "</div>";
        echo  "</div>";
      }

 ?>
</div>


</div>
</body>
</html>
