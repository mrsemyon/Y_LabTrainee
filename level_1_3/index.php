<?php
require $_SERVER['DOCUMENT_ROOT'] . '/level_1_3/classes/Foo.php';
require $_SERVER['DOCUMENT_ROOT'] . '/level_1_3/classes/Bar.php';

$bar = new Bar();

$title = 'Задание №3';
require $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
?>
<div class="panel-container show">
    <div class="panel-content">
        <h5 class="frame-heading">
            <?php echo $bar->getName();?>
        </h5>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
