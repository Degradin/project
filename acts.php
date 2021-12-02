<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php";
?>
<html>
    <head>
        <title>Last 10 Results</title>
    </head>
    <body>
        <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $users = R::count(`users`);
            $results = R::getAll('SELECT * FROM `users`');
                ?>
                <tr>
                    <td><?php echo $result?></td>
                </tr>
            <?php
            ?>
            </tbody>
            </table>
    </body>
</html>