<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omeke base tech</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="dashboard.php" method="post">
      <h2>ob tech</h2>
      <div class="form-group fullname">
        <label for="Username">Username</label>
        <input type="text" id="fullname" placeholder="Enter your full name" name="Username" required />
      </div>
      <div class="form-group email">
        <label for="email">Email Address</label>
        <input type="text" id="email" name="email" placeholder="Enter your email address" required />
      </div>
      <div class="form-group password">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required />
        <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
      </div>
      <!--<div class="form-group date">
        <label for="date">Birth Date</label>
        <input type="date" id="date" placeholder="Select your date" required />
      </div>-->
     <!-- <div class="form-group gender">
        <label for="gender">Gender</label>
        <select id="gender">
          <option value="" selected disabled>Select your gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
      </div>-->
      <div class="form-group submit-btn">
        <input type="submit" value="Submit">
      </div>
    </form>

    <?php 
    // if (isset($_POST['submit'])){
    //     $username = $_POST['$username'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    // }
    // echo $username;
    // echo $email;
    // echo $password;
    ?>
    <script src="js/app.js"></script>
</body>
</html>