<?php require_once 'inc/header.php'; ?>
    <form class="container text-start" action="inc/calc.inc.php" method="post">
        <div class="row">
            <div class="col-12"><h1>Calculator</h1></div>
            <div class="d-flex flex-column justify-content-start align-items-stretch flex-md-row align-items-md-end gap-2">
                <div class="form-field">
                    <label for="num1" class="visually-hidden">First Number</label>
                    <input type="number" id="num1" name="num1" class="w-100" placeholder="First number">
                </div>
                <div class="form-field">
                    <select name="operation" id="operation" class="w-100">
                        <option value="add">+ (plus)</option>
                        <option value="subtract">- (minus)</option>
                        <option value="multiply">* (multiplied by)</option>
                        <option value="divide">/ (divided by)</option>
                    </select>
                </div>
                <div class="form-field">
                    <label for="num2" class="visually-hidden">Second Number</label>
                    <input type="number" id="num2" name="num2" class="w-100" placeholder="Second number">
                </div>
                <button type="submit" class="btn btn-primary">Calculate</button>
            </div>
        </div>
    </form>
<?php require_once 'inc/footer.php'; ?>