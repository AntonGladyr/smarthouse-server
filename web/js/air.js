
$(document).ready(function() {

    // Input validation part
    function valuesValidation(e) {
        var values_range = e.target.id.split(":")[1].split("-");
        values_range = values_range.map(function(x) {
            return parseInt(x, 10);
        });
        if (e.target.value >= values_range[0] && e.target.value <= values_range[1]) {
            e.target.className = 'form-control validation-input-success';
        }
        else {
            e.target.className = 'form-control validation-input-error';
        }
    }

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

    function generateControls(field_list, table) {
        for (var controller_name in field_list) {

            // Controller name field

            //noinspection JSDuplicatedDeclaration
            var row = table.insertRow();
            //noinspection JSDuplicatedDeclaration
            var name_cell = row.insertCell(0);
            name_cell.colSpan = 2;
            name_cell.style.background = "#B3E3F2";
            name_cell.style.textAlign = "center";
            name_cell.innerHTML = controller_name.bold();

            // Descriptions part

            for (var control_description in field_list[controller_name]) {
                var control = field_list[controller_name][control_description];
                switch (control['type']) {
                    case 'number':
                        var control_row = table.insertRow();
                        var control_desc_cell = control_row.insertCell(0);
                        var control_ctrl_cell = control_row.insertCell(1);

                        control_desc_cell.style.width = '60%';
                        control_desc_cell.style.verticalAlign = 'middle';
                        control_desc_cell.innerHTML = control_description;

                        var value_input = document.createElement('input');
                        value_input.className='form-control validation-input-success';
                        value_input.value = control['value'];
                        value_input.id = control_description+':'+
                                         control['range'][0].toString()+'-'+
                                         control['range'][1].toString();
                        value_input.addEventListener("input", valuesValidation);

                        control_ctrl_cell.appendChild(value_input);
                        break;
                }
            }
        }
    }

    // Init part
    // -------------------------------
    var websocket = new WebSocket(host+':'+port);
    var controllers_table = document.getElementById('controllers-info-table');
    var values_table = document.getElementById('current-values-table');
    var controls_table = document.getElementById('controls-table');



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

            case 'data/air/static':

                // Get only data part
                data = data['data'];

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
                data = data['data']['air'];

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

            case 'controls/air':
                var controls = data['controls'];

                //noinspection JSDuplicatedDeclaration
                generateControls(controls, controls_table);

                break;
        }
    };



    websocket.onopen = function() {
        var request = {
            'destination': 'server',
            'type': 'request/data/air/static'
        };
        websocket.send(JSON.stringify(request));

        request = {
            'destination': 'server',
            'type': 'request/controls/air'
        };
        websocket.send(JSON.stringify(request));
    };

});