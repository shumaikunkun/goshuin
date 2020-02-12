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
  // $temple=["寺","院","堂","仏","殿","尊","動","師","山","天","塔","音","荷","神",];
  $shrine=["社","宮",];
  $temple_kind=["華厳","法相","律","天台","真言","浄土","浄土真","時","日蓮","臨済","曹洞","黄檗","融通念仏",];
  $shurine_kind=["神明","稲荷","八幡","天満","東照","熊野","住吉","祇園","護国","諏訪","大鳥","氷川","大鳥","日吉","愛宕","鹿島","香取","水天","白山","春日","三輪","秋葉","浅間","宗像","二荒","津島","大杉","気多","金山","塩釜","猿田彦","金山","三嶋","出雲","丹生",];
  foreach($all_goshuin as $image => $name){

?>



<!-- <table class="matome" border="5px" cellpadding="10">
  <tr>
    <td rowspan="2"><image class="img" src="<?php echo $img_path ?><?php echo $image ?>.jpg"/></td>
    <td><?php echo ($index+=1) ?></td>
    <td><?php echo $name ?></td>
    <td>神社</td>
  </tr>
    <td colspan="3"> -->

    <p>
      <?php echo ($index)."." ?> <?php echo $name[0] //寺社名 ?>　　　<?php echo in_array(mb_substr($name[0],-1),$shrine) ? "神社" : "寺院"; ?>
    </p>

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

    <!-- </td>
  <tr>

  </tr>
</table> -->







<?php
  }
?>

<?php
  //imgディレクトリ内の全ファイルを一覧表示
  $arr=glob("../img/*");
  foreach ($arr as $filename) {
    echo str_replace("../img/","",$filename);
    echo "<br>";
  }
?>

  </div>
<?php
  $fp=fopen("footer.html","r");
  while(!feof($fp)){echo fgets($fp);}
?>
</body>
</html>
