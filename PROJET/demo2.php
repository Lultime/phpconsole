<?php

$conditions = (int)readline('entrer un nombre : ( 11:defendre , 9:attaque , 16:dead )');

if($conditions>10 && $conditions<15 )
{
echo "je peux me defendre ";
 
 }elseif($conditions===16){
    echo"je suis dead ";
}else{
    "je peux me defendre ";
}

switch($conditions ){
    case 11:
        echo "je peux me defendre ";
    break;
    case 9:
        echo "je passe a l ataque ";
    break;
    case 16:
        echo"je suis dead ";
    break;
    default:
    echo'commande inconnue';
}
