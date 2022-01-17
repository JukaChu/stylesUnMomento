<div class="container_sevise inner sideheight">
		<div class="main_content block_margin clear_after sideheight">
			<div class="container_prise">	
				<div class="sidebar">

				<?
				 $art = dbQuery("SELECT id,name,info FROM articles  WHERE ispublish = 1 AND parentid = $head[id] ORDER BY rand() LIMIT 0,3");
 $num_rows = count($art);?>

					<div  class="top_button violet"  <?if ( $num_rows == 0) { echo('style="display:none;"');

} ?>>
						Статті
					</div>
                    	<div class="container_articles" style="">
<?

foreach($art as $r)
  {
        $url = "/stati/" . create_urlname($r["name"]) . "_" . $r['id'];
	?>
                          <a href="<?= $url?>" class="blocl_training">
							<div class="title"><?=$r["name"]?> </div>
							<div class="desc"> <?=maxsite_str_word(strip_tags(htmlspecialchars_decode($r['info'])), 20, " ")?>...  </div>
							<div class="button_next">далее</div>
				    	</a>
				    	<div style="clear:both;"></div>
				<br />	<br />	<br />
      	<?
}
?>
            </div>
					<div  class="top_button">
                                            Послуги
					</div>
  <?php
$blacklist_arr = array(3381, 3383, 3384, 3385, 3386);
$arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 23 AND ispublish = 1 AND id != $head[id] AND id NOT IN (".implode(',', $blacklist_arr).") ORDER BY rand() LIMIT 0,3 ");

foreach($arr as $r)
{
	$img = getImageById($r["imid"]);
	?>
					<a href="/<?=$r["url"]?>" class="block_servise">
						<div class="foto" style="background-image:url(/images/files/<?=$img["image"]?>)"></div>
						<div class="block_info">
							<span class='vfix'></span>
							<div class="container_vfix">
								<div class="name">
								   <?=$r["name"]?>
								</div>
							</div>
						</div>
					</a>
   	<?
}
?>
		</div>


				<div class="block_prise blcontainer_loyality">
					<div class="block_brendinner clear_after">
<?$main_img=getMainImage($head["id"], '1' );

?>
						<div class="foto" style="background-image:url(/images/files/<?=$main_img['image']?>)"></div>

						<div class="block_info">
							<h1 class="name"><?=$head["name"];?></h1>
							<div class="desc"><?=htmlspecialchars_decode($head["preview"],ENT_QUOTES)?>
							</div>
							<div class="container_result_desc clear_after">
								<?= htmlspecialchars_decode($head["info"]) ?>
								<?=htmlspecialchars_decode($head["additional"],ENT_QUOTES)?>
							</div>
						</div>
					</div>
					<?php /*
					<div class="social" style="margin: 0px 0px 20px;">
						<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"></div>
						</div>
					*/?>
					<div class="um-btns-wrap">
						<div class="col-cont">
							<div class="col-33">
								<div class="um-btn btn-blue callPopupForm">Зробити замовлення</div>
							</div>
							<div class="col-33">
								<div class="um-btn btn-purple showForm">Передзвоніть мені</div>
							</div>
							<div class="col-33">
								<a href="/o-kompanii/kontakty.html" class="um-btn btn-green">Пункти прийому</a>
							</div>
						</div>
						<div class="um-form-wrap um-hidden">
							<div class="um-form-close"></div>
							<form method="post" target="_srframe" action="/request.php?action=add&id=10">
								<div class="input">
									<input type="text" name="f50" required="" placeholder="Ваш телефон">
										<input type="hidden" name="f51" id="f51" />
								</div>
								<input class="um-btn btn-purple" type="submit" value="Замовити зворотній дзвінок">
							</form>
						</div>
					</div>
					<div class="block_thanks">
						​Коллектив UNMOMENTO свидетельствует Вам свое почтение и благодарит ​з​а проявленный интерес к нашей Компании. 
						​Будем рады быть Вам полезны!<br>
						Директор по развитию , Черныш Александр, тел: <b>495-2-495,</b> моб: <b>067 322 73 93</b>
						<div class="email">
							E-MAIL: <span>a.chernysh@ua.unmomento.com.ua</span>
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
		</div>
	</div>