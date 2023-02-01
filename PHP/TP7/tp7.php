<?php

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($username == 'admin' and $password == 'admin'){
    echo 'Bienvenue M. '.$username." votre mot de passe est correct <br>";
    echo 'Vous etes connecte le '.date("0j/ 0n/ Y").'<br>';
    echo 'il est '.date("H:i:s").' <a href="javascript:history.back()"><button>retour</button></a>';
}
else{
    echo $username.' Mot de passe incorrecte';
}


?>