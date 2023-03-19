<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

<?php 
if (
    isset($_GET['number1']) && 
    isset($_GET['number2']) && 
    is_numeric($_GET['number1']) && 
    is_numeric($_GET['number2']) &&
    isset($_GET['operator'])
    ) {

    $operator = $_GET['operator'];

    switch ($operator) {
        case "+": 
            $result = $_GET['number1'] + $_GET['number2'];
            break;
        case "-": 
            $result = $_GET['number1'] - $_GET['number2'];
            break;
        case "*": 
            $result = $_GET['number1'] * $_GET['number2'];
            break;
        case "/": 
            $result = $_GET['number1'] / $_GET['number2'];
            break;
    }
};
   


?>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <form action="">
                <div class="mb-3">
                    <label for="number1" class="form-label">Number 1</label>
                    <input type="number" class="form-control" id="number" name="number1" value="<?= $_GET['number1'] ?? '' ?>">
                </div>
                <div class="mb-3">
                       <label for="number2" class="form-label">Operator</label>
                            <select class="form-select mb-3" id="operator" name="operator">
                                <option selected value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                </div>
                <div class="mb-3">
                    <label for="number2" class="form-label">Number 2</label>
                    <input type="number" class="form-control" id="number" name="number2" value="<?= $_GET['number2'] ?? '' ?>">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Result</button>
                </div>
                <div class="mb-3">
                    <?php if(isset($result)) : ?>
                        <label for="number3" class="form-label">Result</label>
                        <input type="number" class="form-control" id="result" readonly value="<?= $result ?>" name="result">
                    <?php endif ?>
                </div>
            </form>
           
        </div>
    </div>
</div>

    
</body>

</html>

