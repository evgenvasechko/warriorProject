$(document).ready(function () {
    $('form').submit(function (event) {
        event.preventDefault();

        var data = $('form').serializeArray();

        if (data[0].value && data[1].value && data[2].value) {

            $.ajax({
                url: 'scripts/mail.php',
                method: 'post',
                data: data,
            }).done(function (msg) {
                alert(msg);
                $('body').css('overflow', '');
                $('#call-us-form').css('display', '');
            });
        }
        else {
            alert('Пожалуйста, заполните все поля');
        }
    });
});