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

<h1>開発中</h1><br>

<?php
  require('list_data.php');
  require('top_data.php');
  $index=0;
  $shrine=["社","宮",];
  // $temple=["寺","院","堂","仏","殿","尊","動","師","山","天","塔","音","荷","神",];
  $shrine_kind=["神明","稲荷","八幡","天満","東照","熊野","住吉","祇園","護国","諏訪","大鳥","氷川","大鳥","山王","愛宕","鹿島","香取","水天","白山","春日","三輪","秋葉","浅間","宗像","二荒","天王","大杉","気多","金山","塩釜","猿田彦","三嶋","出雲","丹生","岩木","駒形","伊佐須美","近津","大物忌","赤城","榛名","伊香保","妙義","貫前","息栖","筑波","磯前","妙見","玉前","安房","洲崎","秩父","金鑽","根津","小野","寒川","磯長","箱根","小国","真清田","大縣","熱田","針綱","砥鹿","知立","挟投","度津","弥彦","遠敷","気比","菅生","石動","天日陰","二上","立山","高瀬","戸隠","穂高","伊吹","稲葉","水無","建部","多度","多賀","加布良古","淡嶋","竈山","伊太祈曽","日前","国懸","敢国","蔵王","大和","石上","平野","廣瀬","龍田","廣田","生田","長田","恵比寿","賀茂","梅宮","貴船","出石","粟鹿","養父","宇倍","伊和","吉備津","中山","安仁","倭文","玉祖","琴平","大麻","田村","土佐","高良","河上","西寒多","阿蘇","都農","新田","枚聞","総社","天皇","人物",];
  $temple_kind=["華厳","法相","律","天台","真言","浄土","浄土真","時","日蓮","臨済","曹洞","黄檗","融通念仏",];
  $shrine_hierarchy=["総本社","副本社","地方本社","一般神社"];
  $temple_hierarchy=["総本山級","大本山級","本山級","一般寺院"];

?>

    神社か寺院で絞り込む
    <form class="" action="list.php" method="post">
      <select name="select_class">
        <option value="0">全て</option>
        <option value="1">神社</option>
        <option value="2">寺院</option>
      </select>
      <input type="submit" value="絞り込む">
    </form>

    信仰で絞り込む（神社）
    <form class="" action="list.php" method="post">
      <select name="select_shrine">
<?php
        foreach($shrine_kind as $n => $skind){
?>
          <option value="<?php echo $n ?>"> <?php echo $skind ?>信仰 </option>
<?php
        }
?>
      </select>
      <input type="submit" value="絞り込む">
    </form>

    宗派で絞り込む（寺院）
    <form class="" action="list.php" method="post">
      <select name="select_temple">
<?php
        foreach($temple_kind as $m => $tkind){
?>
          <option value="<?php echo $m ?>"> <?php echo $tkind ?>宗 </option>
<?php
        }
?>
      </select>
      <input type="submit" value="絞り込む">
    </form>


    <?php $select_class = isset($_POST["select_class"]) ? $_POST["select_class"] : -1; ?>
    <?php $select_shrine = isset($_POST["select_shrine"]) ? $_POST["select_shrine"] : -1; ?>
    <?php $select_temple = isset($_POST["select_temple"]) ? $_POST["select_temple"] : -1; ?>


<?php
  if($select_class==1){  //全神社
    echo "<h3>全ての神社</h3><br>";
    foreach($all_goshuin as $image => $name){
      if(in_array(mb_substr($name[0],-1),$shrine)){
        display($image,$name,$shrine,$all_group,$img_path);
      }
    }
  }elseif($select_class==2){  //全寺院
    echo "<h3>全ての寺院</h3>";
    foreach($all_goshuin as $image => $name){
      if(!in_array(mb_substr($name[0],-1),$shrine)){
        display($image,$name,$shrine,$all_group,$img_path);
      }
    }
  }elseif($select_shrine>-1){  //特定の信仰
    echo "<h3>".$shrine_kind[$select_shrine]."信仰の神社</h3>";
    for($i=0; $i<4; $i++){
      echo "<h2>".$shrine_hierarchy[$i]."</h2>";
      foreach($all_goshuin+$add_goshin as $image => $name){
        if(array_key_exists($shrine_kind[$select_shrine],$name[1]) && $name[1][$shrine_kind[$select_shrine]]==$i+1){  //クラスのキーを持っていてかつ階級が同じ時
          display($image,$name,$shrine,$all_group,$img_path);
        }
      }
    }
  }elseif($select_temple>-1){  //特定の宗派
    echo "<h3>".$temple_kind[$select_temple]."宗の寺院</h3>";
    for($i=0; $i<4; $i++){
      echo "<h2>".$temple_hierarchy[$i]."</h2>";
      foreach($all_goshuin+$add_goshin as $image => $name){
        if(array_key_exists($temple_kind[$select_temple],$name[1]) && $name[1][$temple_kind[$select_temple]]==$i+1){
          display($image,$name,$shrine,$all_group,$img_path);
        }
      }
    }
  }else{  //全表示
    echo "<h3>全ての御朱印</h3>";
    foreach($all_goshuin as $image => $name){
      display($image,$name,$shrine,$all_group,$img_path);
    }
  }




?>

<?php
  //imgディレクトリ内の全ファイルを一覧表示
  //foreach (glob("../img/*") as $filename) { if(preg_match('/\d\d\d\w+/',$filename)){ echo (str_replace("../img/","",$filename))."<br>"; }}
?>

  </div>
<?php
  $fp=fopen("footer.html","r");
  while(!feof($fp)){echo fgets($fp);}
?>
</body>
</html>




<?php
  function display($image,$name,$shrine,$all_group,$img_path){
?>

    <!-- <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td rowspan="2"><image class="img" src="<?php //echo $img_path ?><?php //echo $image ?>.jpg"/></td>
        <td><?php //echo ($index+=1) ?></td>
        <td><?php //echo $name ?></td>
        <td>神社</td>
      </tr>
        <td colspan="3"> -->

        <p><?php //echo ($index+=1)."." ?> <?php echo $name[0] //寺社名 ?> <?php echo in_array(mb_substr($name[0],-1),$shrine) ? "⛩" : "🏯"; ?> </p>

    <?php
        foreach($all_group as $title => $arr){
          foreach ($arr as $a) {
            if($a[0]==$image){
    ?>
              <p>　・<?php echo $title ?></p>
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
