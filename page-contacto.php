<?php
/**
 *
 *
 * @package		veramonte
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'contacto';
$subpage = '';
$type = 'page';
$title = 'Contacto';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner">
    <div class="banner__media">
        <img src="assets/banner_news.jpg" alt="Banner Titulo">
    </div><!-- /.banner__media -->
    <h1 class="banner__title">
        Contact Us
    </h1><!-- /.banner__title -->
</div><!-- /.banner -->
<div class="wrap">
    <div class="contact">
        <h1 class="title">We would like to hear from you</h1><!-- /.title -->
        <form action="" class="contact-form">
            <div class="form__container">
                <div class="input-group group">
                    <label for="nickname">First name</label>
                    <input type="text" id="nickname" name="nickname">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="lastname">Last name</label>
                    <input type="text" id="lastname" name="lastname">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="mail">Email</label>
                    <input type="email" id="mail" name="mail">
                </div><!-- /.input-group -->
                <div class="select-group group">
                    <label for="place">Ubication</label>
                    <select name="place" id="place">
                        <option value="default">Select an option</option>
                        <option value="chile">Chile</option>
                        <option value="argentina">Argentina</option>
                    </select>
                </div><!-- /.select-group group -->
                <div class="textarea-group group">
                    <label for="message">Let's talk</label>
                    <textarea name="message" id="message"></textarea>
                </div><!-- /.textarea-group group -->
            </div><!-- /.form__container -->
            <div class="send-group">
                <input type="submit" value="Send" class="btn btn--send">
            </div><!-- /.send-group -->
            <div class="cssload-dots"></div><!-- /.cssload-dots -->
        </form><!-- /.contact-form -->
        <div class="contact__map">
            <p>Ruta 68, km 66 s/n</p>
            <p>Casablanca +56 32 2329929</p>
            <div id="map"></div><!-- /#map -->
            <a href="http://maps.google.com" target="_blank" class="btn btn--map">Google Maps</a>
        </div><!-- /.contact__map -->
    </div><!-- /.contact -->
</div><!-- /.wrap -->
<!--NOTE: Inicia footer-->
</div><!--/.page-wrap-->
<footer class="footer">
    <div class="footer__media">
        <img src="assets/footer.png" alt="Titulo">
    </div><!-- /.footer__media -->
    <?php include 'footer.php'; ?>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
        function initialize() {
            //MAPA
            var myLatlng = new google.maps.LatLng(-33.418580, -70.599599);
            var thisLatlng = new google.maps.LatLng(-33.418580, -70.599599);
            var myOptions = {
                zoom: 15, //nivel de zoom
                center: myLatlng,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
                scrollwheel: false,
                disableDoubleClickZoom: true,
                keyboardShortcuts: false,
                zoomControl: true,
                draggable: false,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.TOP_LEFT
                },
                streetViewControl: false,
            }
            var map = new google.maps.Map(document.getElementById("map"), myOptions);
            var image = '/img/marker.svg'; //imagen del marcador
            var marker = new google.maps.Marker({
                position: thisLatlng,
                map: map,
                icon: image
            });
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>