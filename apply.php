<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ung_tuyen";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $day_of_birth = $_POST["day_of_birth"];
    $street_address = $_POST["street_address"];
    $suburb_town = $_POST["suburb_town"];
    $state = $_POST["state"];
    $email = $_POST["email"];
    $postcode = $_POST["postcode"];
    $phone = $_POST["phone"];
    $expected_salary = $_POST["expected_salary"];
    $position = $_POST["position"];
    $gender = $_POST["gender"];
    $skills = $_POST["skills"];

    $sql = "INSERT INTO ung_tuyen (first_name, last_name, day_of_birth, street_address, suburb_town, state, email, postcode, phone, expected_salary, position, gender, skills) VALUES ('$first_name', '$last_name', '$day_of_birth', '$street_address', '$suburb_town', '$state', '$email', '$postcode', '$phone', '$expected_salary', '$position', '$gender', '$skills')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Dữ liệu đã được lưu thành công!";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
           
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('logo/wallpaper.webp');
            background-size: 110px;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding-top: 950px; 
        }   

        .container {
            width: 99%;
            background-color:rgba(0, 61, 123, 0.76);
            padding: 20px;
            border-radius: 20px;
            color: white;
            box-shadow: 0px 0px 10px rgba(200, 119, 119, 0.5);
            padding-top: 50px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border: none;
        }
        button {
            width: 100%;
            padding: 15px;
            background-color: red;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: green;
        }
        .section {
            background-color: #002244;
            padding: 15px;
            margin: 10px 0;
            border-radius: 10px;
        }
        body {
    background-image: url('logo/wallpaper.webp');
    background-size: 110px;
    background-position: center;
    background-attachment: fixed;
    margin: 0;
}


.header {
    background-color: #0056b3;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    height: 120px;
    z-index: 1000;
    
}

.logo img {
    height: 100px; 
}

.youtube-icon img {
    height: 100px; 
}

.container {
    max-width: 800px;
    margin: 220px auto 50px; 
}

.form-container {
    background: #0057b3b9;
    color: rgb(250, 250, 250);
    padding: 50px;
    border-radius: 60px;
    box-shadow: 10 10 60px rgb(247, 2, 2);
    
}

.btn {
    color: rgb(0, 0, 0);
    size: 10px;
    background-color: rgb(236, 7, 7);
    font-size: 28px;
    font-weight: bolder;
    padding: 12px; 
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.form-container button:hover {
    background-color: #09da36; 
}

.map-icon {
    width: 80px;  
    height: auto; 
    display: block;
    margin-left: 600px;
    transition: transform 0.3s ease; 
}
fieldset {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px 0;
}

textarea {
    width: 100%;
    max-width: 400px;
}


fieldset {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px 0;
}


.otherSkillsContainer{
    display: none;
}


#otherSkillCheckbox:checked ~ .otherSkillsContainer {
    display: block;
}

input[type="text"] {
    width: 100%;
    max-width: 400px;
    padding: 5px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

label {
    display: block;
    font-weight: bold;
    margin-top: 10px;
}

    </style>
</head>

<header class="header">
        <a href="index.php" class="logo"><img src="logo/logo.png" alt="InfiniTech Labs"></a>
        
        <a href="enhancements.php">
            <img src="logo/mapicon.png" alt="Map Logo" class="map-icon">
        </a>

        <div class="youtube-icon">
            <a href="https://www.youtube.com/watch?v=dxuAZFVHZfg"><img src="logo/logo youtube.png" alt="YouTube"></a>
        </div>
    </header>
    
<body>
    <div class="container">
        <h2>Job Application Form</h2>
        <form action="submit_application.php" method="POST">
            <label>First Name:</label>
            <input type="text" name="first_name" required>
            <label>Last Name:</label>
            <input type="text" name="last_name" required>
            <label>Day of Birth:</label>
            <input type="date" name="day_of_birth" required>
           

            <fieldset class="section">
            <h3>Gender</h3>
                    <label><input type="checkbox" name="gender" value="Male"> Male</label><br>
                    <label><input type="checkbox" name="gender" value="Female"> Female</label><br>

            
                    
                    <input type="checkbox" id="otherSkillCheckbox">
                    <label for="otherSkillCheckbox" value="Gay">Other Gender</label>
            
                    
                    <div class="otherSkillsContainer">
                        <input type="text" id="otherGenders" name="otherGenders" placeholder="Other Genders">
                    </div>
                </fieldset>


            <label>Street Address:</label>
            <input type="text" name="street_address" required>
            <label>Suburb Town:</label>
            <input type="text" name="suburb_town" required>
            <label>State:</label>
            <select name="state">
                <option value="VIC">VIC</option>
                <option value="NSW">NSW</option>
                <option value="QLD">QLD</option>
                <option value="NT">NT</option>
                <option value="WA">WA</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="ACT">ACT</option>
            </select>
            <label>Postcode:</label>
            <input type="text" name="postcode" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Phone:</label>
            <input type="text" name="phone" required>
            <label>Expected Salary:</label>
            <input type="text" name="expected_salary" required>
            <label>Position Applying For:</label>
            <select name="position">
                <option value="Software Engineer - 00001">Software Engineer - 00001</option>
                <option value="Web Designer - 00002">Web Designer - 00002</option>
                <option value="Network Engineer - 00003">Network Engineer - 00003</option>
                <option value="Data Analyst - 00004">Data Analyst - 00004</option>
            </select>

            <fieldset class="section">
                    <legend>Skill List</legend>
                    <label><input type="checkbox" name="skills" value="HTML"> HTML</label><br>
                    <label><input type="checkbox" name="skills" value="CSS"> CSS</label><br>
                    <label><input type="checkbox" name="skills" value="JavaScript"> JavaScript</label><br>
            
                    
                    <input type="checkbox" id="otherSkillCheckbox">
                    <label for="otherSkillCheckbox">Other skills...</label>
            
                    
                    <div class="otherSkillsContainer">
                        <input type="text" id="otherSkills" name="otherSkills" placeholder="Enter your skill...">
                    </div>
                </fieldset>
            
            <button type="submit" >APPLY</button><br><br>
            <a href="jobs.php" class="logo"><img src="logo/back-button.png" alt="BackButton"></a>
        </form>
    </div>
</body>
</html>
