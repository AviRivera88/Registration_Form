<?php
$msg = 'test';
$object = new stdClass();
if ( isset( $_POST[ 'submit' ] ) ) {
    $forms = array(
        'firstname'  => $first_name = $_POST[ 'first_name' ],
        'lastname' => $last_name = $_POST[ 'last_name' ],
        'address' => $address = $_POST[ 'address' ],
        'email' => $email = $_POST[ 'email' ],
        'password' => $password = $_POST[ 'password' ],
        'cpassword' => $cpassword = $_POST[ 'cpassword' ]
    );
    foreach ( $forms as $key => $value ) {
        if ( empty( $value ) ) {
            $object->$key =  $key . ' field is required';
        }

        if ( !empty( $value ) && ( $key === 'firstname' || $key  === 'lastname' ) ) {
            if ( strlen( $value ) < 2 ) $object->$key =  $key . ' must be 2 or more letters';
        }

        if ( $key === 'email' && !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $object->$key = 'Invalid email format';
        }
        if ( $key === 'password' ) {
            $forms[ 'password' ] === $forms[ 'cpassword' ] ? '' : $object->$key = "Password didn't match!";
        }
    }

    if ( !( ( array ) $object ) ) header( 'Location: Dashboard.php?' . http_build_query( $forms ) );

    echo '<script> console.log(' . json_encode( $object ) . ')</script>';
}

?>
<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<link rel = 'stylesheet' href = 'https://unicons.iconscout.com/release/v4.0.0/css/line.css'>
<link rel = 'stylesheet' href = 'Handler.css'>
<title>Registration</title>
</head>

<body background = 'bts.jpg'>

<div class = 'wrapper'>
<h2>Registration Form</h2>
<form action = '' method = 'post' class = 'form'>
<div class = 'input-field'>
<i for = 'first_name' class = 'uil uil-user'>First Name </i>
<input type = 'text' name = 'first_name' class = 'input' id = 'firstname' value = "<?php if (isset($_POST['submit'])) {  echo $first_name;} ?>" />
<div style = 'text-transform: capitalize; color: #FF7F7F; padding-top: 5px; padding-bottom: 5px'><?php echo isset( $object->firstname ) ? $object->firstname : '' ?></div>
</div>
<div class = 'input-field'>
<i for = 'last_name' class = 'uil uil-user'>Last Name</i>
<input type = 'text' name = 'last_name' class = 'input' id = 'lastname' value = "<?php if (isset($_POST['submit'])) { echo $last_name; } ?>">
<div style = 'text-transform: capitalize; color: #FF7F7F; padding-top: 5px; padding-bottom: 5px'>
<?php echo isset( $object->lastname ) ? $object->lastname : '' ?>
</div>

</div>
<div class = 'input-field'>
<i for = 'address' class = 'uil uil-home icon'>Address</i>
<input type = 'text' name = 'address' class = 'input' id = 'address' value = "<?php if (isset($_POST['submit'])) { echo $address; } ?>">
<div style = 'text-transform: capitalize; color: #FF7F7F; padding-top: 5px; padding-bottom: 5px'>
<?php echo isset( $object->address ) ? $object->address : '' ?>
</div>

</div>
<div class = 'input-field'>
<i for = 'email' class = 'uil uil-envelope icon'>Email</i>
<input type = 'email' name = 'email' class = 'input' id = 'email' value = "<?php if (isset($_POST['submit'])) { echo $email; } ?>">
<div style = 'text-transform: capitalize; color: #FF7F7F; padding-top: 5px; padding-bottom: 5px'><?php echo isset( $object->email ) ? $object->email : '' ?>
</div>

</div>
<div class = 'input-field'>
<i for = 'Password' class = 'uil uil-lock icon'>Password</i>
<input type = 'password' name = 'password' class = 'input' id = 'password' value = "<?php if (isset($_POST['submit'])) { echo $password; } ?>">
<div style = 'text-transform: capitalize; color: #FF7F7F; padding-top: 5px; padding-bottom: 5px'>
<?php echo isset( $object->password ) ? $object->password : '' ?>
</div>

</div>
<div class = 'input-field'>
<i for = 'cpassword' class = 'uil uil-lock icon'>Confirm Password</i>
<input type = 'password' name = 'cpassword' class = 'input' id = 'cpassword' value = "<?php if (isset($_POST['submit'])) {
                echo $cpassword;} ?>">
<div style = 'text-transform: capitalize; color: #FF7F7F; padding-top: 5px; padding-bottom: 5px'>
<?php echo isset( $object->cpassword ) ? $object->cpassword : '' ?>
</div>
</div>
<button type = 'submit' name = 'submit' class = 'btn'>Register</button>
</form>
</div>
</body>

</html>