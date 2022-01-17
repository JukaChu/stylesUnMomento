<main class="service-inner ">
    <div class="container">
        <h1 class="main-title">Заказ курьера</h1>
    </div>
    <div class="search-mobile-block search-mobile-block--visible">
        <div class="container">
            <div class="search-cont">
                <form method="get" id="sform" name="sform" action="/search-result/">
                    <input class='search-field' type="text" id="stext" name="stext" autocomplete="off"
                           placeholder="Поиск услуги...">
                    <div class="searchsubmit">

                        <input type="submit" class="menuupd_searchsubmit bluebutton"
                               value="">
                        Поиск
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="service-page service-call-cour">
        <div class="container">
            <div class="service-page__container">

                <div class="service-page__adv">
                    <h2>Наши преимущества</h2>
                    <div class="service-page__adv-list">
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/per-1.png' ?>" alt="">
                            </div>
                            <p>Гарантия <br>качества</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/per-2.png' ?>" alt="">
                            </div>
                            <p>Гипоаллергенные <br>препараты</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/per-3.png' ?>" alt="">
                            </div>
                            <p>Индивидуальный <br>подход</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/per-4.png' ?>" alt="">
                            </div>
                            <p>Оперативность <br>от 2 часов</p>
                        </div>
                    </div>
                </div>
                <div id="order_div" class="fran-form" >
                    <iframe id="rframe" name="rframe" style="display:none;" ></iframe>
                    <form class="styled-form styled-order-form" method="post" target="rframe" enctype="multipart/form-data" action="/request.php?action=add&id=1">
                        <div class="container_fran">
                            <div class="form_row">
                                <div class="form_label"><div class="form_label_txt blue_label white_label_txt">Ваше имя<span>*</span></div></div>
                                <div class="form_input"><input required name="f77" type="text" placeholder="Ваше имя"></div>
                            </div>
                            <div class="form_row">
                                <div class="form_label"><div class="form_label_txt green_label white_label_txt">Контактный номер телефона:<span>*</span></div></div>
                                <div class="form_input"><input required name="f3" class="setMask" type="text" placeholder="Номер телефона" id="cont"></div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Адрес приема заказа:</div>
                                <div class="form_input"><input required name="f78" type="text" ></div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Дата приема/доставки заказа:</div>
                                <div class="form_input">
                                    <input type="text" class="datePicker" name="f6" value="<?php echo date('d.m.Y'); ?>" placeholder="<?php echo date('d.m.Y'); ?>">
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Предпочтительное время приема:</div>
                                <div class="form_input">
                                    <div class="date_col services_block">
                                        <div class="select-wrap">
                                            <div class="select-btn selectOpen">Выберите из списка</div>
                                            <div class="hidden-select">
                                                <div class="select-row">
                                                    <input type="radio" id="time_1" name="f83" value="до 9:00">
                                                    <label for="time_1">до 9:00</label>
                                                </div>
                                                <div class="select-row">
                                                    <input type="radio" id="time_2" name="f83" value="с 9:00 - 12:00">
                                                    <label for="time_2">с 9:00 - 12:00</label>
                                                </div>
                                                <div class="select-row">
                                                    <input type="radio" id="time_3" name="f83" value="с 12:00 - 15:00">
                                                    <label for="time_3">с 12:00 - 15:00</label>
                                                </div>
                                                <div class="select-row">
                                                    <input type="radio" id="time_4" name="f83" value="с 15:00 - 18:00">
                                                    <label for="time_4">с 15:00 - 18:00</label>
                                                </div>
                                                <div class="select-row">
                                                    <input type="radio" id="time_5" name="f83" value="после 18">
                                                    <label for="time_5">после 18</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="date_col checkbox_block">
                                        <input type="checkbox" name="f81">
                                        <div class="checkmark"></div>
                                        <label class="checkbox_label">Срочная чистка</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Вид услуги:</div>
                                <div class="form_input">
                                    <div class="select-wrap">
                                        <div class="select-btn selectOpen">Выберите из списка</div>
                                        <div class="hidden-select">
                                            <div class="select-row">
                                                <input type="radio" id="thing_1" name="f84" value="Одежда, обувь, другие вещи">
                                                <label for="thing_1">Одежда, обувь, другие вещи</label>
                                            </div>
                                            <div class="select-row">
                                                <input type="radio" id="thing_2" name="f84" value="Чистка мягкой мебели">
                                                <label for="thing_2">Чистка мягкой мебели</label>
                                            </div>
                                            <div class="select-row">
                                                <input type="radio" id="thing_3" name="f84" value="Шторы и гардины">
                                                <label for="thing_3">Шторы и гардины</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--div class="form_row">
                                <div class="form_label">Коментарии:</div>
                                <div class="form_input">
                                    <textarea name="f10"></textarea>
                                </div>
                            </div-->
                            <div class="form_row">
                                <div class="form_label">Email:</div>
                                <div class="form_input"><input name="f2" type="text" ></div>
                            </div>
                            <div class="form_row submit">
                                <div class="form_label"><span>*</span> - Обязательные поля для заполнения</div>
                                <div class="form_input">
                                    <input class="btn btn--blue btn--big" onclick="gtag('event', 'Click', {'event_category': 'Order'});" type="submit" value="Заказать">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="service-page__adv">
                    <h2>Составляющие идеального сервиса</h2>
                    <div class="service-page__adv-list">
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/com-1.png' ?>" alt="">
                            </div>
                            <p>Эффективная <br>чистка</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/com-2.png' ?>" alt="">
                            </div>
                            <p>Бережная <br>глажка</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/com-3.png' ?>" alt="">
                            </div>
                            <p>Кропотливый <br>ремонт</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/com-4.png' ?>" alt="">
                            </div>
                            <p>Экологичная упаковка</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <?php include 'desk-buttons-nav.php'; ?>

</main>



  <script>
    $(document).ready(function(){
        setTimeout(function(){

            $('#onemoretirm').append(`
        <div class="container clear_after">
            <div class="slider-section slider-section-price">
                <div class="slider-wrap">
                    <div class="slide">
                        <a href="<?php echo _SITE; ?>novosti/zashitis-ot-virusov/" class="slide imageId9999999" style="background-size:cover;background-image: url('/images/files/1_141_30042020181930_1.jpg');"></a>
                    </div>
                    <div class="slide youtube-slide" id="youtube-slide">
                        <iframe id="zakaz-video" src="https://www.youtube.com/embed/WU-haYcrkvg?rel=0&controls=0&showinfo=0&enablejsapi=true" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
            `);

            var mainPageSlider = $('.slider-wrap').bxSlider({
                slideMargin: 0,
                controls: true,
                pager: false,
                useCSS: false,
                auto: true,
                autoStart: true,
                autoControls: false,
                responsive: true,
                pause: 5000,
                speed: 2000
            });
        
            $('.slider-wrap').animate({opacity: 1}, 500);
            //Слайдер на внутренней услуг
            function sliderInit(initBlock, args){
                if(initBlock.children().length > 1){       
                    sliderInner = initBlock.bxSlider({
                        auto: true,
                        stopAutoOnClick: true,
                        pager: true
                    });
                }
            }

        },4000);
    });
  </script>

