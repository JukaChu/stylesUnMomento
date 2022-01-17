<?php 
$vakansii = dbQuery("SELECT id,url,name,preview, info, info2
FROM content WHERE parentid = 2987 AND ispublish = 1 ORDER BY showorder"); ?>
    <div class="main_content block_margin clear_after">
            <?php include("company-menu.php"); ?>
        <div class="block_vacancies">
            <div class="vacancies-c">
    <?php foreach($vakansii  as $r) {?>
                <div class="one-vacancy-tab">
                    <div class="vacancy-tab-inner">
                        <div class="vacancy-header">
                            <div class="vacancy-info">
                                <span><b><?=$r['name']?></b></span>
                                <span><?php echo htmlspecialchars_decode($r['preview'],ENT_QUOTES);?></span>
                            </div>
                            <div class="more-btn showVacancy">Подробнее</div>
                        </div>

                        <div class="vacancy-hidden">
                             <div class="vacancy-desc">
                                <div class="vacancy-title">Требования:</div>
                                <div class="vacancy-text">
                                    <?php echo htmlspecialchars_decode($r['info'],ENT_QUOTES);?>
                                </div>
                                <div class="vacancy-title">Обязанности: </div>
                                <div class="vacancy-text">
                                    <?php echo htmlspecialchars_decode($r['info2'],ENT_QUOTES);?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php }?>
            </div>
        </div>
        <div class="container_catalog clear_after">
            <div class="vakansii-header-text">
                <p>&nbsp;</p>

                <p>Компания&nbsp;UNMOMENTO предлагает идеальный&nbsp;вариант трудоустройства для тех, кто хочет&nbsp;работать в крупной, интенсивно развивающейся&nbsp;компании!</p>
                <div class="margin-20">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Во первых, <strong>официальное оформление!</strong><br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Во вторых, <strong>обучение всем профессиям за счёт компании!</strong><br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Также, <strong>оплачиваемый отпуск и больничный!</strong><br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;И конечно, <strong>стабильная заработная плата: ставка + премии</strong></div>
                <p>А ещё, у нас:</p>
                <div class="margin-20"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Дружный коллектив!</strong><br />
                <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Гибкий график работы!</strong><br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;А при желании, тебя ждёт <strong>карьерный рост!</strong></div>
                <p>&nbsp;</p>
                С нетерпением ждем тебя, коллега ;)                
                <p>&nbsp;</p>
            </div>
        </div>
        <div class="block_phone">
            Обращайтесь по телефону: <span> 

            <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="tel:+380955015638">095 501 56 38</a>
            <br>
                Контактное лицо: </span> HR-manager Алёна
        </div>
    </div>