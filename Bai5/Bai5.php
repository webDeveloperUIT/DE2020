<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
    <h3>Sua ten nhan vien</h3>
    <form>
      So Xe <input type="text" id="txtSoLanBaoDuong" name="MANV" /> 
    <table>
      <tr>
        <th>Ho Ten Khach Hang</th>
        <th>So Xe</th>
        <th>So lan bao duong</th>
      </tr>
      <tbody id="data"></tbody>
    </table>
  </body>
  <script>
    var txtSoLanBaoDuong  = document.getElementById("txtSoLanBaoDuong");

    txtSoXe.addEventListener("keypress", function (e) {
      e.preventDefault();
      if (e.key === "Enter") {
        var ajax = new XMLHttpRequest();
        var method = "POST";
        var url = "LayTenKhachHang.php?solan="+txtSoLanBaoDuong.value;
        ajax.open(method, url, true);
        ajax.send();
        ajax.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            var html = "";
            for(var i = 0 ; i < data.length; i++){
    
          }
          }
        };
      }
    });


  </script>
</html>
