<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$spreadsheet = new Spreadsheet();

$inputFileType = 'Xlsx';

	if(isset($_POST['btnGui'])){
		$file = $_FILES["file"]["name"];
		$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
		$reader->setReadDataOnly(true);
		$worksheetData = $reader->listWorksheetInfo($file);
foreach ($worksheetData as $worksheet) {
$sheetName = $worksheet['worksheetName'];

echo "<h4>$sheetName</h4>";
$reader->setLoadSheetsOnly($sheetName);
$spreadsheet = $reader->load($file);

$worksheet = $spreadsheet->getActiveSheet();
	$data = $worksheet->toArray();
	$connection = mysqli_connect("localhost","root","","ql_hs");
	foreach($data as $key=>$value) {
		if($key>=5) {
			$stt = $value[0]; 
			$truongth = $value[1];
			$quanH =  $value[2];
			$maHS =  $value[3];
			$lop =  $value[4];
			$hoten =  $value[5];
			$ngays =  $value[6];
			$thangs =  $value[7];
			$nams =  $value[8];
			$gioi =  $value[9];
			$nois =  $value[10];
			$dantoc =  $value[11];
			$hokhau =  $value[12];
			$dienthoai =  $value[13];
			$diem1 =  $value[14];
			$diem2 =  $value[15];
			$diem3 =  $value[16];
			$diem4 =  $value[17];
			$diem5 =  $value[18];
			$tong =  $value[19];
			$uutien =  $value[20];
			$tongts =  $value[21];
			$ghichu =  $value[22];
			$sql = "INSERT INTO hoc_sinh(number_order, primarySchool,	district,	student_code,	class,	full_name,	date_of_birth,	month_of_birth,	year_of_birth,	gender,	place_of_birth,	nation,	address,	phone_number,	score_sum_class_1,	score_sum_class_2,	score_sum_class_3,	score_sum_class_4,	score_sum_class_5,	score_sum_5_classes,	priority_score,	total_prequalification_score,	s) VALUES ('$stt','$truongth', '$quanH', '$maHS', '$lop', '$hoten', '$ngays', '$thangs', '$nams', '$gioi', '$nois', '$dantoc', '$hokhau', '$dienthoai', '$diem1', '$diem2', '$diem3', '$diem4', '$diem5', '$tong', '$uutien', '$tongts', '$ghichu')";

			mysqli_query($connection, $sql);
		echo 'Insert thành công';
		}
	}

}
 

	}

?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<link rel="stylesheet" href="./form.css">
</head>
<style>
	
</style>
<body>
<div class="section">
<div class="section—first">
	<div class="wrap">
	<div class="main" align="center">	
	<form method="POST" onSubmit="handleSubmitFile()" enctype="multipart/form-data">
		
		<div align="center"><h1>NHẬP DỮ LIỆU </h1>
		<div class="logo" align="center"><img src="anh_logo.jpg"></div>
			<div class="import" align="center">
				<table border="1">
					<tr>
						<td><input type="file" name="file" id="file-input"></td>
		    	<td><button type="submit" id="file-submit-btn" name="btnGui">Import</button><br/></td>
				   	</tr>
				</table>
			</div>
			<div>
				<button type="submit" onClick="search_2.php" name="traCuu"><a href="search_2.php">Tra cứu</a></buttond>
			</div>
			
		</div>
		
	</form>
		</div>
	</div>
</div>	
</div>
	<script>
		document.getElementById("file-submit-btn").addEventListener("click",handleSubmitFile)
		function handleSubmitFile(e) {
//			e.preventDefault()
			console.log("Hello")
			const file = document.getElementById("file-input").files[0]
			console.log(file)
		}
	</script>
</body>
</html>