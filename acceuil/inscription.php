<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css\inscription.css">
    <title>inscription</title>
</head>
<body>
<div class="mb-3" id="inscription">
  <label for="exampleFormControlInput1" class="form-label">Nom</label>
  <input type="texte" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Nom"></br><br>
  <label for="exampleFormControlInput1" class="form-label">Prénom</label>
  <input type="texte" name="prenonm" class="form-control" id="exampleFormControlInput1" placeholder="Prénom"></br><br>
  <label for="exampleFormControlInput1" class="form-label">Numero de Ligue</label>
  <input type="texte" name="num_ligue" class="form-control" id="exampleFormControlInput1" placeholder="Numero de Ligue"></br><br>
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="texte" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="addresse email"></br></br>
  <label for="exampleFormControlInput1" class="form-label">Addresse</label>
  <input type="texte" name="rue" class="form-control" id="exampleFormControlInput1" placeholder="votre addresse"></br><br>
  <label for="exampleFormControlInput1" class="form-label">Code Postal</label>
  <input type="texte" name="cp" class="form-control" id="exampleFormControlInput1" placeholder="zip"></br><br>
  <label for="exampleFormControlInput1" class="form-label">Ville</label>
  <input type="texte" name="ville" class="form-control" id="exampleFormControlInput1" placeholder="ville"></br><br>
  <a href="conction_à_la_db/inscrire.php"><button type="submit" name="valider" class="btn btn-primary">Valider</button></a>
</div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>