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
  foreach($all_goshuin as $image => $name){
?>

<p><?php echo $name ?></p>


<?php
  }
?>

  </div>
<?php
  $fp=fopen("footer.html","r");
  while(!feof($fp)){echo fgets($fp);}
?>
</body>
</html>

<?php
  // //imgディレクトリ内の全ファイルを一覧表示
  // $arr=glob("../img/*");
  // foreach ($arr as $filename) {
  //   echo $filename;
  // }
?>
