$( function() {
    const searchNews = $("#searchNews");
    const routeName = $('.searchNews').data('routename');

    $('button.searchButton').on('click', function (event) {
        if (searchNews.val() === '') {
            event.preventDefault();
            searchNews.addClass('invalid-input');
        }
    });


    searchNews.on('keyup', function (event) {
        event.preventDefault();
        let value = $(this).val();

        $.ajax({
            url: routeName,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            data: {
                newsName: value,
            },
            dataType: 'json',
            success: function (res) {
                let availableTags = [];
                $.each(res, function (index, item) {
                    availableTags.push(item.title)
                });

                $("#searchNews").autocomplete({
                    delay: 500,
                    minLength: 2,
                    source: availableTags
                });
            },
            error: function (err) {
                console.log(err)
            }
        });
    });
});
