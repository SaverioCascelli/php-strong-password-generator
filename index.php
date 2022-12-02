<?php
require_once __DIR__ .'/functions.php';

$bool = false;

if($bool){
    header('Location: ./targhet.php');
}

var_dump($_GET);

echo genPassword($_GET['pswLength']);
echo '<br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <section class="row">
            <div class="col">
                <form action="index.php" method="GET">
                    <input type="number" name="pswLength" class="form-control">
                    <button type="submit" class="btn btn-primary">Genera</button>
                </form>
            </div>
        </section>
    </div>
    
</body>
</html>