<?php

session_start();
if (empty($_SESSION)) {
    header('Location: ./index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="alert alert-success">
            La tua password è: <?php echo $_SESSION['password']; ?>
        </div>
</body>
</html>