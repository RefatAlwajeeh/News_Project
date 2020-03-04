<link rel="stylesheet" href="css/style1.css">
<?php


require_once ("mvc/Controller.php");

$show = new Controller();



$v = Date('H:i:s',strtotime("now"));

$time1 = DateTime::createFromFormat('H:i:s', $v);

//$conn=mysqli_connect("localhost","root","","test");





$n=Date( 'Y-m-d',strtotime("now"));

//$get_data=mysqli_query($conn,"select * from tb_Time where s_date='$n'");

//while($r=mysqli_fetch_assoc($get_data))
//{

foreach ($show->getBN($n) as $r){


    $ttt=$r->s_time;
    $ddd=$r->s_date;
    $t1 = DateTime::createFromFormat('H:i:s', $ttt);



    $interval = $t1->diff($time1);
    $hh=$interval->format('%H:%i');
//    echo "<br>".$hh."<br>";



    //    اغير الفارق الى 00:30

    $d="00:27";

    if ($hh <= $d){
//     echo "<br>doooooooooooooone";


    ?>

<div id="breaking-news-container">
    <div id="breaking-news-colour" class="slideup animated">

    </div>
    <span class="breaking-news-title delay-animated slidein">
      // BREAKING NEWS //
    </span>
    <a class="breaking-news-headline delay-animated2 fadein marquee">
<!--        FIFA president says he'll resign amid corruption scandal-->
<!--         هنا نستدعي الخبر العاجل من قاعدة البيانات-->
        <?php echo "    ".$r->content; ?>
    </a>
</div>


<?php }  } ?>



<br><br>
