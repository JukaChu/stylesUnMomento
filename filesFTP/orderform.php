<main class="service-inner ">
    <div class="container">
        <h1 class="main-title">Замовлення кур'єра</h1>
    </div>
    <div class="search-mobile-block search-mobile-block--visible">
        <div class="container">
            <div class="search-cont">
                <form method="get" id="sform" name="sform" action="/search-result/">
                    <input class='search-field' type="text" id="stext" name="stext" autocomplete="off"
                           placeholder="Пошук послуги...">
                    <div class="searchsubmit">

                        <input type="submit" class="menuupd_searchsubmit bluebutton"
                               value="">
                        Пошук
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="service-page service-call-cour">
        <div class="container">
            <div class="service-page__container">

                <div class="service-page__adv">
                    <h2>Наші переваги</h2>
                    <div class="service-page__adv-list">
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/per-1.png' ?>" alt="">
                            </div>
                            <p>Гарантія <br>якості</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/per-2.png' ?>" alt="">
                            </div>
                            <p>Гіпоаллегенні <br>препарати</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/per-3.png' ?>" alt="">
                            </div>
                            <p>Індивідуальний <br>підхід</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/per-4.png' ?>" alt="">
                            </div>
                            <p>Оперативність <br>від 2 год</p>
                        </div>
                    </div>
                </div>
                <div id="order_div" class="fran-form" >
                    <iframe id="rframe" name="rframe" style="display:none;" ></iframe>
                    <form class="styled-form styled-order-form" method="post" target="rframe" enctype="multipart/form-data" action="/request.php?action=add&id=1">
                        <div class="container_fran">
                            <div class="form_row">
                                <div class="form_label"><div class="form_label_txt blue_label white_label_txt">Ваше ім'я<span>*</span></div></div>
                                <div class="form_input"><input required name="f65" type="text" placeholder="Ваше ім'я"></div>
                            </div>
                            <div class="form_row">
                                <div class="form_label"><div class="form_label_txt green_label white_label_txt">Контактний номер телефону:<span>*</span></div></div>
                                <div class="form_input"><input required name="f3" class="setMask" type="text" placeholder="Номер телефону" id="cont"></div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Адреса прийому замовлення:</div>
                                <div class="form_input"><input required name="f4" type="text" ></div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Дата прийому/доставки замовлення:</div>
                                <div class="form_input">
                                    <div class="form_input">
                                        <input type="text" class="datePicker" name="f6" value="<?php echo date('d.m.Y'); ?>" placeholder="<?php echo date('d.m.Y'); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Бажаний час прийому:</div>
                                <div class="form_input">
                                    <div class="date_col services_block">
                                        <div class="select-wrap">
                                            <div class="select-btn selectOpen">Оберіть зі списку</div>
                                            <div class="hidden-select">
                                                <div class="select-row">
                                                    <input type="radio" id="time_1" name="f8" value="до 9:00">
                                                    <label for="time_1">до 9:00</label>
                                                </div>
                                                <div class="select-row">
                                                    <input type="radio" id="time_2" name="f8" value="з 9:00 - 12:00">
                                                    <label for="time_2">з 9:00 - 12:00</label>
                                                </div>
                                                <div class="select-row">
                                                    <input type="radio" id="time_3" name="f8" value="з 12:00 - 15:00">
                                                    <label for="time_3">з 12:00 - 15:00</label>
                                                </div>
                                                <div class="select-row">
                                                    <input type="radio" id="time_4" name="f8" value="з 15:00 - 18:00">
                                                    <label for="time_4">з 15:00 - 18:00</label>
                                                </div>
                                                <div class="select-row">
                                                    <input type="radio" id="time_5" name="f8" value="після 18">
                                                    <label for="time_5">після 18</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="date_col checkbox_block">
                                        <input type="checkbox" name="f67">
                                        <div class="checkmark"></div>
                                        <label class="checkbox_label">термінова чистка</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Вид послуги:</div>
                                <div class="date_col services_block">
                                    <div class="form_input">
                                        <div class="select-wrap">
                                            <div class="select-btn selectOpen">Оберіть зі списку</div>
                                            <div class="hidden-select">
                                                <div class="select-row">
                                                    <input type="radio" id="thing_1" name="f68" value="Одяг, взуття, інші речі">
                                                    <label for="thing_1">Одяг, взуття, інші речі</label>
                                                </div>
                                                <div class="select-row">
                                                    <input type="radio" id="thing_2" name="f68" value="Чистка м'яких меблів">
                                                    <label for="thing_2">Чистка м'яких меблів</label>
                                                </div>
                                                <div class="select-row">
                                                    <input type="radio" id="thing_3" name="f68" value="Штори та гардини">
                                                    <label for="thing_3">Штори та гардини</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Email:</div>
                                <div class="form_input"><input name="f2" type="text" ></div>
                            </div>
                            <!--div class="form_row">
                                <div class="form_label">Коментарі:</div>
                                <div class="form_input">
                                    <textarea name="f10"></textarea>
                                </div>
                            </div-->
                            <div class="form_row submit">
                                <div class="form_label"><span>*</span> - Обов'язкові поля для заповнення</div>
                                <div class="form_input">
                                    <input class="btn btn--blue btn--big" onclick="gtag('event', 'Click', {'event_category': 'Order'});" type="submit" value="Замовити">
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
                <div class="service-page__adv">
                    <h2>Складові ідеального сервісу</h2>
                    <div class="service-page__adv-list">
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/com-1.png' ?>" alt="">
                            </div>
                            <p>Ефективне <br>чищення</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/com-2.png' ?>" alt="">
                            </div>
                            <p>Бережне <br>прасування</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/com-3.png' ?>" alt="">
                            </div>
                            <p>Копіткий <br>ремонт</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/com-4.png' ?>" alt="">
                            </div>
                            <p>Екологічна <br>упаковка</p>
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

