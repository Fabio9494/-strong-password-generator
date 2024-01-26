<?php 
function random_password($password_length, $characters, $pass){
    if(isset($_GET['password'])){
        for ($i=0; $i<$password_length; $i++) {
            $carattere_casuale = array_rand($characters, 1);
            array_push($pass,$characters[$carattere_casuale]);
        }
        for ($i=0; $i<count($pass); $i++) {
            echo $pass[$i];
        }
    }
}
?>