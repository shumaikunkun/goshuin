<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta charset="utf-8">
  <title> 双馬の御朱印日記【トップ】 </title>
  <link rel="stylesheet" href="all.css" type="text/css">

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script type="text/javascript">
  $(function(){
    var setImg = '#photo';
    var fadeSpeed = 1600;
    var switchDelay = 3500;

    $(setImg).children('img').css({opacity:'0'});
    $(setImg + ' img:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);

    setInterval(function(){
      $(setImg + ' :first-child').animate({opacity:'0'},fadeSpeed).next('img').animate({opacity:'1'},fadeSpeed).end().appendTo(setImg);
    },switchDelay);
  });

  $(document).ready(function () {
    $('.bxslider').bxSlider();
  });
  </script>


</head>
<body background="image/test.jpg">
  <header class="site-header">
    <h1 class="site-logo">双馬の御朱印日記</h1>
    <nav class="gnav">
      <ul class="gnav__menu">
        <li class="gnav__menu__item"><a href="">トップ</a></li>
        <li class="gnav__menu__item"><a href="">活動</a></li>
        <li class="gnav__menu__item"><a href="member.php">メンバー</a></li>
        <li class="gnav__menu__item"><a href="">更新情報</a></li>
        <li class="gnav__menu__item"><a href="">Twitter</a></li>
      </ul>
    </nav>
  </header>
  <div class="hide">
    <img src="image/test.jpg" alt="">
  </div>
  <div class="slide">
    <ul class="bxslider">
      <li><img src="image/00toga.jpg" alt=""></li>
      <li><img src="image/00kashima.jpg" alt=""></li>
      <li><img src="image/00matsudaira.jpg" alt=""></li>
      <li><img src="image/0toyokawa.jpg" alt=""></li>
      <li><img src="image/00tsurugaya.jpg" alt=""></li>
    </ul>
  </div>
  <div class="content">


    <?php ?>
    <?php ?>


    <?php
    $arr=array(
      array("094nedu","根津神社"),
      array("000kanda","神田明神"),
      array("037kameido","亀戸天神社"),
      array("093shirayama","白山神社"),
      array("092ouji","王子神社"),

      array("064hie","日枝神社"),
      array("000shinagawa","品川神社"),
      array("077tomioka","富岡八幡宮"),
      array("063akasakahikawa","赤坂氷川神社"),
      array("059shibadai","芝大神宮"),
    );

    $size=sizeof($arr);
    if($size%5==0){
      $num=5;  #区切る要素数
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
?>

<h2> 東京十社 </h2>
<p>  </p>
<table class="matome" border="5px" cellpadding="10">
<?php
foreach($div as $a){
?>
<tr>
<?php
  foreach($a as $b){
?>
    <td class="text"><image class="img" src="image/<?php echo $b[0] ?>.jpg"/></td>
<?php
  }
?>
</tr>
<tr>
<?php
  foreach($a as $b){
?>
    <td class="text"><?php echo $b[1] ?></td>
<?php
  }
?>
</tr>
<?php
}
?>
</table><br>




    <!-- <h2> 東京五社 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/025meiji.jpg"/></td>
        <td class="text"><image class="img" src="image/023yasukuni.jpg"/></td>
        <td class="text"><image class="img" src="image/064hie.jpg"/></td>
        <td class="text"><image class="img" src="image/022toukyou.jpg"/></td>
        <td class="text"><image class="img" src="image/208ookunitama.jpg"/></td>
      </tr>
      <tr>
        <td class="text">明治神宮</td>
        <td class="text">靖国神社</td>
        <td class="text">日枝神社</td>
        <td class="text">東京大神宮</td>
        <td class="text">大國魂神社</td>
      </tr>
    </table><br>


    <h2> 日蓮宗四大本山 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/233kuon.jpg"/></td>
        <td class="text"><image class="img" src="image/131ikegami.jpg"/></td>
        <td class="text"><image class="img" src="image/000hokekyou.jpg"/></td>
        <td class="text"><image class="img" src="image/160seichou.jpg"/></td>
        <td class="text"><image class="img" src="image/162tanjou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">久遠寺</td>
        <td class="text">池上本門寺</td>
        <td class="text">法華経寺</td>
        <td class="text">清澄寺</td>
        <td class="text">誕生寺</td>
      </tr>
    </table><br>

    <h2> 南総四寺 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/153kasamori.jpg"/></td>
        <td class="text"><image class="img" src="image/154nihon.jpg"/></td>
        <td class="text"><image class="img" src="image/155gake.jpg"/></td>
        <td class="text"><image class="img" src="image/156nago.jpg"/></td>
      </tr>
      <tr>
        <td class="text">笠森寺</td>
        <td class="text">日本寺</td>
        <td class="text">大福寺</td>
        <td class="text">那古寺</td>
      </tr>
    </table><br>

    <h2> 五寺廻廊 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/182chuuson.jpg"/></td>
        <td class="text"><image class="img" src="image/186moutsuu.jpg"/></td>
        <td class="text"><image class="img" src="image/178zuigan.jpg"/></td>
        <td class="text"><image class="img" src="image/177entsuu.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">中尊寺</td>
        <td class="text">毛越寺</td>
        <td class="text">瑞巌寺</td>
        <td class="text">円通院</td>
        <td class="text">立石寺</td>
      </tr>
    </table><br>

    <h2> 平泉 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/184hiraizumishirayama.jpg"/></td>
        <td class="text"><image class="img" src="image/182chuuson.jpg"/></td>
        <td class="text"><image class="img" src="image/183konjiki.jpg"/></td>
        <td class="text"><image class="img" src="image/186moutsuu.jpg"/></td>
        <td class="text"><image class="img" src="image/185gikei.jpg"/></td>
      </tr>
      <tr>
        <td class="text">平泉寺</td>
        <td class="text">中尊寺</td>
        <td class="text">金色堂</td>
        <td class="text">毛越寺</td>
        <td class="text">義経堂</td>
      </tr>
    </table><br>

    <h2> 徳川四大菩提寺 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/000kanei.jpg"/></td>
        <td class="text"><image class="img" src="image/060zoujou.jpg"/></td>
        <td class="text"><image class="img" src="image/107daijuu.jpg"/></td>
        <td class="text"><image class="img" src="image/119kougetsu.jpg"/></td>
      </tr>
      <tr>
        <td class="text">寛永寺</td>
        <td class="text">増上寺</td>
        <td class="text">大樹寺</td>
        <td class="text">高月院</td>
      </tr>
    </table><br>

    <h2> 戦国菩提寺 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/102banshou.jpg"/></td>
        <td class="text"><image class="img" src="image/245erin.jpg"/></td>
        <td class="text"><image class="img" src="image/260rinsen.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">織田氏菩提寺<br>萬松寺</td>
        <td class="text">武田氏菩提寺<br>恵林寺</td>
        <td class="text">上杉氏菩提寺<br>林泉寺</td>
        <td class="text">北条氏菩提寺<br>早雲寺</td>
      </tr>
    </table><br>

    <h2> 鎌倉四寺 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/040kenchou.jpg"/></td>
        <td class="text"><image class="img" src="image/041engaku.jpg"/></td>
        <td class="text"><image class="img" src="image/199shoujoukou.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">建長寺</td>
        <td class="text">円覚寺</td>
        <td class="text">清浄光寺</td>
        <td class="text">光明寺</td>
      </tr>
    </table><br>

    <h2> 四大善光寺 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/001zenkou.jpg"/></td>
        <td class="text"><image class="img" src="image/244kaizenkou.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/116toukaizenkou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">善光寺</td>
        <td class="text">甲斐善光寺</td>
        <td class="text">元善光寺</td>
        <td class="text">東海善光寺</td>
      </tr>
    </table><br>


    <h2> 四大東照宮 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/087nikkou.jpg"/></td>
        <td class="text"><image class="img" src="image/229kunousan.jpg"/></td>
        <td class="text"><image class="img" src="image/018ueno.jpg"/></td>
        <td class="text"><image class="img" src="image/061shiba.jpg"/></td>
      </tr>
      <tr>
        <td class="text">日光東照宮</td>
        <td class="text">久能山東照宮</td>
        <td class="text">上野東照宮</td>
        <td class="text">芝東照宮</td>
      </tr>
    </table><br>

    <h2> 愛知十社 </h2>
    <p> 尾張五社、尾張三宮、三河三宮の和集合 </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/114masumita.jpg"/></td>
        <td class="text"><image class="img" src="image/104ooagata.jpg"/></td>
        <td class="text"><image class="img" src="image/027atsuta.jpg"/></td>
        <td class="text"><image class="img" src="image/115oomiwa.jpg"/></td>
        <td class="text"><image class="img" src="image/113kou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">尾張国一之宮<br>真清田神社</td>
        <td class="text">尾張国二之宮<br>大縣神社</td>
        <td class="text">尾張国三之宮<br>熱田神宮</td>
        <td class="text">尾張国準一之宮<br>大神神社</td>
        <td class="text">尾張国総社<br>大国霊神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/110toga.jpg"/></td>
        <td class="text"><image class="img" src="image/111chiryuu.jpg"/></td>
        <td class="text"><image class="img" src="image/117sanage.jpg"/></td>
        <td class="text"><image class="img" src="image/112tsushima.jpg"/></td>
        <td class="text"><image class="img" src="image/106haritsuna.jpg"/></td>
      </tr>
      <tr>
        <td class="text">三河国一之宮<br>砥鹿神社</td>
        <td class="text">三河国二之宮<br>知立神社</td>
        <td class="text">三河国三之宮<br>猿投神社</td>
        <td class="text">尾張五社<br>津島神社</td>
        <td class="text">尾張五社<br>針綱神社</td>
      </tr>
    </table><br>

    <h2> 茨城十二社 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/071kashima.jpg"/></td>
        <td class="text"><image class="img" src="image/084ooarai.jpg"/></td>
        <td class="text"><image class="img" src="image/145sakatsura.jpg"/></td>
        <td class="text"><image class="img" src="image/082kasama.jpg"/></td>
      </tr>
      <tr>
        <td class="text">鹿島神宮</td>
        <td class="text">大洗磯前神社</td>
        <td class="text">酒列磯前神社</td>
        <td class="text">笠間稲荷神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/081tsukubasan.jpg"/></td>
        <td class="text"><image class="img" src="image/096oosugi.jpg"/></td>
        <td class="text"><image class="img" src="image/083ibarakiken.jpg"/></td>
        <td class="text"><image class="img" src="image/151hitachi.jpg"/></td>
      </tr>
      <tr>
        <td class="text">筑波山神社</td>
        <td class="text">大杉神社</td>
        <td class="text">茨城縣護国神社</td>
        <td class="text">常陸國總社宮</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/147mitohachiman.jpg"/></td>
        <td class="text"><image class="img" src="image/148mitotou.jpg"/></td>
        <td class="text"><image class="img" src="image/149tokiwa.jpg"/></td>
        <td class="text"><image class="img" src="image/146mitoyoshida.jpg"/></td>
      </tr>
      <tr>
        <td class="text">水戸八幡宮</td>
        <td class="text">水戸東照宮</td>
        <td class="text">常磐神社</td>
        <td class="text">吉田神社</td>
      </tr>
    </table><br>

    <h2> 東国一宮 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/181komagata.jpg"/></td>
        <td class="text"><image class="img" src="image/175shiogama.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">津軽国一之宮<br>岩木山神社</td>
        <td class="text">陸中国一之宮<br>駒形神社</td>
        <td class="text">陸前国一之宮<br>鹽竈神社</td>
        <td class="text">出羽国一之宮<br>鳥海山大物忌神社</td>
        <td class="text">出羽国一之宮<br>鳥海山大物忌神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000isasumi.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/352nukisaki.jpg"/></td>
      </tr>
      <tr>
        <td class="text">岩代国一之宮<br>伊佐須美神社</td>
        <td class="text">磐城国一之宮<br>都都古和気神社</td>
        <td class="text">磐城国一之宮<br>都々古別神社</td>
        <td class="text">磐城国一之宮<br>石都々古和気神社</td>
        <td class="text">上野国一之宮<br>貫前神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/340futarasan.jpg"/></td>
        <td class="text"><image class="img" src="image/088nikkoufutarasan.jpg"/></td>
        <td class="text"><image class="img" src="image/085utsunomiyafutarasan.jpg"/></td>
        <td class="text"><image class="img" src="image/071kashima.jpg"/></td>
        <td class="text"><image class="img" src="image/069katori.jpg"/></td>
      </tr>
      <tr>
        <td class="text">下野国一之宮<br>日光二荒山神社中宮祠</td>
        <td class="text">下野国一之宮<br>日光二荒山神社</td>
        <td class="text">下野国一之宮<br>宇都宮二荒山神社</td>
        <td class="text">常陸国一之宮<br>鹿島神宮</td>
        <td class="text">下総国一之宮<br>香取神宮</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/165tamasaki.jpg"/></td>
        <td class="text"><image class="img" src="image/158awa.jpg"/></td>
        <td class="text"><image class="img" src="image/157susaki.jpg"/></td>
        <td class="text"><image class="img" src="image/038hikawa.jpg"/></td>
        <td class="text"><image class="img" src="image/201hikawanyotai.jpg"/></td>
      </tr>
      <tr>
        <td class="text">上総国一之宮<br>玉前神社</td>
        <td class="text">安房国一之宮<br>安房神社</td>
        <td class="text">安房国一之宮<br>洲崎神社</td>
        <td class="text">武蔵国一之宮<br>氷川神社</td>
        <td class="text">武蔵国一之宮<br>氷川女體神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/336ono.jpg"/></td>
        <td class="text"><image class="img" src="image/047tsurugaoka.jpg"/></td>
        <td class="text"><image class="img" src="image/196samukawa.jpg"/></td>
        <td class="text"><image class="img" src="image/227mishima.jpg"/></td>
        <td class="text"><image class="img" src="image/205chichibu.jpg"/></td>
      </tr>
      <tr>
        <td class="text">武蔵国一之宮<br>小野神社</td>
        <td class="text">相模国一之宮<br>鶴岡八幡宮</td>
        <td class="text">相模国一之宮<br>寒川神社</td>
        <td class="text">伊豆国一之宮<br>三嶋大社</td>
        <td class="text">知知夫国一之宮<br>秩父神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/003suwa.jpg"/></td>
        <td class="text"><image class="img" src="image/231sengen.jpg"/></td>
        <td class="text"><image class="img" src="image/241yamanashisengen.jpg"/></td>
        <td class="text"><image class="img" src="image/264oguni.jpg"/></td>
        <td class="text"><image class="img" src="image/263kotonomama.jpg"/></td>
      </tr>
      <tr>
        <td class="text">信濃国一之宮<br>諏訪大社</td>
        <td class="text">甲斐国一之宮<br>浅間神社</td>
        <td class="text">駿河国一之宮<br>浅間大社</td>
        <td class="text">遠江国一之宮<br>小國神社</td>
        <td class="text">遠江国一之宮<br>事任八幡宮</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/110toga.jpg"/></td>
        <td class="text"><image class="img" src="image/114masumita.jpg"/></td>
        <td class="text"><image class="img" src="image/115oomiwa.jpg"/></td>
        <td class="text"><image class="img" src="image/316minashi.jpg"/></td>
        <td class="text"><image class="img" src="image/268nanguu.jpg"/></td>
      </tr>
      <tr>
        <td class="text">三河国一之宮<br>砥鹿神社</td>
        <td class="text">尾張国一之宮<br>真清田神社</td>
        <td class="text">尾張国一之宮<br>大神神社</td>
        <td class="text">飛騨国一之宮<br>水無神社</td>
        <td class="text">美濃国一之宮<br>南宮大社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/301imizu.jpg"/></td>
        <td class="text"><image class="img" src="image/299ecchuuketa.jpg"/></td>
        <td class="text"><image class="img" src="image/308takase.jpg"/></td>
        <td class="text"><image class="img" src="image/305oyamamae.jpg"/></td>
        <td class="text"><image class="img" src="image/306oyamanaka.jpg"/></td>
      </tr>
      <tr>
        <td class="text">越中国一之宮<br>射水神社</td>
        <td class="text">越中国一之宮<br>氣多神社</td>
        <td class="text">越中国一之宮<br>高瀬神社</td>
        <td class="text">越中国一之宮<br>雄山神社</td>
        <td class="text">越中国一之宮<br>雄山神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/273kehi.jpg"/></td>
        <td class="text"><image class="img" src="image/289shirayamahime.jpg"/></td>
        <td class="text"><image class="img" src="image/295keta.jpg"/></td>
        <td class="text"><image class="img" src="image/275wakasahiko.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">越前国一之宮<br>氣比神宮</td>
        <td class="text">加賀国一之宮<br>白山比�盗_社</td>
        <td class="text">能登国一之宮<br>氣多大社</td>
        <td class="text">若狭国一之宮<br>若狭彦神社</td>
        <td class="text">佐渡国一之宮<br>度津神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/258iyahiko.jpg"/></td>
        <td class="text"><image class="img" src="image/262kota.jpg"/></td>
        <td class="text"><image class="img" src="image/343tsubakinakara.jpg"/></td>
        <td class="text"><image class="img" src="image/349tsubaki.jpg"/></td>
        <td class="text"><image class="img" src="image/348aekuni.jpg"/></td>
      </tr>
      <tr>
        <td class="text">越後国一之宮<br>彌彦神社</td>
        <td class="text">越後国一之宮<br>居多神社</td>
        <td class="text">伊勢国一之宮<br>都波岐奈加等神社</td>
        <td class="text">伊勢国一之宮<br>椿大神社</td>
        <td class="text">伊賀国一之宮<br>敢国神社</td>
      </tr>
    </table><br>

    <h2> 世界遺産浅間神社 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/231sengen.jpg"/></td>
        <td class="text"><image class="img" src="image/234yamamiyasengen.jpg"/></td>
        <td class="text"><image class="img" src="image/235murayamasengen.jpg"/></td>
        <td class="text"><image class="img" src="image/236suyamasengen.jpg"/></td>
      </tr>
      <tr>
        <td class="text">浅間大社</td>
        <td class="text">山宮浅間神社</td>
        <td class="text">村山浅間神社</td>
        <td class="text">須山浅間神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/237higashiguchisengen.jpg"/></td>
        <td class="text"><image class="img" src="image/238kitaguchisengen.jpg"/></td>
        <td class="text"><image class="img" src="image/239mimurosengen.jpg"/></td>
        <td class="text"><image class="img" src="image/240kawaguchisengen.jpg"/></td>
      </tr>
      <tr>
        <td class="text">東口本宮浅間神社</td>
        <td class="text">北口本宮浅間神社</td>
        <td class="text">冨士御室浅間神社</td>
        <td class="text">河口浅間神社</td>
      </tr>
    </table><br>



    <h2> 仙台六芒星 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/167oosaki.jpg"/></td>
        <td class="text"><image class="img" src="image/170tsutsujigaoka.jpg"/></td>
        <td class="text"><image class="img" src="image/171sendaitou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">大崎八幡宮</td>
        <td class="text">榴岡天満宮</td>
        <td class="text">仙台東照宮</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/191miyagiken.jpg"/></td>
        <td class="text"><image class="img" src="image/172aoba.jpg"/></td>
        <td class="text"><image class="img" src="image/169sendaiatago.jpg"/></td>
      </tr>
      <tr>
        <td class="text">宮城縣護國神社</td>
        <td class="text">青葉神社</td>
        <td class="text">愛宕神社</td>
      </tr>
    </table><br>

    <h2> 鎌倉五山 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/040kenchou.jpg"/></td>
        <td class="text"><image class="img" src="image/041engaku.jpg"/></td>
        <td class="text"><image class="img" src="image/046jufuku.jpg"/></td>
        <td class="text"><image class="img" src="image/042jouchi.jpg"/></td>
        <td class="text"><image class="img" src="image/045joumyou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">建長寺</td>
        <td class="text">円覚寺</td>
        <td class="text">寿福寺</td>
        <td class="text">浄智寺</td>
        <td class="text">浄妙寺</td>
      </tr>
    </table><br>

    <h2> 京都五山 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/009tenryuu.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">天龍寺</td>
        <td class="text">相国寺</td>
        <td class="text">建仁寺</td>
        <td class="text">東福寺</td>
        <td class="text">万寿寺</td>
      </tr>
    </table><br>

    <h2> 浅草七福神 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/035sensou.jpg"/></td>
        <td class="text"><image class="img" src="image/036asakusa.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/034imado.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">浅草寺</td>
        <td class="text">浅草神社</td>
        <td class="text">待乳山聖天</td>
        <td class="text">今戸神社</td>
        <td class="text">橋場不動院</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/032asakusaootori.jpg"/></td>
        <td class="text"><image class="img" src="image/033yoshiwara.jpg"/></td>
        <td class="text"><image class="img" src="image/029yasaki.jpg"/></td>
      </tr>
      <tr>
        <td class="text">石浜神社</td>
        <td class="text">鷲神社</td>
        <td class="text">吉原神社</td>
        <td class="text">矢先稲荷神社</td>
      </tr>
    </table><br>


    <h2> 日光二社一寺 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/087nikkou.jpg"/></td>
        <td class="text"><image class="img" src="image/086rinnou.jpg"/></td>
        <td class="text"><image class="img" src="image/088nikkoufutarasan.jpg"/></td>
        <td class="text"><image class="img" src="image/089daiyuu.jpg"/></td>
        <td class="text"><image class="img" src="image/090daiyuuinkinkaku.jpg"/></td>
      </tr>
      <tr>
        <td class="text">日光東照宮</td>
        <td class="text">日光輪王寺</td>
        <td class="text">日光二荒山神社</td>
        <td class="text">大猷院</td>
        <td class="text">金閣殿</td>
      </tr>
    </table><br>

    <h2> 秩父四社 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/205chichibu.jpg"/></td>
        <td class="text"><image class="img" src="image/204mitsumine.jpg"/></td>
        <td class="text"><image class="img" src="image/207hodosan.jpg"/></td>
        <td class="text"><image class="img" src="image/206imamiya.jpg"/></td>
      </tr>
      <tr>
        <td class="text">秩父神社</td>
        <td class="text">三峯神社</td>
        <td class="text">寶登山神社</td>
        <td class="text">今宮神社</td>
      </tr>
    </table><br>

    <h2> 東国三社 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/071kashima.jpg"/></td>
        <td class="text"><image class="img" src="image/069katori.jpg"/></td>
        <td class="text"><image class="img" src="image/070ikisu.jpg"/></td>
      </tr>
      <tr>
        <td class="text">鹿島神宮</td>
        <td class="text">香取神宮</td>
        <td class="text">息栖神社</td>
      </tr>
    </table><br>

    <h2> 三大弁財天 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/197enoshima.jpg"/></td>
      </tr>
      <tr>
        <td class="text">都久夫須麻神社</td>
        <td class="text">厳島神社</td>
        <td class="text">江島神社</td>
      </tr>
    </table><br>

    <h2> 日本三大稲荷 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/013fushimi.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/082kasama.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/109toyokawa.jpg"/></td>
      </tr>
      <tr>
        <td class="text">伏見稲荷大社</td>
        <td class="text">祐徳稲荷神社</td>
        <td class="text">笠間稲荷神社</td>
        <td class="text">最上稲荷</td>
        <td class="text">豊川稲荷</td>
      </tr>
    </table><br>

    <h2> 関東三大稲荷 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/082kasama.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/091oujiinari.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">笠間稲荷神社</td>
        <td class="text">白笹稲荷神社</td>
        <td class="text">王子稲荷神社</td>
        <td class="text">装束稲荷神社</td>
      </tr>
    </table><br>

    <h2> 関東三大天神 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/019yushima.jpg"/></td>
        <td class="text"><image class="img" src="image/037kameido.jpg"/></td>
        <td class="text"><image class="img" src="image/209yabo.jpg"/></td>
      </tr>
      <tr>
        <td class="text">湯島天満宮</td>
        <td class="text">亀戸天神社</td>
        <td class="text">谷保天満宮</td>
      </tr>
    </table><br>

    <h2> 江戸三大天神 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/019yushima.jpg"/></td>
        <td class="text"><image class="img" src="image/037kameido.jpg"/></td>
        <td class="text"><image class="img" src="image/065hirakawa.jpg"/></td>
        <td class="text"><image class="img" src="image/000gojou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">湯島天満宮</td>
        <td class="text">亀戸天神社</td>
        <td class="text">平河天満宮</td>
        <td class="text">五條天神社</td>
      </tr>
    </table><br>

    <h2> 江戸三名桜 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/192konnou.jpg"/></td>
        <td class="text"><image class="img" src="image/093shirayama.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">金王八幡宮</td>
        <td class="text">白山神社</td>
        <td class="text">円照寺</td>
      </tr>
    </table><br>

    <h2> 江戸三大相撲 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/000setagaya.jpg"/></td>
        <td class="text"><image class="img" src="image/193shibuyahikawa.jpg"/></td>
        <td class="text"><image class="img" src="image/220ooikashima.jpg"/></td>
      </tr>
      <tr>
        <td class="text">世田谷八幡宮</td>
        <td class="text">渋谷氷川神社</td>
        <td class="text">大井鹿嶋神社</td>
      </tr>
    </table><br>

    <h2> 五色不動 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/072meguro.jpg"/></td>
        <td class="text"><image class="img" src="image/249mejiro.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">目黒不動<br>瀧泉寺</td>
        <td class="text">目白不動<br>金乗院</td>
        <td class="text">目赤不動<br>南谷寺</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">目青不動<br>教学院</td>
        <td class="text">目黄不動<br>永久寺</td>
        <td class="text">目黄不動<br>最勝寺</td>
      </tr>
    </table><br>


    <h2> 関東厄除け三不動 </h2>
    <p> 天台宗 </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/152chibayaku.jpg"/></td>
        <td class="text"><image class="img" src="image/072meguro.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">千葉厄除け不動尊<br>妙泉寺</td>
        <td class="text">目黒不動尊<br>瀧泉寺</td>
        <td class="text">飛不動尊<br>正宝院</td>
      </tr>
    </table><br>

    <h2> 関東三大不動 </h2>
    <p> 真言宗 </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/051shinshou.jpg"/></td>
        <td class="text"><image class="img" src="image/210takahata.jpg"/></td>
        <td class="text"><image class="img" src="image/219fudougaoka.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">成田不動尊<br>新勝寺</td>
        <td class="text">高幡不動尊<br>金剛寺</td>
        <td class="text">不動ケ岡不動尊<br>總願寺</td>
        <td class="text">大山不動尊<br>大山寺</td>
      </tr>
    </table><br>

    <h2> 関東厄除け大師 </h2>
    <p> 真言宗空海 </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/000nishiarai.jpg"/></td>
        <td class="text"><image class="img" src="image/133kawasaki.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">西新井大師<br>總持寺</td>
        <td class="text">川崎大師<br>平間寺</td>
        <td class="text">観福寺大師堂</td>
      </tr>
    </table><br>

    <h2> 関東三大師 </h2>
    <p> 天台宗良源 </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/211sano.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/331kawagoetaishi.jpg"/></td>
      </tr>
      <tr>
        <td class="text">佐野厄除け大師<br>惣宗寺</td>
        <td class="text">青柳大師<br>龍蔵寺</td>
        <td class="text">川越大師<br>喜多院</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/212ashikaga.jpg"/></td>
        <td class="text"><image class="img" src="image/195jindai.jpg"/></td>
      </tr>
      <tr>
        <td class="text">拝島大師<br>本覚院</td>
        <td class="text">足利厄除け大師<br>龍泉寺</td>
        <td class="text">厄除け元三大師<br>深大寺</td>
      </tr>
    </table><br>

    <h2> 三大聖天 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/218kangi.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">歓喜院聖天</td>
        <td class="text">待乳山聖天</td>
        <td class="text">生駒聖天</td>
      </tr>
    </table><br>

    <h2> 准勅祭十二社 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/094nedu.jpg"/></td>
        <td class="text"><image class="img" src="image/000kanda.jpg"/></td>
        <td class="text"><image class="img" src="image/037kameido.jpg"/></td>
        <td class="text"><image class="img" src="image/093shirayama.jpg"/></td>
      </tr>
      <tr>
        <td class="text">根津神社</td>
        <td class="text">神田明神</td>
        <td class="text">亀戸天神社</td>
        <td class="text">白山神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/092ouji.jpg"/></td>
        <td class="text"><image class="img" src="image/064hie.jpg"/></td>
        <td class="text"><image class="img" src="image/073shinagawa.jpg"/></td>
        <td class="text"><image class="img" src="image/077tomioka.jpg"/></td>
      </tr>
      <tr>
        <td class="text">王子神社</td>
        <td class="text">日枝神社</td>
        <td class="text">品川神社</td>
        <td class="text">富岡八幡宮</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/063akasakahikawa.jpg"/></td>
        <td class="text"><image class="img" src="image/059shibadai.jpg"/></td>
        <td class="text"><image class="img" src="image/208ookunitama.jpg"/></td>
        <td class="text"><image class="img" src="image/068washinomiya.jpg"/></td>
      </tr>
      <tr>
        <td class="text">赤坂氷川神社</td>
        <td class="text">芝大神宮</td>
        <td class="text">大國魂神社</td>
        <td class="text">鷲宮神社</td>
      </tr>
    </table><br>

    <h2> 平将門北斗七星 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/121kabuto.jpg"/></td>
        <td class="text"><image class="img" src="image/000kanda.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">鳥越神社</td>
        <td class="text">兜神社</td>
        <td class="text">神田明神</td>
        <td class="text">築土八幡神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000yoroi.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000karasumori.jpg"/></td>
      </tr>
      <tr>
        <td class="text">水稲荷神社</td>
        <td class="text">鎧神社</td>
        <td class="text">築土神社</td>
        <td class="text">烏森神社</td>
      </tr>
    </table><br>

    <h2> 三大輪王寺 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/086rinnou.jpg"/></td>
        <td class="text"><image class="img" src="image/015uenorinnou.jpg"/></td>
        <td class="text"><image class="img" src="image/173sendairinnou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">日光輪王寺</td>
        <td class="text">上野輪王寺</td>
        <td class="text">仙台輪王寺</td>
      </tr>
    </table><br>

    <h2> 日本三大仏 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/050koutoku.jpg"/></td>
        <td class="text"><image class="img" src="image/302takaoka.jpg"/></td>
      </tr>
      <tr>
        <td class="text">奈良大仏</td>
        <td class="text">鎌倉大仏</td>
        <td class="text">高岡大仏</td>
      </tr>
    </table><br>

    <h2> 三長三本 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/131ikegami.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/254hondo.jpg"/></td>
      </tr>
      <tr>
        <td class="text">長栄山本門寺</td>
        <td class="text">長興山妙本寺</td>
        <td class="text">長谷山本土寺</td>
      </tr>
    </table><br>

    <h2> 箱根三社 </h2>
    <p>  </p>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/225hakone.jpg"/></td>
        <td class="text"><image class="img" src="image/226kuzuryuu.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">箱根神社</td>
        <td class="text">九頭龍神社</td>
        <td class="text">箱根元宮</td>
      </tr>
    </table><br>

    <h2> 成田山別院 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/051shinshou.jpg"/></td>
        <td class="text"><image class="img" src="image/078fukagawa.jpg"/></td>
        <td class="text"><image class="img" src="image/332kawagoenarita.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/136yokohamanarita.jpg"/></td>
      </tr>
      <tr>
        <td class="text">成田山新勝寺</td>
        <td class="text">東京別院<br>深川不動尊</td>
        <td class="text">川越別院<br>本行院</td>
        <td class="text">札幌別院<br>新栄寺</td>
        <td class="text">横浜別院<br>延命院</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/105inuyamanarita.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">函館別院<br>函館寺</td>
        <td class="text">大阪別院<br>明王院</td>
        <td class="text">名古屋別院<br>大聖寺</td>
        <td class="text">福井別院<br>九頭龍寺</td>
      </tr>
    </table><br>

    <h2> 日蓮四大法難 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/159kyounin.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/198ryuukuchi.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">小松原法難<br>鏡忍寺</td>
        <td class="text">松葉ヶ谷法難<br>本圀寺</td>
        <td class="text">龍ノ口法難<br>龍口寺</td>
        <td class="text">伊豆法難<br>佛現寺</td>
      </tr>
    </table><br>

    <h2> 江戸六塔 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/000kanei.jpg"/></td>
        <td class="text"><image class="img" src="image/060zoujou.jpg"/></td>
        <td class="text"><image class="img" src="image/035sensou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">寛永寺</td>
        <td class="text">増上寺</td>
        <td class="text">浅草寺</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/131ikegami.jpg"/></td>
        <td class="text"><image class="img" src="image/000housen.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">池上本門寺</td>
        <td class="text">宝仙寺</td>
        <td class="text">天王寺</td>
      </tr>
    </table><br>


    <h2> 浄土宗七大本山 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/060zoujou.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/001zenkou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">知恩院</td>
        <td class="text">増上寺</td>
        <td class="text">光明寺</td>
        <td class="text">善光寺</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">金戒光明寺</td>
        <td class="text">知恩寺</td>
        <td class="text">清浄華院</td>
        <td class="text">善導寺</td>
      </tr>
    </table><br>

    <h2> 日蓮宗七大本山 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/233kuon.jpg"/></td>
        <td class="text"><image class="img" src="image/162tanjou.jpg"/></td>
        <td class="text"><image class="img" src="image/160seichou.jpg"/></td>
        <td class="text"><image class="img" src="image/000hokekyou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">久遠寺</td>
        <td class="text">誕生寺</td>
        <td class="text">清澄寺</td>
        <td class="text">法華経寺</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/232kitayamahonmon.jpg"/></td>
        <td class="text"><image class="img" src="image/131ikegami.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">北山本門寺</td>
        <td class="text">池上本門寺</td>
        <td class="text">妙顕寺</td>
        <td class="text">本圀寺</td>
      </tr>
    </table><br>

    <h2> 臨済宗九大本山 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/009tenryuu.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">南禅寺</td>
        <td class="text">天龍寺</td>
        <td class="text">相国寺</td>
        <td class="text">建仁寺</td>
        <td class="text">東福寺</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/040kenchou.jpg"/></td>
        <td class="text"><image class="img" src="image/041engaku.jpg"/></td>
      </tr>
      <tr>
        <td class="text">大徳寺</td>
        <td class="text">妙心寺</td>
        <td class="text">建長寺</td>
        <td class="text">円覚寺</td>
        <td class="text"></td>
      </tr>
    </table><br>

    <h2> 曹洞宗三大本山 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/285eihei.jpg"/></td>
        <td class="text"><image class="img" src="image/134souji.jpg"/></td>
        <td class="text"><image class="img" src="image/180shoubou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">永平寺</td>
        <td class="text">総持寺</td>
        <td class="text">正法寺</td>
      </tr>
    </table><br>


    <h2> 建武中興十五社 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/044kamakura.jpg"/></td>
        <td class="text"><image class="img" src="image/266iinoya.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/274kanegasaki.jpg"/></td>
      </tr>
      <tr>
        <td class="text">吉野神宮</td>
        <td class="text">鎌倉宮</td>
        <td class="text">井伊谷宮</td>
        <td class="text">八代宮</td>
        <td class="text">金崎宮</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/097komikado.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">小御門神社</td>
        <td class="text">菊池神社</td>
        <td class="text">湊川神社</td>
        <td class="text">名和神社</td>
        <td class="text">阿倍野神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/347yuuki.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">藤島神社</td>
        <td class="text">結城神社</td>
        <td class="text">霊山神社</td>
        <td class="text">四条畷神社</td>
        <td class="text">北畠神社</td>
      </tr>
    </table><br>

    <h2> 坂東三十三箇所 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/049hase.jpg"/></td>
        <td class="text"><image class="img" src="image/224shoufuku.jpg"/></td>
      </tr>
      <tr>
        <td class="text">杉本寺</td>
        <td class="text">岩殿寺</td>
        <td class="text">安養院</td>
        <td class="text">長谷寺</td>
        <td class="text">勝福寺</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">長谷寺</td>
        <td class="text">光明寺</td>
        <td class="text">星谷寺</td>
        <td class="text">慈光寺</td>
        <td class="text">正法寺</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/035sensou.jpg"/></td>
        <td class="text"><image class="img" src="image/354gumyou.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">安楽寺</td>
        <td class="text">慈恩寺</td>
        <td class="text">浅草寺</td>
        <td class="text">弘明寺</td>
        <td class="text">長谷寺</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/341chuuzen.jpg"/></td>
        <td class="text"><image class="img" src="image/339ooya.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">水澤寺</td>
        <td class="text">満願寺</td>
        <td class="text">中禅寺</td>
        <td class="text">大谷寺</td>
        <td class="text">西明寺</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/125oomi.jpg"/></td>
      </tr>
      <tr>
        <td class="text">日輪寺</td>
        <td class="text">佐竹寺</td>
        <td class="text">正福寺</td>
        <td class="text">楽法寺</td>
        <td class="text">大御堂</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/127kiyotaki.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/099chibadera.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">清瀧寺</td>
        <td class="text">圓福寺</td>
        <td class="text">龍正院</td>
        <td class="text">千葉寺</td>
        <td class="text">高蔵寺</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/153kasamori.jpg"/></td>
        <td class="text"><image class="img" src="image/164kiyomizukannon.jpg"/></td>
        <td class="text"><image class="img" src="image/156nago.jpg"/></td>
      </tr>
      <tr>
        <td class="text">笠森寺</td>
        <td class="text">清水寺</td>
        <td class="text">那古寺</td>
      </tr>
    </table><br>

    <h2> 全国東照宮 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/171sendaitou.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/148mitotou.jpg"/></td>
        <td class="text"><image class="img" src="image/087nikkou.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">仙台東照宮</td>
        <td class="text">出羽三山神社</td>
        <td class="text">水戸東照宮</td>
        <td class="text">日光東照宮</td>
        <td class="text">赤城神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/216serada.jpg"/></td>
        <td class="text"><image class="img" src="image/350senbatoushou.jpg"/></td>
        <td class="text"><image class="img" src="image/204mitsumine.jpg"/></td>
        <td class="text"><image class="img" src="image/205chichibu.jpg"/></td>
        <td class="text"><image class="img" src="image/018ueno.jpg"/></td>
      </tr>
      <tr>
        <td class="text">世良田東照宮</td>
        <td class="text">仙波東照宮</td>
        <td class="text">三峯神社</td>
        <td class="text">秩父神社</td>
        <td class="text">上野東照宮</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/036asakusa.jpg"/></td>
        <td class="text"><image class="img" src="image/061shiba.jpg"/></td>
        <td class="text"><image class="img" src="image/059shibadai.jpg"/></td>
        <td class="text"><image class="img" src="image/208ookunitama.jpg"/></td>
        <td class="text"><image class="img" src="image/229kunousan.jpg"/></td>
      </tr>
      <tr>
        <td class="text">浅草神社</td>
        <td class="text">芝東照宮</td>
        <td class="text">芝大神宮</td>
        <td class="text">大國魂神社</td>
        <td class="text">久能山東照宮</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/228shizuokasengen.jpg"/></td>
        <td class="text"><image class="img" src="image/265gosha.jpg"/></td>
        <td class="text"><image class="img" src="image/292ozaki.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/314hidatoushou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">静岡浅間神社</td>
        <td class="text">五社神社</td>
        <td class="text">尾崎神社</td>
        <td class="text">佐佳枝廼社</td>
        <td class="text">飛騨東照宮</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/118matsudaira.jpg"/></td>
        <td class="text"><image class="img" src="image/108iga.jpg"/></td>
        <td class="text"><image class="img" src="image/322nagoyatoushou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">鳳来山東照宮</td>
        <td class="text">龍城神社</td>
        <td class="text">松平東照宮</td>
        <td class="text">伊賀八幡宮</td>
        <td class="text">名古屋東照宮</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
        <td class="text"><image class="img" src="image/000.jpg"/></td>
      </tr>
      <tr>
        <td class="text">日吉東照宮</td>
        <td class="text">紀州東照宮</td>
        <td class="text">広島東照宮</td>
      </tr>
    </table><br>

    <h2> 全国護國神社 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/191miyagiken.jpg"/></td>
        <td class="text"><image class="img" src="image/083ibarakiken.jpg"/></td>
        <td class="text"><image class="img" src="image/202saitamaken.jpg"/></td>
        <td class="text"><image class="img" src="image/243yamanashiken.jpg"/></td>
        <td class="text"><image class="img" src="image/257niigataken.jpg"/></td>
      </tr>
      <tr>
        <td class="text">宮城縣護國神社</td>
        <td class="text">茨城縣護國神社</td>
        <td class="text">埼玉縣護國神社</td>
        <td class="text">山梨縣護國神社</td>
        <td class="text">新潟縣護國神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/320aichiken.jpg"/></td>
        <td class="text"><image class="img" src="image/311hidagokoku.jpg"/></td>
        <td class="text"><image class="img" src="image/304toyamaken.jpg"/></td>
        <td class="text"><image class="img" src="image/290ishikawaken.jpg"/></td>
        <td class="text"><image class="img" src="image/284fukuiken.jpg"/></td>
      </tr>
      <tr>
        <td class="text">愛知縣護國神社</td>
        <td class="text">飛騨護國神社</td>
        <td class="text">富山縣護國神社</td>
        <td class="text">石川護國神社</td>
        <td class="text">福井縣護國神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/345mieken.jpg"/></td>
      </tr>
      <tr>
        <td class="text">三重縣護國神社</td>
      </tr>
    </table><br>

    <h2> 全国総社 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/188mutsusousha.jpg"/></td>
        <td class="text"><image class="img" src="image/151hitachi.jpg"/></td>
        <td class="text"><image class="img" src="image/208ookunitama.jpg"/></td>
        <td class="text"><image class="img" src="image/222rokusho.jpg"/></td>
        <td class="text"><image class="img" src="image/113kou.jpg"/></td>
      </tr>
      <tr>
        <td class="text">陸奥総社宮</td>
        <td class="text">常陸国総社宮</td>
        <td class="text">大國魂神社</td>
        <td class="text">六所神社</td>
        <td class="text">大国霊神社</td>
      </tr>
      <tr>
        <td class="text"><image class="img" src="image/228shizuokasengen.jpg"/></td>
        <td class="text"><image class="img" src="image/271nanguuotabi.jpg"/></td>
        <td class="text"><image class="img" src="image/309hidasousha.jpg"/></td>
      </tr>
      <tr>
        <td class="text">静岡浅間神社</td>
        <td class="text">南宮御旅神社</td>
        <td class="text">飛騨総社</td>
      </tr>
    </table><br>

    <h2> 全国国分寺 </h2>
    <p>  </p>
    <table class="matome" border="5px" cellpadding="10">
      <tr>
        <td class="text"><image class="img" src="image/174mutsukoku.jpg"/></td>
        <td class="text"><image class="img" src="image/140shimousa.jpg"/></td>
        <td class="text"><image class="img" src="image/004shinano.jpg"/></td>
        <td class="text"><image class="img" src="image/312hidakokubun.jpg"/></td>
      </tr>
      <tr>
        <td class="text">陸奥国分寺</td>
        <td class="text">下総国分寺</td>
        <td class="text">信濃国分寺</td>
        <td class="text">飛騨国分寺</td>
      </tr>
    </table><br> -->

  </div>
  <footer class="site-footer">
    <p class="copyright">&#169;2019 Shumaikun</p>
  </footer>
</body>
</html>



<!--http://cgi.u.tsukuba.ac.jp/‾s1711520/goshuin/matome.html
