<?php
$conn = mysqli_connect("localhost", "root", "", "BanHang");

$sql = "UPDATE FROM BAODUONG SET NGAYTRA = ?, THANHTIEN = ? WHERE SOXE = ?  ";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sss", $NGAYTRA, $THANHTIEN, $SOXE);

$NGAYTRA = date("Y/m/d");
$THANHTIEN = $_POST["thanhtien"];
$SOXE = $_POST["soxe"];

$stmt->execute();

$stmt->fetch();
$stmt->close();
?>
