<?php 
	$arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 0) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 0) as imformat,info2 FROM content WHERE parentid = 2813 AND ispublish = 1 ORDER BY showorder");
?>
<div class="main_content block_margin clear_after">
		<?php include("company-menu.php"); ?>
		<div class="container_catalog clear_after">			
			<?php
				foreach($arr as $r)
				{
					$img = getResizeImageById($r["imid"],"w",array("width"=>162),$r["imformat"]);
				?>
					<a href="#" class="partners_block">
						<span class='vfix'></span>
						<img src="<?= $img ?>">
					</a>
				<?
				}
			?>
		</div>
		<div class="feedback-wrap">
			<div class="top_about clear_after">
				<div class="container_name">
					<span class="vfix"></span>
					<div class="container_vfix">
						<div class="block_info">
							<div class="title">
								Відгуки
							</div>
							<div class="desc_title">
								UNMOMENTO<br>
								Більше ніж ХІМЧИСТКА!
							</div>
						</div>
					</div>
				</div>
				<div class="container_list feedback-container clear_after">
					<a href="templates/images/feedback/img029.pdf" class="one-quater">
						<div class="feedback-image">
							<img class="fits" src="templates/images/feedback/feedback1.jpg" alt="good feedback">
						</div>
					</a>
					<a href="templates/images/feedback/img028.pdf" class="one-quater">
						<div class="feedback-image">
							<img class="fits" src="templates/images/feedback/feedback2.jpg" alt="good feedback">
						</div>
					</a>
					<a href="templates/images/feedback/img027.pdf" class="one-quater">
						<div class="feedback-image">
							<img class="fits" src="templates/images/feedback/feedback3.jpg" alt="good feedback">
						</div>
					</a>
					<a href="templates/images/feedback/img025.pdf" class="one-quater">
						<div class="feedback-image">
							<img class="fits" src="templates/images/feedback/feedback4.jpg" alt="good feedback">
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

