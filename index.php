<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
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
			<h1>Create Section</h1>
				<div id="form_content">
				<form action="http://localhost:8080/applicant/create/" method="post">
					<input type="text" name="name" placeholder="name" id="name" required="required"/>
					<input type="text" name="surname" placeholder="surname" id="surname"required="required"/>
					<input type="text" name="idNum" placeholder="id number" id="idNum"required="required"/>
					<button type="submit" class="btn_create">create</button>
				</form>
				</div>
			<h1>Update Section</h1>
				<div id="form_content">
				<form action="http://localhost:8080/applicant/update/" method="post">
					<input type="text" name="applicantID" placeholder="applicantID" id="applicantID" required="required"/>
					<input type="text" name="name" placeholder="name" id="name" required="required"/>
					<input type="text" name="surname" placeholder="surname" id="surname" required="required"/>
					<input type="text" name="idNum" placeholder="id number" id="idNum" required="required"/>
					<button type="submit" class="btn_create">update</button>
				</form>
				</div>
			</section>
			<aside>
				<ul>
				<div>
				<div id="form_content">
				<form action="readall.php" method="get">
					<p>Get All applicants</p>
					<button type="submit" class="btn_create">get all</button>
				</form>
				</div>
					<div id="form_content">
				<form action="readbyid.php" method="get">
					<p>find applicant by ID number</p>
					<input type="text" name="idNum" placeholder="ID Number" id="idNum" required="required"/>
					<button type="submit" class="btn_create">find</button>
				</form>
				</div>
				<div id="form_content">
				<form action="read.php" method="get">
					<p>find applicant by ID</p>
					<input type="text" name="id" placeholder="find unique Identifier" id="id" required="required"/>
					<button type="submit" class="btn_create">find</button>
				</form>
				</div>
				<div id="form_content">
				<form action="delete.php" method="get">
					<p>delete applicant by ID</p>
					<input type="text" name="id" placeholder="unique Identifier" id="id" required="required"/>
					<button type="submit" class="btn_create">delete</button>
				</form>
				</div>
				</div>
				</ul>
			</aside>
			<footer>Copyright© 2019 Gareth Abrahams. All rights reserved. Terms of Use | Privacy Policy </footer>
		</div>
	</body>
</html>