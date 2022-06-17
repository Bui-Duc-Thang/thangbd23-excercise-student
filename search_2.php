<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./form.css">
</head>
<body>
	<div class="section">
<div class="section—first">
	<div class="wrap">
	<div class="main" align="center">
<form action="" method="post">
	<div align="center"><h1>TRA CỨU THÔNG TIN </h1>
	<div class="import" align="center">
	<table border="0">
		<tr>
		
			<td>Mã học sinh</td>
			<td><input type="text" name="studentCode" style="width:250px"></td>
			
		</tr>
	</br>
	<tr>
			<td>Tên học sinh</td>
			<td><input type="text" name="fullName" style="width:250px"></td>
			
	</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Tìm kiếm"></td>
		</tr>
	</table>
	</div>
</form>
</div>
</div>
	</div>
	</div>
</body>
</html>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "ql_hs"; 
$connection =mysqli_connect($servername,$username,$password,$dbname);
if(!$connection){
die('Không thể kết nối Database:' .mysql_error());
}
    if(ISSET($_POST['submit'])){
        $fullName = $_POST['fullName'];
		$studentCode = $_POST['studentCode'];

?>
<div>
    
    <?php
		if($studentCode) {

			 $query = mysqli_query($connection, "SELECT * FROM `hoc_sinh` WHERE student_code LIKE '%$studentCode%' ");
				} 
		else if($fullName){

			$query = mysqli_query($connection, "SELECT * FROM `hoc_sinh` WHERE full_name LIKE '%$fullName%' ");
				} 
		else {
			$query=null;
			echo '<h3 align="center" style="color: red">Vui lòng nhập dữ liệu vào ô trống</3>';
		}	
    ?>
        <?php 
		if($query) {
			echo '<h2 align="center">Kết quả tìm kiếm 1</h2>';
			echo '<table border="1" style="background-color:#00ffff75;" cellspacing="0" cellpadding="10">';
						echo '<tr>';
							echo "<th>STT</th>";
							echo "<th>Trường Tiểu học</th>";
							echo "<th>Quận/Huyện</th>";
							echo "<th>Mã học sinh</th>";
							echo "<th>Lớp</th>";
							echo "<th>Họ tên</th>";
							echo "<th>Ngày sinh</th>";
							echo "<th>Tháng sinh</th>";
							echo "<th>Năm sinh</th>";
							echo "<th>Giới</th>";
							echo "<th>Nơi sinh</th>";
							echo "<th>Dân tộc</th>";
							echo "<th>Hộ khẩu thường trú</th>";
							echo "<th>Điện thoại liên hệ</th>";
							echo "<th>Tổng điểm lớp 1</th>";
							echo "<th>Tổng điểm lớp 2</th>";
							echo "<th>Tổng điểm lớp 3</th>";
							echo "<th>Tổng điểm lớp 4</th>";
							echo "<th>Tổng điểm lớp 5</th>";
							echo "<th>Tổng điểm 5 năm</th>";
							echo "<th>Điểm ưu tiên</th>";
							echo "<th>Tổng điểm sơ tuyển</th>";
							echo "<th>Ghi chú</th>";
						echo '</tr>';

        
			  while ($row = mysqli_fetch_array($query)) {
                        echo '<tr>';
						echo "<td>{$row['number_order']}</td>";
                            echo "<td>{$row['primarySchool']}</td>";
                            echo "<td>{$row['district']}</td>";
                            echo "<td>{$row['student_code']}</td>";
                            echo "<td>{$row['class']}</td>";
							echo "<td>{$row['full_name']}</td>";
                            echo "<td>{$row['date_of_birth']}</td>";
						    echo "<td>{$row['month_of_birth']}</td>";
						    echo "<td>{$row['year_of_birth']}</td>";
						    echo "<td>{$row['gender']}</td>";
							echo "<td>{$row['place_of_birth']}</td>";
							echo "<td>{$row['nation']}</td>";
							echo "<td>{$row['address']}</td>";
							echo "<td>{$row['phone_number']}</td>";
							echo "<td>{$row['score_sum_class_1']}</td>";
							echo "<td>{$row['score_sum_class_2']}</td>";
							echo "<td>{$row['score_sum_class_3']}</td>";
							echo "<td>{$row['score_sum_class_4']}</td>";
							echo "<td>{$row['score_sum_class_5']}</td>";
							echo "<td>{$row['score_sum_5_classes']}</td>";
							echo "<td>{$row['priority_score']}</td>";
							echo "<td>{$row['total_prequalification_score']}</td>";
							echo "<td>{$row['note']}</td>";
                        echo '</tr>';}
			 
                  
                    echo '</table>';
                } 
		}
		
	
	?>
    
</div>
