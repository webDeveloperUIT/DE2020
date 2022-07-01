<?php
$conn = mysqli_connect("localhost", "root", "", "BanHang");

$sql =
  "SELECT kh.HOTEN,xe.SOXE, COUNT(bd.MABD) as SOLANBD FROM KHACHHANG kh JOIN XE xe ON kh.MAKH = xe.MAKH join BAODUONG bd on xe.SOXE = bd.SOXE GROUP BY KH.MAKH HAVING COUNT(bd.MABD) > ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $_POST["solan"]);
$stmt->execute();

$stmt->bind_result($result);

$stmt->fetch();
$stmt->close();

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

echo json_encode($data);

?>
