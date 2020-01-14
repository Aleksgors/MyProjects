<?php

    require_once 'config.php';

    $mysqli = mysqli_connect($host, $user, $password, $database);
    mysqli_set_charset($mysqli, 'UTF-8');
    
    if(mysqli_connect_error($mysqli)) {
        echo "Не удалось подключиться к БД: ". mysqli_connect_error();
    }