<?php
/*Добавление логов*/
function log_append($email, $log_msg)
{
    file_put_contents('log.txt', $log_msg . '|' . $email . '|' . date('d-m-Y, H:i:s') . "\n", FILE_APPEND);
}

/*Обработка запросов*/
function handler($status, $email)
{
    if ($status === 'is_exist') {
        $msg = 'Пользователь с таким email уже существует';
        $log_msg = 'Ошибка. Попытка добавления существующего e-mail';
    } elseif ($status === 'not_identical_pass') {
        $msg = 'Пароли не совпадают';
        $log_msg = 'Ошибка. Несовпадение паролей';

    } else {
        $msg = 'Успешная регистрация';
        $log_msg = 'Успех. Пользователь добавлен';

    }
    log_append($email, $log_msg);
    $res = ['status' => $status, 'msg' => $msg];
    echo json_encode($res);
    exit();
}