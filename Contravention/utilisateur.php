<?php $db = mysqli_connect(
    "localhost",
    "root",
    "",
    "contravention"
);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    
<style>
        body {
            margin: o;
            padding: 0;

            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar ul {
            list-style: none;
            background: black;
            padding: 0;
            margin: 0;
            text-align: center;

        }

        .navbar li {
            display: inline-block;
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            width: 150px;
            display: block;
            padding: 15, 20px;
            font-size: 15px;
            text-transform: uppercase;
            font-weight: bold;
            text-align: center;
        }

        .navbar a:hover {
            background: rgb(87, 87, 207);
        }

        /* aller a la ligne*/
        .contact-box {
            margin-top: 240px;
            width: 500px;
            background-color: white;
            box-shadow: 0 0 20px gray;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
        }

        form {
            margin: 35px;
            text-align: center;
        }

        .input-field {
            width: 400px;
            height: 40px;
            margin-top: 20px;
            padding-left: 10px;
            border: 1px solid gray;
            border-radius: 14px;
        }

        /* Tableau*/
        table {
            width: 800px;
            margin: auto;
            text-align: center;

        }


        table,
        tr,
        th,
        td {
            width: 100px;
            padding: 20px;
            color: white;
            border: 1px solid #080808;
            border-collapse: collapse;
            font-size: 18px;
            font-family: Arial;
            background: linear-gradient(top, #3c3c3c 0%, #222222);
            background: -webkit-linear-gradient(top, #3c3c3c 0%, #222222 100%);
        }

        td:hover {
            background-color: purple;
        }

        /* css grid*/
        .container {
            width: 90%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
            box-sizing: border-box;
            box-shadow: #3c3c3c;
            text-align: center;
        }

        .box {
            box-shadow: 0 0 20px gray;
            margin-left: 150px;
            height: 200px;
            color: white;
            border: 2px solid white;
            position: relative;
        }

        h2 {
            color: black;
            text-transform: uppercase;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .box2 {
            height: 40%;
            box-shadow: 0 0 20px gray;
            border: 2px solid white;
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
            width: 35%;
            
        }
    </style>
</head>
<body>

   

</div>
<div class="box2">
<br><br><br>
    <h1 style="text-align:center ;">BIENVENUE SUR CIRCULODGI</h1> <br><br>
    
    <br><br>

     
     

    <div class="container">

      <form action="" method="Post">
      <input type="number" name="id_utilisateur" placeholder="id_utilisateur" class="input-field"  />
            <br />
      <input type="text" name="Nom" placeholder="Entrer votre nom " class="input-field" />
            <br />
     <input type="text" name="Prenom" placeholder="Entrer votre Prenom" class="input-field" />
            <br />
    <input type="text" name="no" placeholder="Entrer ton No(identifiant de travail)" class="input-field" required/>
            <br />
     <input type="text" name="nom_utilisateur" placeholder="Entrer votre nom d'utilisateur" class="input-field" required/>
            <br />
            <input type="text" name="Date" placeholder="(0000-00-00)(annee-mois-jour)Date de naissance" class="input-field" />
            <br />
     <input type="password" name="password" placeholder="Entrer un mot de passe" class="input-field"  required />
            <br />
     <input type="password" name="password_confirm" placeholder="confirmer votre mot de passe" class="input-field" required   />
            <br />
            
            <input type="submit" name="submit" value="creer    " class="input-field" style="background: black; color: white" />

           <a href="/connexion.php"><input type="button" name="submit" value="quitter   " class="input-field" style="background: black; color: white" />
</a> 

        
</div>


       
     

      </form>

</div>

  







    <?php

if (isset($_POST['submit'])) {
    $nom= $_POST['Nom'];
    $Prenom= $_POST['Prenom'];
    $no=$_POST['no'];
    $nom_utilisateur=$_POST['nom_utilisateur'];
    $Date= $_POST['Date'];
    $password=$_POST['password'];
    $password_confirm=$_POST['password_confirm'];
    
     
    $qry = "insert into utilisateur (Nom, Prenom, no, nom_utilisateur,  Date, password, password_confirm ) values(' $nom', '$Prenom', '$no', '$nom_utilisateur', '$Date', '$password', '$password_confirm' )";




    if (mysqli_query($db, $qry)) {
        echo '<script>alert("User registered succesfully.");</script>';
    } else {
        echo mysqli_error($db);
    }
}
?>



</body>


</html>