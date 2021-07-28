<?php
//action.php

include('database_connection.php');

if($_POST['action'] == 'edit')
{
    $data = array(
        ':first_name'  => $_POST['first_name'],
        ':date_of_b_s'  => $_POST['date_of_b_s'],
        ':tel'  => $_POST['tel'],
        ':second_name'  => $_POST['second_name'],
        ':otchestvo'   => $_POST['otchestvo'],
        ':group_name'   => $_POST['group_name'],
        ':ID_students'    => $_POST['ID_students']
    );

    $query = "
 UPDATE students 
 SET first_name = :first_name, 
 second_name = :second_name, 
 otchestvo = :otchestvo,
 tel = :tel,
 date_of_b_s = :date_of_b
 group_name = :group_name
 WHERE ID_students = :ID_students
 ";
    $statement = $connect->prepare($query);
    $statement->execute($data);
    echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
    $query = "
 DELETE FROM students 
 WHERE ID_students = '".$_POST["ID_students"]."'
 ";
    $statement = $connect->prepare($query);
    $statement->execute();
    echo json_encode($_POST);
}