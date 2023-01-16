<?php 
@$firstName=     $_POST['firstName'];
@$lastName=      $_POST['lastName'];
@$email=         $_POST['email'];


$errors = [
    'firestNameError' => '',
    'lastNameError' => '',
    'emailError' => ''
];






if (isset($_POST['submit'])){


@$firstName=    mysqli_real_escape_string($c,$_POST['firstName']);
@$lastName=     mysqli_real_escape_string($c,$_POST['lastName']);
@$email=        mysqli_real_escape_string($c,$_POST['email']);

$sql = "INSERT INTO users(firstName,lastName,email) 
VALUES ('$firstName','$lastName','$email')";

if ( empty($firstName) ) {
   $errors['firstNameError'] = 'First Name empty ';
   
}
if ( empty ($lastName)) {
    $errors['lastNameError']='Last Name empty ';
    
}
if(empty($email)){
    $errors['emailError']='Email empty';
   
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['emailError']='Email in not right';

}
else {
if(mysqli_query($c,$sql)){
    header('Location: index.php');
    }
    else{
        echo 'Error :'. mysqli_error($c);
    }

}
}
