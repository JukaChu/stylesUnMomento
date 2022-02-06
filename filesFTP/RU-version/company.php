<?php 
$subitems = dbQuery("SELECT * FROM content WHERE parentid = 27 AND ispublish = 1 ORDER BY showorder");
?>

<main>

    <div class="container">
        <h1 class="main-title">О компании</h1>
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
                                <span>Сеть химчисток UNMOMENTO</span>
                                <p>компания с 24-летним опытом на рынке услуг по профессиональному уходу за одеждой, обувью, аксессуарами и мебелью.  8 производств, 50 приемных пунктов в Киеве и Киевской области, 1000000 клиентов, 100-ни партнеров и более 400 высококвалифицированных работников! Самый широкий спектр услуг от чистки и стирки до ремонта обуви и хранения меха.</p>
                                <span>Миссия компании</span>
                                <p>создавать безупречность и дарить уверенность, чистоту и радость!</p>
                                <span>Основа лидерства:</span>
                                <ul>
                                    <li>многолетний опыт работы;</li>
                                    <li>профессиональные препараты мировых брендов;</li>
                                    <li>50 приемных пункта в городе Киеве и области;</li>
                                    <li>инновационные технологии чистки.</li>
                                </ul>
                                <span>ОТКРЫТОСТЬ и ЧЕСТНОСТЬ</span>
                                <p>компания доступна по всем каналам коммуникаций, всегда готова принять любую информацию, разрешить любую ситуацию и дать обратную связь.</p>

                            </div>
                            <div class="company-column">
                                <span>КЛИЕНТ всегда на первом </span>
                                <p>индивидуальный подход к каждом клиенту, постоянные и специальные программы лояльности, клиентская поддержка 24/7.</p>
                                <span>РАЗВИТИЕ нон-стоп</span>
                                <p>непрерывное расширение сети, постоянное внедрение новых технологий, введение новых сервисов и услуг.</p>
                                <span>Бонусные программы:</span>
                                <p>В компании действует дисконтная, накопительная и бонусная программы.<br><br>
                                    Программы лояльности для:</p>
                                <ol>
                                    <li>детей младших классов -50%;</li>
                                    <li>самых маленьких -50%;</li>
                                </ol>
                                <p>Также, UNMOMENTO принимает активное участие в социальных проектах и помогает детским домам.</p>
                                <span>ПРОФЕССИОНАЛИЗМ</span>
                                <p>непрерывные инновации, 5 ступеней контроля качества, работа каждого члена команды исключительно на результат.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <aside class="company-side">
                    <div class="company__news">
                        <a href="/klienty/" class="single-card ">
                            <div class="text">
                                <p>Наши клиенты и партнеры</p>
                                <div class="btn btn--blue">Перейти</div>
                            </div>
                        </a>
                        <a href="/franchayzing/o-franchayzinge.html" class="single-card ">
                            <div class="text">
                                <p>Франчайзинг</p>
                                <div class="btn btn--blue">Перейти</div>
                            </div>
                        </a>
                        <a href="/vakansii/" class="single-card ">
                            <div class="text">
                                <p>Вакансии</p>
                                <div class="btn btn--blue">Перейти</div>
                            </div>
                        </a>
                        <a href="/media/" class="single-card ">
                            <div class="text">
                                <p>Мы в MassMedia</p>
                                <div class="btn btn--blue">Перейти</div>
                            </div>
                        </a>
                        <a href="/for-feedback/" class="single-card ">
                            <div class="text">
                                <p>Для обратной связи</p>
                                <div class="btn btn--blue">Перейти</div>
                            </div>
                        </a>
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
                <div class="company-map">
                    <div class="map_canvas" id="map-canvas">

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php /*
<script src="https://cdn.jsdelivr.net/gmap3/7.1.0/gmap3.min.js"></script>
*/?>
<script>
    /*$(document).ready(function(){
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
    });

    */
    var map, markers,
    mapContainer = document.getElementById('map-canvas'),
    center = {lat: 50.426725, lng: 30.541507};
    function initMap() {
        map = new google.maps.Map(mapContainer, {
            center: center,
            zoom: 10,
            minZoom:6,
            maxZoom:18,
            mapTypeControl: true,
            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
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
        });
        var markerLatLng = {lat: 50.4267217, lng: 30.5414961},
        iconImage = {url:'/templates/img/mapiconn.png'},
        hoverImage = {url: '/templates/img/mapiconnHover.png'};
        var marker = new google.maps.Marker({
          position: markerLatLng,
          icon: iconImage,
          map: map,
          title: 'Unmomento'
        });
        marker.addListener('mouseover', function(){
            marker.setIcon(hoverImage);
        });
        marker.addListener('mouseout', function(){
            marker.setIcon(iconImage);
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd27qbJGmlg629U5Nz1GmlLotFRAFIeY8&callback=initMap"
 async defer></script>
