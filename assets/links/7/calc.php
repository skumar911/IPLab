<?php
    if (isset($_POST['submit'])) {
        $val1 = $_POST['num1'];
        $val2 = $_POST['num2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case 'None':
                echo "You need to select any operator";
                break;
            case 'Add':
                echo $val1 + $val2;
                break;
            case 'Subtract':
                echo $val1 - $val2;
                break;
            case 'Multiply':
                echo $val1 * $val2;
                break;
            case 'Divide':
                echo $val1 / $val2;
                break;
            case 'Square':
                echo $val1 ** $val2;
                break;
        }
    }
 ?>
 
