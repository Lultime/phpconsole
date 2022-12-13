<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordred table-hover" id="mytable">
                    <thead>
                        <tr>

                            <td>ID</td>
                            <td>specialite</td>
                            <td>nom</td>
                            <td>prenom</td>
                            <td>sexe</td>
                            <td>tel</td>
                            <td>adresse</td>
                            <td>email</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'clinique');
                        $sql = $conn->query('select * from medecin');
                        while ($data = $sql->fetch_array()) {
                            echo '<tr>
       <td>' . $data['ID'] . '</td>
       <td>' . $data['specialite'] . '</td>
       <td>' . $data['nom'] . '</td>
       <td>' . $data['prenom'] . '</td>
       <td>' . $data['sexe'] . '</td>
       <td>' . $data['tel'] . '</td>
       <td>' . $data['adresse'] . '</td>
       <td>' . $data['email'] . '</td>
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