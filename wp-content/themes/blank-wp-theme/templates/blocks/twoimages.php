<?php

$getLeftImage = get_field('image_left');
$getRightImage = get_field('image_right');

?>

<div class="twoimages" >
        <div class="twoimages__section-container">
            <div class="twoimages__section-content">
                <img src="<?= $getLeftImage['url'] ?>" class="twoimages__image-left" alt="">
                <img src="<?= $getRightImage['url'] ?>" class="twoimages__image-right" alt="">

            </div>
        </div>
</div>