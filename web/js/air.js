

// GUI part
// -------------------------------
function generateTable(descriptions, values) {
    var table = document.createElement('table');
    table.className = 'table';
    for (var i = 0; i < descriptions.length; i++) {
        var row = table.insertRow();
        var description_column = row.insertCell(0);
        var value_column = row.insertCell(1);
        description_column.innerHTML = descriptions[i];
        value_column.innerHTML = values[i];
    }
    return table;
}



// Init part
// -------------------------------
var websocket = new WebSocket(host+':'+port);




// Websocket methods implement
// -------------------------------
websocket.onmessage = function(event) {
    var data = JSON.parse(event.data);
    if (data['destination'] != 'client') {
        return null;
    }

    switch (data['type']) {
        case 'data/air/static':
            // TODO: Parse data and make table
            document.getElementById('controllers-info').innerHTML = '';
            data = data['data'];
            for (var name in data) {
                var controller = data[name];
                if (controller == undefined) {
                    continue;
                }
                document.getElementById('controllers-info').appendChild(
                    generateTable(controller['descriptions'], controller['values'])
                );
            }
            break;
        case 'data/dynamic':
            document.getElementById('current-values').innerHTML = '';
            data = data['data']['air'];
            for (var name in data) {
                var controller = data[name];
                console.log(controller);
                document.getElementById('current-values').appendChild(
                    generateTable(controller['descriptions'], controller['values'])
                );
            }
            break;
    }
};

websocket.onopen = function() {
    var request = {
        'destination': 'server',
        'type': 'request/data/air/static'
    };
    websocket.send(JSON.stringify(request));
};