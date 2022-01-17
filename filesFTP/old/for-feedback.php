<div class="main_content block_margin clear_after">
        <?php include("company-menu.php"); ?>
        <div class="container_catalog clear_after">         
            <div class="container_catalog_header"><?= htmlspecialchars_decode($head["info"]) ?></div>
            <div class="company-history-title">Шановні клієнти!</div>
            <div class="history-text-section">
                <div class="history-text-container feedback-text-container">
                    <p>Компанія UNMOMENTO дорожить своєю 25-річною репутацією та лояльністю кожного клієнта. Ми безперервно удосконалюємо рівень сервісу та якість послуг, щоб Вам завжди було комфортно з нами.</p>
                    <p>Ми цінуємо кожну думку!</p>
                    <p>Якщо Ви хочете поділитися своїм відгуком, пропозиціями щодо поліпшення сервісу компанії, висловити свою подяку або врегулювати будь-які питання та претензії, Ви можете:</p>
                    <p>
                        <ul>
                            <li>зв'язатися з нами за номерами <a href="tel:067 626 24 95">067 626 24 95<a> / <a href="tel:0444952495">044 495 24 95</a></li>
                            <li>отправить инф-ю на почту: <a href="mailto:info@unmomento.com.ua">info@unmomento.com.ua</a></li>
                            <li>заповнити форму зворотного зв'язку:</li>
                        </ul>
                    </p>
                    <p></p>
                    <div class="col-flex-33 col-callback-form hideContainer">
                        <div class="styled-form violet-form">
                            <iframe id="_srframe" name="_srframe"  style="display:none;"></iframe>
                            <form method="post" target="_srframe" action="/request.php?action=add&amp;id=10">
                                <div class="form-row">
                                    <div class="form-label">Ім'я:<span>*</span></div>
                                    <div class="form-input"><input name="f90" id="f90" type="text"></div>
                                </div>
                                <div class="form-row">
                                    <div class="form-label">Контактний номер телефону:<span>*</span></div>
                                    <div class="form-input">
                                        <input required="" name="f50" type="text" placeholder="+380 XX XXX XX XX" class="setMask" maxlength="17">
                                        <input type="hidden" name="f51" id="f51" value="Зворотній зв'язок">
                                    </div>
                                </div>
                                <div class="form-row submit-row">
                                    <input class="btn-purple" type="submit" value="Передзвоніть мені">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="company-history-title">Заздалегідь дякуємо за можливість стати краще для Вас!</div>
        </div>
</div>
