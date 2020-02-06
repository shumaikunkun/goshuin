<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php $img_path="../img/" ?>
<head>
  <meta charset="utf-8">
  <title> 双馬の御朱印日記【リスト】 </title>
  <link rel="stylesheet" href="../css/all.css" type="text/css">
  <link rel="shortcut icon" href="<?php echo $img_path ?>icon.ico">
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

<?php
  require('list_data.php');
  require('top_data.php');
  $index=0;
  foreach($all_goshuin as $image => $name){
?>
    <p> <?php echo ($index+=1)."." ?> <?php echo $name ?></p>

<?php
    foreach($all_group as $title => $arr){
      foreach ($arr as $a) {
        if($a[0]==$image){
          ?>
        <p>　<?php echo $title ?></p>
          <?php
        }
      }
    }
?>


<?php
  }
?>

<!-- <?php
  //imgディレクトリ内の全ファイルを一覧表示
  $arr=glob("../img/*");
  foreach ($arr as $filename) {
    echo str_replace("../img/","",$filename);
    echo "<br>";
  }
?> -->

  </div>
<?php
  $fp=fopen("footer.html","r");
  while(!feof($fp)){echo fgets($fp);}
?>
</body>
</html>
