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
                            <div class="more-btn showVacancy">Детальніше</div>
                        </div>

                        <div class="vacancy-hidden">
                             <div class="vacancy-desc">
                                <div class="vacancy-title">Вимоги:</div>
                                <div class="vacancy-text">
                                    <?php echo htmlspecialchars_decode($r['info'],ENT_QUOTES);?>
                                </div>
                                <div class="vacancy-title">Обов'язки: </div>
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

            <p>Компанія UNMOMENTO пропонує ідеальний варіант працевлаштування для тих, хто хоче працювати в крупній компанії, яка інтенсивно розвивається!</p>

            <div class="margin-20">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span lang="uk-UA">По-перше, офіційне ОФОРМЛЕННЯ!</span><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span lang="uk-UA">По-друге, НАВЧАННЯ всіх професій за рахунок компанії!</span><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span lang="uk-UA">Також, оплачувана відпустка та лікарняний!</span><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span lang="uk-UA">І звичайно, СТАБІЛЬНА ЗАРОБІТНА ПЛАТА: ставка + премії</span></div>

            <p><span lang="uk-UA">А ще, у нас:</span>:</p>

            <div class="margin-20"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong><span lang="uk-UA">Дружній колектив!</span><br>
            <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong><span lang="uk-UA">Гнучкий графік роботи!</span><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span lang="uk-UA">А при бажанні, тебе чекає кар'єрний ріст!</span></div>

            <p>&nbsp;</p>

            <p style="margin-bottom: 0cm; line-height: 100%"><span lang="uk-UA">З нетерпінням чекаємо тебе, колега;)</p>

            <p>&nbsp;</p>
            </div>
        </div>
        <div class="block_phone">
        Звертайтесь за телефоном: <span> 
        <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="tel:+380955015638">095 501 56 38</a>
        <br>
        Контактна особа: </span> HR-manager Альона
        </div>
    </div>
</div>