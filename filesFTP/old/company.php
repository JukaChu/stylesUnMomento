<?php 
$subitems = dbQuery("SELECT * FROM content WHERE parentid = 27 AND ispublish = 1 ORDER BY showorder");
?>
<?php include 'mob_header_buttons.php'; ?>
<div class="main_content clear_after">
        <?php include("company-menu.php"); ?>
        <div class="container_innerblock clear_after">
            <div class="block_map width" style="background-image:url(/templates/img/ban_map.jpg)">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc" >
                        
                    </div>
                </div>
            </div>
            <div class="block_map">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc">
                        <p>Мережа хімчисток UNMOMENTO - компанія з 24-річним досвідом на ринку послуг з професійного догляду за одягом, взуттям, аксесуарами і меблями. 8 виробництв, 50 приймальних пунктів в Києві та Київській області, 1000000 клієнтів, 100-ні партнерів і більше 400 висококваліфікованих працівників! Найширший спектр послуг від чищення і прання до ремонту взуття і зберігання хутра.</p>
                    </div>
                </div>
            </div>
            <div class="block_map">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc">
                        <p>Місія компанії - створювати бездоганність і дарувати впевненість, чистоту і радість!</p>
                    </div>
                </div>
            </div>
            <div class="block_map">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc">
                        <p>ВІДКРИТІСТЬ і ЧЕСНІСТЬ - компанія доступна по всіх каналах комунікацій, завжди готова прийняти будь-яку інформацію, вирішити будь-яку ситуацію і дати зворотний зв'язок.</p>
                        <p>ПРОФЕСІОНАЛІЗМ - ​​безперервні інновації, 5 ступенів контролю якості, робота кожного члена команди виключно на результат.</p>
                        <p>КЛІЄНТ завжди на першому місці - індивідуальний підхід до кожного клієнта, постійні і спеціальні програми лояльності, клієнтська підтримка 24/7.</p>
                        <p>РОЗВИТОК нон-стоп - безперервне розширення мережі, постійне впровадження нових технологій, введення нових сервісів і послуг.</p>
                    </div>
                </div>
            </div>
            <div class="block_map">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc">
                        <p>У компанії працює дисконтна, накопичувальна та бонусна програми.</p>
                        Програми лояльності для:
                        <ul>
                            <!--li> - студентів -30%;</li-->
                            <li> - дітей шкільного віку (1-4 клас) -50%;</li>
                            <!--li> - ветеранів ВВВ, учасників АТО;</li-->
                            <li> - малечі -50%;</li>
                            <!--li> - держслужбовців (військові, поліцейські і т.д.) -30%.;</li-->
                        </ul>
                        <p>Також, UNMOMENTO бере активну участь в соціальних проектах і допомагає дитячим будинкам.</p>
                    </div>
                </div>
            </div>
            <div class="block_map">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc">
                        <div class="title">
                            Основа лідерства UNMOMENTO:
                        </div>
                        <ul class="defblock-list">
                            <li><i class="fa fa-check-square-o"></i><span>багаторічний досвід роботи;</span></li>
                            <li><i class="fa fa-check-square-o"></i><span>найкращі фахівці України;</span></li>
                            <li><i class="fa fa-check-square-o"></i><span>інноваційні технології чистки;</span></li>
                            <li><i class="fa fa-check-square-o"></i><span>професійні препарати світових брендів;</span></li>
                            <li><i class="fa fa-check-square-o"></i><span>50 приймальних пунктів в місті Києві та області.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block_map">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc green-text">
                        <div class="text_title">
                            <strong>Режим роботи:</strong>
                        </div>
                        <div class="text_info">
                            пн.-сб.: 9.00-20.00, вс.:10.00-18.00, без обіду
                        </div>
                        <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="tel: +380444952495" class="phone new_padding">
                            044 495 2 495
                        </a>
                        <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="tel: +380676262495" class="phone new_padding">
                            067 62 62 495
                        </a>
                    </div>
                </div>
            </div>
            <div class="block_map">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc">
                        <div class="text_info">
                            UNMOMENTO працює строго за високими стандартами, дотримується принципів відкритості, професіоналізму і лояльності.
                            UNMOMENTO - єдина хімчистка, яка, усвідомлюючи цінність кожної Вашої речі, страхує ризики відповідальності. UNMOMENTO - з любов'ю до Вас і Ваших речей!
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="map_canvas" id="map-canvas">
                                    
        </div>
    </div>
<?php /*
<script src="https://cdn.jsdelivr.net/gmap3/7.1.0/gmap3.min.js"></script>
*/?>
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
</script>       
        
