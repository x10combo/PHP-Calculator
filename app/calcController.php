<?php require_once "./Calculator.php";

// Upon pressing the submit button:

if(isset($_Post['submit'])) {

    // Upon confirming both number values, a new instance of the Calculator is opened
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        $calculator = new \App\Calculator;

    // Calculating the total based on the selected arithmetic operation, using if-else statements.
    if ($_POST['operation'] == 'plus') {
        $total = $calculator -> add($_POST['number 1'], $_POST['number 2']);
    } else if ($_POST['operation'] == 'minus'){
        $total = $calculator -> subtract($_POST['number 1'], $_POST['number 2']);
    } else if ($_POST['operation'] == 'times'){
        $total = $calculator -> multiply($_POST['number 1'], $_POST['number 2']);
    } else if ($_POST['operation'] == 'divided by'){
        $total = $calculator -> divide($_POST['number 1'], $_POST['number 2']);
    }

    //printing of output message
    echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";

} else {

    // Otherwise prints error message to the browser
    echo 'Numeric values are required';
    }
}
