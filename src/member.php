<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
  require('../config/config.php');
?>
<head>
  <meta charset="utf-8">
  <title> <?php echo $title."【メンバー】" ?> </title>
  <meta name="author" content="shumaikun">
  <meta name="keywords" content="<?php echo $keyword ?>">
  <meta name="description" content="<?php echo $description ?>">
  <meta property="og:image" content="<?php echo $img_path ?>__tsurugi.jpg">
  <meta property="og:title" content="<?php echo $title."【メンバー】" ?>">
  <meta property="og:description" content="<?php echo $description ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="<?php echo $img_path ?>__tsurugi__low.jpg">
  <link rel="shortcut icon" href="<?php echo $img_path ?>icon.ico">
  <link rel="stylesheet" href="<?php echo $css_path ?>all.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="<?php echo $js_path ?>pagetop.js"></script>
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
    <div class="hero">
    </div>
    <div class="content">

      <h2> しゅーまいくん (Webサイト制作者)</h2>
      <table class="prof">
<?php
      require('member_data.php');  //それぞれの表のデータ(JSON)は、別ファイルに記述
      // $index=0;
      foreach($all_trip as $arr){
?>
        <tr>
          <td class="month"> <?php echo $arr[0] //年月 ?> </td>
<?php
          if(!empty($arr[2])){
?>
            <td> <?php echo $arr[1] //旅行場所 ?>旅行
              <ul  class="cp_list" style="font-size:75%;">
              <!-- <ul> -->
<?php
              foreach($arr[2] as $a){ //訪問史跡リスト
?>
                <li class="place"> <?php //echo $index+=1 ?> <?php echo $a ?></li>
<?php
              }
?>
              </ul>
            </td>
<?php
          }else{
?>
            <td> <?php echo $arr[1] ?> </td>
<?php
          }
?>
        </tr>
<?php
        }
?>
      </table>

      <h2> VAVA-BOON (御朱印提供協力)</h2>
      <p> 　三度の飯より御朱印好き！ </p>

      <h2> DAIKING </h2>
      <p> 　酒は百薬の長 </p>

      <h2> アサカァァァ </h2>
      <p> 　アサクサァァァ </p>

	  </div>
<?php
    $fp=fopen("footer.html","r");
    while(!feof($fp)){echo fgets($fp);}
?>
  </body>
</html>

<!--http://cgi.u.tsukuba.ac.jp/‾s1711520/goshuin/src/member.php
