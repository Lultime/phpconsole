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
    <h1 style="text-align: center;">Creer un dossier pour un patient
    </h1>

    <div class="contact-box">
        <form action="" method="post">

            <input type="text" name="code" placeholder="Entrer votre code" class="input-field" />
            <br />

            <input type="text" name="nom" placeholder="Entrer votre nom" class="input-field" />
            <br />

            <input type="text" name="prenom" placeholder="Entrer votre prenom" class="input-field" />
            <br />

            <input type="text" name="sexe" placeholder="Entrer votre sexe" class="input-field" />
            <br />

            <input type="text" name="tel" placeholder="Entrer votre tel: ex: 3113-9781" class="input-field" />
            <br />

            <input type="text" name="adresse" placeholder="Entrer votre adresse" class="input-field" />
            <br />

            <input type="date" name="date_enregistrement" placeholder="Entrer votre date d'enregistrement" class="input-field" />
            <br />



            <input type="submit" name="submit" value="submit" class="input-field" style="background: black; color: white" />
        </form>
    </div>





    <?php

    if (isset($_POST['submit'])) {
        $code = $_POST['code'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $tel = $_POST['tel'];
        $adresse = $_POST['adresse'];
        $date_enregistrement = $_POST['date_enregistrement'];


        $qry = "insert into dossier_patient (code,nom, prenom, sexe, tel, adresse, date_enregistrement) values('$code','$nom', '$prenom', '$sexe', '$tel', '$adresse', '$date_enregistrement')";




        if (mysqli_query($db, $qry)) {
            echo '<script>alert("User registered succesfully.");</script>';
        } else {
            echo mysqli_error($db);
        }
    }
    ?>

    <h1 style="text-align: center; margin-top: 850px;">Liste des dossiers</h1>

    <table style="margin-top: 80px;">
        <tr>
            <th>code</th>
            <th>nom</th>
            <th>prenom</th>
            <th>sexe</th>
            <th>tel</th>
            <th>adresse</th>
            <th>date_enregistrement</th>

        </tr>

        <?php
        $i = 1;
        $qry = "select * from dossier_patient";
        $run = $db->query($qry);
        if ($run->num_rows > 0) {
            while ($row = $run->fetch_assoc()) {

        ?>

                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['code'] ?></td>
                    <td><?php echo $row['nom'] ?></td>
                    <td><?php echo $row['prenom'] ?></td>
                    <td><?php echo $row['sexe'] ?></td>
                    <td><?php echo $row['tel'] ?></td>
                    <td><?php echo $row['adresse'] ?></td>
                    <td><?php echo $row['date_enregistrement'] ?></td>




                </tr>
        <?php

            }
        }
        ?>

    </table>

</body>

</html>