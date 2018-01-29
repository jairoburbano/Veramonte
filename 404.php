<?php
/**
 * Página de error 404
 *
 *
 * @package		veramonte
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = '';
$subpage = '';
$type = '404'; 
$title = ' ';
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
        Error 404
    </h1><!-- /.banner__title -->
</div><!-- /.banner -->
<section class="visit wrap">
    <div class="visit__content">
        <h1 class="title">Esta Página No Ha Sido Encontrada</h1><!-- /.title -->
        <a href="index.php" title="Volver al inicio" class="btn">Volver al inicio</a>
    </div><!-- /.visit__content -->
</section><!-- /.visit -->
<!--NOTE: Inicia footer-->
</div><!--/.page-wrap-->
<footer class="footer">
    <div class="footer__media">
        <img src="assets/footer-heritage.png" alt="Titulo">
    </div><!-- /.footer__media -->
    <?php include 'footer.php'; ?>