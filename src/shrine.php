<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
  require('../config/config.php');
?>
<head>
  <meta charset="utf-8">
  <title> <?php echo $title."【全国一宮】" ?> </title>
  <meta name="author" content="shumaikun" />
  <meta name="keywords" content="<?php echo $keyword ?>" />
  <meta name="description" content="<?php echo $description ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@unity_shumai" />
  <meta property="og:image" content="<?php echo $img_path."__tsurugi.jpg" ?>" />
  <meta property="og:title" content="<?php echo $title."【全国一宮】" ?>" />
  <meta property="og:description" content="<?php echo $description ?>" />
  <link rel="shortcut icon" href="<?php echo $img_path."icon.ico" ?>" />
  <link rel="stylesheet" href="<?php echo $css_path."all.css" ?>" type="text/css" />
<?php
  //遷移画像は優先でロードさせる
  $moving_image=["__toyokawa","__oosugi","__futamiokitama","__byoudou","__kaizenkou"];
  foreach ($moving_image as $a) {
?>
    <link rel="preload" href="<?php echo $img_path.$a ?>.jpg" as="image">
<?php
  }
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="<?php echo $js_path ?>pagetop.js"></script>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="<?php echo $js_path ?>top.js" ></script>

</head>
<body background="<?php echo $img_path ?>background.jpg">
<?php
  // 共通部分のヘッダーのhtmlファイルを読み込む
  $fp=fopen("header.html","r");
  while(!feof($fp)){echo fgets($fp);}
?>
  <div class="hide">
    <img src="<?php echo $img_path ?>background.jpg" rel="preload" alt="">
  </div>
  <!-- <div class="slide">
    <ul class="bxslider"> -->
  <div class="hero">
    <div id="photo">
<?php
    foreach ($moving_image as $a) {
?>
      <!-- <li> -->
      <img src="<?php echo $img_path.$a ?>.jpg" alt="">
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
  require('shrine_data.php');  //それぞれの表のデータ(JSON)は、別ファイルに記述
  foreach($all_ichinomiya as $name => $arr){
    $size=sizeof($arr);
    $got_num=0;  //収集数を求める(画像ファイル名が000じゃないもの和)
    if(!empty($arr)){ foreach($arr as $a){ if(preg_match('/\d\d\d\w+/',$a[0])){ $got_num+=1; }}}
?>
    <div class="space-on-h2"></div>
    <h2 >
      <?php echo $name ?>
      <div class="title_right">収集率 <?php echo $got_num."/".$size ?></div>
    </h2>
    <div class="space-on-h2"></div>

<?php
    if(!empty($arr)){
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
        foreach($a as $b){  //御朱印の画像
?>
          <div class="card1">
            <a href="<?php echo $merge_image_file=$img_path.(preg_match('/\d\d\d\w+/',$b[0]) ? $b[0] : "000").".jpg"; ?>" target="_blank">
              <image class="image1" src="<?php echo $merge_image_file ?>"/>
            </a>
            <p class="title1"><?php echo preg_match('/<br>/',$b[1]) ? preg_split('/<br>/',$b[1])[1] : $b[1] ?></p>
            <p class="content1"><?php echo preg_match('/<br>/',$b[1]) ? preg_split('/<br>/',$b[1])[0] : "" ?></p>
          </div>
<?php
        }
      }
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
