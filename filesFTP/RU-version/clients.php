<?php 
	$arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 0) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 0) as imformat,info2 FROM content WHERE parentid = 2813 AND ispublish = 1 ORDER BY showorder");
?>


<main class="service-inner">
    <div class="container">
        <h1 class="main-title">Наши клиенты и партнеры</h1>
    </div>
    <section class="service-page">
        <div class="container">
            <div class="clients-all_list">
                <?php
                foreach($arr as $r)
                {
                    $img = getResizeImageById($r["imid"],"w",array("width"=>162),$r["imformat"]);
                    ?>
                    <a href="javascript:void()" class="single-client-block">
                        <img class="lazyload" data-src="<?= $img ?>" alt="">
                    </a>
                    <?
                }
                ?>

            </div>
        </div>
    </section>
    <?php include 'desk-buttons-nav.php'; ?>
</main>


