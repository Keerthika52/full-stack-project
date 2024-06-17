<?php
require('conn.php');

$s = new dbConn();
$conn = $s->Link();

$sql = "SELECT * FROM form";
$res = mysqli_query($conn, $sql);

if ($res) {
    $out = "";
    while ($row = mysqli_fetch_assoc($res)) {
        $out .= "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['student_name'] . "</td>
                    <td>" . $row['college'] . "</td>
                    <td>" . $row['class'] . "</td>
                    <td>" . $row['department'] . "</td>
                    <td>" . $row['address'] . "</td>
                    <td>" . $row['software_engineering'] . "</td>
                    <td>" . $row['cloud_computing'] . "</td>
                    <td>" . $row['artificial_intelligence'] . "</td>
                    <td>" . $row['web_technology'] . "</td>
                    <td>" . $row['data_science'] . "</td>
                    <td><button class='btn btn-info' type='button' onClick='functionEdit(this)' data-id='".$row['id']."'>Edit</button></td>
                    <td><button class='btn btn-danger' type='button' onClick='confirmDelete(this)' data-id='".$row['id']."'>Delete</button></td>
                </tr>";
    }
    echo json_encode(["data" => $out]);
} else {
    echo json_encode(["data" => "Error fetching data"]);
}
?>






