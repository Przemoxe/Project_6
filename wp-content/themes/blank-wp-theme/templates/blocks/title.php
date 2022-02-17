<?php



$getText = get_field('text');
$getChoice = get_field('text_choice');
$getLink = get_field('link');

?>

<div class="title" >
        <div class="container">
            <div class="title__section-content">
            <h3>

                <?php if($getChoice === 'No'): ?>
                <?= $getText; ?>
                <?php else: ?>
                    <a href="<?= $getLink ?>"> <?= $getText ?></a>
                <?php endif;?>
                    </h3>

            </div>
        </div>
</div>