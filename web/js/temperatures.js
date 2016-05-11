
function currentTemperaturesUpdate() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var data = JSON.parse(request.responseText);
            for (var controller in data) {
                for (var value_type in data[controller]) {
                    console.log(data[controller][value_type]);
                    document.getElementById(controller+":"+value_type).innerHTML = data[controller][value_type]+"°C";
                }
            }

        }
    };
    request.open('GET', '/api/temperatures/current');
    request.send();
}

function showSevenDaysChart(item) {
    $.get('/api/temperatures/'+item.id+'/7', function(data, status) {
        if (status == 'success') {
            var request_data = JSON.parse(data);

            // Preparing data
            var chart_data = {
                'labels': [],
                'datasets': []
            };

            chart_data['labels'] = request_data['labels'];
            for (var value_type in request_data['value_types']) {
                chart_data['datasets'].push({
                    label: value_type,
                    data: request_data['value_types'][value_type]
                });
            }

            // Making chart

            var ctx = $("#chart");
            var chart = new Chart(ctx, {
                type: 'line',
                data: chart_data,
                options: {

                }
            });
        }
    });
    $('#summary-wrapper').fadeIn();
}

setInterval(currentTemperaturesUpdate, 3000);