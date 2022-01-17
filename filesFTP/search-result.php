<main>
<?php

$stext = strip_tags(str_replace(array("<?","?>","+","-","_","/","\\","(",")"),"",$_GET['stext']));
$arr = explode(" ",$stext);

if(isset($_GET['itemid']))
{
  $where = " WHERE id =  " . intval($_GET['itemid']);
}
else {
  $where = " WHERE hideinsearch = 0 AND MATCH (name) AGAINST (:stext1) > 0  ";
}

  $params[':stext1'] = $stext;
  $params[':stext2'] = $stext;
  $params[':stext3'] = $stext;
  $where2 = array();
/*foreach($arr as $current)
{
  if($current == "")
  {
    continue;
  }
  if(mb_strlen($current) < 3)
  {
    continue;
  }
      if(strlen($current) >= 3 && in_array( substr($current, strlen($current) - 1, 1), array("и","ы")))
      {
          $current = substr($current, 0, strlen($current) - 1);
      }

  //$where3 = $where." AND LCASE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(CONCAT(pages.caption, pages.name,pages.page_content),'-',''),'-',''),'.',''),'/',''),'\\\\',''),' ','')) RLIKE '".strtolower_utf8($current)."'";
  $where2[] = "LCASE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(CONCAT(prices.name),'-',''),'-',''),'.',''),'/',''),'\\\\',''),' ','')) RLIKE '".strtolower_utf8($current)."'";

}*/

$sql_text = "SELECT *, (MATCH (name) AGAINST (:stext2)) as relevant FROM prices  $where
ORDER BY relevant DESC ";

if(count($where2) > 0)
{
  $sql_text .= 'AND(' . implode(' OR ',$where2) . ')';
}



//echo $sql_text;
//$count_sql_str = "SELECT count(*) FROM ( ".$sql_text." ) ";
//echo $count_sql_str;




$rt = dbQuery($sql_text, $params);



$zcounter = count($rt);

if($zcounter > 0)
{
  ?>

            <div class="container">
                <h1 class="main-title">
                    Результат поиска
                </h1>
            </div>
            <section class="search-page">
                <div class="container">
                    <div class="search-bl">
                        <div class="search-cont">
                            <form method="get" id="sform" name="sform" action="/search-result/">
                                <input class='search-field' type="text" id="stext" name="stext" autocomplete="off" placeholder="Пошук послуги...">
                                <div class="searchsubmit">

                                    <input type="submit" class="menuupd_searchsubmit bluebutton"
                                           value="">
                                    Пошук
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="search__cont">
                        <div class="price-list">
                            <div class="table_prise clear_after">
                                <div class="hed_row check_block ">
                                    <div class="content_col"><div id="showSelected" class="square_check "></div>Только выбранные</div>
                                    <div class="content_col">Ед. изм</div>
                                    <div class="content_col">Аквалайт</div>
                                    <div class="content_col">Unmomento</div>
                                    <div class="content_col"> Premium</div>
                                </div>
                                <?php foreach($rt as $item) {?>
                                    <div class="content_row check_block<?= ($item["isaction"] == 1 ? " action" : "") ?>">
                                        <div class="content_col"><?= $item["name"] ?></div>
                                        <div class="content_col"><?= $item["unit"] ?></div>
                                        <div class="content_col">
                                            <?php if($item["price1"] > 0) {?>
                                                <?= $item["price1"] ?><?php } ?></div>
                                        <div class="content_col">
                                            <?php if($item["price2"] > 0) {?>
                                                <?= $item["price2"] ?><?php } ?>
                                        </div>
                                        <div class="content_col"><?php if($item["price3"] > 0) {?>
                                                &nbsp;&nbsp;<?= $item["price3"] ?><?php } ?></div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-call-back">
                        <div class="fran-form">
                            <div class="container_feedback um-fran-form " id="orderSend">
                                <div class="title">Зателефонуйте мені</div>
                                <div class="container_form clear_after">
                                    <iframe id="f_rframe" name="f_rframe" style="display:none;" ></iframe>
                                    <form method="post" target="f_rframe"  action="/request.php?action=add&id=10">
                                        <div class="input"><input required name="f90" type="name" id="f90"   value="" placeholder="Ім'я"></div>
                                        <div class="input"><input required name="f50" type="name"    value="" placeholder="Телефон"></div>
                                        <input type="hidden" name="f51" id="f51" value="Курьер">
                                        <input type="submit"  class="btn btn--blue btn--big" onclick="fbq('track', 'SubmitApplication');" name="" value="Відправити">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <?php include 'desk-buttons-nav.php'; ?>


<script>
    $(document).ready(function(){
        $(function() {
            var availableTags;
            $.ajax({
                url: '/ajax.php',
                method: 'POST',
                data: {action:'get_autocomplete'},

                success: function(data) {

                     availableTags = JSON.parse(data);
                     $( "#autocomplete" ).autocomplete({
                         source: availableTags
                     });
                }
            });
        });
        $( "#autocomplete" ).autocomplete({
            select: function() {$("#form").submit();}
        });
    });

</script>
  <?php
}

if ($zcounter == 0)
{
  ?>
  <div class="container">
      <div class="  no-results">
          <div>По вашему запросу ничего не найдено </div>
          <span><a  href="<?=_SITE?>">← На главную </a></span>
      </div>

  </div>
  <?
}
?>

</main>
