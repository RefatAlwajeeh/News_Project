<!--<link rel="stylesheet" href="style1.css">-->

<?php

//print date('H:i');
//$var = date('H:i');
//
//echo '<br>';
//$d = '2015-05-19 14:24:00';
//$f = date('g:i a D d M', strtotime($d));
//echo $f;
//
////var d = new Date();
////d.getHours();
//
//echo "<br>".Date('H:i a D d M',strtotime("now"));
//
//echo '<br> HHHH <br>';
//echo strtotime("now"), "<br>";
//echo strtotime("10 September 2000"), "<br>";
//echo strtotime("+1 day"), "<br>";
//echo strtotime("+1 week"), "<br>";
//echo strtotime("+1 week 2 days 4 hours 2 seconds"), "<br>";
//echo strtotime("next Thursday"), "<br>";
//echo strtotime("last Monday"), "<br>";
//
//echo '<br> HHHH <br>';
////$date = new DateTime("now", new DateTimeZone('America/New_York') );
//$date = new DateTime("now", new DateTimeZone('Asia/Kuwait') );
//echo $date->format('Y-m-d H:i:s');


$v = Date('H:i:s',strtotime("now"));

$time1 = DateTime::createFromFormat('H:i:s', $v);

$conn=mysqli_connect("localhost","root","","test");





$n=Date( 'Y-m-d',strtotime("now"));

$get_data=mysqli_query($conn,"select * from tb_Time where s_date='$n'");
while($r=mysqli_fetch_assoc($get_data))
{


    $ttt=$r['s_time'];
    $ddd=$r['s_date'];
    $t1 = DateTime::createFromFormat('H:i:s', $ttt);

    $interval = $t1->diff($time1);
    $hh=$interval->format('%H:%i');

    //    اغير الفارق الى 00:30

    if ($hh <= "00:27" and $ddd == $n){
//        echo "<br>doooooooooooooone";


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
        <?php echo "Breaking News NO:  ".$r['id']; ?>
    </a>
</div>


<?php }  } ?>



<br><br>
