<?php
    declare( strict_types = 1 );
    require 'inc/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OOP PHP practice">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <main id="main" role="main">
        <form class="container text-start" action="#" method="post">
            <div class="row">
                <div class="col-12"><h1>Calculator</h1></div>
                <div class="d-flex flex-column justify-content-start align-items-stretch flex-md-row align-items-md-end gap-2">
                    <div class="form-field">
                        <label for="num1" class="visually-hidden">First Number</label>
                        <input type="number" id="num1" class="w-100" placeholder="First number">
                    </div>
                    <div class="form-field">
                        <select name="operation" id="operation" class="w-100">
                            <option value="add">Plus</option>
                            <option value="subtract">Minus</option>
                            <option value="multiply">Times</option>
                            <option value="divide">Divided by</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="num2" class="visually-hidden">Second Number</label>
                        <input type="number" id="num2" class="w-100" placeholder="Second number">
                    </div>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>