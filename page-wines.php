<?php
/**
 *
 *
 * @package		veramonte
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'wines';
$subpage = '';
$type = 'page';
$title = 'Wines';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner">
    <div class="banner__media">
        <img src="assets/banner_wines.jpg" alt="Banner Titulo">
    </div><!-- /.banner__media -->
    <h1 class="banner__title">
        Wines
    </h1><!-- /.banner__title -->
</div><!-- /.banner -->
<section class="wine-box vino-4" id="principal">
    <svg><use xlink:href="#shape-pattern" /></svg>
    <div class="wrap wine__slides">
        <div class="leyenda">
            <p class="leyenda__title">Sauvignon Blanc</p><!-- /.leyenda__title -->
            <p class="leyenda__note">Rada Rada Rada</p><!-- /.leyenda__note -->
            <a href="#" title="see more" class="btn btn--more leyenda__link" target="_blank">See More</a>
        </div><!-- /.leyenda -->
        <ul class="botellas slides">
            <li>
                <a href="single-wines.php" title="Titulo" class="item__wine active" data-name="Sauvignon Blanc" data-note="rada rada rada" data-link="http://google.com" data-color="vino-4">
                    <img src="assets/botella.png" alt="Titulo">
                    <span class="item__wine__title">Sauvignon Blanc</span>
                </a>
            </li>
            <li>
                <a href="single-wines.php" title="Titulo" class="item__wine" data-name="Syrah Rosé" data-note="FRESH BRIGHT CRISP" data-link="http://facebook.com" data-color="vino-5">
                    <img src="assets/botella.png" alt="Titulo">
                    <span class="item__wine__title">Syrah Rosé</span>
                </a>
            </li>
            <li>
                <a href="single-wines.php" title="Titulo" class="item__wine" data-name="Chardonnay" data-note="coco coco coco" data-link="http://twitter.com" data-color="vino-2">
                    <img src="assets/botella.png" alt="Titulo">
                    <span class="item__wine__title">Chardonnay</span>
                </a>
            </li>
        </ul><!-- /.botellas -->
    </div><!-- /.wrap -->
</section><!-- /.principal -->
<section class="wine-box" id="secundario">
    <div class="wrap wine__slides">
        <ul class="botellas slides">
            <li>
                <a href="single-wines.php" title="Titulo" class="item__wine active" data-name="Pinot noir" data-note="nana" data-link="http://google.com" data-color="vino-1">
                    <img src="assets/botella.png" alt="Titulo">
                    <span class="item__wine__title">Pinot noir</span>
                </a>
            </li>
            <li>
                <a href="single-wines.php" title="Titulo" class="item__wine" data-name="Merlot" data-note="nana" data-link="http://google.com" data-color="vino-3">
                    <img src="assets/botella.png" alt="Titulo">
                    <span class="item__wine__title">Merlot</span>
                </a>
            </li>
            <li>
                <a href="single-wines.php" title="Titulo" class="item__wine" data-name="Cabernet Sauvignon" data-note="nana" data-link="http://google.com" data-color="vino-6">
                    <img src="assets/botella.png" alt="Titulo">
                    <span class="item__wine__title">Cabernet Sauvignon</span>
                </a>
            </li>
            <li>
                <a href="single-wines.php" title="Titulo" class="item__wine" data-name="Carmenere" data-note="nana" data-link="http://google.com" data-color="vino-6">
                    <img src="assets/botella.png" alt="Titulo">
                    <span class="item__wine__title">Carmenere</span>
                </a>
            </li>
            <li>
                <a href="single-wines.php" title="Titulo" class="item__wine" data-name="Red Blend" data-note="Batman Batman!" data-link="http://google.com" data-color="vino-7">
                    <img src="assets/batman.png" alt="Titulo">
                    <span class="item__wine__title">Red Blend</span>
                </a>
            </li>
        </ul><!-- /.botellas -->
        <div class="leyenda">
            <p class="leyenda__title">Sauvignon Blanc</p><!-- /.leyenda__title -->
            <p class="leyenda__note">Rada Rada Rada</p><!-- /.leyenda__note -->
            <a href="#" title="see more" class="btn btn--more leyenda__link" target="_blank">See More</a>
        </div><!-- /.leyenda -->
    </div><!-- /.wrap -->
    <svg><use xlink:href="#shape-icon-pattern-2" /></svg>
</section><!-- /.secundario -->
<!--NOTE: Inicia footer-->
</div><!--/.page-wrap-->
<footer class="footer">
    <div class="footer__media">
        <img src="assets/footer-wines.png" alt="Titulo">
    </div><!-- /.footer__media -->
    <?php include 'footer.php'; ?>