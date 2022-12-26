<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">entrer une valeur </label>
    <input type="text" name= "txt_val" id="">
     <button name="bt_test">test</button>


</form>
    
</body>
</html>

<?php
if (isset($_POST["bt_test"])){
    $var=$_POST["txt_val"];


if ($var >0){
  echo "$var est un nombre positif";

}elseif($var===0){
     echo "$var est un nombre nul";
}else{
     echo "$var est un nombre negatif";
}

}

?>