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
<body background="<?php echo $img_path ?>test.jpg">
  <header class="site-header">
    <h1 class="site-logo">双馬の御朱印日記</h1>
    <nav class="gnav">
      <ul class="gnav__menu">
        <li class="gnav__menu__item"><a href="top.php">トップ</a></li>
        <li class="gnav__menu__item"><a href="list.php">一覧</a></li>
        <li class="gnav__menu__item"><a href="member.php">メンバー</a></li>
        <li class="gnav__menu__item"><a href="">更新情報</a></li>
        <li class="gnav__menu__item"><a href="">Twitter</a></li>
      </ul>
    </nav>
  </header>
  <div class="hide">
    <img src="<?php echo $img_path ?>test.jpg" alt="">
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
  <footer class="site-footer">
    <p class="copyright">&#169;2019 Shumaikun</p>
  </footer>
</body>
</html>

<?php
  // //imgディレクトリ内の全ファイルを一覧表示
  // $arr=glob("../img/*");
  // foreach ($arr as $filename) {
  //   echo $filename;
  // }
?>
