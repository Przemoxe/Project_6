<?php

/* Image  */
$getImage = get_field('image');

?>

<div class="image" >
        <div class="image__section-container">
            <div class="image__section-content">
                <img src="<?= $getImage['url'] ?>" alt="">
                
            </div>
        </div>
</div>