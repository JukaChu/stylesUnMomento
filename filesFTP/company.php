<?php
$subitems = dbQuery("SELECT * FROM content WHERE parentid = 27 AND ispublish = 1 ORDER BY showorder");
?>

<main>

    <div class="container">
        <h1 class="main-title">Про компанію</h1>
    </div>

    <section class="company">
        <div class="container">
            <div class="company__container">
                <div class="company__content">
                    <div class="company__text">
                        <div class="img">
                            <img src="<?php echo _TEMPL . 'img/ban_map.jpg' ?>" alt="">
                        </div>

                        <div class="company-row">
                            <div class="company-column">
                                <span>Мережа хімчисток UNMOMENTO</span>
                                <p>компанія з 24-річним досвідом на ринку послуг з професійного догляду за одягом,
                                    взуттям, аксесуарами і меблями. 8 виробництв, 50 приймальних пунктів в Києві та
                                    Київській області, 1000000 клієнтів, 100-ні партнерів і більше 400
                                    висококваліфікованих працівників! Найширший спектр послуг від чищення і прання до
                                    ремонту взуття і зберігання хутра.</p>
                                <span>Місія компанії</span>
                                <p>створювати бездоганність і дарувати впевненість, чистоту і радість!</p>
                                <span>Основа лідерства:</span>
                                <ul>
                                    <li>багаторічний досвід роботи;</li>
                                    <li>найкращі фахівці України;</li>
                                    <li>інноваційні технології чистки;</li>
                                    <li>професійні препарати світових брендів;</li>
                                    <li>50 приймальних пунктів в місті Києві та області.</li>
                                </ul>
                                <span>ВІДКРИТІСТЬ і ЧЕСНІСТЬ</span>
                                <p>компанія доступна по всіх каналах комунікацій, завжди готова прийняти будь-яку
                                    інформацію, вирішити будь-яку ситуацію і дати зворотний зв'язок.</p>

                            </div>
                            <div class="company-column">
                                <span>КЛІЄНТ завжди на першому</span>
                                <p>індивідуальний підхід до кожного клієнта, постійні і спеціальні програми лояльності,
                                    клієнтська підтримка 24/7.</p>
                                <span>РОЗВИТОК нон-стоп</span>
                                <p>безперервне розширення мережі, постійне впровадження нових технологій, введення нових
                                    сервісів і послуг.</p>
                                <span>Бонусні програми:</span>
                                <p>У компанії працює дисконтна, накопичувальна та бонусна програми. <br><br>
                                    Програми лояльності для:</p>
                                <ol>
                                    <li>дітей шкільного віку (1-4 клас) -50%;</li>
                                    <li>малечі -50%;</li>
                                </ol>
                                <p>Також, UNMOMENTO бере активну участь в соціальних проектах і допомагає дитячим
                                    будинкам.</p>
                                <span>ПРОФЕСІОНАЛІЗМ</span>
                                <p>безперервні інновації, 5 ступенів контролю якості, робота кожного члена команди
                                    виключно на результат.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <aside class="company-side">
                    <div class="company__news">
                        <?php
                        $blacklist_arr = array(3381, 3383, 3384, 3385, 3386);
                        $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 2890 AND ispublish = 1 AND id != $head[id] AND id NOT IN (" . implode(',', $blacklist_arr) . ") ORDER BY rand() LIMIT 0,6 ");
                        foreach ($arr as $r) {
                            $img = getImageById($r["imid"]);
                            ?>

                            <a href="<?= $r["url"] ?>" class="single-card ">
                                <div class="text">
                                    <span class="tag">Новини</span>
                                    <p><?= $r["name"] ?></p>

                                    <div class="btn btn--blue">докладніше</div>

                                </div>
                            </a>

                        <?php } ?>
                    </div>

                </aside>
                <div class="img non-visible">
                    <img src="<?php echo _TEMPL . 'img/ban_map.jpg' ?>" alt="">
                </div>
            </div>


        </div>

    </section>
    <section class="company__contacts">
        <div class="container">
            <div class="company__contacts-container">
                <div class="company-time">
                    <strong>Режим роботи:</strong>
                    <span>Понеділок - субота:</span>
                    <p>9.00-20.00</p>
                    <span>Неділя:</span>
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
                <div class="company-map">
                    <div class="map_canvas" id="map-canvas">

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
    <?php /*
    $(document).ready(function(){
        $('#map-canvas')
        .gmap3({
            center:[50.426725, 30.541507],
            zoom:12,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            navigationControl: true,
            scrollwheel: false,
            streetViewControl: true,             
            panControl: true,
            panControlOptions: {
                position: google.maps.ControlPosition.TOP_RIGHT
            },           
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.TOP_RIGHT
            },
                    styles: [
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [
                                { "saturation": -100 },
                                { "lightness": -8 },
                                { "gamma": 1.18 }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                { "saturation": -100 },
                                { "gamma": 1 },
                                { "lightness": -24 }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                { "saturation": -100 }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "stylers": [
                                { "saturation": -100 }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "stylers": [
                                { "saturation": -100 }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                                { "saturation": -100 }
                            ]
                        },
                        {
                            "featureType": "road",
                            "stylers": [
                                { "saturation": -100 }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "stylers": [
                                { "saturation": -100 }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "stylers": [
                                { "saturation": -100 }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "stylers": [
                                { "saturation": -100 }
                            ]
                        }
                    ]
                    
        })
        .marker({
            position: [50.4267217,30.5414961],
            icon: '/templates/img/mapiconn.png'
        })
        .on({
            mouseover: function(marker, event, context){
            marker.setIcon("/templates/img/mapiconnHover.png"); 
            },
            mouseout: function(marker, event, context){
            marker.setIcon("/templates/img/mapiconn.png");
            }
        });
    });*/?>
    var map, markers,
        mapContainer = document.getElementById('map-canvas'),
        center = {lat: 50.426725, lng: 30.541507};

    function initMap() {
        map = new google.maps.Map(mapContainer, {
            center: center,
            zoom: 10,
            minZoom: 6,
            maxZoom: 18,
            mapTypeControl: true,
            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
            styles: [
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {"saturation": -100},
                        {"lightness": -8},
                        {"gamma": 1.18}
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {"saturation": -100},
                        {"gamma": 1},
                        {"lightness": -24}
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {"saturation": -100}
                    ]
                },
                {
                    "featureType": "administrative",
                    "stylers": [
                        {"saturation": -100}
                    ]
                },
                {
                    "featureType": "transit",
                    "stylers": [
                        {"saturation": -100}
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {"saturation": -100}
                    ]
                },
                {
                    "featureType": "road",
                    "stylers": [
                        {"saturation": -100}
                    ]
                },
                {
                    "featureType": "administrative",
                    "stylers": [
                        {"saturation": -100}
                    ]
                },
                {
                    "featureType": "landscape",
                    "stylers": [
                        {"saturation": -100}
                    ]
                },
                {
                    "featureType": "poi",
                    "stylers": [
                        {"saturation": -100}
                    ]
                }
            ]
        });
        var markerLatLng = {lat: 50.4267217, lng: 30.5414961},
            iconImage = {url: '/templates/img/mapiconn.png'},
            hoverImage = {url: '/templates/img/mapiconnHover.png'};
        var marker = new google.maps.Marker({
            position: markerLatLng,
            icon: iconImage,
            map: map,
            title: 'Unmomento'
        });
        marker.addListener('mouseover', function () {
            marker.setIcon(hoverImage);
        });
        marker.addListener('mouseout', function () {
            marker.setIcon(iconImage);
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd27qbJGmlg629U5Nz1GmlLotFRAFIeY8&callback=initMap"
        async defer></script>

        
