<?php
require 'db_connect.php';

$sql = "SELECT * FROM ung_tuyen";   
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applied Infomation</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;  
    background-image: url('logo/wallpaper.webp');
    background-size: 110px;
    background-position: center;
    background-attachment: fixed;
    margin: 0;
    border-radius: 20px;

}

nav{
    border-radius: 20px;
}

h2{
    color: #fff;
font-size: 50px;
background-color: #0056b3;
padding: 60px;
text-align: center;
font-weight: bolder;
border-radius: 20px;
}

header {
    background-color: #0056b3;
    color: #fff;
    padding: 1em;
    text-align: center;
    border-radius: 20px;
}

header nav ul {
    list-style: none;
    margin: 0;
    padding: 10PX;
    border-radius: 20px;
}

header nav ul li {
    display: inline-block;
    margin-right: 20px;
    border-radius: 20px;
}
 title{
    color: aliceblue;
    
 }
 .logo img {
    width: 200px;
    height: auto;
    background-color: brown;
    align-items: center;
    border-radius: 100px;
 }

</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Main Page</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container mt-5">
            <h2 class="mb-4">APPLIED INFOMATION</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Day of Birth</th>
                        <th>Street Address</th>
                        <th>Suburb Town</th>
                        <th>State</th>
                        <th>Email</th>
                        <th>Postcode</th>
                        <th>Phone</th>
                        <th>Position</th>
                        <th>Gender</th>
                        <th>Skills</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['last_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['day_of_birth']); ?></td>
                            <td><?php echo htmlspecialchars($row['street_address']); ?></td>
                            <td><?php echo htmlspecialchars($row['suburb_town']); ?></td>
                            <td><?php echo htmlspecialchars($row['state']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['postcode']); ?></td>
                            <td><?php echo htmlspecialchars($row['phone']); ?></td>
                            <td><?php echo htmlspecialchars($row['position']); ?></td>
                            <td><?php echo htmlspecialchars($row['gender']); ?></td>
                            <td><?php echo htmlspecialchars($row['skills']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer class="bg-light text-center text-lg-start">
        
    </footer>
    <div class="text-center p-3" style="background-color:rgba(255, 137, 2, 0.9);">
            &copy; 2025 InfiniTech Lab
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<br><br><br>
<a href="jobs.php" class="logo"><img src="logo/back-button.png" alt="BackButton"></a>

</html>
<?php mysqli_close($conn); ?>
