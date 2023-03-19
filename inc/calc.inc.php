<?php

require 'header.php';

$operator = $_POST['operation'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$calc_result = new Calculator( $operator, (int)$num1, (int)$num2 );

?>

<div class="container">
    <?php
        try {
            $html = '<div class="txt-center">';
            $html .= '<p>The answer is: <span class="fw-bold">' . $calc_result->calculate() . '</span></p><br>';
            $html .= '<a href="/" class="btn btn-primary mt-2">Go back</a>';
            $html .= '</div>';
            echo $html;
        } catch ( TypeError $th ) {
            echo 'Error: ' . $th->getMessage();
        }
    ?>
</div>

<?php require_once 'footer.php' ?>