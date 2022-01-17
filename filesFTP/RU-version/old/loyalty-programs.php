	<div class="container_sevise loyalty_programs def  sideheight">
		<div class="main_content block_margin clear_after">
			<h1 class="name_list">Программы лояльности</h1>
			<div class="catalog_servise">
				<?php $sql = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = '$head[id]' AND ispublish = 1 ORDER BY id DESC");
				foreach($sql as $item) {
					$img = getImageById($item["imid"]);
					?>
				<a href="/<?=$item["url"]?>/" class="block_servise">
					<div class="foto" style="background-image:url(/images/files/<?=$img["image"]?>)"></div>			
				</a>
				<?php } ?>
			</div>
		</div>
	</div>