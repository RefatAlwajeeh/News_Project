<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mystyle.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="Breaking_News/style1.css">

<style>
body{
background-color: #53875229;
}

.navbar a:hover{
color: #0056b3;
}

h2{
text-align: center;

color:#7b0eff;
}
.media{
background-color: #bac16e;
margin-bottom: 20px;
}

h3{
color: #ca1f1f;
}

small{
color: #2e81eb;
font-size: 1rem;
}

h4{
color: #ca1f1f;
}

h6{
position: absolute;
float: left;
color: #2e81eb;
}


.section-title h2{
    color: #388f35;
    font-family: Nixmat;

    font-weight: normal;

    font-style: initial;
}




</style>

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Home</a>



        <?php
        require_once ("mvc/Controller.php");

        $controller = new Controller();
//        $show->UpdateCat;
        foreach ($controller->getCat('1') as $r){ ?>
<!--            echo $r->cat_title;-->
           <a class='navbar-brand' href='show_cat_art.php?cc_id=<?php echo $r->cat_id ?>'><?php echo $r->cat_title ?></a>
      <?php  }
        ?>
<!--        <a class="navbar-brand" href="Android.php">Android</a>-->
<!--        <a class="navbar-brand" href="Web.php">Web</a>-->
<!--          <a class="navbar-brand" href="create_article.php">Upload Articles</a>-->
          <a class="navbar-brand" href="log_out.php">Log out</a>
    </div>

  </div>
</nav>


<div id="post-header" class="page-header">
    <div class="background-img" style="background-image: url('./img/post-page.jpg');"></div>


            <div class="col-md-10">
                <div class="post-meta">
<!--                    <a class="post-category cat-2" href="category.html">dasds</a>-->
<!--                    <span class="post-date">March 27, 2018</span>-->
                </div>
<!--                <h1>Ask HN: Does Anybody Still Use JQuery?</h1>-->
            </div>


</div>

<?php

//include('Ads/index22.php');
include('show_BN.php');
?>
