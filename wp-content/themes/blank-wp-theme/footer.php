<?php
 $getLogo = get_theme_mod('footer_logo');
 $getAddress = get_theme_mod('address_info');
 $getLinkedin = get_theme_mod('header_logo');
 $getFacebook = get_theme_mod('header_logo');
 $getTwitter = get_theme_mod('header_logo');
 $getInstagram = get_theme_mod('header_logo');
 $getRights = get_theme_mod('rights');
 $siteUrl = get_site_url();
?>
<footer>
        <div class="row align-items-center">
            <div class="col-1">
                <img src="<?= $getLogo ?>" width="37px">
            </div>
            <div class="col-3"><p><?= $getAddress ?></p></div>
            <div class="col-3">
                <a href="<?= $getLinkedin ?>">  
                    <img class="ms-3" src="<?php $siteUrl; ?>/wp-content/themes/blank-wp-theme/images/004-linkedin.png">
                </a>
                <a href="<?= $getFacebook ?>">  
                    <img class="ms-3" src="<?php $siteUrl; ?>/wp-content/themes/blank-wp-theme/images/003-facebook.png">
                </a>
                <a href="<?= $getTwitter ?>">  
                    <img class="ms-3" src="<?php $siteUrl; ?>/wp-content/themes/blank-wp-theme/images/002-twitter.png">
                </a>
                <a href="<?= $getInstagram ?>">  
                    <img class="ms-3" src="<?php $siteUrl; ?>/wp-content/themes/blank-wp-theme/images/001-instagram.png">
                </a>

</div>
            <div class="col-5">
                <p class="text-end">
                <?= $getRights ?>
                </p>
            </div>

        </div>

        </footer>
        <?php wp_footer(); ?>
</body>
</html>