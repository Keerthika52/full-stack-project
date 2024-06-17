<?php
ini_set('date.timezone', 'Asia/Kolkata');
require('conn.php');

$s = new dbConn();
$link = $s->Link();

$sql = "UPDATE form SET
student_name='".$_POST['studentnameEdit']."',
college='".$_POST['collegeEdit']."',
class='".$_POST['classEdit']."',
department='".$_POST['departmentEdit']."',
address='".$_POST['addressEdit']."',
software_engineering='".$_POST['grade1Edit']."',
cloud_computing='".$_POST['grade2Edit']."',
artificial_intelligence='".$_POST['grade3Edit']."',
web_technology='".$_POST['grade4Edit']."',
data_science='".$_POST['grade5Edit']."',
updated_by='1',
updated_at='".date('Y-m-d H:i')."'
WHERE id=".$_POST['studentId'];

$res = mysqli_query($link, $sql);

if($res){
$sql1="select * from form where id=".$_POST['studentId'];
$res1=mysqli_query($link,$sql1);
if($res1){
while($row=mysqli_fetch_assoc($res1)){
$out ="<td></td>
<td>".$row['student_name']."</td>
<td>".$row['college']."</td>
<td>".$row['class']."</td>
<td>".$row['department']."</td>
<td>".$row['address']."</td>
<td>".$row['web_technology']."</td>
<td>".$row['cloud_computing']."</td>
<td>".$row['artificial_intelligence']."</td>
<td>".$row['web_technology']."</td>
<td>".$row['software_engineering']."</td>
<td><button class='btn btn-info' type='button' onClick='functionEdit(this)' data-id='".$row['id']."'>Edit</button></td>
<td><button class='btn btn-danger' type='button' onClick='confirmDelete(this)' data-id='".$row['id']."'>Delete</button></td>";
	}
	$output = ["status"=>"Done","data"=>$out];
}else{
	$output = ["status"=>"Failed","msg"=>"error to get data"];
}
}else{
$output = ["status"=>"Failed","msg"=>"error to update data"];
}

echo json_encode($output);
?>