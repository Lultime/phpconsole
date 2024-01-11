<?php
function connecte() {
  if(session_status() === PHP_SESSION_NONE){
    session_start();
  }
    return !empty($_SESSION['connecte']);
}

function force_utilisateur_connecte(){
    if(!connecte()){
        header('Location: /connexion.php');
    exit();
}
}


?>