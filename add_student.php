<?php 
include('lib.php');
if(!empty($_POST['submit'])){//Khi chua bam nut Submit, gia tri cua no la "", trai lai, gia tri no se la "XAC NHAN"
	if(isset($_POST['masv'])&&isset($_POST['hoten'])&&isset($_POST['diem'])){
		$masv = $_POST['masv'];
		$hoten = $_POST['hoten'];
		$diem = $_POST['diem'];
		add_sv($hoten,$masv,$diem);
		header('location:index.php');
	}
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>THÊM SINH VIÊN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.slim.js"></script>
</head>
<body>
	<div class="container">
		<form method = post id = "form_add">
		<table class="table table-inverse">
			<tbody>

				<tr>
					<th>Họ tên</th>
					<td><input type="text" name="hoten" id="hoten" value=""></td>
					<td><span id = "hoten_error"></span></td>
				</tr>

				<tr>
					<th>Mã SV</th>
					<td><input type="text" name="masv" id="masv" value=""></td>
					<td><span id = "masv_error"></span></td>
				</tr>

				<tr>
					<th>Điểm</th>
					<td><input type="text" name="diem" value="" id="diem"></td>
					<td><span id = "diem_error"></span></td>
				</tr>

				<tr>
					<td><input type="submit" name="submit" value="XÁC NHẬN"></td>
				</tr>
			</tbody>
		</table>
	</form>
	</div>
</body>
<script type="text/javascript">
	$(function () {
	 $('#form_add').submit(function(){
    	var hoten = $('#hoten').val();
    	var masv = $('#masv').val();
    	var diem = $('#diem').val();
    	//alert(diem);

    	if(hoten == ""){
    		$('#hoten_error').text("Vui lòng nhập họ tên!");
    		return false;
    	}
    	if(masv == ""){
    		$('#masv_error').text("Vui lòng nhập má sinh viên!");
    		return false;
    	}
    	if(diem == ""){
    		$('#diem_error').text("Vui lòng nhập điểm!");
    		return false;
    	}
    });
});
</script>
</html>