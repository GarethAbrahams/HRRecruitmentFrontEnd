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
			<?php
				require_once 'C:\xampp\htdocs\ADP_RecruitmentApp\ApplicantModel.php';
				$applicantMethods  = new applicantMethods();
				$result = $applicantMethods->findAll();
				$applicants = json_decode($result['response']);
			?>
			<h1>Applicant (Get All)</h1>
			<table border="0" width="100%">
			<tr align="left">
				<th>ApplicantID</th>
				<th>Name</th>
				<th>Surname</th>
				<th>ID Number</th>
			</tr>
			<?php foreach ($applicants as $applicant){ ?>
				<tr>
					<td><?php echo $applicant->applicantID; ?></td>
					<td><?php echo $applicant->name; ?></td>
					<td><?php echo $applicant->surname; ?></td>
					<td><?php echo $applicant->idNum; ?></td>
				</tr>
			<?php } ?>
			</table>
			<footer>Copyright© 2019 Gareth Abrahams. All rights reserved. Terms of Use | Privacy Policy </footer>
					</div>
				</body>
			</html>