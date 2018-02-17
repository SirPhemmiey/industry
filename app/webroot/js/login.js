

$(function() {

    // Style checkboxes and radios
    $('.styled').uniform();

    $(document).on('click', '#login', function(){
        var username = $('#username').val();
        var password = $('#password').val();
        if(username === ''){
            $('#usernameError').show('fast');
            $('input[type="text"]').css('border-color', 'red');
        }
        if(password === ''){
            $('#passwordError').show('fast');
            $('input[type="password"]').css('border-color', 'red');

        }
        return false;
    });
    if(username !== ''){
        alert('ji');
        $('#usernameError').hide();
        $('input[type="text"]').css('border-color', '');
    }
});

