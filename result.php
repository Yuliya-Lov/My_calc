<html>
<head>
    <title>Calculator</title>
    <?php 
    $result = require __DIR__ . '/calc.php';
    ?>
</head>
<body>

    <h1>Result:</h1>
    <?php 
    echo "$result";
    ?>
</form>
</body>
</html>