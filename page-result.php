<?php
/**
 *
 *
 * @package		veramonte
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = '';
$subpage = '';
$type = 'page';
$title = ' ';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner no-margin banner--single">
    <div class="banner__media">
        <img src="assets/banner_news.jpg" alt="Banner Titulo">
    </div><!-- /.banner__media -->
    <h1 class="banner__title">
        News
    </h1><!-- /.banner__title -->
</div><!-- /.banner -->
<section class="wrap single--news">
    <div class="category">
        <p class="category__title">Resultados para "<span>la busqueda</span>"</p>
    </div><!--.category-->
    <div class="news__items">
        <div class="news__item">
            <div class="news__item__content">
                <p class="news__item__date"><a href="single-news.php" title="category">Awards</a> | 26 de marzo 2015</p>
                <h2 class="news__item__title">
                    <a href="single-news.php" title="titulo post">
                        Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis
                    </a>
                </h2>
                <a href="single-news.php" title="See more" class="btn btn--more">See more</a>
            </div><!--.news__item__content-->
        </div><!--.news__item-->
        <div class="news__item">
            <div class="news__item__content">
                <p class="news__item__date"><a href="single-news.php" title="category">Awards</a> | 26 de marzo 2015</p>
                <h2 class="news__item__title">
                    <a href="single-news.php" title="titulo post">
                        Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis
                    </a>
                </h2>
                <a href="single-news.php" title="See more" class="btn btn--more">See more</a>
            </div><!--.news__item__content-->
        </div><!--.news__item-->
        <div class="news__item">
            <div class="news__item__content">
                <h2 class="news__item__title">
                    <a href="single-news.php" title="titulo post">
                        Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis
                    </a>
                </h2>
                <a href="single-news.php" title="See more" class="btn btn--more">See more</a>
            </div><!--.news__item__content-->
        </div><!--.news__item-->
        <div class="news__item">
            <div class="news__item__content">
                <p class="news__item__date"><a href="single-news.php" title="category">Awards</a> | 26 de marzo 2015</p>
                <h2 class="news__item__title">
                    <a href="single-news.php" title="titulo post">
                        Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis
                    </a>
                </h2>
                <a href="single-news.php" title="See more" class="btn btn--more">See more</a>
            </div><!--.news__item__content-->
        </div><!--.news__item-->
        <div class="news__item">
            <div class="news__item__content">
                <p class="news__item__date"><a href="single-news.php" title="category">Awards</a> | 26 de marzo 2015</p>
                <h2 class="news__item__title">
                    <a href="single-news.php" title="titulo post">
                        Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis
                    </a>
                </h2>
                <a href="single-news.php" title="See more" class="btn btn--more">See more</a>
            </div><!--.news__item__content-->
        </div><!--.news__item-->
        <ul class="pagination">
            <li class="pagination__item">
                <a href="single-news.php" title="1" class="current">1</a>
            </li>
            <li class="pagination__item">
                <a href="single-news.php" title="2">2</a>
            </li>
            <li class="pagination__item">
                <a href="single-news.php" title="3">3</a>
            </li>
            <li class="pagination__item">
                <a href="single-news.php" title="4">4</a>
            </li>
        </ul><!--.pagination-->
    </div><!--.news__items-->
</section><!--.wrap-->
<!--NOTE: Inicia footer-->
</div><!--/.page-wrap-->
<footer class="footer">
    <div class="footer__media">
        <img src="assets/footer.png" alt="Titulo">
    </div><!-- /.footer__media -->
    <?php include 'footer.php'; ?>