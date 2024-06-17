<?php
ini_set('date.timezone', 'Asia/Kolkata');

require('conn.php');

$s = new dbConn();
$link = $s->Link();

$sql = "INSERT INTO `form` (`student_name`, `college`, `class`, `department`, `address`, `software_engineering`, `cloud_computing`, `artificial_intelligence`, `web_technology`, `data_science`, `created_by`, `created_at`) 
    VALUES (
    '".$_POST['studentname']."',
    '".$_POST['college']."',
    '".$_POST['class']."',
    '".$_POST['department']."',
    '".$_POST['address']."',
    '".$_POST['grade1']."',
    '".$_POST['grade2']."',
    '".$_POST['grade3']."',
    '".$_POST['grade4']."',
    '".$_POST['grade5']."',
    1,
    '".date('Y-m-d H:i:s')."'
)";

$result = mysqli_query($link, $sql);

if ($result) {
    echo json_encode(["status" => "Done"]);
} else {
    echo json_encode(["status" => "Error", "message" => "Data not saved"]);
}
?>




