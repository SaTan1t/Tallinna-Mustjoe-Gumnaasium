<?php
/*
Template Name: contacts
*/
?>




<?php get_header(); ?>
    <div class="container pupa" style="padding:0;">
        <div class="marja">
            <h1>Контакты</h1>
            <div class="razdelenie">
                <div class="contactinfo">
                    <p style="width: 360px; margin-left: 70px;;">Телефон: (+372) 6 566 468</p>
                    <p style="width: 360px;margin-left: 70px; ;">E-mail: info@mjg.ee</p>
                    <p style="width: 360px; margin-left: 70px;;">Paldiski mnt 83. Tallinn 10614</p>
                    <div style="display: flex;margin-top: 35px;">
                        <a href="https://www.facebook.com/mustjoegumnaasium">Facebook</a>
                        <a href="https://www.instagram.com/mustjoe_gumnaasium/" style="margin-left: 30px;">Instagram</a>
                        <a href="https://www.tiktok.com/@mjg_45" style="margin-left: 30px;">Tik Tok</a>
                    </div>

                </div>
                <div class="forma">
                    <div class="formacontent" st>
                        <p>Связаться с нами</p>
                        <div style="margin-top:-35px">
                            <?php echo do_shortcode( '[contact-form-7 id="0270a92" title="Контактная форма 1"]' )?>
                        </div>
                    </div>

                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2029.2249752321459!2d24.68963817735888!3d59.42932230301261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469294640dd0b28b%3A0xe304d12e90e1125d!2z0KLQsNC70LvQuNC90YHQutCw0Y8g0LPQuNC80L3QsNC30LjRjyDQnNGD0YHRgtC50YvRjQ!5e0!3m2!1sru!2see!4v1711645431213!5m2!1sru!2see"
                width="1189" height="480" style="border:0;border-radius: 50px;margin-top: 25px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>




                <?php get_footer(); ?>
        </div>
    </div>