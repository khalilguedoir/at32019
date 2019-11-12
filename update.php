<?php
    require 'dbconexion.php';

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $rep="UPDATE students SET firstname ='$firstname', lastname = '$lastname', email = '$email', phone = '$phone ' WHERE id = '$id'";
    if ($bdd->query($rep) == TRUE){
       echo "Modification effectuée avec succès ! " ;
} 

?>
