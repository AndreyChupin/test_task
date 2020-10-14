<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'/>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'/>
    <link
            rel='stylesheet'
            href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
            integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T'
            crossorigin='anonymous'
    />
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <title>Тестовое задание</title>
</head>
<body id='body'>
<div class='form-section mt-5'>
    <div class='container'>
        <div class='reg row'>
            <div class='form-container col col-8 mx-auto'>
                <div class='card'>
                    <div class='card-body text-center'>
                        <h5 class='card-title'>Регистрация</h5>
                        <form id='form' name='form' action='' method='post'>
                            <input class='form-control' name='name' type='text' placeholder='Ваше имя' required>
                            <input class='form-control mt-3' name='surname' type='text' placeholder='Ваша фамилия'
                                   required>
                            <input class='form-control mt-3' name='email' type='email' placeholder='Ваш email' required>
                            <input class='form-control mt-3' name='password' type='password' placeholder='Пароль'
                                   required>
                            <input class='form-control mt-3' name='password_repeat' type='password'
                                   placeholder='Повторите пароль' required>
                            <button class='btn btn-primary mt-4' id='submit' name='submit' type='submit'>
                                Зарегистрироваться
                            </button>
                        </form>
                    </div>
                </div>
            </div> <!--form-container-->
        </div> <!--reg-->
    </div> <!--container-->
</div> <!--form-section-->
<script src='app.js'></script>
</body>
</html>
