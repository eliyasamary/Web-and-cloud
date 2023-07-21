<?php
    include "db.php";

    $query = "SELECT * FROM tbl_204_users WHERE num_id=" . $_GET['userIdNum'] . ";";

    $result = mysqli_query($connection, $query);

    if(!empty($row = mysqli_fetch_assoc($result))) {
        $message = "ID in use, maybe you already sign-up ?";
    } else {

    $userFname = mysqli_real_escape_string($connection, $_GET['userFname']);
    $userLname = mysqli_real_escape_string($connection, $_GET['userLname']);
    $userIdDnum = mysqli_real_escape_string($connection, $_GET['userIdNum']);
    $userEmail = mysqli_real_escape_string($connection, $_GET['userEmail']);
    $userPass = mysqli_real_escape_string($connection, $_GET['userPass']);
    $userPhoneNum = mysqli_real_escape_string($connection, $_GET['phoneNum']);
    $userGender = mysqli_real_escape_string($connection, $_GET['userGender']);
    $userHMO = mysqli_real_escape_string($connection, $_GET['userHMO']);
    $userType = mysqli_real_escape_string($connection, $_GET['userType']);

    $query = "INSERT into tbl_204_users(first_name,last_name,num_id,email,password,phone,gender,hmo,user_type) values ('" . $userFname . "','" . $userLname . "','" . $userIdDnum . "','" . $userEmail . "','" . $userPass . "','" . $userPhoneNum . "','" . $userGender . "','" . $userHMO . "','" . $userType . "')";

    $result = mysqli_query($connection, $query);

    $message = "User Added Successfully !";
	
    if(!$result) {
        die("DB query failed.");
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <title>Sign-up</title>
    </head>
    <body id="login-page">
      <header class="sticky-top">
      </header>
      <main>
        <div class="centered-container">
            <h1><?php echo $message; ?></h1>
            <h2>To go back to login <a class="link-style1" href="index.php">click here!</a></h2>
        </div>
      </main>
    </body>
</html>
<?php
mysqli_free_result($result);
mysqli_close($connection);
?>