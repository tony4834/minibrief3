<?php
$data = array(
 "mail" => tony.tgreta@gmail.com // votre adresse mail
 "objet" => mail // sujet du message sous le format : « NOM , DATE(JJ/MM) : [OBJET] »
 "message" => rien // contenu du message
 "isHTML" => 'true'
);
<form action="method-post.php" method="post">
    Nom :     <input type="text" name="nom" />
    Age :     <input type="text" name="age" />
    Adresse : <input type="text" name="adresse" />
    <input type="submit" name="submit" /> 
</form>
?>

