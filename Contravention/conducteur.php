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
    <h1 style="text-align: center;">Creer un dossier pour un conducteur
    </h1>

    <div class="contact-box">
        <form action="" method="post">

            <input type="text" name="No_dossier" placeholder="No_conducteur" class="input-field" />
            <br />

            <input type="text" name="Nom" placeholder="Entrer le nom" class="input-field" />
            <br />

            <input type="text" name="Prenom" placeholder="Entrer le prenom" class="input-field" />
            <br />

            <input type="text" name="Sexe" placeholder="Entrer le sexe" class="input-field" />
            <br />

            <input type="text" name="Nif" placeholder="Entrer le Nif " class="input-field" />
            <br />

          


            <input type="submit" name="submit" value="Enregistrer" class="input-field" style="background: black; color: white" />
        </form>
    </div>





    <?php

    if (isset($_POST['submit'])) {
      
        $Nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];
        $Sexe = $_POST['Sexe'];
        $Nif= $_POST['Nif'];
       


        $qry = "insert into conducteur (Nom, Prenom, Sexe, Nif) values('$Nom', '$Prenom', '$Sexe', '$Nif')";




        if (mysqli_query($db, $qry)) {
            echo '<script>alert("User registered succesfully.");</script>';
        } else {
            echo mysqli_error($db);
        }
    }
    ?>

    <h1 style="text-align: center; margin-top: 850px;">Liste des conducteurs</h1>

    <table style="margin-top: 80px;">
        <tr>
            <th>No_dossier</th>
            <th>nom</th>
            <th>prenom</th>
            <th>sexe</th>
            <th>Nif</th>
           

        </tr>

        <?php
        $i = 1;
        $qry = "select * from conducteur";
        $run = $db->query($qry);
        if ($run->num_rows > 0) {
            while ($row = $run->fetch_assoc()) {

        ?>

                <tr>
                
                    <td><?php echo $row['No_dossier'] ?></td>
                    <td><?php echo $row['Nom'] ?></td>
                    <td><?php echo $row['Prenom'] ?></td>
                    <td><?php echo $row['Sexe'] ?></td>
                    <td><?php echo $row['Nif'] ?></td>
                   




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