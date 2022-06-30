<?php
$conn = mysqli_connect("localhost", "root", "", "BanHang");
if (isset($_GET["soxe"])) {
  $stmt = $conn->prepare("SELECT HOTEN FROM KHACHHANG  kh JOIN XE xe on kh.MAKH = xe.MAKH  where SOXE=? ");

  $stmt->bind_param("s", $SOXE);

  $MANV = $_GET["soxe"];

  $stmt->execute();

  $stmt->bind_result($result);

  $stmt->close();
  $conn->close();

  while ($row = mysqli_fetch_assoc($result)) {
    $data = $row["HOTEN"];
  }

  echo json_encode($data);
}

?>
