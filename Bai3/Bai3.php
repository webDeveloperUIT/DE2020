<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
    <h3>Sua ten nhan vien</h3>
    <form>
      So Xe <input type="text" id="txtMANV" name="MANV" /> 
      HO Ten Khach Hang<input type="text" id="txtHoTen" />
      Ma Bao Duong<input type="text" name="txtMaBD" />
      So KM<input type="text" name="txtSoKM" />
      Noi Dung<input type="text" name="txtNoiDung" />
      <input type="submit" name="btnThem" value="them" />
    </form>
  </body>
  <script>
    var txtSoXe  = document.getElementById("txtSoXe");
    var btnThem = document.getElementByName("btnThem"); 

    txtSoXe.addEventListener("keypress", function (e) {
      e.preventDefault();
      if (e.key === "Enter") {
        var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "LayTenKhachHang.php?soxe="+txtSoXe.value;
        ajax.open(method, url, true);
        ajax.send();
        ajax.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            document.getElementById("txtHoTen").value = data;
          }
        };
      }
    });

  btnThem.addEventListener("click", function (e) {
      e.preventDefault();
        var ajax = new XMLHttpRequest();
        var method = "POST";
        var url = "ThemBaoDuong.php";
        var params = "soxe=" + txtSoXe.value + "&mabaoduong=" + txtMaBD.value + "&sokm=" + txtSoKM.value + "&noidung=" +txtNoiDung.value
        ajax.open(method, url, true);
        ajax.send(params);
        ajax.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            document.getElementById("txtHoTen").value = data;
          }
        };
    });

  </script>
</html>
