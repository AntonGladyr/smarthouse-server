function generate_table(types, values) {
    var table = document.createElement('table');
    table.className = 'data-table';
    for (var i = 0; i < types.length; i++) {
        var row = table.insertRow();
        row.insertCell(0).innerHTML = types[i];
        row.insertCell(1).innerHTML = values[i];
    }
    return 
}


var websocket = new WebSocket("ws://smarthouse.php.onlini.co:8001");

websocket.onopen = function() {
    var static_data_request = {
        'destination':'server',
        'type':'request/data/air/static'
    };
    websocket.send(JSON.stringify(static_data_request));
};

websocket.onmessage = function (event) {
    console.log(event.data);
    var message = JSON.parse(event.data);
    if (message['destination'] != 'client') {
        return;
    }

    switch (message['type']) {
        case 'data/air/static':
            var column = document.getElementById('controllers-info');
            column.innerHTML = null;
            var data = message['data']['air'];

            for (var controller in data) {
                var table = generate_table(data[controller]['types'], data[controller]['values']);
                var row = table.insertRow(0);
                row.insertCell(0).innerHTML = 'Controller';
                row.insertCell(1).innerHTML = controller;
                column.appendChild(table);
            }
            break;

        case 'data/dynamic':
            var column = document.getElementById('values');
            column.innerHTML = null;
            var data = message['data']['air'];
            column.appendChild(generate_table(data));
            break;
    }
};
