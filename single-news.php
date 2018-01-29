<?php
/**
 *
 *
 * @package		veramonte
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'news';
$subpage = '';
$type = 'page';
$title = 'News';
$subpage_title = 'Single News';
include 'header.php';  ?>
<div class="banner no-margin banner--single">
    <div class="banner__media">
        <img src="assets/banner_news.jpg" alt="Banner Titulo">
    </div><!-- /.banner__media -->
    <h1 class="banner__title">
        News
    </h1><!-- /.banner__title -->
</div><!-- /.banner -->
<a href="page-news.php" class="btn btn--back" title="Back to news"><svg><use xlink:href="#shape-icon-prev" /></svg>Back to news</a>
<div class="wrap">
    <p class="single__date">26 de marzo 2015</p><!-- /.single__date -->
    <h1 class="single__title">Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis</h1><!-- /.single__title -->
    <div class="share">
        <span>Compartir</span>
        <a target="_blank" class="popup" href="mailto:jairo@reactor.cl"><svg><use xlink:href="#shape-icon-redes-mail" /></svg></a>
        <a target="_blank" class="popup" href="http://www.facebook.com/sharer.php?u={{post.permalink}}&t={{post.title}}"><svg><use xlink:href="#shape-icon-redes-facebook" /></svg></a>
        <a target="_blank" class="popup" href="http://twitter.com/share?url={{post.permalink}}&text={{post.title}}"><svg><use xlink:href="#shape-icon-redes-twitter" /></svg></a>
    </div><!-- /.share -->
    <div class="single--content">
        <hr />
        <div class="single__media">
            <img src="assets/banner_heritage.jpg" alt="Titulo">
            <div class="single__media__credits">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div><!-- /.single__media__credits -->
        </div><!-- /.single__media -->
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis purus id lacus fringilla auctor. Curabitur felis libero, efficitur a mi id, imperdiet sagittis ante. Suspendisse interdum justo justo, ac hendrerit est fermentum in.
            Nam laoreet sollicitudin urna, vitae condimentum felis luctus vitae. 
        </p>
        <p>
            Maecenas accumsan justo gravida feugiat congue. Vivamus aliquam odio leo, eu posuere leo dictum eu. Fusce pharetra rutrum scelerisque. Etiam ac elit metus. Nam tempor lacinia eros vel aliquet.
            Proin blandit massa et orci laoreet, vel gravida felis ullamcorper. Proin vel faucibus ligula, eu volutpat justo.
            Vestibulum iaculis iaculis ex mattis viverra. 
        </p>
        <p>
            Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis. Pellentesque malesuada sed quam non pretium. Etiam fringilla, enim a interdum finibus, metus odio luctus risus, sit amet egestas sem arcu eget neque. Nunc risus orci, interdum id metus rhoncus, blandit rutrum nibh. Nullam et quam gravida, posuere mauris suscipit, venenatis sem. Donec massa arcu, facilisis eu interdum vitae, fringilla nec nulla. 
            Donec dignissim dui nec mauris maximus ornare. Vestibulum sit amet quam hendrerit ex ullamcorper aliquet sed sit amet velit. Phasellus velit tortor, lobortis id purus sit amet, mollis sollicitudin risus.
        </p>
        <div class="gallery">
            <div class="slider__gallery js-slider__gallery">
                <ul class="slides">
                    <li>
                        <img src="assets/banner_home.jpg" alt="Tenemos la capacidad de regenerarnos y de regularnos por nosotros mismos. La salud puede alcanzarse de una forma natural, ya que el cuerpo tiene una capacidad innata de restablecerse y de auto regenerarse.La Quiropráctica es la primera profesión de salud natural en el mundo y la segunda en EE.UU. y seguro que con el tiempo, será la primera opción para la mayor parte del mundo.">
                    </li>
                    <li>
                        <img src="http://g01.a.alicdn.com/kf/HTB1AxNXKFXXXXcaXFXXq6xXFXXX2/099-free-Michelle-Lewin-font-b-Sexy-b-font-font-b-Fitness-b-font-Bodybuilder-Model.jpg" alt="texto 2">
                    </li>
                    <li>
                        <img src="http://okdiario.com/vida-sana/img/2015/01/hot-fitness-girl-doing-push-ups1600-x-1066-95-kb-jpeg-x.jpg" alt="texto 3">
                    </li>
                </ul><!--.slides-->
            </div><!-- /.slider__gallery js-slider__gallery -->
            <div class="gallery__content">
                <div class="custom-controls-container">
                    <div class="gallery__number">
                        <span class="current-slide"></span>/
                        <span class="total-slides"></span>
                    </div>
                    <div class="gallery__text">
                        <p></p>
                    </div><!-- /.gallery__text -->
                    <div class="custom__icons">
                        <div class="gallery__fullscreen">
                            <img src="img/fullscreen.svg" alt="Fullscreen">
                        </div><!-- /.gallery__fullscreen -->
                    </div><!-- /.custom__icons -->
                </div>
            </div><!-- /.gallery__content -->
        </div><!--.gallery-->
    </div><!-- /.single--conten -->
</div><!-- /.wrap -->
<div class="related">
    <div class="related__container">
        <a href="single-news.php" title="Titulo" class="related__item">
            <span class="related__item__media">
                <img src="assets/banner_heritage.jpg" alt="Titulo">
            </span>
            <span class="related__content">
                <span class="related__item__date">26 de marzo 2015</span>
                <span class="related__item__title">
                    Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis
                </span>
            </span>
        </a>
        <a href="single-news.php" title="Titulo" class="related__item">
            <span class="related__item__media">
                <img src="assets/banner_trade.jpg" alt="Titulo">
            </span>
            <span class="related__content">
                <span class="related__item__date">26 de marzo 2015</span>
                <span class="related__item__title">
                    Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis
                </span>
            </span>
        </a>
    </div><!-- /.related__container -->
</div><!-- /.related -->
<!--NOTE: Inicia footer-->
</div><!--/.page-wrap-->
<footer class="footer">
    <div class="footer__media">
        <img src="assets/footer-news.jpg" alt="Titulo">
    </div><!-- /.footer__media -->
    <?php include 'footer.php'; ?>