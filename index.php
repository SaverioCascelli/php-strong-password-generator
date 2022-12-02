<?php
require_once __DIR__ .'/functions.php';

if (!empty($_GET['pswLength']) && !empty($_GET['charArr'])) {
    if($_GET['pswLength'] >= 8 && $_GET['pswLength'] <= 40){
        session_start();
        $_SESSION['pswLength'] = $_GET['pswLength'];
        $_SESSION['charRepeat'] = $_GET['charRepeat'];
        $_SESSION['charArr'] = $_GET['charArr'];
        header('Location: ./targhet.php');
    }


}

var_dump($_GET);

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
        <div class="row">
            
        </div>
        <section class="row">
            <div class="col">
                <form action="index.php" method="GET">
                    <input type="number" name="pswLength" class="form-control">
                    <button type="submit" class="btn btn-primary">Genera</button>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="charRepeat" value="repeat">
                        <label class="form-check-label" >
                            multipla ripetizione
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="charRepeat" checked value="noRepeat">
                        <label class="form-check-label">
                            singola ripetizione
                        </label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked name="charArr[char]">
                        <label class="form-check-label" for="flexSwitchCheckDefault">minuscole</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked name="charArr[capital]">
                        <label class="form-check-label" for="flexSwitchCheckChecked">maiuscole</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled" checked name="charArr[numbers]" >
                        <label class="form-check-label" for="flexSwitchCheckDisabled">numberi</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked name="charArr[specials]">
                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">speciali</label>
                    </div>



                </form>
            </div>
        </section>
    </div>
    
</body>
</html>