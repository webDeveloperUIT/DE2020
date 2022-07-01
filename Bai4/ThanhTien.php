<?php

$sql = "UPDATE FROM BAODUONG SET NGAYTRA = ?, THANHTIEN = ? WHERE SOXE = ?  ";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $NGAYTRA, $THANHTIEN, $SOXE);

$NGAYTRA = date("Y/m/d");
$THANHTIEN = $_POST["thanhtien"];
$SOXE = $_POST["soxe"];

$stmt->execute();

?>
