<?php $db = mysqli_connect(
    "localhost",
    "root",
    "",
    "hospital"
);
?>

<?php require "css/css_consultation.php"; ?>

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
    <h1 style="text-align: center;">Entrer la consultation
    </h1>

    <div class="contact-box">
        <form action="" method="post">



            <input type="text" name="idmedecin" placeholder="Entrer l'id du medecin" class="input-field" />
            <br />

            <input type="text" name="codepatient" placeholder="Entrer le code du dossier patient" class="input-field" />
            <br />

            <input type="text" name="poids" placeholder="Entrer votre poid" class="input-field" />
            <br />

            <input type="text" name="hauteur" placeholder="Entrer la hauteur" class="input-field" />
            <br />


            <textarea name="diagnostique" id="" cols="30" rows="10" placeholder="Entrer le diagnostique" class="input-field"></textarea>
            <br />


            <input type="date" name="date_consultation" placeholder="Entrer la date" class="input-field" />
            <br />


            <input type="submit" name="submit" value="submit" class="input-field" style="background: black; color: white" />
        </form>
    </div>





    <?php

    if (isset($_POST['submit'])) {

        $idmedecin = $_POST['idmedecin'];
        $codepatient = $_POST['codepatient'];
        $poids = $_POST['poids'];
        $hauteur = $_POST['hauteur'];
        $diagnostique = $_POST['diagnostique'];
        $date_consultation = $_POST['date_consultation'];


        $qry = "insert into consultation (idmedecin, codepatient, poids, hauteur, diagnostique, date_consultation) values( '$idmedecin', '$codepatient', '$poids', '$hauteur', '$diagnostique', '$date_consultation')";




        if (mysqli_query($db, $qry)) {
            echo '<script>alert("User registered succesfully.");</script>';
        } else {
            echo mysqli_error($db);
        }
    }
    ?>

    <h1 style="text-align: center; margin-top: 850px;">Liste des consultation</h1>

    <table style="margin-top: 80px;">
        <tr>
            <th>id</th>
            <th>idmedecin</th>
            <th>codepatient</th>
            <th>poids</th>
            <th>hauteur</th>
            <th>diagnostique</th>
            <th>date_consultation</th>

        </tr>

        <?php
        $i = 1;
        $qry = "select * from consultation";
        $run = $db->query($qry);
        if ($run->num_rows > 0) {
            while ($row = $run->fetch_assoc()) {

        ?>

                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['idmedecin'] ?></td>
                    <td><?php echo $row['codepatient'] ?></td>
                    <td><?php echo $row['poids'] ?></td>
                    <td><?php echo $row['hauteur'] ?></td>
                    <td><?php echo $row['diagnostique'] ?></td>
                    <td><?php echo $row['date_consultation'] ?></td>




                </tr>
        <?php

            }
        }
        ?>

    </table>

</body>

</html>