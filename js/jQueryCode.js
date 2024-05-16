$(document).ready(function() {

    $('#addEmployeeBtn').click(function() {
        window.location.href = 'index.php';
    });

    $('#viewEmployeeBtn').click(function() {
        window.location.href = 'view.php';
    });

    $('form').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        var form = $(this);
        $.ajax({
            type: 'POST',
            url: 'script/insert_data.php',
            data: formData,
            success: function(response) {
                form.trigger('reset');
                showPopup('Data submitted successfully.', 'success');
                console.log('Data submitted successfully.');
            },
            error: function(xhr, status, error) {
                showPopup('An error occurred. Please try again later.', 'error');
                console.error('Error:', error);
            }
        });
    });

    $.ajax({
        url: 'script/fetch_data.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            console.log("data>>>>>>"+(JSON.stringify(data)))
            var table = new Tabulator("#employee-table", {
                data: data,
                layout:"fitColumns",
                columns: [
                    {title: "Name", field: "name", resizable: false},
                    {title: "Address", field: "address", resizable: false},
                    {title: "Email", field: "email", resizable: false},
                    {title: "Department", field: "department", resizable: false},
                    {title: "Salary", field: "salary", resizable: false}
                ],
            });
        },
        error: function(xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });

});

function showPopup(message, type) {
    var popup = $('<div class="popup ' + type + '">' + message + '</div>');
    $('body').append(popup);
    setTimeout(function() {
        popup.fadeOut('slow', function() {
            $(this).remove();
        });
    }, 3000);
}