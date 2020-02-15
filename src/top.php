<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php $img_path="../img/" ?>
<head>
  <meta charset="utf-8">
  <title> 双馬の御朱印日記【トップ】 </title>
  <link rel="stylesheet" href="../css/all.css" type="text/css">
  <link rel="shortcut icon" href="<?php echo $img_path ?>icon.ico">

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> -->

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript">
  $(function(){
    var setImg = '#photo';
    var fadeSpeed = 1600;
    var switchDelay = 3500;

    $(setImg).children('img').css({opacity:'0'});
    $(setImg + ' img:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);

    setInterval(function(){
      $(setImg + ' :first-child').animate({opacity:'0'},fadeSpeed).next('img').animate({opacity:'1'},fadeSpeed).end().appendTo(setImg);
    },switchDelay);
  });

  </script>
</head>
<body background="<?php echo $img_path ?>background.jpg">
<?php
  // 共通部分のヘッダーのhtmlファイルを読み込む
  $fp=fopen("header.html","r");
  while(!feof($fp)){echo fgets($fp);}
?>
  <div class="hide">
    <img src="<?php echo $img_path ?>background.jpg" alt="">
  </div>
  <!-- <div class="slide">
    <ul class="bxslider"> -->
  <div class="hero">
    <div id="photo">
<?php
    $moving_image=["00toga","00kashima","00matsudaira","0toyokawa","00tsurugaya"];
    foreach ($moving_image as $a) {
?>
      <!-- <li> -->
      <img src="<?php echo $img_path ?><?php echo $a ?>.jpg" alt="">
      <!-- </li> -->
<?php
    }
?>
    </div>
  </div>
    <!-- </ul>
  </div> -->
  <div class="content">
<?php
  require('top_data.php');  //それぞれの表のデータ(JSON)は、別ファイルに記述
  foreach($all_group as $name => $arr){
    $size=sizeof($arr);
    $got_num=0;  //収集数を求める(画像ファイル名が000じゃないもの和)
    if(!empty($arr)){ foreach($arr as $a){ if(preg_match('/\d\d\d\w+/',$a[0]))  { $got_num+=1; }}}
?>
    <h2> <?php echo $name ?> <div class="title_right">収集率 <?php echo $got_num ?>/<?php echo $size ?></div> </h2>
    <p>  </p>
<?php
    if(!empty($arr)){
?>
      <table class="matome" border="5px" cellpadding="10">
<?php
      #区切る要素数を決める（優先度順）
      if($size%5==0){
        $num=5;
      }elseif($size%4==0){
        $num=4;
      }elseif($size==3 or $size==6){
        $num=3;
      }elseif($size==2){
        $num=2;
      }elseif($size%5==4){
        $num=5;
      }elseif($size%4==3){
        $num=4;
      }else{
        $num=5;
      }
      $div=array_chunk($arr,$num);
      foreach($div as $a){
?>
        <tr>
<?php
        foreach($a as $b){  //御朱印の画像
?>
          <td class="text">
            <a href="<?php echo $merge_image_file=$img_path.(preg_match('/\d\d\d\w+/',$b[0]) ? $b[0] : "000").".jpg"; ?>" target="_blank">
              <image class="img" src="<?php echo $merge_image_file ?>"/>
            </a>
          </td>
<?php
        }
?>
        </tr>
        <tr>
<?php
        foreach($a as $b){  //寺社の名前
?>
          <td class="text"><?php echo $b[1] ?></td>
<?php
        }
?>
        </tr>
<?php
      }
?>
      </table><br>
<?php
    }
  }
?>
  </div>
<?php
  $fp=fopen("footer.html","r");
  while(!feof($fp)){echo fgets($fp);}
?>
</body>
</html>

<!--
●ローカルでの実行コマンド
php -S 127.0.0.1:8080
●ローカルでのURL
http://localhost:8080/src/top.php
●リモートでのURL
http://cgi.u.tsukuba.ac.jp/~s1711520/goshuin/src/top.php
-->
