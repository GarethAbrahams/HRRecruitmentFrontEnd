<?php
				require_once 'C:\xampp\htdocs\ADP_RecruitmentApp\ApplicantModel.php';
				$applicantMethods  = new applicantMethods();
				$result = $applicantMethods->read($ApplicantID);
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