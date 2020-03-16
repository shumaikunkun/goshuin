<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
  require('../config/config.php');
?>
<head>
  <meta charset="utf-8">
  <title> <?php echo $title."【メンバー】" ?> </title>
  <meta name="author" content="shumaikun" />
  <meta name="keywords" content="<?php echo $keyword ?>" />
  <meta name="description" content="<?php echo $description ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@unity_shumai" />
  <meta property="og:image" content="<?php echo $img_path."__tsurugi.jpg" ?>" />
  <meta property="og:title" content="<?php echo $title."【メンバー】" ?>" />
  <meta property="og:description" content="<?php echo $description ?>" />
  <link rel="shortcut icon" href="<?php echo $img_path."icon.ico" ?>" />
  <link rel="stylesheet" href="<?php echo $css_path."all.css" ?>" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="<?php echo $js_path."pagetop.js" ?>"></script>
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

      <!-- <h2> しゅーまいくん (Webサイト制作者)</h2> -->
      <h1 class="big-title">訪問史跡一覧</h1><br>

<?php
      require('member_data.php');  //それぞれの表のデータ(JSON)は、別ファイルに記述
      // $index=0;
      foreach(array_reverse($all_trip) as $arr){
?>
        <div class="card5">
          <div class="box5">
<?php
            //元の解像度の画像
            $uncompressed_img = $img_path.$arr[2].".jpg";
            //1/10圧縮した解像度の画像
            $compressed_img = $img_path.$arr[2]."_10x.jpg";
            //000と__oosugi1が圧縮画像なし
?>
            <img src="<?php echo in_array($compressed_img,glob($img_path."__*_10x.jpg")) ? $compressed_img : $uncompressed_img ?>" class="image5">
            <div class="textbox5">
<?php
              if(!empty($arr[3])){
?>
                <p class="title5"> <?php echo $arr[0]." " //年月 ?><?php echo $arr[1]."旅行" //旅行場所 ?></p>
                <p class="content5">【訪問史跡・名勝】
<?php
                foreach($arr[3] as $a){ //訪問史跡リスト
?>
                  <?php //echo $index+=1 ?> <?php echo $a." " ?>
<?php
                }
?>
                </p>
<?php
              }else{
?>
                <p class="title5"> <?php echo $arr[0]." " //年月 ?><?php echo $arr[1] ?></p>
<?php
              }
?>
            </div>
          </div>
        </div>
<?php
      }
?>
      <!-- <br>
      <h2> VAVA-BOON (御朱印提供協力)</h2>
      <p> 　三度の飯より御朱印好き！ </p>

      <h2> DAIKING </h2>
      <p> 　酒は百薬の長 </p>

      <h2> アサカァァァ </h2>
      <p> 　アサクサァァァ </p> -->

	  </div>
<?php
    $fp=fopen("footer.html","r");
    while(!feof($fp)){echo fgets($fp);}
?>
  </body>
</html>

<!--http://cgi.u.tsukuba.ac.jp/‾s1711520/goshuin/src/member.php
