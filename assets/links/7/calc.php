<?php

    if (isset($_POST['submit'])) {
        $result1 = $_POST['numb1'];
        $result2 = $_POST['numb2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case 'None':
                echo "You need to select any operator";
                break;
            case 'Add':
                echo $result1 + $result2;
                break;
            case 'Subtract':
                echo $result1 - $result2;
                break;
            case 'Multiply':
                echo $result1 * $result2;
                break;
            case 'Divide':
                echo $result1 / $result2;
                break;
            case 'Square':
                echo $result1 ** $result2;
                break;
        }
    }
 ?>
