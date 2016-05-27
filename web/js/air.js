function generate_table(data) {
    var table = document.createElement('table');
    table.className = 'data-table';
    for (var type in data) {
        console.log(type);
        var row = table.insertRow();
        row.insertCell(0).innerHTML = type+":";
        row.insertCell(1).innerHTML = data[type];
    }
    return table;
}


var websocket = new WebSocket("ws://127.0.0.1:8001");

websocket.on_open = function() {
    var static_data_request = {
        'destination':'sensors',
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
            var data = message['data'];

            for (var controller in data) {
                var table = generate_table(data[controller]);
                var row = table.insertRow(0);
                row.insertCell(0).innerHTML = 'Controller:';
                row.insertCell(1).innerHTML = controller;
                column.appendChild(table);
            }
            break;

        case 'data/air/dynamic':
            var column = document.getElementById('values');
            column.innerHTML = null;
            var data = message['data'];
            column.appendChild(generate_table(data));
            break;
    }
};

