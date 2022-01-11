<div class="main_content clear_after white_icons_bkgnd grey_icons_bkgnd">

<div class="main_content-inner order-content">

<div class="corporative-circles-section order-circles-section t-padding-20">
    <div class="c-cont">
        <div class="col-25">
            <div class="col-circle">
                <div class="circle">
                    <div class="outer-circle border-green"></div>
                    <div class="inner-circle">
                        <svg class="svg-icon" type="image/svg+xml">
                            <use xlink:href="#quality"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="c-text-cont">
                <div class="c-text-service">Гарантія якості</div>
            </div>
        </div>
        <div class="col-25">
            <div class="col-circle">
                <div class="circle">
                    <div class="outer-circle border-yellow"></div>
                    <div class="inner-circle">
                        <svg class="svg-icon" type="image/svg+xml">
                            <use xlink:href="#shirt"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="c-text-cont">
                <div class="c-text-service">Індивідуальний <br>підхід</div>
            </div>
        </div>
        <div class="col-25">
            <div class="col-circle">
                <div class="circle">
                    <div class="outer-circle border-orange"></div>
                    <div class="inner-circle">
                        <svg class="svg-icon" type="image/svg+xml">
                            <use xlink:href="#laundry"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="c-text-cont">
                <div class="c-text-service">Гіпоаллегенні <br>препарати</div>
            </div>
        </div>
        <div class="col-25">
            <div class="col-circle">
                <div class="circle">
                    <div class="outer-circle border-red"></div>
                    <div class="inner-circle">
                        <svg class="svg-icon" type="image/svg+xml">
                            <use xlink:href="#clock"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="c-text-cont">
                <div class="c-text-service">Оперативність <br>від 2 год</div>
            </div>
        </div>
    </div>
</div>
<h1 class="name_list zakaz-title">Замов кур'єра <span class="red-bkgnd">online</span></h1>
<div id="order_div" class="order_div" >
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
                <input onclick="gtag('event', 'Click', {'event_category': 'Order'});" type="submit" value="Замовити">
            </div>
        </div>  

        <br><br>
        <ul class="news_social_buttons">
            <li class="social_button social_button_fb"><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" taget="_blank" href="https://m.me/momento.un?ref=UNMOMENTO"><div class="social_button_fb"></div></a></li>
            <li class="social_button social_button_vb"><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" taget="_blank" href="viber://pa?chatURI=unmomentobot&context=ml1"><div class="social_button_vb"></div></a></li>
            <li class="social_button social_button_tg"><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" taget="_blank" href="https://t.me/unmomento_bot"><div  class="social_button_tg"></div></a></li>
        </ul>
        <ul class="news_social_buttons">
            <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
            <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
        </ul>

  </div>
  </form>
  </div>
  <div class="corporative-circles-section order-circles-section">
    <div class="c-cont">
        <div class="col-25">
            <div class="col-circle">
                <div class="circle">
                    <div class="outer-circle border-blue"></div>
                    <div class="inner-circle">
                        <svg class="svg-icon" type="image/svg+xml">
                            <use xlink:href="#water"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="c-text-cont">
                <div class="c-text-service">Ефективне чищення</div>
            </div>
        </div>
        <div class="col-25">
            <div class="col-circle">
                <div class="circle">
                    <div class="outer-circle border-yellow"></div>
                    <div class="inner-circle">
                        <svg class="svg-icon" type="image/svg+xml">
                            <use xlink:href="#ironing"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="c-text-cont">
                <div class="c-text-service">Бережне прасування</div>
            </div>
        </div>
        <div class="col-25">
            <div class="col-circle">
                <div class="circle">
                    <div class="outer-circle border-orange"></div>
                    <div class="inner-circle">
                        <svg class="svg-icon" type="image/svg+xml">
                            <use xlink:href="#threads"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="c-text-cont">
                <div class="c-text-service">Копіткий ремонт</div>
            </div>
        </div>
        <div class="col-25">
            <div class="col-circle">
                <div class="circle">
                    <div class="outer-circle border-red"></div>
                    <div class="inner-circle">
                        <svg class="svg-icon" type="image/svg+xml">
                            <use xlink:href="#eco"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="c-text-cont">
                <div class="c-text-service">Екологічна упаковка</div>
            </div>
        </div>
    </div>
</div>
<div class="header-search static-search-block">
    <div class="hs-wrap c-box-920">
        <div class="hs-title">Знайти послугу</div>
        <div class="search-form">
            <form method="get" id="sform" name="sform" action="/search-result/">
                <input type="text" id="stext" name="stext" autocomplete="off" placeholder="Пошук послуги...">
                <div class="searchsubmit">
                        <i class="fa fa-search"></i><input type="submit" class="menuupd_searchsubmit bluebutton" value="">
                        Знайти послугу
                </div>
            </form>
        </div>
        <span class="vfix"></span>
    </div>
</div>
</div>
</div>

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
  <div class="main_content clear_after grey_icons_bkgnd" id="onemoretirm">
  </div>
