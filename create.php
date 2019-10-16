<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css" type="text/css">
		<title>Gareth Website | Home</title>
	</head>
	<body>
		<div id="wrapper">
			<header><a href="index.php"><img src="images/logo.png" alt="Learn HTML Logo" style="width:120px; height:120px; margin-left:40px"></a>
				<nav>
				<ul>
					<div id="title">Welcome to the Recruitment Application</div>
				</ul>
				</nav>
			</header>
			<section>
			<h1>Create Applicant</h1>
			<?php
				require_once 'C:\xampp\htdocs\ADP_RecruitmentApp\ApplicantModel.php';
				$applicantMethods  = new applicantMethods();
				$name=$_POST['name'];
				$surname=$_POST['surname'];
				$idNum=$_POST['idNum'];
				$applicant = '?name=%d&surname=%s&idNum=%t';
				$str = sprintf($applicant,$name,$surname,$idNum);
				$result = $applicantMethods->create($str);
				    //http://localhost:8080/applicant/create/?name=Morgan&surname=Abrahams&idNum=123456
				//$url='http://localhost:8080/applicant/create/?name='.$str;
				//$result=file_get_contents($url);
				$applicants = json_decode($result['response']);
			?>
			<table border="0" width="100%">
			<tr align="left">
				<th>ApplicantID</th>
				<th>Name</th>
				<th>Surname</th>
				<th>ID Number</th>
			</tr>
				<tr>
					<td><?php echo $applicants->applicantID; ?></td>
					<td><?php echo $applicants->name; ?></td>
					<td><?php echo $applicants->surname; ?></td>
					<td><?php echo $applicants->idNum; ?></td>
				</tr>
			</table>
			</section>
<footer>Copyright© 2019 Gareth Abrahams. All rights reserved. Terms of Use | Privacy Policy </footer>
		</div>
	</body>
</html>