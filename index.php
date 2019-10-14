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
				<div id="form_content">
				<form action="create.php" method="post">
					<input type="text" name="name" placeholder="name" id="name"/>
					<input type="text" name="surname" placeholder="surname" id="surname"/>
					<input type="text" name="idNum" placeholder="id number" id="idNum"/>
					<button type="submit" class="btn_create">create</button>
				</form>
				</div>
				<div id="form_content">
				<form action="http://localhost:8080/applicant/readbyID" method="get">
					<input type="text" name="idNum" placeholder="find by id number" id="idNum"/>
					<button type="submit" class="btn_create">find</button>
				</form>
				</div>
				<div id="form_content">
				<form action="http://localhost:8080/applicant/read" method="get">
					<input type="text" name="id" placeholder="find unique Identifier" id="id"/>
					<button type="submit" class="btn_create">find</button>
				</form>
				</div>
				<div id="form_content">
				<form action="http://localhost:8080/applicant/delete" method="get">
					<input type="text" name="id" placeholder="unique Identifier" id="id"/>
					<button type="submit" class="btn_create">delete</button>
				</form>
				</div>
				<div id="form_content">
				<form action="readall.php" method="get">
					<p>Get all Applicants</p>
					<button type="submit" class="btn_create">get all</button>
				</form>
				</div>
			</section>
			<aside>
				<ul>
				<div>
				<h1>My First Web Page</h1>
					<p></p>
				</div>
				</ul>
			</aside>
			<footer>Copyright© 2019 Gareth Abrahams. All rights reserved. Terms of Use | Privacy Policy </footer>
		</div>
	</body>
</html>