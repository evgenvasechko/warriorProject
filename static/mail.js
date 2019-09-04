$(document).ready(function () {
    $('form').submit(function (event) {
        event.preventDefault();

        $.ajax({
            url: 'mail.php',
            method: 'post',
            dataType: 'json',
            data: $('form').serialize()
            success: function (msg) {
                if (msg == 'ok'){
                    $('#submit').css('display', 'none');
                }
                else {
                    $('#submit').css('display', 'none');
                }
            }
        }).done(function () {
            $(this).console.log('POST was sent')
        });
    });
});