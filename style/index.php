<?php
<form method="post" action="send.php">
            mail :<br>
            <input type="text" name="tony.tgreta@gmail.com"><br>
            objet :<br>
            <input type="text" name="mail"><br>
            message :<br>
            <textarea name="rien"></textarea><br>
            <input type="submit" value="Send">    
            $nom=$_POST['nom'];
    
</form>

?>
<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_POST['nom']; 
     $age = $_POST['age']; 
     $adresse = $_POST['adresse'];
     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant POST</h3>'; 
     echo 'Nom : ' . $nom . ' Age : ' . $age . ' Adresse : ' . $adresse; 
     exit;
  }
?>



