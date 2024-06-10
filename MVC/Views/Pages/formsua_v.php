<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<link rel="stylesheet" href="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%204/Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%204/Public/Css/dinhdang7.css">
    <script src="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%204/Public/Js/jquery-3.3.1.slim.min.js"></script>
    <script src="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%204/Public/Js/popper.min.js"></script>
    <script src="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%204/Public/Js/bootstrap.min.js"></script>
<body>
<form method="post" action="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%204/formchinh_ctrl/suadl">
    <div class="form-group">
        <?php 
            if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                while($row=mysqli_fetch_array($data['dulieu'])){
        ?>
       <label for="myID">ID </label>
        <input type="text" id = "myID" class="form-control dd1" placeholder="ID " name="txtID" value="<?php echo $row['id'] ?> " readonly>
        <label for="myMaKhoa">Mã Khoa</label>
        <input type="text" id = "myMaKhoa" class="form-control dd1" placeholder="Mã Khoa" name="txtMaKhoa" value="<?php echo $row['makhoa'] ?> " required>
        <label for="myTenKhoa">Tên Môn Học</label>
        <input type="text" id="myTenKhoa" class="form-control" placeholder="Tên Khoa" name="txtTenKhoa" value="<?php echo $row['tenkhoa'] ?> " required>
        <label for="mySCBGD">Số Cán Bộ Giảng Dạy</label>
        <input type="text" id="mySCBGD" class="form-control" placeholder="Số Cán Bộ Giảng Dạy" name="txtSCBGD" value="<?php echo $row['scbgd'] ?> " required>
        <br>
        <?php
                }
            }
        ?>   
        <br>
        <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>
        <a href="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%204/formchinh_ctrl/timkiem1"  class="btn btn-primary" name="btnQuayLai">Quay Lại</a>                       
    </div>
</form>
</body>
</html>