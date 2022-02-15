<main>
    <div class="container">
        <h1 class="main-title">
            Обратная связь
        </h1>
    </div>
    <section class="service-page">
        <div class="container">
            <div class="service-page__container service-page__container--cour">

                <div class="service-page__delivery">
                    <div class="service-page__delivery-content service-page__delivery-content--wrap">
                        <div class="service-slider">
                            <div class="img">
                                <img class="lazyload" data-src="/images/files/1_3579_01112021174341_1.jpg" alt="">
                            </div>
                        </div>
                        <aside class="service-deliv">
                            <div class="styled-form">
                                <div class="form-title">Перезвоните мне</div>
                                <iframe id="_srframe" name="_srframe" style="display:none;"></iframe>
                                <form id="delivery<?php echo $head['id']; ?>" method="post" target="_srframe"
                                      action="/request.php?action=add&amp;id=14">
                                    <input type="hidden" name="f80" id="f80" value="<?= $head['name'] ?>"/>
                                    <div class="styled-form-inner">
                                        <div class="form-row">
                                            <div class="form-input"><input required="" name="f61" id="f61"
                                                                           type="text" placeholder="Имя"></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-input">
                                                <input required="" type="tel" name="f62" id="f62"
                                                       placeholder="+380 XX XXX XX XX" class="setMask">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-input">
                                                <input class="dateTimePicker" name="f64" id="f64" type="text"
                                                       maxlength="45" size="45" placeholder="Дата и время">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="select-wrap">
                                                <div class="select-btn selectOpen">Выберите из списка</div>
                                                <div class="hidden-select">
                                                    <div class="select-row">
                                                        <input type="radio" id="stuff_4" name="f63"
                                                               value="Пункт 1">
                                                        <label for="stuff_4">Пункт 1</label>
                                                    </div>
                                                    <div class="select-row">
                                                        <input type="radio" id="stuff_5" name="f63"
                                                               value="Пункт 2">
                                                        <label for="stuff_5">Пункт 2</label>
                                                    </div>
                                                    <div class="select-row">
                                                        <input type="radio" id="stuff_6" name="f63"
                                                               value="Пункт 3">
                                                        <label for="stuff_6">Пункт 3</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row submit-row">
                                            <input class="btn btn--blue" onclick="fbq('track', 'SubmitApplication');" type="submit"
                                                   value="Отправить">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="service-page__text visible">
                    <p>Компания UNMOMENTO дорожит своей 25-летней репутацией и лояльностью каждого клиента. Мы непрерывно совершенствуем уровень сервиса и качество предоставляемых услуг, чтобы Вам всегда было комфортно с нами. </p>
                    <p>Для нас ценно каждое мнение! </p>
                    <p>Если Вы хотите поделиться своим отзывом, предложениями по улучшению сервиса компании, выразить свою благодарность или урегулировать любые вопросы и претензии, Вы можете:</p>
                    <ul>
                        <li>связаться с нами по номерам <a href="tel:067 626 24 95">067 626 24 95<a> / <a href="tel:0444952495">044 495 24 95</a></li>
                        <li>отправить инф-ю на почту: <a href="mailto:info@unmomento.com.ua">info@unmomento.com.ua</a></li>
                        <li>заполнить форму обратной связи:</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="company__contacts">
        <div class="container">
            <div class="company__contacts-container company__contacts-container--lined">
                <div class="company-time">
                    <strong>Режим работы:</strong>
                    <span>Понедельник - суббота:</span>
                    <p>9.00-20.00</p>
                    <span>Воскресенье:</span>
                    <p>10.00-18.00</p>

                    <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="tel: +380444952495"
                       class="phone1 new_padding">
                        +38 (044) 495 2 495
                    </a>
                    <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="tel: +380676262495"
                       class="phone new_padding">
                        +38 (067) 62 62 495
                    </a>
                </div>
                <div class="company-map company-map__form">
                    <div class="fran-form">
                        <div class="container_feedback um-fran-form " id="orderSend">
                            <div class="container_form clear_after">
                                <iframe id="f_rframe" name="f_rframe" style="display:none;" ></iframe>
                                <form method="post" target="f_rframe"  action="/request.php?action=add&id=10">
                                    <div class="double-input">
                                        <div class="input"><input required name="f90" type="name" id="f90"   value="" placeholder="Имя"></div>
                                        <div class="input"><input required name="f50" type="name"    value="" placeholder="Телефон"></div>
                                    </div>
                                    <div class="input"><input required name="f90" type="name" id="f90"   value="" placeholder="Email"></div>
                                    <div class="textarea">
                                        <textarea name="" id=""  placeholder="Сообщение"></textarea>
                                    </div>
                                    <input type="hidden" name="f51" id="f51" value="Курьер">
                                    <input type="submit"  class="btn btn--blue btn--big" onclick="fbq('track', 'SubmitApplication');" name="" value="Отправить">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="desk-socials">
                <a target="_blank" href="https://m.me/momento.un?ref=UNMOMENTO" class="desk-soc">
                    <img src="<?php echo _TEMPL.'build/img/ds-ms.svg'?>" alt="">
                </a>
                <a target="_blank" href="viber://pa?chatURI=unmomentobot&context=ml1" class="desk-soc">
                    <img src="<?php echo _TEMPL.'build/img/ds-vb.svg'?>" alt="">
                </a>
                <a target="_blank" href="https://t.me/unmomento_bot" class="desk-soc">
                    <img src="<?php echo _TEMPL.'build/img/ds-tg.svg'?>" alt="">
                </a>
                <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento" class="desk-soc">
                    <img src="<?php echo _TEMPL.'build/img/ds-pm.svg'?>" alt="">
                </a>
                <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru" class="desk-soc">
                    <img src="<?php echo _TEMPL.'build/img/ds-as.svg'?>" alt="">
                </a>
            </div>
        </div>

    </section>

</main>


