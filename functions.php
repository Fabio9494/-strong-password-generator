<?php 
function random_password($password_length){
    $caratteri = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0"];
    $password = [];
    for ($i=0; $i<$password_length; $i++) {
        $carattere_casuale = array_rand($caratteri, 1);
        array_push($password, $caratteri[$carattere_casuale]);
    }
    for ($i=0; $i<count($password); $i++) {
        echo $password[$i];
    }
    
}
?>