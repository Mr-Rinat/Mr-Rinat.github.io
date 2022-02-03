$(document).ready(function(){
    /*ПРОВЕРЯЕМ НАЖАТА ЛИ КНОПКА ОТПРАВКИ*/
    $('#btn_submit').click(function(){
        // собираем данные с формы
        var user_name    = $('#name').val();
        var user_email   = $('#email').val();
        var user_phone = $('#phone').val();
        // отправляем данные
        console.log(user_name);
        console.log(user_email);
        console.log(user_phone);
    });
});

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })