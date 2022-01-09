<?php $url = $_SERVER[REQUEST_URI]; $parts = parse_url($url); parse_str($parts['query'], $query);?>


<div class="container">
    <h1 class="main-title"><?=$head["name"];?></h1>
</div>
<section class="service-page">
    <div class="container">
        <div class="service-page__container">
            <div class="service-page__head">

                <div class="service-slider swiper-container ">
                    <div class="swiper-wrapper">
                        <?php $images = getImages($head['id'],1);
                        foreach($images as $image){
                        if($image['is_main'] != 1) {?>
                        <div class="img swiper-slide">
                            <img src="/images/files/<?php echo $image['image'] ?>" alt="">
                        </div>
                        <?php }
                        }?>
                    </div>
                </div>
            <div class="service-page__cont desk-only">
                <div class="fran-form">
                    <div class="container_feedback um-fran-form " id="orderSend">
                        <div class="title">Залишити заявку</div>
                        <div class="container_form clear_after">
                            <iframe id="f_rframe" name="f_rframe" style="display:none;" ></iframe>
                            <form method="post" target="f_rframe"  action="/request.php?action=add&id=10">
                                <div class="input"><input required name="f79" type="name"    value="" placeholder="Ім'я"></div>
                                <div class="input"><input required name="f50" type="text"    maxlength="17" class="setMask" value="" placeholder="Телефон"></div>
                                <textarea  name="f55" placeholder="Повідомлення"></textarea>
                                <input type="submit"  class="btn btn--blue btn--big" name="" value="Відправити">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="service-page__text">
                <?= htmlspecialchars_decode($head["preview"], ENT_QUOTES) ?>
                <div class="open-ser-txt">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <?php
            $sub_service_arr = array(3381, 3383, 3384, 3385, 3386, 1762);
            $sub_services = dbQuery("SELECT id,url,name,preview,info2 FROM content WHERE id IN (".implode(',', $sub_service_arr).") ORDER BY showorder");
            if(count($sub_services)>0){ ?>
                <div class="service-page__corp-list">



                    <?php foreach ($sub_services as $sub_service){
                        $images = getImages($sub_service['id'],1); ?>
                        <a href="<?=$sub_service['url']?>" class="corp-list__link">
                            <div class="img">
                                <img class="lazyload" data-src="/images/files/<?=$images[5]["image"]?>" alt="<?=$sub_service['name']?>">
                            </div>
                            <div class="text">
                                <p><?=htmlspecialchars_decode($sub_service['name'])?></p>
                                <div class="btn btn--blue">Детальніше</div>

                            </div>
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="service-page__adv corporative-circles-section">
                <h2>Етапи роботи:</h2>
                <div class="c-cont circles-cont repeatAnimation">
                    <div class="col-33">
                        <div class="col-circle">
                            <div class="line line-green animate"></div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text">Пробна чистка / прання</div>
                        </div>
                    </div>
                    <div class="col-33">
                        <div class="col-circle">

                            <div class="line line-yellow animate"></div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text">Формування максимально вигідної пропозиції <small>(мінімум 20% від прайсу)</small></div>
                        </div>
                    </div>
                    <div class="col-33">
                        <div class="col-circle">

                            <div class="line line-red short animate"></div>
                            <div class="line line-red vertical animate"></div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text">Укладання договору</div>
                        </div>
                    </div>
                    <div class="long-line-wrap">
                        <div class="col-circle">
                            <div class="line line-red long animate"></div>
                        </div>
                    </div>
                    <div class="col-33">
                        <div class="col-circle" style="order: 1">

                            <div class="line line-red vertical left-line animate"></div>
                            <div class="line line-red short left-line animate"></div>
                            <div class="line line-green animate"></div>
                        </div>
                        <div class="c-text-cont" style="order: 2">
                            <div class="c-text">Безкоштовне виїзне обслуговування</div>
                        </div>
                    </div>
                    <div class="col-33">
                        <div class="col-circle">

                            <div class="line line-yellow animate"></div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text">Виконання замовлення</div>
                        </div>
                    </div>
                    <div class="col-33">
                        <div class="col-circle">

                        </div>
                        <div class="c-text-cont">
                            <div class="c-text">Безкоштовна доставка замовлення</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="call-form">
                <div class="fran-form">
                    <div class="container_feedback um-fran-form " id="orderSend">
                        <div class="container_form clear_after">
                            <iframe id="f_rframe" name="f_rframe" style="display:none;" ></iframe>
                            <form method="post" target="f_rframe"  action="/request.php?action=add&id=10">
                                <div class="input"><input required name="f79" type="name"    value="" placeholder="Ім'я"></div>
                                <div class="input"><input required name="f50" type="text"    maxlength="17" class="setMask" value="" placeholder="Телефон"></div>
                                <input type="submit"  class="btn btn--blue btn--big" name="" value="Відправити">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-page__adv corp-our-adv">
                <h2>Наші переваги:</h2>
                <div class="corp-adv__list">
                    <div class="cord-adv__single">
                        <div class="img">
                            <img src="<?php echo _TEMPL . 'build/img/crp-adv-1.png' ?>" alt="">
                        </div>
                        <p>Працюємо <br>в режимі 24/7</p>
                    </div>
                    <div class="cord-adv__single">
                        <div class="img">
                            <img src="<?php echo _TEMPL . 'build/img/crp-adv-2.png' ?>" alt="">
                        </div>
                        <p>Страхуємо ризики <br>відповідальності</p>
                    </div>
                    <div class="cord-adv__single">
                        <div class="img">
                            <img src="<?php echo _TEMPL . 'build/img/crp-adv-3.png' ?>" alt="">
                        </div>
                        <p>За Вами закріплюється <br>персональний менеджер</p>
                    </div>
                    <div class="cord-adv__single">
                        <div class="img">
                            <img src="<?php echo _TEMPL . 'build/img/crp-adv-4.png' ?>" alt="">
                        </div>
                        <p>Ми розробляємо індивідуальну програму лояльності виключно для Вас</p>
                    </div>
                    <div class="cord-adv__single">
                        <div class="img">
                            <img src="<?php echo _TEMPL . 'build/img/crp-adv-5.png' ?>" alt="">
                        </div>
                        <p>Оперативна доставка та прийом в слушний час і місце</p>
                    </div>
                </div>

            </div>

            <div class="partners-sec service-page__adv">
                <h2>Наші клієнти</h2>
                <div class="partn-list">
                    <div class="img">
                        <img src="/templates/img/partner1.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner2.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner3.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner4.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner5.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner6.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner7.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner8.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner9.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner10.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner11.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner12.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner13.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner14.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner15.png">
                    </div>
                    <div class="img">
                        <img src="/templates/img/partner16.png">
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<?php include 'desk-buttons-nav.php'; ?>
