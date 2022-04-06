<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];


    $soma = $num1 + $num2 + $num3;

    if ($soma > 49.9){
        echo "<span style='color:red;'>OK</span>";
    }
    else{
        echo "<span style='color:red;'> NOK </span>";
    }


?>