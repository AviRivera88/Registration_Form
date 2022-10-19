<?php
// echo $_GET['link'];

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$address = $_GET['address'];
$email = $_GET['email'];
$password = $_GET['password'];
$cpassword = $_GET['cpassword'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Handler.css">
    <title>Dashboard</title>
</head>

<body background = 'bts.jpg'>
    <div class="wrapper">
        <h2>You are now Registered</h2>
        <div>
            <div style="margin: 10px;">
                <label for="first_name" class="input-label">First Name:</label>
                <p style="float: right; font-weight: 100"><?php echo (isset($firstname))?$firstname:'';?></p>
                <div style="text-transform: capitalize; color: #FF7F7F; padding-top: 5px; padding-bottom: 5px"><?php echo isset($object->firstname) ? $object->firstname : '' ?></div>
            </div>
            <div style="margin: 10px;">
                <label for="last_name" class="input-label">Last Name:</label>
                <p style="float: right; font-weight: 100"><?php echo (isset($lastname))?$lastname:'';?></p>
                <div style="text-transform: capitalize; color: #FF7F7F; padding-top: 5px; padding-bottom: 5px"><?php echo isset($object->lastname) ? $object->lastname : '' ?></div>
            </div>
            <div style="margin: 10px;">
                <label for="address" class="input-label">Address:</label>
                <p style="float: right; font-weight: 100"><?php echo (isset($address))?$address:'';?></p>
                <div style="text-transform: capitalize; color: #FF7F7F; padding-top: 5px; padding-bottom: 5px"><?php echo isset($object->address) ? $object->address : '' ?></div>
            </div>
            <div style="margin: 10px;">
                <label for="email" class="input-label">Email:</label>
                <p style="float: right; font-weight: 100"><?php echo (isset($email))?$email:'';?></p>
                <div style="text-transform: capitalize; color: #FF7F7F; padding-top: 5px; padding-bottom: 5px"><?php echo isset($object->email) ? $object->email : '' ?></div>
            </div>
        </div>
    </div>
</body>

</html>