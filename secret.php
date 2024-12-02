<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Geheime Informationen</title>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    $title = "Geheime Seite";
    $headerTitle = "Geheime Informationen";
    require_once "./assets/php/header.php";
    require_once './assets/php/navBar.php';
    ?>

    <div class="container-work">  
        <p>Vollständiger Name: [Ingo Wollenschläger]</p>
        <p>Adresse: [Geheim :D Irgendwo in Aldenhoven]</p>
        <p>Geheimes Projekt: [Projekt X]</p>
        <p>Geheime Fähigkeit: [Unsichtbarkeit]</p>
        <p>Geheime Mission: [Top Secret Mission]</p>
        <p>Geheime Lieblingsfarbe: [Ultraviolett]</p>
        <p>Geheimes Lieblingsessen: [Pizza mit Ananas]</p>
    </div>

    <?php require_once './assets/php/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>