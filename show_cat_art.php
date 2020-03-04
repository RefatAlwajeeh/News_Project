<?php
session_start();

if(!($_SESSION['type']=="user" || $_SESSION['type']=="Admin")){
    header("Location:login.php");
}

require_once ("mvc/Controller.php");

$controller = new Controller();

?>



<html lang="en">
<head>
    <title>Show Articles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <style>

    </style>

</head>
<body>
<div class="container">


    <!-- Page Header -->
    <?php
    include('header.php');

    ?>
    <!-- /Page Header -->

    <div class="row" id="big_row">
        <div class="col-md-8">
            <div class="section-title">
                <h2>Recent Posts</h2>
            </div>
            <!--    </div>-->



        </div>

        <div class="row">
            <!--        <div class="col-3">col-3</div>-->
            <div class="col-8">
                <?php
                $cc_id = $_GET['cc_id'];
                foreach ($controller->getArtsCat($cc_id) as $r){

                $img_src =$r->image;

                $cat_name = $r->cat_title;
                $A_id=$r->art_id;

                ?>

                <div class='col-md-6'">
                <div class='post' style="border: 1px solid #538752;">
                    <a class='post-img' href='blog-post.php?id=<?php echo $A_id ?>'><img src=<?php echo $img_src ?> alt=''></a>
                    <div class='post-body'>
                        <h3 class='post-title' style="margin: 6px; word-break: break-all;"><a href='blog-post.php?id=<?php echo $A_id ?>'><?php echo $r->title ?></a></h3>

                        <div class='post-meta'>
                            <a class='post-category cat-3' href='show_cat_art.php?cc_id=<?php echo $r->cat ?>'><?php echo $cat_name ?></a>

                        </div>
                        <span class='post-date'><?php echo ".$r->art_date."?></span>

                    </div>
                </div>
            </div>

            <?php
            }

            ?>

        </div>


        <div class="col-4" style="max-width: 32%;background-color: #538752;">

            <!-- Search Widget -->
            <div class="card mb-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <form name="search" action="search.php" method="post">
                        <div class="input-group">

                            <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
                            <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Go!</button>
                </span>
                    </form>
                </div>
            </div>

            <h5 class="card-header">Categories</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">

                        <?php

                        foreach ($controller->getCat('1') as $r){ ?>
                            <!--            echo $r->cat_title;-->
                            <a class='navbar-brand' href='show_cat_art.php?cc_id=<?php echo $r->cat_id ?>'><?php echo $r->cat_title ?></a>
                        <?php  }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
</body>
</html>
