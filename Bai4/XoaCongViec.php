<?php
$conn = mysqli_connect("localhost", "root", "", "BanHang");

$sql =
  "DELETE FROM BAODUONG bd JOIN CT_BD ct ON bd.MABD = ct.MABD where SOXE = ? AND MACV = ? ";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $_POST["soxe"], $_POST["macongviec"]);
$stmt->execute();

?>
