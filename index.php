<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php";
?>

<!-- Если авторизован выведет приветствие -->
<?php if(isset($_SESSION['logged_user'])) : ?>
	Привет, <?php echo $_SESSION['logged_user']->name; ?></br>
	<form class="mainbox">
	<h1>Manage</h1>
	<button class="btn btn-success" formaction="text.php" type="submit">Загрузить акт</button>
	<button class="btn btn-success" formaction="acts.php" type="submit">Акты</button>
</div>

<!-- Пользователь может нажать выйти для выхода из системы -->
</br>
<a href="logout.php">Выйти</a> <!-- файл logout.php создадим ниже -->
<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<form class="mainbox">
	<h1>FoodSharing</h1>
	<button class="btn btn-success" formaction="login.php" type="submit">Авторизоваться</button>
	<button class="btn btn-success" formaction="signup.php" type="submit">Регистрация</button>
</div>
<!--<a href="login.php">Авторизоваться</a><br>
<a href="signup.php">Регистрация</a>--!>
<?php endif; ?>

<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->