<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cinema</title>
</head>
<body>

<form action="formulaire.php" method="post">
    <div>
        <label for="nom_cinema">Le nom du cinema</label>
        <input type="text" id="nom_cinema" name="nom_cinema">
    </div>
    <div>
        <label for="ville_cinema">La ville du cinema :</label>
        <input type="text" id="ville_cinema" name="ville_cinema">
    </div>
    <div>
        <label for="adresse_cinema">L'adresse du cinema :</label>
        <input type="text" id="adresse_cinema" name="adresse_cinema">
    </div>
    <div>
        <label for="mail_cinema">Le mail du cinema :</label>
        <input type="mail" id="mail_cinema" name="mail_cinema">
    </div>
    <div>
        <label for="telephone_cinema">Le numero de telephone du Cinema : </label>
        <input type="text" id="telephone_cinema" name="telephone_cinema">
    </div>

    <div class="button">
        <button type="execute">Envoyer le message</button>
    </div>
</form>
<br>
<br>
<br>
<form action="formulaire.php" method="post">
    <div>
        <label for="numero_salle">numero de salle</label>
        <input type="text" id="numero_salle" name="numero_salle">
    </div>
    <div>
        <label for="capacite_salle">capacite de la salle :</label>
        <input type="text" id="capacite_salle" name="capacite_salle">
    </div>
    
    <div class="button">
        <button type="execute">Envoyer le message</button>
    </div>
</form>


</body>
</html>

 
