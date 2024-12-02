<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrierung</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/Music.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</head>

<body>
    <?php
    $title = "About Me";
    $headerTitle = "Registrierung";
    require_once "./assets/php/header.php";
    require_once './assets/php/navBar.php';
    ?>

    <div class="register-container">
        <form action="assets/php/registerToSql.php" method="post">
            <input type="text" name="vorname" placeholder="Vorname" required />
            <input type="text" name="nachname" placeholder="Nachname" required />
            <input type="email" name="email" placeholder="E-Mail" required />
            <input type="password" name="passwort" placeholder="Passwort" required />
            <input type="password" name="passwort_bestaetigen" placeholder="Passwort bestätigen" required />
            <input type="text" id="geburtsdatum-placeholder" placeholder="Geburtsdatum eingeben"
                onfocus="(this.type='date'); this.nextElementSibling.style.display='none';" required />
            <input type="date" id="geburtsdatum" name="geburtsdatum" style="display: none" required /><br /><br />
            <label>Männlich</label>
            <input type="radio" value="Männlich" name="gender" />
            <label>Weiblich</label>
            <input type="radio" value="Weiblich" name="gender" />
            <label>Divers</label>
            <input type="radio" value="Divers" name="gender" />
            <br /><br />
            <button type="submit">Registrieren</button><br /><br />
        </form>
    </div>

    <?php require_once './assets/php/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</body>

</html>