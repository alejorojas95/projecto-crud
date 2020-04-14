

    $(document).ready(function () {

        $('button[type="submit"]').attr('disabled', 'disabled');

    $('input[type="text"]').keypress(function () {

                if ($(this).val() != '') {

        $('button[type="submit"]').removeAttr('disabled');

    }

});

});

    