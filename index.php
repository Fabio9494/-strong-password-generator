<?php
include __DIR__.'/functions.php';

if(isset($_GET['password'])){
    $lunghezza_password = $_GET['password'];
    $caratteri = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0"];
    $password = [];
    echo '<h3>Password: <h3>';
    echo '<h2>'.random_password($lunghezza_password, $caratteri, $password). '</h2>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./index.php" method="GET">
    <label for="password">INSERISCI LUNGHEZZA PASSWORD</label>
    <input type="text" name="password" id="password">
    <button type="submit" class="my-2">Invia</button>
</form>

</body>
</html>