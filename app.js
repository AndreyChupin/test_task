/*Элементы*/
const form = $("#form"); // Форма
const formContainer = $('.form-container'); // Блок с формой
const reg = $('.reg'); // Блок регистрации
/*Отправка формы*/
form.on("submit", function (e) {
    e.preventDefault()

    let data = form.serializeArray(); // Данные из формы
    let jqXHR = $.post('server.php', data, function (data, status) {
        dataHandler(data, null)
    }, 'json')

    jqXHR.fail(function () {
        data = {msg: 'Ошибка сервера!'}
        dataHandler(data, true)
        console.log("Error: " + jqXHR.status)
    })
});

/*Обработка данных, полученных от сервера*/
function dataHandler(data, isError) {
    /*Очистка формы*/
    form[0].reset()

    /*Удаление существующих сообщений*/
    if ($('.res-msg')) {
        $('.res-msg').remove()
    }

    let mgsType
    if (data.status === 'is_exist' || data.status === 'not_identical_pass') {
        mgsType = 'warning'
    } else if (isError) {
        mgsType = 'danger'
    } else {
        mgsType = 'primary'
        formContainer.remove()
    }

    /*Добавление сообщения*/
    addMsg(data, mgsType)
}

/*Добавление сообщения*/
function addMsg({msg}, mgsType) {
    reg.prepend(`<div class='res-msg col col-8 mx-auto text-center alert alert-${mgsType}' role='alert'>${msg}</div>`)
}