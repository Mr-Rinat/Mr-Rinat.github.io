$(document).ready(function(){
    /*ПРОВЕРЯЕМ НАЖАТА ЛИ КНОПКА ОТПРАВКИ*/
    $('#btn_submit').click(function(){
        // собираем данные с формы
        var user_name    = $('#name').val();
        var user_email   = $('#email').val();
        var user_phone = $('#phone').val();
        // отправляем данные в log
        console.log(user_name);
        console.log(user_email);
        console.log(user_phone);
        // отправляем данные в php
        $.ajax({
            url: "script.php", // куда отправляем
            type: "post", // метод передачи
            data: { // что отправляем
                "name":    user_name,
                "email":   user_email,
                "phone":   user_phone,
            },
            error:function(){$("#erconts").html("Произошла ошибка!");}, 
            /* если произойдет ошибка в элементе с id erconts выведится сообщение*/                 
            beforeSend: function() {                     
                $("#erconts").html("Отправляем данные...");                   
            },                 
            success: function(result){                     
                /* В случае удачной обработки и отправки выполнится следующий код*/                     
                $('#erconts').html(result);                     
                console.log("ntcn");                 
            }  
        });
    });
});

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })