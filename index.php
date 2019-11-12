<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php require 'dbconexion.php' ?>
</head>
<body>
 <div class="jumbotron">
      <div class="container">
      	<h2>Liste des etudiants DSI22 Iset Bizerte 2019</h2>
</div>
       <br>
       <br>
        <a class="btn btn-primary btn-lg" name="" id="" href="create.html" role="button">Nouvel étudiant</a>
        <br><br>

   <div class="table-responsive">
            <table class="table table-striped">
              <thead>
              		<tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Opérations</th>
            </tr>
        </thead>
  <?php
  $rep = $bdd->query('SELECT * FROM students');
                    while($data = $rep->fetch()){
echo '<tr>';
echo '<td>'.$data['id'].'</td>';
echo '<td>'.$data['firstname'].'</td>';
echo '<td>'.$data['lastname'].'</td>';
echo '<td>'.$data['email'].'</td>';
echo '<td>'.$data['phone'].'</td>';
 echo '<td><a class="badge badge-primary text-wrap" href="edit.php?id='.$data['id'].'">Editer</a>
 <a  class="badge badge-primary text-wrap" href="delete.php?id='.$data['id'].'">Supprimer</a></td>';
echo'</tr>';
}
?>
    </table>
</div>
    </div>
</body>
</html>