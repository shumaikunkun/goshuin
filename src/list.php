<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
  require('../config/config.php');
?>
<head>
  <meta charset="utf-8">
  <title> <?php echo $title."【一覧】" ?> </title>
  <meta name="author" content="shumaikun" />
  <meta name="keywords" content="<?php echo $keyword ?>" />
  <meta name="description" content="<?php echo $description ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@unity_shumai" />
  <meta property="og:image" content="<?php echo $img_path."__tsurugi.jpg" ?>" />
  <meta property="og:title" content="<?php echo $title."【一覧】" ?>" />
  <meta property="og:description" content="<?php echo $description ?>" />
  <link rel="shortcut icon" href="<?php echo $img_path."icon.ico" ?>" />
  <link rel="stylesheet" href="<?php echo $css_path."all.css" ?>" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="<?php echo $js_path."pagetop.js" ?>"></script>
</head>
<body background="<?php echo $img_path."background.jpg" ?>">
<?php
  // 共通部分のヘッダーのhtmlファイルを読み込む
  $fp=fopen("header.html","r");
  while(!feof($fp)){echo fgets($fp);}
?>
  <div class="hide">
    <img src="<?php echo $img_path."background.jpg" ?>" alt="">
  </div>

<?php
    require('list_data.php');  //$all_goshuin, $add_goshuin
    require('index_data.php');  //$all_group
    require('shrine_data.php');  //$all_ichinomiya
    $confirm_shrine=["社","宮",];  //寺社名の最後の１文字がこの配列に含まれていたら神社、いなければ寺院
    $confirm_temple=["寺","院","堂","殿",]; //醫王殿、釈迦堂、出世稲荷、大塔、金閣殿、大御堂、
    $shrine_kind=["神明","稲荷","八幡","天神","東照","熊野","住吉","春日","宗像","山王","祇園","護国","諏訪","氷川","大鳥","愛宕","鹿島","香取","水天","白山","三輪","秋葉","浅間","二荒","津島","大杉","気多","金山","塩釜","猿田彦","三嶋","杵築","丹生", "岩木","深砂", "駒形", "金華", "越王","三吉", "鳥海","月山","湯殿","羽黒", "伊佐須美","近津", "赤城","榛名","伊香保","妙義","貫前", "息栖","筑波","磯前","加波", "玉前","安房","洲崎", "秩父","三峰","宝登","金鑽","高麗", "根津","小野", "寒川","磯長","雨降", "箱根","走湯","小国","入江","大井","白浜", "真清田","大縣","熱田","針綱","砥鹿","知立","挟投", "度津","弥彦", "遠敷","気比","織田", "菅生","石動","天日陰", "二上","立山","高瀬", "戸隠","穂高","生島","足島", "伊吹","稲葉","水無", "建部","多賀","三上","阿賀","白鬚", "多度","伊雑","敢国", "淡嶋","竈山","五十猛","日前","国懸", "坐摩", "大和","石上","廣瀬","龍田","竜王","蔵王","一言","子守", "松尾","平野","賀茂","梅宮","貴船","宇治","籠守", "廣田","生田","恵比寿(蛭子)","妙見","伊和","出石","粟鹿","養父", "吉備津","中山","安仁", "厳島","速谷","黄幡", "宇倍","倭文","智明", "若酢","由良","恵比寿(事代)","佐陀","物部", "玉祖", "琴平","田村", "石鎚","磯野","伊豫", "大麻","忌部","津峰","杉戸", "高鴨", "手力雄","海神","高良","宝満","大幡", "河上", "阿蘇", "西寒多", "都農", "新田","開聞", "石体",];
    $mount_shrine=["岩木"=>"岩木山","鳥海"=>"鳥海山","月山"=>"月山","湯殿"=>"湯殿山","羽黒"=>"羽黒山","妙義"=>"妙義山","赤城"=>"赤城山","榛名"=>"榛名山","二荒"=>"二荒山","筑波"=>"筑波山","宝登"=>"宝登山","御嶽"=>"御嶽山","雨降"=>"大山(雨降山)","箱根"=>"箱根山","秋葉"=>"秋葉山","浅間"=>"富士山","穂高"=>"穂高岳","戸隠"=>"戸隠山","稲葉"=>"稲葉山","伊吹"=>"伊吹山","弥彦"=>"弥彦山","立山"=>"立山","二上"=>"二上山","白山"=>"白山","石動"=>"石動山","山王"=>"比叡山","三上"=>"三上山","三輪"=>"三輪山","蔵王"=>"金峯山","一言"=>"葛木山","熊野"=>"熊野山","愛宕"=>"愛宕山","松尾"=>"松尾山","稲荷"=>"稲荷山","智明"=>"大神山","石鎚"=>"石鎚山","宝満"=>"宝満山","西寒多"=>"本宮山","阿蘇"=>"阿蘇山","開聞"=>"開聞山","高良"=>"高良山","物部"=>"八百山","三吉"=>"太平山","深砂"=>"猿賀山","金華"=>"金華山","阿賀"=>"赤神山","黄幡"=>"比治山","津峰"=>"津峰山","加波"=>"加波山",""=>"",""=>"",""=>"",""=>"",""=>"",""=>"",];
    $shrine_kind_add=array_merge($shrine_kind,["総社","天孫","天皇","人物(古代)","人物(源平)","人物(建武)","人物(戦国)","人物(藩祖)","人物(中興)","人物(幕末)","人物(明治)","人物(戦前)",]);//総本社のない信仰を加えてない配列($shrine_kind)と加えた配列($shrine_kind_add)を作る
    $temple_kind=["華厳","法相","律","天台","真言","浄土","浄土真","時","日蓮","臨済","曹洞","黄檗","融通念仏",];
    $shrine_hierarchy=["総本社","副本社","中心神社","一般神社",];
    $temple_hierarchy=["総本山","大本山","本山","一般寺院",];
    $is_odd=False;  //奇数の時はTrueで左側、偶数の時はFalseで右側に並べる
    //プルダウンメニューで選択した値を受け取る変数  //未定義の場合-1を代入（getの場合は3つ全て未定義、postの場合は2つ未定義）
    $select_class = isset($_POST["select_class"]) ? $_POST["select_class"] : -1;
    $select_shrine = isset($_POST["select_shrine"]) ? $_POST["select_shrine"] : -1;
    $select_temple = isset($_POST["select_temple"]) ? $_POST["select_temple"] : -1;
    $search_word = isset($_POST["search_word"]) ? preg_replace("/\w|[ -~]|　/","",$_POST["search_word"]) : "";  //検索語句から英字数字記号空白を取り除く
    $index=0;  //一覧表示するときに御朱印ごとに番号を振っていく用
    //別表神社リストでは官国幣社を除いているため、一覧表示する際に官国幣社にも別表神社クラスを付与してあげる必要がある(官国幣社は別表神社の部分集合)
    $kan_koku_hei=["官幣大社","国幣大社","官幣中社","国幣中社","官幣小社","国幣小社","別格官幣社"];
    //検索する際に旧字体でもどちらでもヒットするための置換表
    $new_old_kanji=["竜"=>"龍","滝"=>"瀧","総"=>"總","仏"=>"佛","沢"=>"澤","国"=>"國","県"=>"縣","剣"=>"劔","気"=>"氣","真"=>"眞","円"=>"圓","医"=>"醫","宝"=>"寶","台"=>"臺","壱"=>"壹","栄"=>"榮","塩"=>"鹽","釜"=>"竈","応"=>"應","岳"=>"嶽","斎"=>"齋","広"=>"廣","厳"=>"嚴","桜"=>"櫻","寿"=>"壽","実"=>"實","写"=>"冩","将"=>"將","浄"=>"淨","条"=>"條","双"=>"雙","体"=>"體","灯"=>"燈","浜"=>"濱","万"=>"萬","弥"=>"彌","予"=>"豫","与"=>"與","恋"=>"戀","幡"=>"旛","島"=>"嶋","嶋"=>"島","箱"=>"函","来"=>"來","ヶ"=>"箇","虫"=>"蟲","弁"=>"辯",
    "児"=>"兒","徳"=>"德","庄"=>"荘","渋"=>"澁"];
    //検索ワードがマッチしなかったら、以下からランダムでユーザに候補を提示
    $serch_word_example=[["大社","神宮","別院",],["清水","成田山","大仏","観音","大師","厄除け","不動","稲荷","国分","塩釜","仙台","天","伏見稲荷","大神宮","気","妙","伊","聖天","御霊","吉備津","護国","比咩","金閣","総社","長谷","法華","光明","金",],["本能寺","平安神宮","清澄寺","久遠寺","剣神社","妙心寺","常陸国総社","極楽寺","大洗磯前神社","八坂神社","總持寺","住吉大社","榴岡天満宮","大國魂神社","石川護國神社","専修寺","川越大師","秋葉神社","東本願寺","湯島天満宮","本行寺","那古寺","仙波東照宮","大和神社","大神神社",],];

?>

  <div class="content">
    <h1 class="big-title">検索</h1>
    <form action="list.php" method="post">
      <div class="search__container">
        <p class="search__title">検索したい寺社名を入力（例：護国）</p>
        <input name="search_word" class="search__input" type="text" placeholder="検索">
        <p class="credits__text">旧字体・新字体どちらもマッチします</p>
      </div>
    </form>

    <h1 class="big-title">条件</h1>
    <ul class="three-select">
      <li>
        <h3>神社か寺院で絞り込む</h3>
        <form action="list.php" method="post">
          <div class="cp_ipselect cp_sl02">
          <select name="select_class" onchange="submit(this.form)">
            <option value="" hidden>未選択</option>
            <option value="0">全て</option>
            <option value="1">神社</option>
            <option value="2">寺院</option>
            <option value="3"><?php echo sizeof($shrine_kind) ?>信仰の総本社(神社)</option>
            <option value="4"><?php echo sizeof($temple_kind) ?>宗派の総本山(寺院)</option>
            <!-- <option value="5">全て(未取得含む)</option> -->
          </select>
          </div>
        </form>
      </li>
      <li>
        <h3>信仰で絞り込む（神社）</h3>
        <form action="list.php" method="post">
          <div class="cp_ipselect cp_sl02">
          <select name="select_shrine" onchange="submit(this.form)">
            <option value="" hidden>未選択</option>
<?php
            foreach($shrine_kind_add as $n => $skind){
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
        <form action="list.php" method="post">
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

    <div class="not-three-select">
<?php
    if(!$search_word==""){  //文字列検索
      echo "<h1 class='big-title2'>".$search_word."を含む寺社の御朱印</h1><br>";
      $is_hit=False;  //何もヒットしなかった時に検知するため
      foreach($all_goshuin+$add_goshuin as $image => $name){
        //検索ワードに旧字体または新字体を含んでいた場合は、全て旧字体にした文字列と全て新字体にした文字列で検索する。
        //旧字体と新字体が混在する寺社名はないので2通りで十分
        $all_new_search_word=change_kanji($search_word,True);
        $all_old_search_word=change_kanji($search_word,False);
        if(preg_match("/$all_new_search_word|$all_old_search_word/",$name[0])){
          display($image,$name,$all_ichinomiya+$all_group,$is_odd=!$is_odd,True);
          $is_hit=True;
        }
        // //旧字体と新字体の漢字をどちらも含んでる寺社名がないかチェックする用
        // foreach ($new_old_kanji as $k => $v) {
        //   if(preg_match("{".$k."}",$name[0]) && preg_match("{".$v."}",$name[0])){
        //     display($image,$name,$all_ichinomiya+$all_group,$is_odd=!$is_odd,True);
        //   }
        // }
      }
      if(!$is_hit){
        echo "<p>　マッチする寺社がありません。以下のようなワードで検索してみましょう。</p><ul class='cp_list2'>";
        foreach ($serch_word_example as $arr) {
          $selected_word=$arr[mt_rand(0,sizeof($arr)-1)]
?>
          <li>
            <form class="search_word" action="list.php" method="post">
              <input type="hidden" name="search_word" value="<?php echo $selected_word ?>">
              <input type="submit" value="<?php echo $selected_word ?>">で検索
            </form>
          </li>
<?php
        }
        echo "</ul>";
      }
    }elseif($select_class==1){  //全神社
      echo "<h1 class='big-title2'>全ての神社</h1><br>";
      foreach($all_goshuin+$add_goshuin as $image => $name){
        if(in_array(mb_substr(str_replace(")","",$name[0]),-1),$confirm_shrine)){
          display($image,$name,$all_ichinomiya+$all_group,$is_odd=!$is_odd,True);
        }
      }
    }elseif($select_class==2){  //全寺院
      echo "<h1 class='big-title2'>全ての寺院</h1><br>";
      foreach($all_goshuin+$add_goshuin as $image => $name){
        if(in_array(mb_substr(str_replace(")","",$name[0]),-1),$confirm_temple)){
          display($image,$name,$all_ichinomiya+$all_group,$is_odd=!$is_odd,True);
        }
      }
    }elseif($select_class==3){  //全総本社
      echo "<h1 class='big-title2'>全ての総本社</h1>";
      foreach($shrine_kind as $shinko){
        echo "<div class='space-on-h2'></div><h2>".$shinko."信仰総本社</h2>";
        $is_odd=False;  //奇数の時は左側、偶数の時は右側に並べる
        foreach($all_goshuin+$add_goshuin as $image => $name){
          if(array_key_exists($shinko,$name[1]) && $name[1][$shinko]==1){
            display($image,$name,$all_ichinomiya+$all_group,$is_odd=!$is_odd,False);
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
            display($image,$name,$all_ichinomiya+$all_group,$is_odd=!$is_odd,False);
          }
        }
      }
    }elseif($select_shrine>-1){  //特定の信仰
      echo "<h1 class='big-title2'>".$shrine_kind_add[$select_shrine]."信仰の神社</h1>";
      if($select_shrine<sizeof($shrine_kind)){  //総社・天皇・人物信仰を除いた信仰一覧配列$shrine_kindのサイズより前の番号だったら各信仰、違ければ総社・天皇・人物のどれか
        for($i=0; $i<4; $i++){
          echo "<div class='space-on-h2'></div><h2>".$shrine_hierarchy[$i]."</h2>";
          $is_odd=False;  //奇数の時は左側、偶数の時は右側に並べる
          foreach($all_goshuin+$add_goshuin as $image => $name){
            if(array_key_exists($shrine_kind_add[$select_shrine],$name[1]) && $name[1][$shrine_kind_add[$select_shrine]]==$i+1){  //クラスのキーを持っていてかつ階級が同じ時
              display($image,$name,$all_ichinomiya+$all_group,$is_odd=!$is_odd,False);
            }
          }
        }
      }else{  //総社・人物
        foreach($all_goshuin+$add_goshuin as $image => $name){
          if(array_key_exists($shrine_kind_add[$select_shrine],$name[1])){
            echo "<div class='space-on-h2'></div><h2>";
            if($select_shrine==sizeof($shrine_kind)){  //総社信仰の場合と人物信仰の場合でタイトルを場合分け
              echo $name[1][$shrine_kind_add[$select_shrine]];
              echo "国総社";
            }else{  //人物
              echo "主祭神：";
              foreach($name[1][$shrine_kind_add[$select_shrine]] as $n => $godname){
                if($n!=0) echo ",";  //名前を区切るカンマを出力
                echo $godname;
              }
            }
            echo "</h2>";
            $is_odd=False;
            display($image,$name,$all_ichinomiya+$all_group,$is_odd=!$is_odd,False);
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
            display($image,$name,$all_ichinomiya+$all_group,$is_odd=!$is_odd,False);
          }
        }
      }
    // }elseif($select_class==5){  //未取得を含む全表示
    //   echo "<h1 class='big-title2'>未取得を含む全ての御朱印</h1><br>";
    //   foreach($all_goshuin+$add_goshuin as $image => $name){
    //     display($image,$name,$all_ichinomiya+$all_group,$is_odd=!$is_odd);
    //   }
    }else{  //全表示
      echo "<h1 class='big-title2'>全ての御朱印</h1><br>";
      foreach($all_goshuin+$add_goshuin as $image => $name){
        display($image,$name,$all_ichinomiya+$all_group,$is_odd=!$is_odd,True);
      }
    }
?>
    </div>
<?php
  // #imgディレクトリ内の全ファイルを一覧表示
  // foreach (glob("../img/*") as $filename) { if(preg_match('/\d\d\d\w+/',$filename)){ echo (str_replace("../img/","",$filename))."<br>"; }}
?>
  </div>
<?php
  //フッタ読み込み
  $fp=fopen("footer.html","r");
  while(!feof($fp)){echo fgets($fp);}
?>
</body>
</html>

<?php
//各御朱印のカードデザインを表示する関数
function display($image,$name,$all_group,$is_odd,$is_index){
  global $img_path, $index, $kan_koku_hei;
?>
  <div class="<?php echo $is_odd ? "is-odd" : "is-even" ?>" >
    <div class="card3">
      <div class="box3">
<?php
        $merge_image_file = $img_path.$image.".jpg";
        if(!in_array($merge_image_file,glob($img_path."*.jpg"))){  //データがない場合
          if(preg_match('/\d\d\d.+/',$image)){  //数字から始まる取得済だがデータなし
            $merge_image_file = $img_path."black.jpg";
          }else{  //数字から始まらない＞未取得
            $merge_image_file = $img_path."000.jpg";
          }
        }
?>
        <a href="<?php echo $merge_image_file ?>" target="_blank">
          <img src="<?php echo $merge_image_file ?>" class="image3" />
        </a>
        <div>
          <p class="title3">
            <?php if($is_index) echo ($index+=1)."." ?><?php echo $name[0] ?>
          </p>
          <p class="content3">
<?php
          $class_num=0;  //5つ以上のクラスは表示させない
          foreach($all_group as $title => $arr){
            foreach ($arr as $a) {
              if($a[0]==$image && ($class_num+=1)<5){
                #echo in_array($title,$kan_koku_hei) ? "別表神社　" : "";  //官国幣社のクラスを持っている要素は別表神社も表示する
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

//旧字体を新字体に、新字体を旧字体に変換する関数
function change_kanji($string,$to_new){  //第二引数がTrueなら旧字体から新字体に、Falseなら新字体から旧字体に
  global $new_old_kanji;
  foreach ($new_old_kanji as $new => $old) $string = $to_new ? str_replace($old, $new, $string) : str_replace($new, $old, $string);
  return $string;
}

// //旧字体を新字体に変換する関数
// function change_new_kanji($string){
//   global $new_old_kanji;
//   foreach ($new_old_kanji as $new => $old) $string = str_replace($old, $new, $string);
//   return $string;
// }
// //新字体を旧字体に変換する関数
// function change_old_kanji($string){
//   global $new_old_kanji;
//   foreach ($new_old_kanji as $new => $old) $string = str_replace($new, $old, $string);
//   return $string;
// }

?>
