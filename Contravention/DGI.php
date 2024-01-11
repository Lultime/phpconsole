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
    <h1 style="text-align: center;">Creer un dossier pour Travaux effectues
    </h1>

    <div class="contact-box">
        <form action="" method="post">

            <input type="number" name="No_fiche" placeholder="entrer le no de la fiche de contravention" class="input-field" />
            <br />

            <input type="number" name="Montant" placeholder="Montant de la contravention" class="input-field" />
            <br />
            <div style=" width: 390px;
            height: 5px; padding :15px ; margin-top: 10px;
            padding-left: 5px;
            border: 1px solid gray;
            border-radius: 14px;">
            <label for="payer" > PAYER ?</label>
            <label for="payer"  > oui</label>
            <input type="radio" name="payer"   />
            <label for="payer"  > non</label>
            <input type="radio" name="payer"   />
            </div> 
            
            <br />

            <input type="text" name="Remarque" placeholder="Faite une remarque" class="input-field" />
            <br />

            <input type="date" name="Date_paiement" placeholder="Entrer la date de paiement" class="input-field" />
            <br />

          
          


            <input type="submit" name="submit" value="Enregistrer" class="input-field" style="background: black; color: white" />
        </form>
    </div>





    <?php

    if (isset($_POST['submit'])) {
      
        $no_fiche= $_POST['No_fiche'];
        $montant = $_POST['Montant'];
        $remarque = $_POST['Remarque'];
        $date= $_POST['Date_paiement'];
       
       


        $qry = "insert into dgi ( No_fiche, Montant, Remarque, Date_paiement ) values( '$no_fiche', '$montant', '$remarque', '$date')";




        if (mysqli_query($db, $qry)) {
            echo '<script>alert("User registered succesfully.");</script>';
        } else {
            echo mysqli_error($db);
        }
    }
    ?>

    <h1 style="text-align: center; margin-top: 850px;">Liste des Travaux effectues</h1>

    <table style="margin-top: 80px;">
        <tr>
            <th>No_fiche</th>
            <th>Montant</th>
            <th>Remarque</th>
            <th>Date_paiement</th>
           
           
           

        </tr>

        <?php
        $i = 1;
        $qry = "select * from dgi";
        $run = $db->query($qry);
        if ($run->num_rows > 0) {
            while ($row = $run->fetch_assoc()) {

        ?>

                <tr>
                
                    <td><?php echo $row['No_fiche'] ?></td>
                    <td><?php echo $row['Montant'] ?></td>
                    <td><?php echo $row['Remarque'] ?></td>
                    <td><?php echo $row['Date_paiement'] ?></td>
                 
                    
                   




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