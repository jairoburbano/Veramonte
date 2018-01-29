<?php
/**
 *
 *
 * @package		veramonte
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'trade';
$subpage = '';
$type = 'page';
$title = 'Trade';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner">
    <div class="banner__media">
        <img src="assets/banner_trade.jpg" alt="Banner Titulo">
    </div><!-- /.banner__media -->
    <h1 class="banner__title">
        Trade
    </h1><!-- /.banner__title -->
</div><!-- /.banner -->
<section class="wrap page-trade">
    <div class="trade__content">
        <div class="trade__item clearfix">
           <div class="trade__background">
               <svg><use xlink:href="#shape-tree-pinot" /></svg>
           </div>
            <div class="trade__image">
                <img src="assets//botella.png" alt="Titulo vino">
            </div><!--.trade__image-->
            <div class="trade__list">
                <h2 class="trade__list__title">Pinot Noir</h2>
                <div class="trade__list__content">
                    <div class="trade__list__column">
                        <h3 class="trade__list__title">Fact Sheets</h3>
                        <a href="#" title="Titulo doc" download>2015 Vintage</a>
                        <a href="#" title="Titulo doc" download>2014 Vintage</a>
                        <a href="#" title="Titulo doc" download>2013 Vintage</a>
                        <a href="#" title="Titulo doc" download>2012 Vintage</a>
                        <a href="#" title="Titulo doc" download>2011 Vintage</a>
                    </div><!--.trade__list__column-->
                    <div class="trade__list__column">
                        <h3 class="trade__list__title">Accolades</h3>
                        <a href="#" title="Titulo doc" download>93 points James Suckling bla bla bla</a>
                        <a href="#" title="Titulo doc" download>90 points Wine Enthusiast</a>
                        <a href="#" title="Titulo doc" download>90 points Wine Advocate</a>
                    </div><!--.trade__list__column-->
                    <div class="trade__list__column">
                        <h3 class="trade__list__title">Bottle</h3>
                        <a href="#" title="Titulo doc" download>RTPNt.pdf</a>
                    </div><!--.trade__list__column-->
                    <div class="trade__list__column">
                        <h3 class="trade__list__title">Label</h3>
                        <a href="#" title="Titulo doc" download>RTPN-label.pdf</a>
                    </div><!--.trade__list__column-->
                </div><!--.trade__list__content-->
            </div><!--.trade__list-->
        </div><!--.trade__item-->
        <div class="trade__item clearfix">
           <div class="trade__background">
               <svg><use xlink:href="#shape-tree-pinot" /></svg>
           </div>
            <div class="trade__image">
                <img src="assets/botella.png" alt="Titulo vino">
            </div><!--.trade__image-->
            <div class="trade__list">
                <h2 class="trade__list__title">Sauvignon Blanc</h2>
                <div class="trade__list__content">
                    <div class="trade__list__column">
                        <h3 class="trade__list__title">Fact Sheets</h3>
                        <a href="#" title="Titulo doc" download>2015 Vintage</a>
                        <a href="#" title="Titulo doc" download>2014 Vintage</a>
                        <a href="#" title="Titulo doc" download>2013 Vintage</a>
                        <a href="#" title="Titulo doc" download>2012 Vintage</a>
                        <a href="#" title="Titulo doc" download>2011 Vintage</a>
                    </div><!--.trade__list__column-->
                    <div class="trade__list__column">
                        <h3 class="trade__list__title">Accolades</h3>
                        <a href="#" title="Titulo doc" download>93 points James Suckling</a>
                        <a href="#" title="Titulo doc" download>90 points Wine Enthusiast</a>
                        <a href="#" title="Titulo doc" download>90 points Wine Advocate</a>
                    </div><!--.trade__list__column-->
                    <div class="trade__list__column">
                        <h3 class="trade__list__title">Bottle</h3>
                        <a href="#" title="Titulo doc" download>RTPNt.pdf</a>
                    </div><!--.trade__list__column-->
                    <div class="trade__list__column">
                        <h3 class="trade__list__title">Label</h3>
                        <a href="#" title="Titulo doc" download>RTPN-label.pdf</a>
                    </div><!--.trade__list__column-->
                    <div class="trade__list__column">
                        <h3 class="trade__list__title">Logo</h3>
                        <a href="#" title="Titulo doc" download>RTPN Logo.pdf</a>
                    </div><!--.trade__list__column-->
                </div><!--.trade__list__content-->
            </div><!--.trade__list-->
        </div><!--.trade__item-->
    </div><!--.trade__content-->
</section><!--.wrap-->
<!--NOTE: Inicia footer-->
</div><!--/.page-wrap-->
<footer class="footer">
    <div class="footer__media">
        <img src="assets/footer.png" alt="Titulo">
    </div><!-- /.footer__media -->
    <?php include 'footer.php'; ?>