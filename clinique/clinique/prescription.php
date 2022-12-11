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
    <h1 style="text-align: center;">Entrer la prescription
    </h1>

    <div class="contact-box">
        <form action="" method="post">



            <input type="text" name="idconsultation" placeholder="Entrer l'id de consultation" class="input-field" />
            <br />


            <textarea name="prescription" id="" cols="30" rows="10" placeholder="Entrer la prescription" class="input-field"></textarea>
            <br />


            <input type="submit" name="submit" value="submit" class="input-field" style="background: black; color: white" />
        </form>
    </div>





    <?php

    if (isset($_POST['submit'])) {

        $idconsultation = $_POST['idconsultation'];
        $prescription = $_POST['prescription'];

        $qry = "insert into prescription (idconsultation, prescription) values( '$idconsultation', '$prescription')";




        if (mysqli_query($db, $qry)) {
            echo '<script>alert("User registered succesfully.");</script>';
        } else {
            echo mysqli_error($db);
        }
    }
    ?>

    <h1 style="text-align: center; margin-top: 850px;">Liste des prescription</h1>

    <table style="margin-top: 80px;">
        <tr>
            <th>id</th>
            <th>idconsultation</th>
            <th>prescription</th>

        </tr>

        <?php
        $i = 1;
        $qry = "select * from prescription";
        $run = $db->query($qry);
        if ($run->num_rows > 0) {
            while ($row = $run->fetch_assoc()) {

        ?>

                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['idconsultation'] ?></td>
                    <td><?php echo $row['prescription'] ?></td>




                </tr>
        <?php

            }
        }
        ?>

    </table>

</body>

</html>