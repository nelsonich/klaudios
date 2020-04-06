$(function () {
    let country = $("#weather-classic-shadow").data('country');
    $('.weatherLoading').append("Loading data...");
    if (country === '') return;
    let apiKey = "b6907d289e10d714a6e88b30761fae22";
    $.ajax({
        url: `https://openweathermap.org/data/2.5/weather?q=${country}&appid=${apiKey}`,
        method: 'get',
        dataType: 'json',
        success: function(res) {
            if (res) {
                let temp = $('.temp');
                $('div.weather h1.country').text(res.name);
                $('div.weather div.description').text(res['weather'][0].description);
                let icon = $(`<img src="https://openweathermap.org/img/w/${res['weather'][0].icon}.png" alt="Image" />`);
                temp.prepend(`<h1>${res.main['temp']}</h1>`);
                temp.prepend(icon);
                $('.weatherLoading').hide();
                $('.weather').removeClass('d-none');
            }
        },
        error: function(err) {
            console.log(err)
        }
    });
});
