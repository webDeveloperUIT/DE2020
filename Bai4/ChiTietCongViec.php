<?php
$sql =
  "SELECT cv.MACV,cv.TENCV,cv.DONGIA, FROM BAODUONG bd join CT_BD ct on bd.MABD = ct.MABD join CONGVIEC cv on ct.MACV = cv.MACV WHERE NGAYNHAN = ? and SOXE = ? ";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $_POST["ngaynhan"], $_POST["soxe"]);
$stmt->execute();

$stmt->bind_result($result);
$data = [];

while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

echo json_encode($data);

?>
