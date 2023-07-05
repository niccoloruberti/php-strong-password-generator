<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-secondary mt-5 text-center">Strong Password Generator</h1>
        <h2 class="text-white text-center">Genera una password sicura</h2>
    </div>
    <div class="container">
        <!-- form -->
        <div class="form mt-5 p-5 bg-light rounded">
            <div class="row">
                <div class="col-7">
                    <label for="pswLength">Lunghezza password:</label>
                </div>
                <div class="col-5">
                    <input type="number" name="pswLength" id="pswLength">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-7">
                    <label>Consenti ripetizioni di uno o più caratteri:</label>
                </div>
                <div class="col-5">
                    <!-- radio -->
                    <div class="form-check p-0">
                        <input type="radio" name="repetition" value="1">
                        <label>Sì</label>
                    </div>
                    <div class="form-check p-0">
                        <input type="radio" name="repetition" value="0">
                        <label>No</label>
                    </div>
                    <!-- checkbox -->
                    <div class="form-check mt-3">
                        <input type="checkbox" class="form-check-input" name="Letters">
                        <label>Lettere</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="Numbers">
                        <label>Numeri</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="Symbols">
                        <label>Simboli</label>
                    </div>
                </div>
            </div>
            <!-- bottoni -->
            <div class="row mt-5">
                <div class="col-3">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>