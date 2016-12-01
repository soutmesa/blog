$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "ajax": "data/objects_deep.txt",
        "columns": [
            { "data": "name" },
            { "data": "hr.position" },
            { "data": "contact.0" },
            { "data": "contact.1" },
            { "data": "hr.start_date" },
            { "data": "hr.salary" }
        ]
    });
});
// http://www.w3schools.com/angular/customers.php