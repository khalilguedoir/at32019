<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php require 'dbconexion.php' ?>
</head>
<body>
    <div class="container">
    <fieldset>
            <legend>Nouvel étudiant</legend>
            <?php
            require 'dbconexion.php';
                $rep= $bdd->query('SELECT * FROM students WHERE id='.$_GET['id']);
                $data = $rep->fetch();            
            ?>
            <form action="update.php" method="post">
                <div class="row">
                    <div class="col-md-6">
    <div class="form-group col-md-6">
                            <label for="firstname">Firstname</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" value=" <?= $data['firstname']?>">
                        </div>
                    </div>
                    <div class="col-md-6">
    <div class="form-group col-md-6">
                            <label for="lastname">Lastname</label>
                            <input type="text" name="lastname" id="lastname" class="form-control"  value="<?= $data['lastname']?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?= $data['email']?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" id="phone" class="form-control" value="<?= $data['phone']?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <input type="number" name="id" value="<?= $data['id']?>" hidden>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <button type="reset" class="btn btn-secondary">Annuler</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>