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
<div class="wrap single-wine">
    <div class="wine__content">
        <p class="wine__title">CABERNET SAUVIGNON</p><!-- /.wine__title -->
        <h1 class="wine__leyenda">BOLD INTENSE RICH</h1><!-- /.wine__leyenda -->
        <div class="wine__picture">
            <picture>
                <source srcset="assets/botella_small.png" media="(max-width: 740px)">
                <img srcset="assets/botella.png" alt="Titulo imagen">
            </picture>
            <a href="#" target="_blank" title="Comprar vino" class="btn btn--more btn--wine">Comprar vino <svg><use xlink:href="#shape-icon-copa" /></svg></a>
        </div><!-- /.wine__picture -->
        <h2>The Appellation: <br /> Colchagua Valley</h2>
        <p>
            Set between the coastal mountain range and the Pacific Ocean, our Marchigue vineyard is located just 45 kilometers from the coast in one of the coolest sections of the Colchagua Valley. Given its maritime influence, temperatures are moderate in summer with cool nights. Characterized by its rolling hills, the unique soils in our vineyard are mainly decomposed granite and red clay. 
        </p>
        <h2>The Vintage: 2014</h2>
        <p>
            Aromas of ripe black fruit and black pepper are complemented with cassis flavors and hints of spice with a long velvety finish.
        </p>
        <h2>Winemaker’s Notes:</h2>
        <p>
            After destemming, the grapes are cold macerated for five days in opentop stainless steel tanks and fermented with native yeasts. After primaryfermentation, the wine is macerated with its skin for another ten days toachieve greater smoothness and intensity of flavors. Finally, the wine isracked to neutral oak barrels and aged for 12 months.
        </p>
        <hr>
        <section class="awards">
            <h2 class="title">Awards</h2><!-- /.title -->
            <div class="item__award">
                <svg><use xlink:href="#shape-icon-award" /></svg>
                <div class="item__award__text">
                    <p>
                        Ritual receives great recognition , after the visit to Chile of prominent journalist and wine critic James Suckling
                    </p>
                </div><!-- /.item__award__text -->
                <div class="item__award__buttons">
                    <a href="#" title="Read More" class="btn">Read more</a>
                    <a href="#" title="Download ShellSheet" class="btn" download>Download ShellSheet</a>
                </div><!-- /.item__award__buttons -->
            </div><!-- /.item__award -->
            <div class="item__award">
                <svg><use xlink:href="#shape-icon-award" /></svg>
                <div class="item__award__text">
                    <p>
                        Ritual receives great recognition , after the visit to Chile of prominent journalist and wine critic James Suckling
                    </p>
                </div><!-- /.item__award__text -->
                <div class="item__award__buttons">
                    <a href="#" title="Read More" class="btn">Read more</a>
                    <a href="#" title="Download ShellSheet" class="btn" download>Download ShellSheet</a>
                </div><!-- /.item__award__buttons -->
            </div><!-- /.item__award -->
            <div class="item__award">
                <svg><use xlink:href="#shape-icon-award" /></svg>
                <div class="item__award__text">
                    <p>
                        Ritual receives great recognition , after the visit to Chile of prominent journalist and wine critic James Suckling
                    </p>
                </div><!-- /.item__award__text -->
                <div class="item__award__buttons">
                    <a href="#" title="Read More" class="btn">Read more</a>
                    <a href="#" title="Download ShellSheet" class="btn" download>Download ShellSheet</a>
                </div><!-- /.item__award__buttons -->
            </div><!-- /.item__award -->
        </section><!-- /.awards -->
        <a href="#" title="Ver más" class="btn btn--more btn--award">Ver más</a>
    </div><!-- /.wine__content -->
    <div class="bottom__content">
        <hr>
        <section class="block">
            <div class="information">
                <h2 class="title">Technical Information</h2><!-- /.title -->
                <form action="">
                    <div class="input-group">
                        <select name="year" id="year">
                            <option value="Select year">Select year</option>
                            <option value="2010">2010</option>
                        </select>
                    </div><!-- /.input-group -->
                    <div class="send-group">
                        <input type="submit" value="Download">
                    </div><!-- /.send-group -->
                </form>
            </div><!-- /.information -->
            <hr>
            <div class="related--wines">
                <h2 class="title">Wines</h2><!-- /.title -->
                <div class="related__slide">
                    <ul class="slides">
                        <li>
                            <a href="single-wines.php" title="Titulo vino">
                                <img src="assets/botella.png" alt="Titulo">
                                <span class="item__related__title">Sauvignon Blanc</span>
                            </a>
                        </li>
                        <li>
                            <a href="single-wines.php" title="Titulo vino">
                                <img src="assets/botella.png" alt="Titulo">
                                <span class="item__related__title">Chardonnay</span>
                            </a>
                        </li>
                        <li>
                            <a href="single-wines.php" title="Titulo vino">
                                <img src="assets/botella.png" alt="Titulo">
                                <span class="item__related__title">Red Blend</span>
                            </a>
                        </li>
                        <li>
                            <a href="single-wines.php" title="Titulo vino">
                                <img src="assets/botella.png" alt="Titulo">
                                <span class="item__related__title">Syrah Rosé</span>
                            </a>
                        </li>
                        <li>
                            <a href="single-wines.php" title="Titulo vino">
                                <img src="assets/botella.png" alt="Titulo">
                                <span class="item__related__title">Pinot Noir</span>
                            </a>
                        </li>
                    </ul><!-- /.slides -->
                </div><!-- /.related__slide -->
            </div><!-- /.related--wines -->
        </section><!-- /.block -->
    </div><!-- /.bottom__content -->
</div><!-- /.wrap -->
<!--NOTE: Inicia footer-->
</div><!--/.page-wrap-->
<footer class="footer">
    <div class="footer__media">
        <img src="assets/footer-wines.png" alt="Titulo">
    </div><!-- /.footer__media -->
    <?php include 'footer.php'; ?>