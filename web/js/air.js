

// GUI part
// -------------------------------
function generateTable() {
    
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

    console.log(event.data);

    switch (data['type']) {
        case 'data/air/static':
            // TODO: Parse data and make table
            break;
        case 'data/dynamic':
            data = data['data']['air'];
            data.forEach(function(controller, name) {
                
            });
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