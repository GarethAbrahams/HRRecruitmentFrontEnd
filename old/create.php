<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My first paragraph.</p>
<p id="demo"></p>
	<script>
		postRequest('http://localhost:8080/applicant/create/', {name: '$name',surname: '$surname', idNum: '$idNum'})
		  .then(data => document.getElementById("demo").innerHTML = data) // Result from the `response.json()` call
		  .catch(error => document.getElementById("demo").innerHTML = error)
		
		function postRequest(url, data) {
		  return fetch(url, {
			credentials: 'same-origin', // 'include', default: 'omit'
			method: 'POST', // 'GET', 'PUT', 'DELETE', etc.
			body: JSON.stringify(data), // Coordinate the body type with 'Content-Type'
			headers: new Headers({
			  'Content-Type': 'application/json'
			}),
		  })
		  .then(response => response.json())
		}
	</script>

</body>
</html>