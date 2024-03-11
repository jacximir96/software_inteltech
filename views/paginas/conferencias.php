<main class="agenda">
    <h2 class="agenda__heading">Nuestros Servicios</h2>
    <p class="agenda__descripcion">Nuestro modelo de negocio brinda enfoque absoluto al cliente, contamos con experiencia comprobada en implementación y mantenimiento de las siguiente soluciones: <span style="color:#ED7F00;font-weight:900;">CABLEADO ESTRUCTURADO, DETECCIÓN Y ALARMA CONTRA INCENDIOS, VIDEOVIGILANCIA IP, CONTROL DE ACCESO E INSTRUSIÓN, TELEVISIÓN, GABINETES DE COMUNICACIONES</span></p>

    <div class="eventos">
        <!-- <h3 class="eventos__heading">Servicios</h3> -->
        <!-- <p class="eventos__fecha">Viernes 5 de Octubre</p> -->

        <div class="eventos__listado slider swiper">  
            <div class="swiper-wrapper">
                <?php foreach($eventos['conferencias_v'] as $evento ) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <!-- <p class="eventos__fecha">Sábado 6 de Octubre</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['conferencias_s'] as $evento ) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div> -->
    </div>
<!-- 
    <div class="eventos eventos--workshops">
        <h3 class="eventos__heading">&lt;Workshops /></h3>
        <p class="eventos__fecha">Viernes 5 de Octubre</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['workshops_v'] as $evento ) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <p class="eventos__fecha">Sábado 6 de Octubre</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['workshops_s'] as $evento ) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div> -->
</main>