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
                        <p>Сеть химчисток UNMOMENTO - компания с 24-летним опытом на рынке услуг по профессиональному уходу за одеждой, обувью, аксессуарами и мебелью.  8 производств, 50 приемных пунктов в Киеве и Киевской области, 1000000 клиентов, 100-ни партнеров и более 400 высококвалифицированных работников! Самый широкий спектр услуг от чистки и стирки до ремонта обуви и хранения меха.</p>
                    </div>
                </div>
            </div>
            <div class="block_map">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc">
                        <p>Миссия компании – создавать безупречность и дарить уверенность, чистоту и радость!</p>
                    </div>
                </div>
            </div>
            <div class="block_map">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc">
                        <p>ОТКРЫТОСТЬ и ЧЕСТНОСТЬ – компания доступна по всем каналам коммуникаций, всегда готова принять любую информацию, разрешить любую ситуацию и дать обратную связь.</p>
                        <p>ПРОФЕССИОНАЛИЗМ – непрерывные инновации, 5 ступеней контроля качества, работа каждого члена команды исключительно на результат.</p>
                        <p>КЛИЕНТ всегда на первом месте – индивидуальный подход к каждом клиенту, постоянные и специальные программы лояльности, клиентская поддержка 24/7.</p>
                        <p>РАЗВИТИЕ нон-стоп – непрерывное расширение сети, постоянное внедрение новых технологий, введение новых сервисов и услуг.</p>
                    </div>
                </div>
            </div>
            <div class="block_map">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc">
                        <p>В компании действует дисконтная, накопительная и бонусная программы.</p>
                        Программы лояльности для:
                        <ul class="defblock-list">
                            <!--li>- студентов -30%;</li-->
                            <li>- детей школьного возраста (1-4 класс) -50%;</li>
                            <!--li>- ветеранов ВОВ, участников АТО;</li-->
                            <li>- самых маленьких -50%;</li>
                            <!--li>- госслужащих (военные, полицейские и т.д.) -30%.</li-->
                            <li>Также, UNMOMENTO принимает активное участие в социальных проектах и помогает детским домам.</li>
                         </ul>
                    </div>
                </div>
            </div>
            <div class="block_map">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc">
                        <div class="title">
                            Основа лидерства UNMOMENTO:
                        </div>
                        <ul class="defblock-list">
                            <li><i class="fa fa-check-square-o"></i><span>многолетний опыт работы;</span></li>
                            <li><i class="fa fa-check-square-o"></i><span>профессиональные препараты мировых брендов;</span></li>
                            <li><i class="fa fa-check-square-o"></i><span>50 приемных пункта в городе Киеве и области;</span></li>
                            <li><i class="fa fa-check-square-o"></i><span>инновационные технологии чистки.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block_map">
                <span class="vfix"></span>
                <div class="container_vfix">
                    <div class="desc green-text">
                        <div class="text_title">
                            <strong>Режим работы:</strong>
                        </div>
                        <div class="text_info">
                            пн.-сб.: 9.00-20.00, вс.:10.00-18.00, без обеда
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
                            UNMOMENTO – это компания, которая работает на принципах открытости, профессионализма и лояльности. Мы осознаем ценность каждой вашей вещи. Поэтому сделаем все, чтобы сберечь то, чем вы дорожите!
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
