<?php 
include('lib.php');
$sinhvien = get_all_students();
?>

<!DOCTYPE html>
<html>
<head>
	<title>SINH VIÊN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.slim.js"></script>
</head>
<body>
	<button><a href="add_student.php">THÊM SINH VIÊN</a></button>
	<div class="container">
		<table class="table table-inverse">
			<thead>
				<tr>
					<th>ID</th>
					<th>Họ tên</th>
					<th>Mã SV</th>
					<th>Điểm</th>
					<th>Thao tác</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($sinhvien as $items) {?>
				<tr>
					<td><?php echo $items['ID']?></td>
					<td><?php echo $items['hoten']?></td>
					<td><?php echo $items['masv']?></td>
					<td><?php echo $items['diem']?></td>
					<td>
						<span><a href="edit_student.php?id=<?php echo $items['ID']?>">Sửa</a></span>
						<span><a href="del_student.php?id=<?php echo $items['ID']?>">Xóa</a></span>
					</td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	</div>
</body>
</html>