<?php
include __DIR__.'/functions.php';

if(isset($_GET['password'])){
    $lunghezza_password = $_GET['password'];
    echo '<h3>Password: <h3>';
    echo '<h2>'.random_password($lunghezza_password). '</h2>';
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