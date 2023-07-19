<?php require_once "./Calculator.php";

//  Upon pressing the Calculate button
if (isset($_POST['submit'])) {

    // Checks number values
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        $calculator = new \App\Calculator;

        // Calculates total
        if ($_POST['operation'] == 'plus') {
            $total = $calculator->add($_POST['number1'], $_POST['number2']);
        } else if ($_POST['operation'] == 'minus') {
            $total = $calculator->subtract($_POST['number1'], $_POST['number2']);
        } else if ($_POST['operation'] == 'times') {
            $total = $calculator->multiply($_POST['number1'], $_POST['number2']);
        } else if ($_POST['operation'] == 'divided by') {
            $total = $calculator->divide($_POST['number1'], $_POST['number2']);
        }

        //  Prints result
        echo "<h1 style='margin-left: 465px;'>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";

    } else {

        // Prints error message to the browser
        echo "<h1 style='margin-left: 400px;'>'Numeric values are required'</h1>";
    }
}