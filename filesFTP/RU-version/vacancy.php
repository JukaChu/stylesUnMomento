<?php 
$vakansii = dbQuery("SELECT id,url,name,preview, info, info2
FROM content WHERE parentid = 2987 AND ispublish = 1 ORDER BY showorder"); ?>

<main>
    <div class="container">
        <h1 class="main-title">
            Вакансии
        </h1>
    </div>
    <section class="cards-section  marginet-top">
        <div class="container">
            <div class="cards-section__container">
                <div class="cards-list cards-list--table">


                        <?php foreach ($vakansii as $key=>$r) { ?>

                                <a href="<?= $r["url"] ?>/" class="single-card  green">
                                    <div class="img">
                                        <img class="lazyload" data-src="<?php echo _TEMPL . 'build/img/vk-' ?><?php echo $key + 1  .'.png' ?>" alt="">
                                    </div>
                                    <div class="text">
                                        <span class="tag">Вакансии</span>
                                        <p><?= $r['name'] ?></p>
                                        <div class="bottom">
                                            <small><?php echo htmlspecialchars_decode($r['preview'], ENT_QUOTES); ?></small>
                                            <div class="btn btn--blue">Детальнее</div>
                                        </div>

                                    </div>
                                </a>
                                <div class="card-obt__text" style="display: none">
                                    <?php echo htmlspecialchars_decode($r['info'], ENT_QUOTES); ?>
                                    <?php echo htmlspecialchars_decode($r['info2'], ENT_QUOTES); ?>
                                </div>



                        <?php } ?>


                </div>

            </div>
        </div>

    </section>
    <?php include 'desk-buttons-nav.php'; ?>
</main>
