
$(document).ready(function() {

    // GUI part
    // -------------------------------
    function generateInfo(descriptions, values, name, table) {
        if (name != undefined) {
            //noinspection JSDuplicatedDeclaration
            var row = table.insertRow();
            //noinspection JSDuplicatedDeclaration
            var name_cell = row.insertCell(0);
            name_cell.colSpan = 2;
            name_cell.style.background = "#B3E3F2";
            name_cell.style.textAlign = "center";
            name_cell.innerHTML = name.bold();
        }
        for (var i = 0; i < descriptions.length; i++) {
            //noinspection JSDuplicatedDeclaration
            var row = table.insertRow();
            //noinspection JSDuplicatedDeclaration
            var name_cell = row.insertCell(0);
            var value_cell = row.insertCell(1);
            name_cell.innerHTML = descriptions[i];
            name_cell.style.width = "60%";
            value_cell.innerHTML = values[i];
        }
    }


    // Init part
    // -------------------------------
    var websocket = new WebSocket(host+':'+port);
    var controllers_table = document.getElementById('controllers-info-table');
    var values_table = document.getElementById('current-values-table');



    // Websocket methods implement
    // -------------------------------
    websocket.onmessage = function(event) {

        // Just parse
        var data = JSON.parse(event.data);

        // Check destination
        if (data['destination'] != 'client') {
            return null;
        }

        switch (data['type']) {

            case 'data/water/static':

                // Get only data part
                data = data['data'];
                console.log(data);

                // Clear table
                controllers_table.innerHTML = '';

                // Loop through controllers
                //noinspection JSDuplicatedDeclaration
                for (var controller_name in data) {
                    generateInfo(data[controller_name]['descriptions'],
                        data[controller_name]['values'],
                        controller_name,
                        controllers_table
                    );
                }
                break;


            case 'data/dynamic':

                // Get needed data part
                data = data['data']['water'];

                // Clear table
                values_table.innerHTML = '';

                //noinspection JSDuplicatedDeclaration
                for (var controller_name in data) {
                    generateInfo(
                        data[controller_name]['descriptions'],
                        data[controller_name]['values'],
                        undefined,
                        values_table
                    );
                }
                break;
        }
    };



    websocket.onopen = function() {
        var request = {
            'destination': 'server',
            'type': 'request/data/water/static'
        };
        websocket.send(JSON.stringify(request));
    };

});