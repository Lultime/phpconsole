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
    <br><br><br>
    <h1 style="text-align: center;">Creer un dossier pour un agent
    </h1>

    <div class="contact-box">
        <form action="" method="post">

            <input type="text" name="Code_agent" placeholder="Code_agent" class="input-field" />
            <br />

            <input type="text" name="Affectation" placeholder="Votre affectation " class="input-field" />
            <br />

            <input type="text" name="nom" placeholder="Entrer votre nom" class="input-field" />
            <br />

            <input type="text" name="Prenom" placeholder="Entrer votre prenom" class="input-field" />
            <br />

            <input type="text" name="sexe" placeholder="Entrer votre sexe" class="input-field" />
            <br />

          
          


            <input type="submit" name="submit" value="Enregistrer" class="input-field" style="background: black; color: white" />
        </form>
    </div>





    <?php

    if (isset($_POST['submit'])) {
      
        $affectation= $_POST['Affectation'];
        $Nom = $_POST['nom'];
        $Prenom = $_POST['Prenom'];
        $Sexe = $_POST['sexe'];
       
       


        $qry = "insert into dcpr ( Affectation, nom, Prenom, sexe ) values( '$affectation', '$Nom', '$Prenom', '$Sexe')";




        if (mysqli_query($db, $qry)) {
            echo '<script>alert("User registered succesfully.");</script>';
        } else {
            echo mysqli_error($db);
        }
    }
    ?>

    <h1 style="text-align: center; margin-top: 850px;">Liste des agents</h1>

    <table style="margin-top: 80px;">
        <tr>
            <th>code_agent</th>
            <th>Affectation</th>
            <th>nom</th>
            <th>prenom</th>
            <th>sexe</th>
           
           

        </tr>

        <?php
        $i = 1;
        $qry = "select * from dcpr";
        $run = $db->query($qry);
        if ($run->num_rows > 0) {
            while ($row = $run->fetch_assoc()) {

        ?>

                <tr>
                
                    <td><?php echo $row['Code_agent'] ?></td>
                    <td><?php echo $row['Affectation'] ?></td>
                    <td><?php echo $row['nom'] ?></td>
                    <td><?php echo $row['Prenom'] ?></td>
                    <td><?php echo $row['sexe'] ?></td>
                    
                   




                </tr>
        <?php

            }
        }
        ?>

    </table>

</body>
<?php }?>
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

</html>