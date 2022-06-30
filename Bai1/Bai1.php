<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <h3>Them Nhan Vien</h3>
  <form action="Bai1.php" method="POST">
     Ma Khach Hang <input type="text" name="txtMaKH">
    Ho Ten  Khach Hang <input type="text" name="txtHoTen">
    Dia chi <input type="text" name="txtDiaChi">
    SO dien thoai <input type="text" name="txtSdt">
    <input type="submit" name="btnThem" value="them">
  </form>
<?php if (isset($_POST["btnThem"]) && $_POST["btnThem"] === "them") {
  $conn = mysqli_connect("localhost", "root", "", "BanHang");

  $sql = "INSERT INTO KHACHHANG (MAKH, HOTEN,SODT, DIENTHOAI) VALUES(?,?,?,?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $MAKH, $HOTEN, $DIACHI, $DIENTHOAI);

  $MAKH = $_POST["txtMANV"];
  $HOTEN = $_POST["txtHoTen"];
  $DIACHI = $_POST['txtDiaChi'] 
    $SODT = $_POST["txtSdt"];

  $stmt->execute();
  echo "New records created successfully";
  $stmt->close();
  $conn->close();
} ?>
</body>
</html>
