<?php
require 'db_connect.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $day_of_birth = $_POST['day_of_birth'];
    $gender = $_POST['gender'];
    $street_address = $_POST['street_address'];
    $suburb_town = $_POST['suburb_town'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $postcode = $_POST['postcode'];
    $phone = $_POST['phone'];
    $expected_salary = $_POST['expected_salary'];
    $position = $_POST['position'];
    $skills = $_POST['skills'];

    $sql = "INSERT INTO ung_tuyen (first_name, last_name, day_of_birth, gender, street_address, suburb_town, state, email, postcode, phone, expected_salary, position, skills) 
            VALUES ('$first_name', '$last_name', '$day_of_birth', '$gender', '$street_address', '$suburb_town', '$state', '$email', '$postcode', '$phone', '$expected_salary', '$position', '$skills')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>!!! Apply Successfully !!!</title>
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
    color:rgb(248, 217, 177);
    font-size: 50px;
   
      background-image: url('logo/wallpaper.webp');
    background-size: 110px;
    background-position: center;
    background-attachment: fixed;
    margin: 0;
      
    }
    .container {
      width: 90%;
      margin: 40px auto;
      text-align: center;
      padding: 50px;
      background-color: #0056b3;
      border-radius: 100px;
      border: dotted;
      border-color:rgb(255, 255, 255);
      border-width: 30px;
    }
    
  </style>
</head>
<body>
  <div class="container">
    <h1>!!! APPLIED SUCCESSFULLY!!!</h1>
    <p>!!! CONGRATULATION, YOUR APPLICATION SENT SUCCESSFULLYSUCCESSFULLY !!!</p>
    <p>YOUR INFORMATION WILL BE SENT TO THE HR DEPARTMENT AND APPROVED IN A FEW DAYS. !!!</p>
    <p>Name: <?php echo $first_name, $last_name ; ?></p>
    <p>Email: <?php echo $email; ?></p>
  </div>
</body>
</html>