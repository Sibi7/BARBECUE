<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */
?>

<?php wp_footer(); ?>
<section class="about wow animate__animated animate__fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="about__box about__box--left">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/Rectangle_small.png" alt="">
                    <h3>About us</h3>
                </div>
                <p class="about__text">At Tim's Barbecue, we take great pride in providing only the best meats
                    available. Tim's Barbecue brings you the best of Texas style “Craft Barbecue." Chef/Owner, Tim
                    Smith describes Craft Barbecue as follows, " The meat is slow smoked for many hours with real
                    wood on our custom built smoker. We take no short cuts here, offering the best top quality Angus
                    beef and pork products."</p>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="about__box about__box--right">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/Rectangle_small.png" alt="">
                    <h3>Where to find us</h3>
                </div>
                <div class="about__info">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon_.png" alt="">
                    <p>Richboro Beer & Soda</p>
                </div>
                <div class="about__info">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon_1.png" alt="">
                    <p>Saturday – 4-7PM</p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-2">
                <div class="about__house">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/dom.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="footer__box">
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/facebook.png" alt="facebook">
                    </a>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/ins.png" alt="instagram">
                    </a>
                    <p>© Copyright Tim's Barbecue, LLC 2021. All Rights Reserved. Bucks County Food Website by FZP Digital</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        // spaceBetween: 60,
        slidesPerGroup: 2,
        loop: true,
        loopFillGroupWithBlank: true,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 480px
            992: {
                slidesPerView: 2,
                spaceBetween: 60
            },
        }
    });
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
<script>new WOW().init();</script>
<script src="js/main.js"></script>
</body>
</html>
