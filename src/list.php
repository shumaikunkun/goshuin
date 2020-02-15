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

    <h1 class="big-title">条件</h1>

<?php
    require('list_data.php');
    require('top_data.php');
    $index=0;
    $shrine=["社","宮",];
    // $temple=["寺","院","堂","仏","殿","尊","動","師","山","天","塔","音","荷","神",];
    $shrine_kind=["神明","稲荷","八幡","天満","東照","熊野","住吉","祇園","護国","諏訪","大鳥","氷川","大鳥","山王","愛宕","鹿島","香取","水天","白山","春日","三輪","秋葉","浅間","宗像","二荒","天王","大杉","気多","金山","塩釜","猿田彦","三嶋","杵築","丹生","岩木","駒形","伊佐須美","近津","大物忌","赤城","榛名","伊香保","妙義","貫前","息栖","筑波","磯前","妙見","玉前","安房","洲崎","秩父","金鑽","根津","小野","寒川","磯長","箱根","小国","真清田","大縣","熱田","針綱","砥鹿","知立","挟投","度津","弥彦","遠敷","気比","菅生","石動","天日陰","二上","立山","高瀬","戸隠","穂高","伊吹","稲葉","水無","建部","多度","多賀","加布良古","淡嶋","竈山","伊太祈曽","日前","国懸","敢国","坐摩","蔵王","松尾","大和","石上","平野","廣瀬","龍田","廣田","生田","長田","恵比寿","賀茂","梅宮","貴船","出石","粟鹿","養父","宇倍","伊和","吉備津","中山","安仁","佐太","倭文","智明","物部","玉祖","琴平","田村","大麻","杉戸","土佐","高良","河上","西寒多","阿蘇","都農","新田","枚聞","総社","天皇","人物",];
    $temple_kind=["華厳","法相","律","天台","真言","浄土","浄土真","時","日蓮","臨済","曹洞","黄檗","融通念仏",];
    $shrine_hierarchy=["総本社","副本社","中心神社","一般神社",];
    $temple_hierarchy=["総本山","大本山","本山","一般寺院",];
?>

    <ul class="three-select">

      <li>
        <h3>神社か寺院で絞り込む</h3>
        <form class="" action="list.php" method="post">
          <div class="cp_ipselect cp_sl02">
          <select name="select_class" onchange="submit(this.form)">
            <option value="" hidden>未選択</option>
            <option value="0">全て</option>
            <option value="1">神社</option>
            <option value="2">寺院</option>
            <option value="3">総本社(神社)</option>
            <option value="4">総本山(寺院)</option>
          </select>
          </div>
        </form>
      </li>

      <li>
        <h3>信仰で絞り込む（神社）</h3>
        <form class="" action="list.php" method="post">
          <div class="cp_ipselect cp_sl02">
          <select name="select_shrine" onchange="submit(this.form)">
            <option value="" hidden>未選択</option>
<?php
            foreach($shrine_kind as $n => $skind){
?>
              <option value="<?php echo $n ?>"> <?php echo $skind ?>信仰 </option>
<?php
            }
?>
          </select>
          </div>
        </form>
      </li>

      <li>
        <h3>宗派で絞り込む（寺院）</h3>
        <form class="" action="list.php" method="post">
          <div class="cp_ipselect cp_sl02">
          <select name="select_temple" onchange="submit(this.form)">
            <option value="" hidden>未選択</option>
<?php
            foreach($temple_kind as $m => $tkind){
?>
              <option value="<?php echo $m ?>"> <?php echo $tkind ?>宗 </option>
<?php
            }
?>
          </select>
          </div>
        </form>
      </li>

    </ul>

<?php $select_class = isset($_POST["select_class"]) ? $_POST["select_class"] : -1; ?>
<?php $select_shrine = isset($_POST["select_shrine"]) ? $_POST["select_shrine"] : -1; ?>
<?php $select_temple = isset($_POST["select_temple"]) ? $_POST["select_temple"] : -1; ?>
<?php //未定義の場合-1を代入（getの場合は3つ全て未定義、postの場合は2つ未定義） ?>

    <div class="not-three-select">
<?php
    if($select_class==1){  //全神社
      echo "<h1 class='big-title2'>全ての神社</h1><br>";
      $is_odd=False;  //奇数の時は左側、偶数の時は右側に並べる
      foreach($all_goshuin as $image => $name){
        if(in_array(mb_substr($name[0],-1),$shrine)){
          display($image,$name,$shrine,$all_group,$img_path,$is_odd=!$is_odd);
          //$is_odd=!$is_odd;  //交互に値を変えることで奇数番目は左、偶数番目は右に配置を実装
        }
      }
    }elseif($select_class==2){  //全寺院
      echo "<h1 class='big-title2'>全ての寺院</h1><br>";
      $is_odd=False;  //奇数の時は左側、偶数の時は右側に並べる
      foreach($all_goshuin as $image => $name){
        if(!in_array(mb_substr($name[0],-1),$shrine)){
          display($image,$name,$shrine,$all_group,$img_path,$is_odd=!$is_odd);
        }
      }
    }elseif($select_class==3){  //全総本社
      echo "<h1 class='big-title2'>全ての総本社</h1>";
      foreach($shrine_kind as $shinko){
        echo "<div class='space-on-h2'></div><h2>".$shinko."信仰総本社</h2>";
        $is_odd=False;  //奇数の時は左側、偶数の時は右側に並べる
        foreach($all_goshuin+$add_goshuin as $image => $name){
          if(array_key_exists($shinko,$name[1]) && $name[1][$shinko]==1){
            display($image,$name,$shrine,$all_group,$img_path,$is_odd=!$is_odd);
          }
        }
      }
    }elseif($select_class==4){  //全総本山
      echo "<h1 class='big-title2'>全ての総本山</h1>";
      foreach($temple_kind as $shuha){
        echo "<div class='space-on-h2'></div><h2>".$shuha."宗総本山</h2>";
        $is_odd=False;  //奇数の時は左側、偶数の時は右側に並べる
        foreach($all_goshuin+$add_goshuin as $image => $name){
          if(array_key_exists($shuha,$name[1]) && $name[1][$shuha]==1){
            display($image,$name,$shrine,$all_group,$img_path,$is_odd=!$is_odd);
          }
        }
      }
    }elseif($select_shrine>-1){  //特定の信仰
      echo "<h1 class='big-title2'>".$shrine_kind[$select_shrine]."信仰の神社</h1>";
      for($i=0; $i<4; $i++){
        echo "<div class='space-on-h2'></div><h2>".$shrine_hierarchy[$i]."</h2>";
        $is_odd=False;  //奇数の時は左側、偶数の時は右側に並べる
        foreach($all_goshuin+$add_goshuin as $image => $name){
          if(array_key_exists($shrine_kind[$select_shrine],$name[1]) && $name[1][$shrine_kind[$select_shrine]]==$i+1){  //クラスのキーを持っていてかつ階級が同じ時
            display($image,$name,$shrine,$all_group,$img_path,$is_odd=!$is_odd);
          }
        }
      }
    }elseif($select_temple>-1){  //特定の宗派
      echo "<h1 class='big-title2'>".$temple_kind[$select_temple]."宗の寺院</h1>";
      for($i=0; $i<4; $i++){
        echo "<div class='space-on-h2'></div><h2>".$temple_hierarchy[$i]."</h2>";
        $is_odd=False;  //奇数の時は左側、偶数の時は右側に並べる
        foreach($all_goshuin+$add_goshuin as $image => $name){
          if(array_key_exists($temple_kind[$select_temple],$name[1]) && $name[1][$temple_kind[$select_temple]]==$i+1){
            display($image,$name,$shrine,$all_group,$img_path,$is_odd=!$is_odd);
          }
        }
      }
    }else{  //全表示
      echo "<h1 class='big-title2'>全ての御朱印</h1><br>";
      $is_odd=False;  //奇数の時は左側、偶数の時は右側に並べる
      foreach($all_goshuin as $image => $name){
        display($image,$name,$shrine,$all_group,$img_path,$is_odd=!$is_odd);
      }
    }
?>
    </div>
<?php
  //imgディレクトリ内の全ファイルを一覧表示
  //foreach (glob("../img/*") as $filename) { if(preg_match('/\d\d\d\w+/',$filename)){ echo (str_replace("../img/","",$filename))."<br>"; }}
?>
  </div>
<?php
  //フッタ読み込み
  $fp=fopen("footer.html","r");
  while(!feof($fp)){echo fgets($fp);}
?>
</body>
</html>

<!-- 表示する関数 -->
<?php
function display($image,$name,$shrine,$all_group,$img_path,$is_odd){
?>
  <div class="<?php echo $is_odd ? "is-odd" : "is-even" ?>" >
    <div class="card3">
      <div class="box3">
        <a href="<?php echo $merge_image_file=$img_path.(preg_match('/\d\d\d\w./',$image) ? $image : "000").".jpg"; ?>" target="_blank">
          <img src="<?php echo $merge_image_file ?>" class="image3" />
        </a>
        <div>
          <p class="title3"><?php echo $name[0] ?></p>
          <p class="content3">
<?php
          $class_num=0;  //5つ以上のクラスは表示させない
          foreach($all_group as $title => $arr){
            foreach ($arr as $a) {
              if($a[0]==$image && ($class_num+=1)<5){
                echo $title."<br>";
              }
            }
          }
?>
          </p>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>
