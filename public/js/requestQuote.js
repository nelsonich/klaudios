$(document).ready(function () {
    let firstName = $("#firstname"), lastName = $("#lastname"), subject = $("#subject"), message = $("#message");
    let reqQuote = $(".requestQuote");
    let emptyFields = [];
    emptyFields.push(firstName);
    emptyFields.push(lastName);
    emptyFields.push(subject);
    emptyFields.push(message);

    reqQuote.on("submit", function (event) {
        event.preventDefault();
        let formData = new FormData(this);
        const that = $(this);

        if (firstName.val() === '' || lastName.val() === '' || subject.val() === '' || message.val() === '') {
            isEmpty();
            return;
        }
        that.find('input[type="submit"]').attr('disabled', true);
        removeClassEmptyField();
        $.ajax({
            url: 'request-quote',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (response) {
                if (response === "ok") {
                    that.find('input[type="submit"]').attr('disabled', false);
                    $(".requestQuote")[0].reset();
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    });

    /* Validate Inputs On Change */
    reqQuote.find('input[type="text"]').on("change", function () {
        let that = $(this);
        that.removeClass('emptyField');
        if (onChangeInputs(that)) {
            that.addClass('emptyField');
        }
    });

    function onChangeInputs(value) {
        let isEmptyInput;
        isEmptyInput = $(value).val() === '' ? true : false;
        return isEmptyInput;
    }

    /* Is Empty Input */
    function isEmpty() {
        for (let i = 0; i < emptyFields.length; i++) {
            $(emptyFields[i]).removeClass("emptyField");
            if ($(emptyFields[i]).val() === '') {
                $(emptyFields[i]).addClass("emptyField");
            }
        }
    }

    function removeClassEmptyField() {
        for (let i = 0; i < emptyFields.length; i++) {
            $(emptyFields[i]).removeClass("emptyField");
        }
    }
});
