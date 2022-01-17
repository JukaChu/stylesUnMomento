<div class="main_content block_margin clear_after">
        <?php include("company-menu.php"); ?>
        <div class="container_catalog clear_after">         
            <div class="container_catalog_header"><?= htmlspecialchars_decode($head["info"]) ?></div>
            <div class="company-history-title">Уважаемые клиенты!</div>
            <div class="history-text-section">
                <div class="history-text-container feedback-text-container">
                    <p>Компания UNMOMENTO дорожит своей 25-летней репутацией и лояльностью каждого клиента. Мы непрерывно совершенствуем уровень сервиса и качество предоставляемых услуг, чтобы Вам всегда было комфортно с нами. </p>
                    <p>Для нас ценно каждое мнение! </p>
                    <p>Если Вы хотите поделиться своим отзывом, предложениями по улучшению сервиса компании, выразить свою благодарность или урегулировать любые вопросы и претензии, Вы можете:</p>
                    <p>
                        <ul>
                            <li>связаться с нами по номерам <a href="tel:067 626 24 95">067 626 24 95<a> / <a href="tel:0444952495">044 495 24 95</a></li>
                            <li>отправить инф-ю на почту: <a href="mailto:info@unmomento.com.ua">info@unmomento.com.ua</a></li>
                            <li>заполнить форму обратной связи:</li>
                        </ul>
                    </p>
                    <p></p>
                    <div class="col-flex-33 col-callback-form hideContainer">
                        <div class="styled-form violet-form">
                            <iframe id="_srframe" name="_srframe"  style="display:none;"></iframe>
                            <form method="post" target="_srframe" action="/request.php?action=add&amp;id=10">
                                <div class="form-row">
                                    <div class="form-label">Имя:<span>*</span></div>
                                    <div class="form-input"><input name="f90" id="f90" type="text"></div>
                                </div>
                                <div class="form-row">
                                    <div class="form-label">Контактный номер телефона:<span>*</span></div>
                                    <div class="form-input">
                                        <input required="" name="f50" type="text" placeholder="+380 XX XXX XX XX" class="setMask" maxlength="17">
                                        <input type="hidden" name="f51" id="f51" value="Обратная связь">
                                    </div>
                                </div>
                                <div class="form-row submit-row">
                                    <input class="btn-purple" type="submit" value="Перезвоните мне">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="company-history-title">Заранее благодарим за возможность стать лучше для Вас!</div>
        </div>
</div>
