<?php
require $_SERVER['DOCUMENT_ROOT'] . '/level_1_4/functions/addUser.php';
require $_SERVER['DOCUMENT_ROOT'] . '/level_1_4/functions/connectToDB.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/config.php';

$pdo = connectToDB($config);

if (!empty($_POST['name']) && !empty($_POST['surname'])){
    addUser($pdo, $_POST['name'], $_POST['surname']);
}

$title = 'Задание №4';
require $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
?>
<div class="panel-container show">
    <div class="panel-content">
        <h5 class="frame-heading">
            <?php echo (!empty($_POST['name'])&& !empty($_POST['surname']))
                ? 'Привет, ' . $_POST['surname'] . ' ' . $_POST['name'] . '!'
                : 'Привет!';
            ?>
        </h5>
        <form action="" method="POST">
            <div class="form-group">
            	<label class="form-label" for="name">Имя</label>
                <input name="name" type="text" id="name" class="form-control" placeholder="<?=!empty($_POST['name']) ? $_POST['name'] : 'Имя'?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="surname">Фамилия</label>
                <input name="surname" type="text" id="surname" class="form-control" placeholder="<?=!empty($_POST['surname']) ? $_POST['surname'] : 'Фамилия'?>">
            </div>
            <div class="form-group">
                <button class="btn btn-info mt-3" type="submit">Отправить</button>
            </div>
        </form>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
