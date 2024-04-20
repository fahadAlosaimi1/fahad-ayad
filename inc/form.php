<?php
error_reporting(0);
$firstName =   $_POST['firstName'];
$lastName  =   $_POST['lastName'];
$email     =   $_POST['email'];

$errors = [
    'firstNameerror' => '',
    'lastNameerror' => '',
    'emailerror' => '',

];




if (isset($_POST['submit'])) {

    

  
if(empty($firstName)){
    $errors['firstNameerror'] = 'يرجى ادخال الاسم الاول';     

}
if(empty($lastName)){
    $errors['lastNameerror'] = 'يرجى ادخال الاسم الاخير';  
}
if(empty($email)){
    $errors['emailerror'] = 'يرجى ادخال الايميل ';  

    }     
    
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['emailerror'] = ' يرجى ادخال ايميل صحيح';  
}

   if(!array_filter($errors)){
    $firstName =   mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName  =   mysqli_real_escape_string($conn, $_POST['lastName']);
    $email     =   mysqli_real_escape_string($conn, $_POST['email']);
    
   
   
   $sql = "INSERT INTO userss(firstName, lastName, email)
    VALUES ('$firstName' , '$lastName', '$email')";
 
 if(mysqli_query($conn, $sql)){
    header('Location: index.php');
    
    }else{
        echo 'Error: ' . mysqli_error($conn);
    
    }
   }


}



?>