<?php
require_once 'auth.php';
force_utilisateur_connecte();
?>
<?php $db = mysqli_connect(
    "localhost",
    "root",
    "",
    "contravention"
);
$nom=null;
if(!empty($_COOKIE['utilisateur'])){
    $nom=$_COOKIE['utilisateur'];
}
if(!empty($_POST['nom_utilisateur'])){
  setcookie('utilisateur',$_POST['nom_utilisateur']);
  $nom=$_POST['nom_utilisateur'];
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
require 'css.php'
?>

<body>

 
     <div class="parent">

<div class="div1">
        <img src="/download.jpeg" alt="">
        </div>
    <ul>
        
  <div class="navbar">
    
  <li><a href="Accueil.php">Accueil</a></li>
        <li><a href="conducteur.php">conducteur</a></li>
        <li><a href="Contravention.php">Contravention</a></li>
        <li><a href="DCPR.php">DCPR</a></li>
        <li><a href="DGI.php">DGI</a></li>
        <?php  if(connecte()){?>
          <li><a href="logout.php?action=deconnecter">se deconnecter</a></li>
            <?php } ?>
       
           
    </ul>
  </div>
       
</div>
</div>
<?php if($nom){ ?>
     <h3 class="nom">connecte en tant que <?= htmlentities($nom )?></h3>
     <?php } ?>
    <br><br><br>
    <h1 style="text-align: center;">Creer un dossier pour un contravention
    </h1>

    <div class="contact-box">
        <form action="" method="post">

        <input type="number" name="No_fiche" placeholder="No_fiche" class="input-field" />
            <br />

            <input type="number" name="No_dossier" placeholder="No_conducteur" class="input-field" />
            <br />

            <input type="text" name="Plaque_vehicule" placeholder="Entrer la plaque du vehicule" class="input-field" />
            <br />

            <input type="text" name="couleur" placeholder="Entrer la couleur" class="input-field" />
            <br />

            <input type="text" name="Marque" placeholder="Entrer la marque" class="input-field" />
            <br />

            <input type="number" name="Code_agent" placeholder="Entrer ton code_agent" class="input-field" />
            <br />

            <input type="text" name="Adresse" placeholder="entrer ton adresse" class="input-field" />
            <br />

            <input type="text" name="Article_violation" placeholder="Entrer l'article viole par le conducteur" class="input-field" />
            <br />

            <input type="number" name="Montant_a_payer" placeholder="Entrer le montant a payer" class="input-field" />
            <br />

            <input type="text" name="Date_contravention" placeholder="(0000-00-00)(annee-mois-jour)Entrer la date du contravention" class="input-field" />
            <br />

          


            <input type="submit" name="submit" value="Enregistrer" class="input-field" style="background: black; color: white" />
        </form>
    </div>





    <?php

    if (isset($_POST['submit'])) {
      
      
        $no_dossier= $_POST['No_dossier'];
        $Plaque_vehicule= $_POST['Plaque_vehicule'];
        $couleur= $_POST['couleur'];
        $Marque = $_POST['Marque'];
        $Code_agent = $_POST['Code_agent'];
        $Adresse = $_POST['Adresse'];
        $article_violation = $_POST['Article_violation'];
        $montant_a_payer=$_POST['Montant_a_payer'];
        $date= $_POST['Date_contravention'];

       


        $qry = "insert into contravention (No_dossier, Plaque_vehicule, couleur, Marque, Code_agent, Adresse, Article_violation, Montant_a_payer, Date_contravention   ) values('$no_dossier',  '$Plaque_vehicule',  '$couleur',  '$Marque',  ' $Code_agent',  '$Adresse',  '$article_violation',  ' $montant_a_payer',  ' $date' )";




        if (mysqli_query($db, $qry)) {
            echo '<script>alert("User registered succesfully.");</script>';
        } else {
            echo mysqli_error($db);
        }
    }
    ?>

   
    
   </body>








                                                                                                                                                        <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br />
  <footer style="background-color: whitesmoke; height: 150px">
    <div style="float: right; margin-right: 30px">
      <a style="color: black" href="#">
        Terms & conditions</a>
      <br />
      <a style="color: black" href="#">Privacy policy</a>
      <p>
        ©2023 DCPR Haïti | L avenir du pays
      </p>
      </p>
    </div>
    <b>CIRCULODGI </b>
    <p>Rue Constantin mayard, Avenue panamericaine Pétion-Ville, Haïti</p>
    <p>Tel: +509-2670-0684 | Toll Free: +509 44 39 70 63</p>
    <p>Email: @GMAIL.com</p>
  </footer>

</html>