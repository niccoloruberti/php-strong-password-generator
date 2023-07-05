<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_GET['pswLength']) && $_GET['pswLength'] !== 0 && !empty($_GET['pswLength'])) { ?>
        <div class="alert alert-success">
            La tua password è: <?php echo $_SESSION['password']; ?>
        </div>
    <?php } ?>
</body>
</html>