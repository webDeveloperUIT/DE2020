<?php
$conn = mysqli_connect("localhost", "root", "", "BanHang");

$sql =
  "SELECT cv.MACV,cv.TENCV,cv.DONGIA, FROM BAODUONG bd join CT_BD ct on bd.MABD = ct.MABD join CONGVIEC cv on ct.MACV = cv.MACV WHERE NGAYNHAN = ? and SOXE = ? ";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ss", $_POST["soxe"], $_POST["ngaynhan"]);
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
