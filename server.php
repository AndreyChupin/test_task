<?php
require_once 'functions.php';

/*Юзеры*/
$users = [
    ['id' => 1,
        'name' => 'Иван',
        'email' => 'ivan@mail.ru'],
    ['id' => 2,
        'name' => 'Петр',
        'email' => 'peter@mail.ru'],
    ['id' => 3,
        'name' => 'Сидор',
        'email' => 'sidor@mail.ru'],
];

/*Обработка запросов*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    /*Проверка email*/
    foreach ($users as $user) {
        if ($user['email'] === $_POST['email']) {
            $status = 'is_exist';
            handler($status, $_POST['email']);
        }
    }

    /*Проверка паролей на соответствие*/
    if ($_POST['password'] !== $_POST['password_repeat']) {
        $status = 'not_identical_pass';
        handler($status, $_POST['email']);
    }

    /*Добавление юзера*/
    if (!isset($status)) {
        $status = 'ok';
        $users[] = ['id' => count($users) + 1, 'name' => $_POST['name'], 'email' => $_POST['email']];
        handler($status, $_POST['email']);
    }
}