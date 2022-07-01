<?php

  $stmt = $conn->prepare("INSERT INTO BAODUONG (MABD,NGAYNHAN, NGAYTRA,SOKM,NOIDUNG,SOXE,THANHTIEN) VALUES(?,?,?,?,?,?,?)";

  $stmt->bind_param("ssssssi", $SOXE);

  $MABD = $_GET["soxe"];
  $NGAYNHAN = date("Y/m/d");
  $NGAYTRA = NULL;
  $SOKM = $_GET["sokm"];
  $NOIDUNG = $_GET["noidung"];
  $SOXE = $_GET["soxe"];
  $THANHTIEN = NULL;

  $stmt->execute();
  
}

?>
