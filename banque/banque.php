<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <style>
        input[type="text"] {
            width: 25%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
            padding: 70px;
        }

        input[type="number"] {
            width: 25%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type="date"] {
            width: 25%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        select {
            font-size: 15px;
        }

        input[type="submit"] {
            background-color: blue;
            border-color: blue;
            border-radius: 15px;
            color: white;
            width: 70px;
            height: 35px;
            margin-top: 5px;
        }

        input[type="text"] {
            text-align: center;
            border-color: blue;
            border-radius: 15px;
            color: midnightblue;
            margin-top: 5px;
        }

        #form {
            text-align: center;

            color: white;

        }

        body {
            background-image: url('is.jpg');
            color: white;
        }

        #head {
            text-align: center;
        }

        #tab {
            border-collapse: collapse;
            width: auto;
            box-shadow: 0 5px 50px rgba(0, 0, 0, 0.15);
            margin: 100px auto;
            border: 1px solid #ddd;
        }

        #th {
            background-color: gray;
            color: white;
            text-align: left;
        }

        #th,
        #td {
            padding: 10px 15px;
            border: 1px solid red;
        }

        #tbody #tr,
        #td,
        #th {
            border: 1px solid #dddd;
        }

        #tbody #tr:nth-child(even) {
            background-color: midnightblue;
            ;
        }

        #p {
            color: white;
            text-align: center;
        }

        #tbody #tr:last-of-type {
            border-bottom: 4px solid gray;
        }

        .form-group1 {
            margin-left: 80px;
        }
    </style>
</head>

<body>
    <div id="head">
        <h1>Syntaxe Banque</h1>
        <h4>Veuillez entrer vos coordonnees</h4>
    </div>
    <hr>

    <form action="banque.php" method="POST" id="form">
        <div class="form-group">
            <div>
                <label for="nom">No Compte</label>
            </div>
            <input type="number" name="nocompte" placeholder="No compte" id="nom">
        </div>


        <div class="form-group">
            <div>
                <label for="transaction">Transaction</label>
            </div>
            <select name="transaction" id="select">
                <option value="none">Choisir le type de transaction</option>
                <option value="Depot" name="depot">Depot</option>
                <option value="Retrait" name="retrait">Retrait</option>
            </select>
        </div>

        <div class="form-group">
            <div>
                <label for="montant">MONTANT</label>
            </div>
            <input type="number" name="montant" placeholder="Montant" id="montaant">
        </div>

        <div class="form-group">
            <div>
                <label for="nom">DATE</label>
            </div>
            <input type="date" name="date" id="date">
        </div>


        <div class="form-group">
            <input type="submit" value="save" name="save">
        </div>

    </form>
    <?php

    if (isset($_POST["save"])) {
        $nocompte = $_POST["nocompte"];
        $transaction = $_POST["transaction"];
        $montant = $_POST["montant"];
        $solde = $_POST["montant"];
        $date = $_POST["date"];
        $p = array("nocompte" => $nocompte, "transaction" => $transaction, "montant" => $montant, $solde, "date" => $date);
        $_SESSION["personne"][] = $p;
        $p = $_SESSION["personne"];


        $totaldepot = $solde + $montant;
        echo " la valeur total de vos depot sont:$totaldepot <br/>";
        $totalretrait = $totaldepot - $montant;
        echo " la valeur total de vos retrait sont:$totalretrait";
    }

    ?>
    <p id="p"></p>
    <table id="tab">
        <thead>
            <th id="th">No Compte</th>
            <th id="th">Transaction</th>
            <th id="th">Montant</th>
            <th id="th">Solde</th>
            <th id="th">Date</th>

        </thead>
        <tbody id="tbody">
            <?php if (count($p) != 0) { ?>
                <?php foreach ($p as $l) { ?>
                    <tr id="tr">
                        <?php foreach ($l as $v) { ?>
                            <td id="td">
                                <?php echo $v; ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>