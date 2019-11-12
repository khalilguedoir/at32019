<?php
require 'dbconexion.php';
                $rep= 'DELETE FROM students WHERE id="'.$_GET['id'].'"';
                 if ($bdd->query($rep) == TRUE){
       echo "suppression etudiant effectuée avec succès ! " ;

       } 
?>