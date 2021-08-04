<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<!--    <link rel="stylesheet" href="css/style.css">-->
<!--    <script src="js/script.js"></script>-->

</head>
<body>
<table id="myTable">
    <thead>
    <tr>
        <th>Second name</th>
        <th>First name</th>
        <th>Otchestvo</th>
        <th>Date of birth</th>
        <th>Date of birth</th>
        <th>Date of birth</th>
        <th>Date of birth</th>
    </tr>
    </thead>

</table>
<script>
    $(document).ready( function () {
        var DataTable = $('#myTable').DataTable({
            'processing': true,
            'serverSide': true,
            'order': [],
            'ajax': {
                url: 'functions.php',
                type: 'POST',
                dataSrc: ''
            },
            columns: [
                {data: 'student_full_name'},
                {data: 'students_date_of_b'},
                {data: 'coach_name'},
                {data: "short_name_filial"},
                {data: "name_group"},
                {data: "tel"},
                {data: "vibor"}
            ]
        });
    });
</script>
</body>
</html>



