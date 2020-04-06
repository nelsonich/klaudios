$(function () {
    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_country.php",
        "method": "GET",
        "headers": {
            "x-rapidapi-host": "coronavirus-monitor.p.rapidapi.com",
            "x-rapidapi-key": "2693e1ae18msh75b4d25581bb1f4p115f91jsne1721dade7bb"
        }
    }

    $('#cases_by_country tbody').append(`<tr><td colspan="9" class="text-center">Loading data...</td></tr>`)

    $.ajax(settings).done(function (response) {
        let data = JSON.parse(response);
        let casesByCountry = $('#cases_by_country tbody');
        $('#cases_by_country caption').append(data.statistic_taken_at);

        casesByCountry.empty();
        $.each(data.countries_stat, function (index, value) {
            let tr = "";
             tr = `<tr>
                        <td>${index+1}</td>
                        <td>${value.country_name}</td>
                        <td>${value.cases}</td>
                        <td>${value.deaths}</td>
                        <td>${value.region}</td>
                        <td>${value.total_recovered}</td>
                        <td>${value.new_deaths}</td>
                        <td>${value.new_cases}</td>
                        <td>${value.serious_critical}</td>
                      </tr>`;

            casesByCountry.append(tr);
        });

        $('#cases_by_country').DataTable();
    });
});
