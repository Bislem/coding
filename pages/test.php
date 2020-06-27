<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

</head>
<body>
    

<table id="table" class="display">
    <thead>

    </thead>
    <tbody>

    </tbody>
</table>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    <script>
     function Employee ( name, position, salary, office ) {
    this.name = name;
    this.position = position;
    this.salary = salary;
    this._office = office;
 
    this.office = function () {
        return this._office;
    }
};
 
$('#table').DataTable( {
    data: [
        new Employee( "Tiger Nixon", "System Architect", "$3,120", "Edinburgh" ),
        new Employee( "Garrett Winters", "Director", "$5,300", "Edinburgh" )
    ],
    columns: [
        { data: 'name' },
        { data: 'salary' },
        { data: 'office' },
        { data: 'position' }
    ]
} );
    </script>




   
</body>
</html>