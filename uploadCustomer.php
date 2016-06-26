<?php 
session_start();
require 'config/config.php';

$username = $_SESSION['username'];
$response = array();

$uploadedStatus = 0;
if(isset($_POST['upload']))
{
	if(isset($_FILES))
	{
		if ($_FILES["file"]["error"] > 0) {
			$response['error'] = true;
			$response['message'] =  "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else {

				$path = "uploads/customers.xlsx";
				if (file_exists($_FILES['file']['name'])) {
					unlink($path);
				}
				$z = move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/customers.xlsx");
				if($z)
				{
					set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
					include 'PHPExcel/IOFactory.php';
					try {
						$objPHPExcel = PHPExcel_IOFactory::load($path);
					} catch(Exception $e) {
						die('Error loading file "'.pathinfo($path,PATHINFO_BASENAME).'": '.$e->getMessage());
					}

					$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
					$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
					
					for($i=2;$i<=$arrayCount;$i++){
						
						$name = trim($allDataInSheet[$i]["A"]);
						$email = trim($allDataInSheet[$i]["B"]);
						$contact = trim($allDataInSheet[$i]["C"]);
						$address = trim($allDataInSheet[$i]["D"]);
						$website = trim($allDataInSheet[$i]["E"]);
						$dob = trim($allDataInSheet[$i]["F"]);
						$doa = trim($allDataInSheet[$i]["G"]);

						$query = "SELECT email FROM happy_customers WHERE email = '".$email."' and contact = '".$contact."'";
						$sql = mysqli_query($con , $query);
						$recResult = mysqli_fetch_array($sql);
						
						$existEmail = $recResult["email"];

						if($existEmail=="") {
							$sql = "insert into happy_customers (name, contact, email, address, website, dob, doa, customerOf) values('".$name."', '".$contact."','".$email."','".$address."','".$website."','".$dob."','".$doa."','".$username."')";
							
							$insertTable= mysqli_query($con , $sql);

								if($insertTable)
								{
								$response['error'] = false;
								$response['message'] =  "Records have been added successfully";
								
								}							
						} else {
							$response['error'] = true;
							$response['message'] =  "Records already exists";
							
						}
					}

				}
				else
				{
					$response['error'] = true;
					$response['message'] =  "Problem in uploading file";

				}
				$uploadedStatus = 1;
			}
	} 
	else {
			$response['error'] = true;
			$response['message'] =  "No file selected";
	}

	echo json_encode($response);
}

?>

