<?php
require_once __DIR__ . '/functions.php';

session_start();

echo genPassword($_SESSION['charArr'],$_SESSION['charRepeat'],$_SESSION['pswLength']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targhet page</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col"></div>
        </div>
    </div>
</body>
</html>