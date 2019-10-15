<?php
require_once 'C:\xampp\htdocs\ADP_RecruitmentApp\ApplicantModel.php';
$applicantMethods  = new applicantMethods();
	if(isset($_POST["buttonSave"])){
	$applicantMethods->create($_POST);
	header('Location:Index.php');
}
?>
