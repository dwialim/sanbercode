<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	<form action="{{url('welcome')}}" method="POST">
		@csrf
	  <label>First Name:</label>
	  <input type="text" name="fname"><br><br>

	  <label>Last Name:</label>
	  <input type="text" name="lname"><br><br>

	  <label>Gender:</label><br>
	  <input type="radio" name="male">
	  <label>Male</label><br>
	  <input type="radio" name="female">
	  <label>Female</label><br>
	  <input type="radio" name="other">
	  <label>Other</label>

	  <p>Nationality:</p>
	  <select id="national" name="national">
	    <option value="Indonesia" selected>Indonesia</option>
	    <option value="Belanda">Belanda</option>
	    <option value="Jepang">Jepang</option>
	    <option value="Portugis">Portugis</option>
	  </select><br><br>

	  <label>Language Spoke:</label><br>
	  <input type="checkbox" name="ind">
	  <label for="bahasa"> Bahasa Indonesia</label><br>
	  <input type="checkbox" name="english">
	  <label for="english"> English </label><br>
	  <input type="checkbox" name="other">
	  <label for="other"> Other</label><br><br>

	  <label>Bio</label><br>
	  <textarea rows="5" cols="25" name="bio"></textarea><br><br>
	  <input type="submit" value="Submit">
	</form> 
</body>
</html>