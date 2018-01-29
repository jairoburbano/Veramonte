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
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner">
    <div class="banner__media">
        <img src="assets/banner_news.jpg" alt="Banner Titulo">
    </div><!-- /.banner__media -->
    <h1 class="banner__title">
        News
    </h1><!-- /.banner__title -->
</div><!-- /.banner -->
<div class="wrap">
    <div class="category--news">
        <h2>Category</h2>
        <div class="category__content">
            <a href="#" title="Titulo" class="item__category">Awards</a>
            <a href="#" title="Titulo" class="item__category active">News</a>
            <a href="#" title="Titulo" class="item__category">Other</a>
        </div><!-- /.category__content -->
    </div><!-- /.category--news -->
    <div class="container--news">
        <div class="item__news item__news--award">
            <a href="single-news.php" class="item__news__media" title="Titulo noticia">
                <img src="assets/banner_news.jpg" alt="Titulo imagen">
            </a>
            <div class="item__news__content">
                <p class="item__news__date">
                    26 de marzo 2015
                </p><!-- /.item__news__date -->
                <h2 class="item__news__title">
                    Ut mattis lectus accumsan metus tincidunt, id temporUt mattis lectus accumsan metus tincidunt, id tempor
                </h2><!-- /.item__news__title -->
                <a href="single-news.php" title="See more" class="btn btn--more">See more</a>
            </div><!-- /.item__news__content -->
        </div><!-- /.item__news -->
        <div class="item__news">
            <a href="single-news.php" class="item__news__media" title="Titulo noticia">
                <img src="assets/banner_news.jpg" alt="Titulo imagen">
            </a>
            <div class="item__news__content">
                <p class="item__news__date">
                    26 de marzo 2015
                </p><!-- /.item__news__date -->
                <h2 class="item__news__title">
                    Ut mattis lectus accumsan metus tincidunt, id temporUt mattis lectus accumsan metus tincidunt, id tempor
                </h2><!-- /.item__news__title -->
                <a href="single-news.php" title="See more" class="btn btn--more">See more</a>
            </div><!-- /.item__news__content -->
        </div><!-- /.item__news -->
        <div class="item__news">
            <a href="single-news.php" class="item__news__media" title="Titulo noticia">
                <img src="assets/banner_news.jpg" alt="Titulo imagen">
            </a>
            <div class="item__news__content">
                <p class="item__news__date">
                    26 de marzo 2015
                </p><!-- /.item__news__date -->
                <h2 class="item__news__title">
                    Ut mattis lectus accumsan metus tincidunt, id temporUt mattis lectus accumsan metus tincidunt, id tempor
                </h2><!-- /.item__news__title -->
                <a href="single-news.php" title="See more" class="btn btn--more">See more</a>
            </div><!-- /.item__news__content -->
        </div><!-- /.item__news -->
        <div class="item__news">
            <a href="single-news.php" class="item__news__media" title="Titulo noticia">
                <img src="assets/banner_news.jpg" alt="Titulo imagen">
            </a>
            <div class="item__news__content">
                <p class="item__news__date">
                    26 de marzo 2015
                </p><!-- /.item__news__date -->
                <h2 class="item__news__title">
                    Ut mattis lectus accumsan metus tincidunt, id temporUt mattis lectus accumsan metus tincidunt, id tempor
                </h2><!-- /.item__news__title -->
                <a href="single-news.php" title="See more" class="btn btn--more">See more</a>
            </div><!-- /.item__news__content -->
        </div><!-- /.item__news -->
    </div><!-- /.container--news -->
    <button class="bt btn--load">Load more</button>
</div><!-- /.wrap -->
<!--NOTE: Inicia footer-->
</div><!--/.page-wrap-->
<footer class="footer">
    <div class="footer__media">
        <img src="assets/footer-news.jpg" alt="Titulo">
    </div><!-- /.footer__media -->
    <?php include 'footer.php'; ?>