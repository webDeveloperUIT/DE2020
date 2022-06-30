<?php
$conn = mysqli_connect("localhost", "root", "", "BanHang");

$sql = "SELECT SOXE FROM HOADON WHERE NGAYNHAN = ?  ";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_POST["ngaynhan"]);
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
