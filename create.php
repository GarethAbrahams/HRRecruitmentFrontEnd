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
				require_once 'C:\xampp\htdocs\ADP_RecruitmentApp\methodman.php';
				$applicantMethods  = new applicantMethods();
				$result = $applicantMethods->create();
				$applicants = json_decode($result['response']);
				print_r($applicants);
			?>
			<footer>Copyright© 2019 Gareth Abrahams. All rights reserved. Terms of Use | Privacy Policy </footer>
					</div>
				</body>
			</html>