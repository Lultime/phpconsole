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
 if(!empty($_POST['nom_utilisateur_connect'])){
   setcookie('utilisateur',$_POST['nom_utilisateur_connect']);
   $nom=$_POST['nom_utilisateur_connect'];
 }
 
 
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
     <?php
 require 'css.php';
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
      <?php }?>
     <br><br><br>


<h1 style="text-align: center; margin-top: 100px;">Liste des contraventions</h1>

<table style="margin-top: 80px;">
    <tr>
        <th>No_fiche</th>
        <th>No_dossier</th>
        <th>plaque_vehicule</th>
        <th>couleur</th>
        <th>Marque</th>
        <th>Code_agent</th>
        <th>Adresse</th>
        <th>Article_violation</th>
        <th>Montant_a_payer</th>
        <th>Date_contravention</th>
      
       

    </tr>

    <?php
    $i = 1;
    $qry = "select * from contravention";
    $run = $db->query($qry);
    if ($run->num_rows > 0) {
        while ($row = $run->fetch_assoc()) {

    ?>

            <tr>
             <td><?php echo $row['No_fiche'] ?></td>
                <td><?php echo $row['No_dossier'] ?></td>
                <td><?php echo $row['Plaque_vehicule'] ?></td>
                <td><?php echo $row['couleur'] ?></td>
                <td><?php echo $row['Marque'] ?></td>
                <td><?php echo $row['Code_agent'] ?></td>
                <td><?php echo $row['Adresse'] ?></td>
                <td><?php echo $row['Article_violation'] ?></td>
                <td><?php echo $row['Montant_a_payer'] ?></td>
                <td><?php echo $row['Date_contravention'] ?></td>
               




            </tr>
    <?php

        }
    }
    ?>

</table>



</body>



<br /><br /><br /><br />
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

