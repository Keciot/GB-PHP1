<?php
$images = scandir(PATH_TO_PUBLIC . '/img/big');
$images = array_splice($images, 2);
//Удалим из массива картинку для 404, она, очевидно, не должна попадать в галерею
unset($images[array_search('not_found.png', $images)]);

?>

<div class="gallery-wrap">
    <?php echo getGallery($images); ?>
</div>