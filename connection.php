<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_data";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert data
if(isset($_POST['submit'])) {
  $roll = $_POST['roll'];
  $name = $_POST['name'];
  $dept = $_POST['dept'];
  $class = $_POST['class'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];

  $sql = "INSERT INTO student (roll, name, dept, class, mobile, address)
  VALUES ('$roll', '$name', '$dept', '$class', '$mobile', '$address')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Update data
if(isset($_POST['update'])) {
  $roll = $_POST['roll'];
  $name = $_POST['name'];
  $dept = $_POST['dept'];
  $class = $_POST['class'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];

  $sql = "UPDATE student SET name='$name', dept='$dept', class='$class', mobile='$mobile', address='$address' WHERE roll=$roll";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

// Delete data
if(isset($_POST['delete'])) {
  $roll = $_POST['roll'];

  $sql = "DELETE FROM student WHERE roll=$roll";

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}

// Check if the retrieve button was clicked
if (isset($_POST['retrieve'])) {
  // Get the roll number from the form data
  $roll = $_POST['roll'];

  // Create a SELECT query to fetch data from the database
  $sql = "SELECT * FROM student WHERE roll='$roll'";

  // Execute the query
  $result = mysqli_query($conn, $sql);

  // Check if any rows were returned
  if (mysqli_num_rows($result) > 0) {
    // Display the data in an HTML table
    echo "<h2>Student Details</h2>";
    echo "<table class='table'>";
    echo "<thead><tr><th>Roll No</th><th>Name</th><th>Department</th><th>Class</th><th>Mobile</th><th>Address</th></tr></thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['roll'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['dept'] . "</td>";
      echo "<td>" . $row['class'] . "</td>";
      echo "<td>" . $row['mobile'] . "</td>";
      echo "<td>" . $row['address'] . "</td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  } else {
    echo "<p class='error'>No data found for roll number $roll</p>";
  }
}

$conn->close();
?>
