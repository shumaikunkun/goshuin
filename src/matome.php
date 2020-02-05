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
<body background="<?php echo $img_path ?>test.jpg">
  <header class="site-header">
    <h1 class="site-logo">双馬の御朱印日記</h1>
    <nav class="gnav">
      <ul class="gnav__menu">
        <li class="gnav__menu__item"><a href="">トップ</a></li>
        <li class="gnav__menu__item"><a href="">活動</a></li>
        <li class="gnav__menu__item"><a href="member.php">メンバー</a></li>
        <li class="gnav__menu__item"><a href="">更新情報</a></li>
        <li class="gnav__menu__item"><a href="">Twitter</a></li>
      </ul>
    </nav>
  </header>
  <div class="hide">
    <img src="<?php echo $img_path ?>test.jpg" alt="">
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
  require('matome_hash.php');  //それぞれの表のデータ(JSON)は、別ファイルに記述
  foreach($hash as $name => $arr){
    $size=sizeof($arr);
    $got_num=0;  //収集数を求める(画像ファイル名が000じゃないもの和)
    if(!empty($arr)){ foreach($arr as $a){ if($a[0]!="000"){ $got_num+=1; }}}
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
        foreach($a as $b){
?>
          <td class="text"><image class="img" src="<?php echo $img_path ?><?php echo $b[0] ?>.jpg"/></td>
<?php
        }
?>
        </tr>
        <tr>
<?php
        foreach($a as $b){
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
  <footer class="site-footer">
    <p class="copyright">&#169;2019 Shumaikun</p>
  </footer>
</body>
</html>

<!--
●ローカルでの実行コマンド
php -S 127.0.0.1:8080
●ローカルでのURL
http://localhost:8080/src/matome.php
●リモートでのURL
http://cgi.u.tsukuba.ac.jp/~s1711520/goshuin/src/matome.php
-->
