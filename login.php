<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/Music.js"></script>
    <script src="assets/js/main.js" defer></script>
</head>

<body>
    <?php
    $title = "About Me";
    $headerTitle = "Login";
    require_once "./assets/php/header.php";
    require_once './assets/php/navBar.php';
    ?>

    <section class="content">
        <div class="login-container">
            <form action="" method="post" target="_blank">
                <input type="email" name="email" placeholder="E-Mail" required />
                <input type="password" name="Passwort" placeholder="Passwort" required />
                <button type="submit">Login</button>
                <button type="reset">Zurücksetzen</button>
            </form>
        </div>
    </section>

    <?php require_once './assets/php/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</body>

</html>