<?php
declare(strict_types=1);

session_start();

if(isset($_SESSION['login']) && $_SESSION['login'] !== ''){
    echo "<h1>Привет, " . $_SESSION['login'] . "!</h1>". PHP_EOL;
    echo '<a href="exit.php">Выйти</a>';
} else {
    include('./index.html');
}