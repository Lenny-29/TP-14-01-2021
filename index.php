<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pokedex</title>
  </head>
  <body>
    <?php
$link = mysqli_connect("localhost", "root", "", "Pokedex");
if(!$link){
  echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
  echo "Erreur de débogage : " . mysquli_connect_errno() . PHP_EOL;
  echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
exit;
}
echo "Succès : Une connexion correcte à MySQL a été faite! La base de donnée pokemon a été ouverte.<br>";
echo "Information d'hote : " . mysqli_get_host_info($link)."<br>";
$req = "SELECT * FROM id WHERE <306";
$result = mysqli_query($link,$req);
var_dump($result);

if($result){
echo"SELECT a retourné".mysqli_num_rows($result)." lignes.<br>";
}

($row = mysqli_fetch_array($result, MYSQLI_ASSOC));
echo "id : " . $row["id"] . "<br>";
echo "<p>identifier : " . $row["identifier"] . "<br>";
echo "height : " . $row["height"] . "<br>";
echo "weight : " . $row["weight"] . "</p>";
echo "base_experience : " . $row["base_experience"] . "<br>";


    ?>
  </body>
</html>
