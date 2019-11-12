<?php
require 'dbconexion.php';

 $firstname= $_POST['firstname'];
 $lastname= $_POST['lastname'];
 $email= $_POST['email'];
 $phone= $_POST['phone'];

 $rep ="INSERT INTO students (firstname,lastname,email,phone) VALUES ('$firstname','$lastname','$email','$phone')";
 if ($bdd->query($rep) == TRUE){
echo "l etudiant a bien été ajoutée ! " ;
} 
?>