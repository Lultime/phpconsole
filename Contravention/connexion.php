<?php
$db = mysqli_connect(
    "localhost",
    "root",
    "",
    "contravention"
);
$nom_utilisateur_connect1='Bekersen';
$open=null;
$erreur=null;
if (isset($_POST['submit'])) {
    $nom_utilisateur_connect = $_POST['nom_utilisateur_connect'];
    $password=$_POST['password'];

    
    $qry = "SELECT * FROM `utilisateur` WHERE nom_utilisateur='Bekersen' ";
    $requete = $db->query($qry);
    $user=$requete->fetch_all();
    if(!empty($_POST['nom_utilisateur_connect']) && !empty($_POST['password'])){
  foreach($user as $users){
    if($nom_utilisateur_connect === $users) $open=1;
  }
        if($open=1){
          session_start();
          $_SESSION['auth']=$_POST['nom_utilisateur_connect'];
          $nom1=$_SESSION['auth']=$_POST['nom_utilisateur_connect'];
       
          $_SESSION['connecte'] = 1;
          header('Location: /accueil.php');
          exit();
        }else{
         $erreur='identifiant incorrect';
         
        }
    }

}



require_once 'auth.php';
if(connecte()){
    header('Location : /accueil.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>clinique</title>

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

      <input type="text" name="nom_utilisateur_connect" placeholder="Entrer votre nom d utilisateur" class="input-field" />
            <br />

     <input type="password" name="password" placeholder="Entrer votre mot de passe" class="input-field"  />
            <br />
            <?php if($erreur){?>
<div class="alert alert-danger">
  <?= $erreur; ?>
</div>

<?php }?>
        <a href="/utilisateur.php">vous n avez pas encore de compte? creer un? , <br/> </a> <a href='#'>vous avez oublier votre mot de passe ou nom d utilisateur ?</a>
        <br />
            <input type="submit" name="submit" value="se connecter" class="input-field" style="background: black; color: white" />

      </form>

</div>

  







    <?php




/*if(password_verify($password, $user)){
    
}


*/


?>



</body>


</html>