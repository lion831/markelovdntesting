<?php
//fetch.php

include('database_connection.php');

$column = array("students.ID_students", "students.second_name", "students.first_name", "students.otchestvo", "students.date_of_b_s", "students.tel", "group_name.name_group");

$query = "SELECT *, students.date_of_b AS date_of_b_s FROM ((students LEFT JOIN group_name ON students.id_group_s = group_name.ID_group)
            LEFT JOIN coach ON students.id_coach_real = coach.ID_coach) LEFT JOIN filial ON students.id_filial_s = filial.ID_filial ";

if(isset($_POST["search"]["value"]))
{
    $query .= '
 WHERE students.first_name LIKE "%'.$_POST["search"]["value"].'%" 
 OR students.second_name LIKE "%'.$_POST["search"]["value"].'%" 
 OR students.otchestvo LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
    $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
    $query .= 'ORDER BY students.second_name ';
}
$query1 = '';

if($_POST["length"] != -1)
{
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
    $sub_array = array();
    $sub_array[] = $row['ID_students'];
    $sub_array[] = $row['second_name'];
    $sub_array[] = $row['first_name'];
    $sub_array[] = $row['otchestvo'];
    $sub_array[] = date_f($row['date_of_b_s']);
    $sub_array[] = $row['tel'];
    $sub_array[] = $row['name_group'];
    $data[] = $sub_array;
}
function date_f($date)
{
    if (!isset($date)){
        return '';
    }else{
    $x = strtotime($date);
    return (date('d.m.Y', $x));
    }
    }

function count_all_data($connect)
{
    $query = "SELECT *, students.date_of_b AS date_of_b_s FROM ((students INNER JOIN group_name ON students.id_group_s = group_name.ID_group)
    INNER JOIN coach ON students.id_coach_real = coach.ID_coach) INNER JOIN filial ON students.id_filial_s = filial.ID_filial";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}

$output = array(
    'draw'   => intval($_POST['draw']),
    'recordsTotal' => count_all_data($connect),
    'recordsFiltered' => $number_filter_row,
    'data'   => $data
);

echo json_encode($output);

