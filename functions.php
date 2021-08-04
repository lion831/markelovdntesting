<?php
function debug($data){
    echo '<pre>'.print_r($data,1).'</pre>';
}

include 'config.php';
sleep(1);
if (isset($_POST['id'])){
    $value = $_POST['value'];
    $column = $_POST['column'];
    $id = $_POST['id'];

    $sql = "UPDATE students SET $column = :value WHERE md5(ID_students) = :id LIMIT 1";
    $query = $db->prepare($sql);
    $query->bindParam('value',$value);
    $query->bindParam('id',$id);

    if($query->execute()){
        echo 'Update successful';
    }else{
        echo 'Failure';
    }
}

//$coachs = array();
//$filials = array();
//$activs = array();
//$groups = array();
//
//$query = "SELECT * FROM `coach`";
//$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
//if($result){
//    while ($row = mysqli_fetch_assoc($result)){
//        $coachs[$row["ID_coach"]]=$row['secondname'].' '.mb_substr($row['name'], 0,1).'.'.mb_substr($row['otchestvo'], 0,1);
//    }
//}
//
//$query = "SELECT * FROM `filial`";
//$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
//if($result){
//    while ($row = mysqli_fetch_assoc($result)){
//        $filials[$row["ID_filial"]]=$row['name_filial'];
//    }
//}
//
//$query = "SELECT * FROM `active`";
//$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
//if($result){
//    while ($row = mysqli_fetch_assoc($result)){
//        $activs[$row["id_active"]]=$row['active_name'];
//    }
//}
//
//$query = "SELECT * FROM `group_name`";
//$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
//if($result){
//    while ($row = mysqli_fetch_assoc($result)){
//        $groups[$row["ID_group"]]=$row['name_group'];
//    }
//}

$query ="SELECT IF(students.otchestvo IS NULL, CONCAT(students.second_name,' ',students.first_name), CONCAT(students.second_name,' ',students.first_name,' ', students.otchestvo)) AS student_full_name,
       date_format(students.date_of_b, '%d.%m.%Y') AS students_date_of_b,
       CONCAT (coach.secondname, ' ', LEFT (coach.name, 1),'.',LEFT (coach.otchestvo, 1),'.') AS coach_name,
       filial.short_name_filial,
       group_name.name_group,
       students.tel,
       students.vibor
FROM ((students LEFT JOIN coach ON students.id_coach_real = coach.ID_coach)
    LEFT JOIN filial ON students.id_filial_s = filial.ID_filial)
         LEFT JOIN group_name ON students.id_group_s = group_name.ID_group";

$students_club = array();

$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    while ($row = mysqli_fetch_assoc($result)){
        $students_club[]=$row;
    }

}
//debug($students_club);
echo json_encode($students_club);

