<?php $detect = new Mobile_Detect;?>
<div class="top_about clear_after">
    <div class="container_name">
        <span class="vfix"></span>
        <div class="container_vfix">
            <div class="block_info">
                <div class="title">
                    <h1 class="name"><?= $head["name"] ?></h1>
                </div>
                <div class="desc_title">
                    Хімчистка UNMOMENTO -<br>
                    завжди вигідно, завжди поруч!
                </div>
            </div>
        </div>
    </div>

    <div class="container_list ">
        <span class="vfix"></span>
        <div class="container_vfix">
            <ul class="block_list">
                <li <?php if($head["id"] == 3264) {?>class='active'<?} ?>><a href="/istorija-kompanii">Історія компанії</a></li>
                <li <?php if($head["id"] == 2813) {?>class='active'<?} ?> ><a href="/klienty/">Наші клієнти і партнери</a></li>
                <li><a href="/franchayzing/o-franchayzinge.html">Франчайзинг</a></li>
                <?php /*
                <li <?php if($head["id"] == 2985) {?>class='active'<?} ?>><a href="/prodazha-professionalnogo-oborudovaniya/prodazha-professionalnogo-oborudovaniya.html">Продажа оборудования</a></li>
                <li <?php if($head["id"] == 3015) {?>class='active'<?} ?>><a href="/o-kompanii/o-kompanii/ishem-subarendatorov/">Ищем субарендаторов</a></li>
                <li <?php if($head["id"] == 3016) {?>class='active'<?} ?>><a href="/o-kompanii/o-kompanii/prodazha-professionalnyh-zhidkih-sredstv-dlja-stirki/">Продажа жидких средств</a></li>
                <?php /*
                <li <?php if($head["id"] == 2984) {?>class='active'<?} ?>><a href="/nashi-partnery/">Наши партнеры</a></li>
                */?>
                <li <?php if($head["id"] == 2987) {?>class='active'<?} ?>><a href="/vakansii/">ВакансіЇ</a></li>
                                <?php /*if(!$detect->isMobile()){ ?>
                <li <?php if($head["id"] == 2988) {?>class='active'<?} ?>><a href="/o-kompanii/3d-tur.html">3D тур</a></li>
                                <?php } */?>
                <li <?php if($head["id"] == 3220) {?>class='active'<?} ?>><a href="/media">Ми в MassMedia</a></li>
                <li <?php if($head["id"] == 3557) {?>class='active'<?} ?>><a href="/for-feedback">Для зворотного зв'язку</a></li>
                <?php /*
                <li <?php if($head["id"] == 2986) {?>class='active'<?} ?>><a href="/luchshiy-sotrudnik-mesyatsa/">Лучший сотрудник</a></li>
                */?>
            </ul>
        </div>
    </div>
</div>