<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   Tipo de Hamburguesa <select name="tipo">
    <option>Cuartel</option>
    <option> Todoterreno</option>
    </select>
    <br>
    <div class=check>
    <input type="checkbox" name="Tocineta">Tocineta
    <input type="checkbox" name="Queso">Queso
    <input type="checkbox" name="Cebolla">Cebolla grille
</div>
   <input type="submit">
</form>   
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "Clases.php";
$tipo = $_POST['tipo'];
$burger = null;
if ($tipo == "Cuartel"){
    $burger= new Cuartel();
}else{
    $burger = new Todoterreno();
}

if (isset($_POST['Tocineta'])){
    $burger = new Tocineta ($burger);
}
if (isset($_POST['Queso'])){
    $burger = new Queso ($burger);
}
if (isset($_POST['Cebolla'])){
    $burger = new Cebolla ($burger);
}
echo"La ". $burger->getDescripion() . " vale " . $burger->getPrecio();
 /*$burger1= new Cuartel();

 $burger = new Tocineta($burger1);

 $burger1 = new Queso($burger1);

 echo $burger1->getDescripion() . " vale " . $burger1->getPrecio();
 $burger2 = new Todoterreno();

 $burger2 = new Cebolla($burger2);

 echo "<br>" . $burger2->getDescripion() . " vale " . $burger2->getPrecio();
*/
}
?>

</body>
</html>