<?php

 $nom_cinema = !empty ($_POST["nom_cinema"]) ? $_POST["nom_cinema"] :NULL ;
 $ville_cinema = !empty ($_POST["ville_cinema"]) ? $_POST["ville_cinema"] :NULL ;
 $adresse_cinema = !empty ($_POST["adresse_cinema"]) ? $_POST["adresse_cinema"] :NULL ;
 $mail_cinema = !empty ($_POST["mail_cinema"]) ? $_POST["mail_cinema"] :NULL ;
 $telephone_cinema = !empty ($_POST["telephone_cinema"]) ? $_POST["telephone_cinema"] :NULL ;


 try {
     $conn = new PDO('mysql:host=db5000303632.hosting-data.io;dbname=dbs296619', 'dbu526540', 'Gre-94^X' );

     }
 catch(PDOException $e)
     {
     echo $sql . "<br>" . $e->getMessage();
     }


//      Envoyer données dans la BDD.
$stmt = $conn->prepare("INSERT INTO cinema (nom_cinema, ville_cinema, adresse_cinema, mail_cinema, telephone_cinema) VALUES (:nom_cinema, :ville_cinema, :adresse_cinema, :mail_cinema, :telephone_cinema)");
$stmt->bindParam(':nom_cinema', $nom_cinema);
$stmt->bindParam(':ville_cinema', $ville_cinema);
$stmt->bindParam(':adresse_cinema', $adresse_cinema);
$stmt->bindParam(':mail_cinema', $mail_cinema);
$stmt->bindParam(':telephone_cinema', $telephone_cinema);
$stmt->execute();


if (empty($_POST['nom_cinema']) || empty($_POST['ville_cinema']) || empty($_POST['adresse_cinema']) || empty($_POST['mail_cinema']) || empty($_POST['telephone_cinema']))
	{
	   echo "Tous les champs doivent etre remplis";
		exit() ;
    }
    
   echo "nom_cinema/ville_cinema/adresse_cinema/telephone_cinema<br>";


/*// On recupere tout le contenu de la table news
$cinema = $bdd->query("SELECT * FROM cinema");
// On affiche le resultat
while ($donnée = $cinema->fetchObject()){
   //On affiche les données dans le tableau
   echo "      $donnée->nom_cinema/";
   echo "      $donnée->ville_cinema/";
   echo "      $donnée->adresse_cinema/";
   echo "      $donnée->mail_cinema/";
   echo "      $donnée->telephone_cinema<br>";
}



$cinema->closeCursor();



$cinema = $bdd->query("SELECT * FROM cinema");
while ($i = $cinema->fetchObject()){
   echo "<br><h1>$i->nom_cinema</h1><br>";
}
   $salle= $bdd->query('SELECT * FROM salle WHERE id_cinema='.$i->id_cinema);
   while($j = $salle->fetchObject()){
       echo "salle  $j->numero_salle : ";
       echo " $j->capacite_salle places<br>";
   }*/


   $numero_salle=$_POST['numero_salle'];
         $capacite_salle=$_POST['capacite_salle'];
         $stmt = $bdd->prepare("INSERT INTO salle (numero_salle, capacite_salle, id_cinema) VALUES ( :numero_salle, :capacite_salle, :id_cinema)");
         $stmt->execute(array(
             ':numero_salle' => $numero_salle,
             ':id_cinema' => 10,
             ':capacite_salle'=>$capacite_salle));
 ?>
