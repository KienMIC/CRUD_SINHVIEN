<?php 
	$conn = mysqli_connect("localhost","root","","sinhvien1");
	mysqli_set_charset($conn,'utf8');

	function get_all_students(){
		$sql = "select * from diem";
		global $conn;
		$query = mysqli_query($conn,$sql);
		$result = array();
		if($query){
			while($row = mysqli_fetch_assoc($query)){
				$result[] = $row;
			}
		}
		return $result;
	}

	function add_sv($hoten,$masv,$diem){
		$sql = "INSERT INTO diem (hoten,masv,diem) VALUES ('$hoten','$masv','$diem')";
		global $conn;
		$query = mysqli_query($conn,$sql);
		return $query;
	}

	function edit_sv($hoten,$masv,$diem,$ID){
		$sql = "UPDATE diem SET hoten = '$hoten',masv = '$masv',diem = '$diem' WHERE ID = '$ID'";
		var_dump($sql);
		global $conn;
		$query = mysqli_query($conn,$sql);
		return $query;
	}

	function del_sv($ID){
		$sql = "DELETE FROM diem WHERE ID = '$ID'";
		var_dump($sql);
		global $conn;
		$query = mysqli_query($conn,$sql);
		return $query;
	}

	function get_info_id($ID){
		$sql = "SELECT * FROM diem WHERE id = '$ID'";
		global $conn;
		$query = mysqli_query($conn,$sql);
		if(mysqli_num_rows($query) >0){
			while($row = mysqli_fetch_assoc($query)){
				$result = $row;
			}
		}
		return $result;
	}
?>