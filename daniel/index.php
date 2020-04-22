<?php
session_start();
if(!$_SESSION['logado'])
    {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mainTemplate.css">
    <title>Daniel</title>
</head>
<body>
    <div class="content">
        <div class="contentItem">Analysis Sheet</div>
        <div class="contentItem">Gantt Analysis</div>
        <div class="contentItem">Balancing Analysis</div>
        <div class="contentItem">Database</div>
        <div class="contentItem"><a href="exit.php">Quit</a></div>
    </div>
</body>
</html>