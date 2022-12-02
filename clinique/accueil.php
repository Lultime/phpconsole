<?php $db = mysqli_connect(
    "localhost",
    "root",
    "",
    "clinique"
);
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
    </style>

</head>

<body>
    <div class="navbar">
        <ul>
            <li><a href="Accueil.php">Accueil</a></li>
            <li><a href="medecin.php">Medecin</a></li>
            <li><a href="dossier.php">Dossier</a></li>
            <li><a href="consultation.php">Consultation</a></li>
            <li><a href="prescription.php">Prescription</a></li>


        </ul>
    </div>
    <br><br><br>
    <h1 style="text-align:center ;">BIENVENUE SUR ANIMUS HEALTH</h1> <br><br>
    <h1 style="text-align:center ;">La reference en matiere de logiciel d'E-Sante.</h1>
    <br><br><br><br>


    <div class="container">

        <div class="box">
            <h2><a href="specialiste.php" style="text-decoration: none;">Trouver un specialiste</a></h2>
        </div>

        <div class="box">
            <h2><a href="liste_consultation.php" style="text-decoration: none;">Verifier une consultation d'un patient</a></h2>
        </div>

        <div class="box">
            <h2><a href="patient.php" style="text-decoration: none;">Trouver un patient</a></h2>
        </div>











    </div>



</body>

</html>