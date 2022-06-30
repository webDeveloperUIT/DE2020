<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <h3>Them thong tin xe</h3>
  <form action="#" method="POST">
      Ho Ten Khach Hang
      <?php
      $conn = mysqli_connect("localhost", "root", "", "BanHang"); // ko can ghi vao
      $sql = "SELECT MAKH,HOTENKH FROM KHACHHANG";
      $result = mysqli_query($conn, $sql);

      echo "<select name='maKhachHang'>";
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" .
          $row["MAKH"] .
          "'>" .
          $row["HOTEN"] .
          "</option>";
      }
      echo "</select>";
      ?> 
      So xe <input type="text" name="txtSoXe">
      Hang Xe
      <select  name="txtHangXe">
        <option value="Toyota">Toyota</option>
        <option value="BMW">BMW</option>
        <option value="Audi">Audi</option>
      </select>
      Nam San Xuat <input type="text" name="txtNamSX">
      <input type="submit" name="btnThem" value="them">

    </form>
        
<?php if (isset($_POST["btnThem"]) && $_POST["btnThem"] === "them") {
  $conn = mysqli_connect("localhost", "root", "", "BanHang");

  $sql = "INSERT INTO XE (SOXE, HANGXE, NAMSX, MAKH) VALUES(?,?,?,?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $SOXE, $HANGXE, $NAMSX, $MAKH);

  $SOXE = $_POST["maKhachHang"];
  $HANGXE = $_POST["txtSoXe"];
  $NAMSX = $_POST["txtHangXe"];
  $NAMSX = $_POST["txtNamSX"];

  $stmt->execute();
  $stmt->close();
  $conn->close();
} ?>
</body>
</html>
