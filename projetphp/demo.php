salut Albert 
Bienvenue
<?php
$nom = "Marc";
$prenom="Doe";
$avoir="vous aves eu ";
$avez="comme moyenne";
$note1=10;
 $note2=20;
 

echo 'bonjour '. $nom .' '. $prenom . 'vous avez eu  '.($note1 + $note2) /2 .' comme moyenne';
?>
<?php
$tableau=[10,20, "Albert", [15,16,22]];
echo $tableau[3][1];

$tableau2=[
    "notes"=>[66,76,98],
     "Prenom"=> "Bekersen",
     "Nom"=> "Albert",
];
$tableau2['Prenom']='Marc';
$tableau2['notes'][]=65;
echo $tableau2["Prenom"];
print_r($tableau2['notes']);
$tableau3=[
    [
        "nom"=>"Albert",
        "Prenom"=>"Bekersen ",
        "notess"=>[10,15,30]

    ],
    [
        "nom"=>"Jany",
        "Prenom"=>"Avril",
        "Notee"=>[30,50,60]
    ]
    ];
    echo $tableau3 [1]["Notee"][2];


?>

<?php

$conditions = (int)readline('entrer un nombre : ');

if($conditions>10 && $conditions<15 )
{
echo "ce nombe est compris entre 10 et 15";

}else{
    echo"ce nombre est plus grand que 15 et plus petit que 10";
}







