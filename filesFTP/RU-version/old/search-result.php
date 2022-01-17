<?php

//print_r($_GET);

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
<div class="service-search-results-wrap main_content block_margin">
    <div class = "content_cloud">
        <div class = "wrapper-left clear_after">
            <div class ="whats-up">Что Вас интересует?</div>
            <div class = "shuba-search"><form id="form" method="get" action="/search-result/">
        <input id="autocomplete" required name="stext"  value="<?php echo  $stext; ?>" type="text"><i class="fa fa-search"><input type="submit" value=""></i></form></div>
        </div>
    </div>
    <div class="service-search-results-title">
        Результат поиска
    </div>
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

    <div class="clear_after">
        <div class="service-search-results-extralinks">
            <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="tel:+380444952495">
                <div class="service-search-results-extralink">
                    <img loading="lazy" class="" src="/templates/img/service-icon1.jpg" /> (044) 495-2-495
                </div>
            </a>
            <div class="service-search-results-extralink">
                <a href="/uslugi/distantsionnyy-zakaz.html" target="_blank">
                    <img loading="lazy" class="" src="/templates/img/service-icon2.jpg" /> Доставка
                </a>
            </div>
            <div class="service-search-results-extralink">
                <a href="/o-kompanii/kontakty.html" target="_blank">
                    <img loading="lazy" class="" src="/templates/img/service-icon3.jpg" /> Пункты приема
                </a>
            </div>
        </div>
        <div class="container_feedback">
            <div class="title">Обратная связь</div>
            <div class="container_form">
                <div class="input"><input type="name" name="" value="" placeholder="Имя"></div>
                <div class="input"><input type="name" name="" value="" placeholder="E-mail"></div>
                <textarea name=""  placeholder="Сообщение"></textarea>
                <input type="submit" name="" value="Отправить">
            </div>
        </div>
    </div>
</div>
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
  <div class="main_content zerosearch">
    <div>По вашему запросу ничего не найдено </div>
    <span><a  href="<?=_SITE?>">← На главную </a></span>
  </div>
  <?
}
