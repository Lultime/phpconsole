<?php require "css/css_liste_consultation.php"; ?>

<body>

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordred table-hover" id="mytable">
                    <thead>
                        <tr>

                            <td>ID</td>
                            <td>code patient</td>
                            <td>id medecin</td>
                            <td>poids</td>
                            <td>hauteur</td>
                            <td>diagnostique</td>
                            <td>date consultation</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'hospital');
                        $sql = $conn->query('select * from consultation');
                        while ($data = $sql->fetch_array()) {
                            echo '<tr>
                            <td>' . $data['ID'] . '</td>
       <td>' . $data['codepatient'] . '</td>
       <td>' . $data['idmedecin'] . '</td>
       <td>' . $data['poids'] . '</td>
       <td>' . $data['hauteur'] . '</td>
       <td>' . $data['diagnostique'] . '</td>
       <td>' . $data['date_consultation'] . '</td>
        </tr>
        ';
                        }
                        ?>
                    </tbody>
                </table>


            </div>

        </div>


    </div>

    <br><br>
    <h4 style="margin-left: 60px;"><a href="accueil.php">Retourner a la page d'Accueil</a></h4>

</body>

</html>
<script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>