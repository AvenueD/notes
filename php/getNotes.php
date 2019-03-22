<?php
session_start();
ob_start();
include_once("config.php");

$sql = "SELECT * FROM tblnotes ORDER BY notes_id DESC";

// fetch sql result
$data = array();
//$header = array();
if ($result = $mysqli->query($sql)) {
    while($row = $result->fetch_array(MYSQL_ASSOC)) {
        $data[] = $row;
	}
}
echo json_encode($data);

?>