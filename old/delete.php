
				<?php

					$curl = curl_init();
					$id = $_POST["id"];

					curl_setopt_array($curl, array(
					CURLOPT_PORT => "8080",
					CURLOPT_URL => "http://localhost:8080/applicant/delete/",
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "DELETE",
					CURLOPT_HTTPHEADER => array(
					"Accept: */*",
					"Accept-Encoding: gzip, deflate",
					"Authorization: Basic YWRtaW46YWRtaW4=",
					"Cache-Control: no-cache",
					"Connection: keep-alive",
					"Content-Length: 0",
					"Content-Type: application/json",
					"cache-control: no-cache"
					),
					));

					//$response = curl_exec($curl);
					//$err = curl_error($curl);

					//curl_close($curl);

					//if($responseCode == "412 PRECONDITION_FAILED")
					//{
					//	echo "<p style='color:red;'>$responseDescription</p>";
					//}else{
					//	if($responseCode == "200 OK"){
					//		echo "<p style='color:#FFFFFF;'>$responseDescription</p>";
					//	}	
					//}
				?>
