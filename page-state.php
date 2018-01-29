<?php
/**
 *
 *
 * @package		veramonte
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'state';
$subpage = '';
$type = 'page';
$title = 'State';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner banner--state">
    <div class="banner__media">
       <img src="assets/banner_state.jpg" alt="Banner Titulo">
        <video autoplay loop>        
            <source src="video/clip.mp4" type="video/mp4"/>
            <source src="video/clip.webmhd.webm" type="video/webm"/>
        </video>
    </div><!-- /.banner__media -->
    <h1 class="banner__title">
        State
    </h1><!-- /.banner__title -->
</div><!-- /.banner -->
<div class="wrap wrap--state">
    <div class="bajada">
        <p>Nuestra obra se ve plasmada en 110 acres de viñedos familiares. 110 acres donde tiene lugar creaciones únicas, fruto de la mezcla de suelo, clima y personas.</p>
    </div><!-- /.bajada -->
    <section class="box">
        <article class="box__item">
            <h1 class="title">VALLE DE CASABLANCA</h1><!-- /.title -->
            <p>Situado a lo largo de la costa del Océano Pacífico y rodeado por la Cordillera de la Costa, el viñedo de Veramonte cuenta con una diversidad única de clima y suelo, ideal para el desarrollo de expresivos Sauvignon Blanc y Chardonnay, con óptimas condiciones para variedades tintas como Pinot Noir y Merlot. </p>
        </article><!-- /.block__item -->
        <article class="box__item">
            <h1 class="title">VALLE DE COLCHAGUA</h1><!-- /.title -->
            <p>Los viñedos de Veramonte se encuentran en Marchigue, una zona altamente reconocida por la producción de vinos tintos premium. La combinación de su clima más cálido, suelos de granito en descomposición y arcilla, son factores ideales para un crecimiento moderado y una prolongada madurez de variedades, como Caber- net Sauvignon y Carménére.</p>
        </article><!-- /.block__item -->
        <div class="box--column__media">
            <img src="assets/mapa.png" alt="Titulo">
        </div><!-- /.box--column__media -->
        <article class="box__item box--column">
            <h1 class="title">EL ARTE DE LA CALIDAD, EL ARTE DELO SUSTENTABLE.</h1><!-- /.title -->
            <div class="box--column__content">
                <p>
                    En todos nuestros campos seguimos prácticas orgánicas que aseguran las mejores condiciones para el desarrollo de la vid, logrando viñedos sustentables en el tiempo. Suelos vivos y equilibrados dan lugar a uvas de calidad que expresan el máximo potencial del terroir. Las prácticas orgánicas en el campo incluyen:
                </p>
                <p>
                    1. Elaboración de compost de calidad a partir de la totalidad de los residuos orgánicos obtenidos durante la vendimia.<br>
                    2. Aplicación de compost que permite el aumento de la biodiversidad del suelo.<br>
                    3. Cultivos entre hilera con el fin de mejorar la estructura del suelo, minimizar la erosión y aportar nutrientes.<br>
                    4. Conservación de corredores biológicos para preservar la biodiversidad asegurando un ecosistema autoregulado.<br>
                    5. Incorporación de ovejas que ayudan a cortar el pasto, airear el suelo y minimizar la compactación, actuando además como fertilizantes naturales.
                </p>
            </div><!-- /.box--column__content -->
        </article><!-- /.block__item -->
    </section><!-- /.blocks -->
</div><!-- /.wrap -->
<!--NOTE: Inicia footer-->
</div><!--/.page-wrap-->
<footer class="footer">
    <div class="footer__media">
        <img src="assets/footer-estate.png" alt="Titulo">
    </div><!-- /.footer__media -->
    <?php include 'footer.php'; ?>