<?php
/*
$tableau=[
    [
        'nom'=>'Albert',
        'Prenom'=>'Bekersen ',
        'notes'=>[10,20.30]
    ],
    [
        'nom'=>'Honory',
        'Prenom'=>'Manoberthe ',
        'notes'=>[15,20,40]
    ]
    ];
    $tableau[1]['nom']='Fleurie';

//print_r( $tableau[1]['nom']) ."\n";




// on selectionne tout puis on fait ctrl + shipt + p pour commenter en bloc

// la commande switch
$action=(int)readline('choisissez un num: ( 1:je defends 2:j attaque 3:je laisse tomber ): ');
switch($action)
{
    case 1:
        echo('je me defends');
        break;

    case 2:
        echo ('je passe a l action');
        break;

    case 3:
        echo ('je m avoue vaincue');
        break;

    default:
     echo ('commande inconnue');
}
// &&= et , ||= ou


// boucle en php 
 //boucle' tant que '
 /* $chiffre=null;

  while($chiffre !==10)
  {
    $chiffre=(int)readline('entrez une heure: ');
     
  }
  //echo ('bravo vous avez gagnez');
 


  // boucle if

  for($i =0 ; $i <10 ; $i++)
  {
    echo "-$i \n";
  }


  // boucle foreach

  $ecole=
  [
    'CM1'=>
    [
        'Albert','Rosalinda','Guerlande'

    ],
    'CM2'=>
    [
        'Sabrina','Alexandra','Sophonie'
    ]
    ];

    foreach ($ecole as $classe=>$ecoles)
    {
        echo("classe de $classe :. \n");

       foreach($ecoles as $eleves)
       {
        echo("-$eleves. \n");
       }
    }

$chiffre=null;
$note=[];
while(true)
{
    $chiffre=readline('entrez une heure: ');
  if ($chiffre ==='fin')
  {
      break;
  }
  else{
       
       $creno[] =(int)$chiffre;
  }
}
  foreach($creno as $crenos)
  {
    echo ("-$crenos h \n");
  }

  

  // creno
$creno=[];
  while(true)
  {
    $debut=readline('entrez l heure de  l ouverture: ');
    $fin=readline('entrez l heure de fermeture: ');
    if($debut > $fin || $fin < $debut)
    {
        echo ("L heure de debut $debut ne doit pas etre superieure a l heure de la fin  $fin .\n");
        $debut=readline('entrez l heure de  l ouverture : ');
        $fin=readline('entrez l heure de fermeture: ');

        
    }else{
        $creno=[$debut,$fin];
        $action=readline("voulez vous continuez (o/n): ");
        if($action ==='n')
        {
            break;
        }
    }
  }

  $visite=readline("A quelle heure desirez vouz visiter le magasin: ");
  $crenotrouve=false;
  foreach($creno as $crenos)
  {
  if($visite >= $crenos[0] && $visite <= $crenos[1])
  {
    $crenotrouve=true;
    break;
  }
  }
  if($crenotrouve)
  {
    echo("le magasin sera ouvert");
  }else
  {
    echo("le magasin sera ferme \n");
  }
  
  echo("le magasin est ouvert de");
  foreach($creno as $k=>$crenoss)
  {
    if($k>0)
    {
        echo(" \n");
    }
    echo("{$crenoss[0]}h a {$crenoss[1]}h");
  }

  // fonction
  // array_sum:effectuer une somme, strtolower:en miniscule, strreverse:inverse,count:compter, round:pour arrondir resultat , sort:arranger en ordre croissant,exit(message):pour terminer le programme
  //str_replace:filtrer gros mot:remplace un string , exemple screenshot
//filtrage de texte
$insultes=["merde","salo","con"];
$phrases=readline("entrer une phrase : ");
foreach($insultes as $insulte)
{
   
    //on recupere une lettre avec subtr puis on le concatecanne avec le str_repeat de # qui peuut nous donner m###
  $replace= substr($insulte,0,1). str_repeat("#", strlen($insulte) -1);
    $phrases= str_replace($insulte, $replace,$phrases);
}
echo($phrases);

//fonction utilisateur
*/
 
function repondre_oui_non ($phrase="voulez vous enregistrer : ")
{
    $reponse=readline( "$phrase .o(oui) ou n(non)");
    if($reponse ==="o")
    {
      true;
    }elseif($reponse === "n")
    {
      false;
    }
}


$phrases=repondre_oui_non("voulez vous enregistrer un creneau : ");
echo $phrases;

function crenoo ()
{

   
   
    while(true){
        
        
            $debut=readline("entrer l heure d ouverture : ");
            if($debut >=0 && $debut <=23)
            {
              break;
            }
          }
            while(true)
            {
            $fin=readline("entrer l heure de fermeture : ");
            if ($fin >=0 && $fin <=23 && $fin > $debut)
            {
              break;
            }
          }
            
        
    
    return  [$debut,$fin];
}


function $creneaux ()
{
  $creneaux=[];
  $continuer=true;
while($continuer)
{
  $creneaux[]=crenoo();
  $continuer=repondre_oui_non("voulez vous continuer");
  
}
  return $creneaux;
}

$creneau=crenoo();
$creneau2=creneau
var_dump($creneau);



?>