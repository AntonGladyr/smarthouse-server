/*global $*/
/*global host*/
/*global port*/
/*global page*/

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
    function generateInfo(data, named, table_name) {

        if (named) {
            var ready_data = [];
            for (var name in data) {
                ready_data.push({"description": "Controller name", "value": name, "type": ' '});
                for (var value_index in data[name]) {
                    ready_data.push(data[name][value_index]);
                }
            }
            
            data = ready_data;
        }
        
        $(table_name).bootstrapTable({
            columns: [
                {
                    field: "description",
                    title: "Description"
                },
                {
                    field: "value",
                    title: "Value"
                },
                {
                    field: "type",
                    title: "Type"
                }
            ],
            data: data
        });
    }

    function generateControls(field_list, table_name) {
        var table = document.getElementById(table_name);
        console.log(table_name);
        
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

            case 'data/'+page+'/static':
                data = data['data'];
                generateInfo(data, true, '#controllers-info-table');
                break;
                
            case 'data/dynamic':
                data = data['data'][page];
                generateInfo(data, false, '#current-values-table');
                break;

            case 'controls/'+page:
                console.log(data);
                var controls = data['controls'];
                generateControls(controls, 'controls-table');
                break;
        }
    };





    // On start part
    // -------------------------------
    websocket.onopen = function() {
        var request = {
            'destination': 'server',
            'type': 'request/data/'+page+'/static'
        };
        websocket.send(JSON.stringify(request));

        request = {
            'destination': 'server',
            'type': 'request/controls/'+page
        };
        websocket.send(JSON.stringify(request));
    };

});