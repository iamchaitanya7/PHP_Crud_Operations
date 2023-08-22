<!DOCTYPE html>
<html>
<head>
<title>Student Information Form</title>
<style>
body {
  font-family: 'Open Sans', sans-serif;
  background-color: #f0f0f0;
  color: #333;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: 32px;
  font-weight: bold;
  text-align: center;
  margin-top: 50px;
  color: #555;
}

h3 {
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  color: #555;
  margin-bottom: 20px;
}

form {
  width: 500px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 10px;
  color: #333;
}

input[type="text"],
select,
textarea {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: none;
  margin-bottom: 10px;
  box-sizing: border-box;
  font-size: 16px;
  background-color: #f5f5f5;
  color: #555;
}

select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='6'%3E%3Cpath d='M6 6L0 0h12z' fill='%23777'/%3E%3C/svg%3E");
  background-position: right 10px center;
  background-repeat: no-repeat;
  background-size: 12px 6px;
  padding-right: 30px;
}

input[type="submit"],
button {
  background-color: #5cb85c;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  margin-right: 10px;
  transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover,
button:hover {
  background-color: #449d44;
}

.button-group {
  margin-top: 20px;
  text-align: center;
}

.button-group button {
  background-color: #00FF7F;
  color: #333;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  margin-right: 10px;
  transition: background-color 0.3s ease-in-out;
}

.button-group button:hover {
  background-color: #555;
  color: #fff;
}
</style>
</head>
<body>
	<h1>Student Information Insertion | Updation | Deletion | Retrieval | Form</h1>
	<form action="connection.php" method="POST">
		<label for="roll">Roll Number:</label>
		<input type="text" id="roll" name="roll" required>

		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>

		<label for="department">Department:</label>
		<select id="department" name="department" required>
			<option value="">Select Department</option>
			<option value="computer">Computer Science</option>
			<option value="electrical">Electrical Engineering</option>
			<option value="mechanical">Mechanical Engineering</option>
			<option value="information">Information Technology</option>
		</select>
		<label for="class">Class:</label>
		<input type="text" id="class" name="class" required>

		<label for="mobile">Mobile Number:</label>
		<input type="text" id="mobile" name="mobile" required>

		<label for="address">Address:</label>
		<textarea id="address" name="address" required></textarea>

		<div class="button-group">
			<button type="submit" name="submit">Insert</button>
			<button type="submit" name="update">Update</button>
			<button type="submit" name="delete">Delete</button>
			<button type="submit" name="retrieve">Retrieve</button>
		</div>
	</form>
	<h3>CHAITANYA GAWALI</h3>
</body>
</html>

