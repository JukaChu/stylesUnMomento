<?php
// Выбор всех городов для поиска
$arr = $cities = dbQuery("SELECT id,url,name FROM content WHERE parentid = 25 AND ispublish = 1 ORDER BY name");

// Данные разбитые по городам по всем пунктам приема
$allPoints = array();

// выбираем все пункты во всех городах
foreach($cities as $city) {
    //2669 - пункты приема по киеву разбиты по районам
    if ((int)$city['id'] != 2669) {
        $subItems = dbQuery(trim("
        SELECT 
            id as cid,
            url,
            name, 
            coord, 
            phones, 
            worktime,
            (SELECT count(id) FROM content WHERE parentid = cid AND ispublish = 1) as scount 
        FROM content 
        WHERE parentid = {$city['id']} AND ispublish = 1 ORDER BY name
        "));
    } else {
        $subItems = dbQuery(trim("
        SELECT 
            id as cid,
            url,
            name, 
            coord, 
            phones, 
            worktime,
            (SELECT count(id) FROM content WHERE parentid = cid AND ispublish = 1) as scount 
        FROM content 
        WHERE parentid IN (SELECT c2.id FROM content c2 WHERE parentid = 2669) AND ispublish = 1 ORDER BY name
        "));
    }

    if ($subItems)
        foreach($subItems as $item)
            $allPoints[$city['id']][] = $item;
}

$parentid = ($head["id"] == 2975) ? 2669 : $head["id"];
$subItems = dbQuery("SELECT id as cid,url,name,(SELECT count(id) FROM content WHERE parentid = cid AND ispublish = 1) as scount FROM content WHERE parentid = $parentid AND ispublish = 1 ORDER BY name");
$parents = array();
$topparent = execute_scalar("SELECT parentid FROM content WHERE id = '$head[parentid]'");?>
<div class="container_news def">
    <div class="main_content block_margin clear_after"> 
        <?php include 'mob_header_buttons.php'; ?>
        <div class="name_list"><h1 class="name_list">Пункты приема</h1>
            <ul class="city_menu">
            <?php foreach($arr as $r){ ?>
                <li>
                    <a data-city="<?php echo $r["id"] ?>" 
                       <?php if($head["id"] == 2975 && $r["id"] == 2669) { ?>class="active"<?php } ?> <?php if($head["id"] == $r["id"]) { ?>class="active"<?php } ?> 
                       href="/<?= $r["url"] ?>"><?= $r["name"] ?>
                    </a>
                </li>
                <?php } ?>  
            </ul>
        </div>
        <div class="name_list">
            <h2 class="quick-find-head">Проложить маршрут</h2>
            <div class="city_menu quick-find-wrapper">
                <select id="quick-find" name="quick-find">
                <?php
                $cnt = 0; 
                foreach($cities as $city) {

                    foreach($allPoints[$city['id']] as $point) {
                ?>
                    <option <?php if ($cnt==0) {?>selected<?php } ?> data-city="<?php echo $r["id"] ?>" data-point="<?php echo $point["id"] ?>" data-coord="<?php echo $point["coord"] ?>">м. <?php echo $city["name"]; ?>, <?php echo $point["name"]; ?></option>
                <?php 
                        $cnt++;
                    }
                } 
                ?>
                </select>
                <button id="quick-find-btn" class="quick_map">Как проехать</button>
            </div>
        </div>
        <button id="btn-store-map" onclick="$('#store_map').toggle();">Показать все пункты &#10097;</button>
        <?php 
        $towns = dbQuery("SELECT id as townid FROM content WHERE parentid = 25 AND id != 2669 AND ispublish = 1");
        $kyiv_parts = dbQuery("SELECT id as partid FROM content WHERE parentid = 2669 AND ispublish = 1");
        $points = array();
        $coord = array();
        foreach ($towns as $town){
            $tpoints = dbQuery("SELECT id, parentid, name, coord, phones, worktime FROM content WHERE parentid = '$town[townid]' AND ispublish = 1 ORDER BY name");
            foreach ($tpoints as $tpoint){
                $points[] = $tpoint;
            }
        }
        foreach ($kyiv_parts as $kyiv_part){
            $tpoints = dbQuery("SELECT id, parentid, name, coord, phones, worktime FROM content WHERE parentid = '$kyiv_part[partid]' AND ispublish = 1 ORDER BY name");
            foreach ($tpoints as $tpoint){
                $points[] = $tpoint;
            }
        }
        $placesJSON = json_encode($points);
        ?>  
        <div id="store_map"></div>
        <script>
        function escapeHtml(text) {
            return text
                .replace(/&amp;/g, "&")
                .replace(/&lt;/g, "<")
                .replace(/&gt;/g, ">")
                .replace(/&quot;/g, '"')
                .replace(/&#039;/g, "'");
          }
            var placesJSON = <?php echo $placesJSON; ?>;   
            placesJSON.forEach(function(place) {
                var placeCoord = place.coord;
                var coord = placeCoord.replace(',',';').split(";");
                var gLat = coord[0], gLng = coord[1];
                if(coord.length !== 2 || gLat.length > 10 || gLng.length > 10){
                    place.coord = '';
                } else {
                    var coordObj = {'lat': +gLat , 'lng': +gLng}; //google wants numbers here
                    place.coord = coordObj;
                }
            });
            var placesJSONclean = placesJSON.filter(function(place){
                if(place.coord) return true;
            });
            var map, markers,
            mapContainer = document.getElementById('store_map')
            iconImage = {url:'/templates/img/mapiconnSmall.png'},
            hoverImage = {url: '/templates/img/mapiconnHoverSmall.png'},
            clustersImages = {imagePath: '/templates/img/markerclusterer/m'},
            center = {lat: 50.426554, lng: 30.540304};
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
                var markers = placesJSONclean.map(function(place) {
                    return new google.maps.Marker({
                        position: place.coord,
                        map: map,
                        icon: iconImage,
                        id: place.id,
                        name: place.name,
                        phones: place.phones,
                        worktime: place.worktime
                    });
                });
                markers.forEach(function(marker) {
                    marker.addListener('mouseover', function(){
                        marker.setIcon(hoverImage);
                    });
                    marker.addListener('mouseout', function(){
                        marker.setIcon(iconImage);
                    });
                    marker.addListener('click', function(e){
                        var titleBlock = '<div class="map-popup-title">'+ marker.name +'</div>',
                        phonesBlock = '<div class="map-popup-phone">'+ escapeHtml(marker.phones) +'</div>',
                        worktimeBlock = '<div class="map-popup-time">' + escapeHtml(marker.worktime) + '</div>',
                        link = 'https://www.google.com/maps?daddr='+ marker.position.lat() + ',' + marker.position.lng(),
                        linkBlock = '<a class="map-popup-link" href="'+ link +'" target="_blank"> Проложить маршрут на Gooole-карте</a>';
                        var contentPopup = '<div class="map-popup-wrap">'+ titleBlock + phonesBlock + worktimeBlock + linkBlock + '</div>';
                        infowindow.setContent(contentPopup);
                        infowindow.open(map, marker);
                        console.log();
                    });
                });
                var markerCluster = new MarkerClusterer(map, markers, clustersImages);
                var infowindow = new google.maps.InfoWindow();
            }
        </script>
        <div class="container_area">
            <ul>
            <?php
            foreach($subItems as $item) {
            if($item["scount"] == 0){ continue;} $parents[] = $item["cid"];?>
                <li>
                    <a href="/<?= $item["url"] ?>"><?= $item["name"] ?> (<?= $item["scount"] ?>)</a>
                </li>
                <?php }
                if($head["parentid"] == 2669){
                    $subItems = dbQuery("SELECT id as cid,url,name,(SELECT count(id) FROM content WHERE parentid = cid AND ispublish = 1) as scount FROM content WHERE parentid = ".$head["parentid"]." AND ispublish = 1 ORDER BY name");
                    foreach($subItems as $item) {
                    if($item["scount"] == 0) { continue;}?>
                <li>
                    <a href="/<?= $item["url"] ?>" <?=($item["cid"] == $head["id"] ? "class='active'" : "")?>><?= $item["name"] ?> (<?= $item["scount"] ?>)</a>
                </li>
                    <?php }     
                } ?>
            </ul>
        </div>
        <div class="container_table_punkt">
            <div class="top_table_name clear_after">
                <div class="col_punct">Пункт приема:</div>
                <div class="col_tel">Телефон:</div>
                <div class="col_job">Режим работы:</div>
            </div>
            <?php  if(count($parents) == 0){ $parents[] = $parentid;}
            foreach($parents as $parent) {
            $arr = dbQuery("SELECT id,url,name,coord,phones,worktime FROM content WHERE parentid = '$parent' AND ispublish = 1 ORDER BY name");?>
            <div class="block_area">
                <div class="name_area"><?= execute_scalar("SELECT name FROM content WHERE id = '$parent'") ?>
                </div>
                <ul>
                    <?php foreach($arr as $item) {?>
                    <li class="clear_after sellingPointBlock">
                        <div class="col_addres col_punct">
                            <span class='vfix'></span>
                            <div class="container_vfix">
                                    <div class="text"><?= $item["name"] ?></div>
                            </div>
                        </div>
                        <div class="col_addres col_tel">
                            <span class='vfix'></span>
                            <div class="container_vfix">
                                <div class="text"><?= htmlspecialchars_decode($item["phones"]) ?></div>
                            </div>
                        </div>
                        <div class="col_addres col_job">
                            <span class='vfix'></span>
                            <div class="container_vfix">
                                <div class="text">
                                    <?= htmlspecialchars_decode($item["worktime"]) ?>
                                </div>
                            </div>
                            <?php if($item["coord"] != "") { ?>
                            <a href="#" data-coord="<?= $item["coord"] ?>" class="linck_map">Показать на карте</a>
                            <?php } ?>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
        </div>  
    </div>
</div>
<div class="overlay">
    <div class="um-map center">
        <div class="map-info-wrap c-cont">
            <div class="aside-form-close infoClose">+</div>
            <div class="map-popup-title"></div>
            <div class="col-50">
                <div class="map-popup-phone"></div>
            </div>
            <div class="col-50">
                <div class="map-popup-time"></div>
            </div>    
        </div>
        <div id="map-canvas"></div>
    </div>
    <div class="overlay-bg"></div>
</div>
<script>
    $(document).ready(function(){
        var mapLinks = $('.linck_map'), mapOverlay = $('.overlay'), mapCanvas = $('#map-canvas');
        mapLinks.click(function(e){
            e.preventDefault();
            var sellingPointBlock = $(this).parents('.sellingPointBlock'),
            title = sellingPointBlock.find('.col_punct .text').html(),
            phone = sellingPointBlock.find('.col_tel .text').html(),
            workingHours = sellingPointBlock.find('.col_job .text').html();
            var targetBlock = $('.map-info-wrap ');
            targetBlock.find('.map-popup-title').html(title);
            targetBlock.find('.map-popup-phone').html(phone);
            targetBlock.find('.map-popup-time').html(workingHours);
            var coord = $(this).attr('data-coord').replace(',',';').split(";");
            var gLat = coord[0], gLng = coord[1];
            if(gLat.length > 10 || gLng.length > 10) return;
            var popupMap = '<iframe allowfullscreen frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCd27qbJGmlg629U5Nz1GmlLotFRAFIeY8&q='+ gLat + ','+ gLng + '&center='+ gLat + ',' + gLng + '&zoom=16"></iframe>';
            mapOverlay.show();
            mapCanvas.empty().append(popupMap);
        });
        $('.overlay-bg ,.infoClose').click(function(){
            mapOverlay.hide();
        });

        var mapQuickLinks = $('.quick_map'), mapOverlay = $('.overlay'), mapCanvas = $('#map-canvas');
        mapQuickLinks.click(function(e){
            e.preventDefault();

            //var sellingPointBlock = $(this).parents('.sellingPointBlock');
            //var title = sellingPointBlock.find('.col_punct .text').html();
            //var phone = sellingPointBlock.find('.col_tel .text').html();
            //var workingHours = sellingPointBlock.find('.col_job .text').html();

            //var targetBlock = $('.map-info-wrap');
            //targetBlock.find('.map-popup-title').html(title);
            //targetBlock.find('.map-popup-phone').html(phone);
            //targetBlock.find('.map-popup-time').html(workingHours);

            var selectedEl = $('#quick-find > option:selected');
            var coord = $(selectedEl).attr('data-coord').replace(',',';').split(";");
            window.qickgLat = coord[0];
            window.qickgLng = coord[1];

            var popupMap = '<div id="quick-find-map" style="width:100%;height:400px;"></div>';
            mapOverlay.show();
            mapCanvas.empty().append(popupMap);

            setTimeout( function() {    
                window.quickMap = new google.maps.Map(document.getElementById("quick-find-map"), {
                    center: new google.maps.LatLng(window.qickgLat,window.qickgLng),
                    zoom: 14,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                window.quickMarker = new google.maps.Marker({
                    position: new google.maps.LatLng(window.qickgLat,window.qickgLng),
                    map: window.quickMap,
                    title: "",
                });

                if (navigator.geolocation) {

                    navigator.geolocation.getCurrentPosition(function(position) {

                    var pos = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                    };

                    /* Add marker to the map */        
                    //markers.push(createMarker(map, new google.maps.LatLng(window.qickgLat,window.qickgLng) ));

                    var clientMark = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

                    /* Add User marker to the map */        
                    //markers.push(createMarker(window.quickMap, clientMark));

                    var directionsService = new google.maps.DirectionsService;
                    var directionsDisplay = new google.maps.DirectionsRenderer;

                    directionsDisplay.setOptions({suppressMarkers: true,preserveViewport: true});
                    directionsDisplay.setMap(window.quickMap);

                    var request = {
                        origin: clientMark, 
                        destination: new google.maps.LatLng(window.qickgLat,window.qickgLng), 
                        waypoints: [], 
                        optimizeWaypoints: true, 
                        travelMode: google.maps.DirectionsTravelMode.WALKING 
                    };

                    directionsService.route(request, function(response, status){
                        if (status == google.maps.DirectionsStatus.OK){
                            directionsDisplay.setDirections(response);
                        }
                    });
                
                    directionsDisplay.setMap(window.quickMap);

                    });
                } else {
                    console.log('NO geolocation');
                }

            },600);

        });

    });
</script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd27qbJGmlg629U5Nz1GmlLotFRAFIeY8&callback=initMap"
 async defer></script>