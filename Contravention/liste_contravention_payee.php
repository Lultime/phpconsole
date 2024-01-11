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
