<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/main.js" defer></script>
</head>

<body>

    <?php
    $title = "About Me";
    $headerTitle = "About Me";
    require_once "./assets/php/header.php";
    require_once './assets/php/navBar.php';
    ?>


    <div class="about-container">

        <div class="about-content">
            <img src="assets/img/naruto.jpg" alt="Profile Picture" class="profile-picture">
            <div class="about-text">
                <p>Hallo, mein Name ist Ingo. Willkommen auf meiner persönlichen Webseite!</p>
                <p>Ich bin ein leidenschaftlicher Webentwickler mit einem Interesse an modernen Technologien und
                    kreativen Lösungen.</p><br>  
                <h3>Meine Lieblingfilme</h3>
            <ul>
                <li>Inception (2010)</li>
                <li>Interstellar (2014)</li>
                <li>Zurück in die Zukunft (1985)</li>
                <li>Der Herr der Ringe Triologie</li>
                <li>Matrix Triologie</li>
            </ul>
                <h3>Meine Hobbys</h3>
                <ul>
                    <li>Webentwicklung</li>
                    <li>Musik</li>
                    <li>Zocken</li>
                </ul>

                <section class="projects">
                    <h2>Meine Projekte</h2>
                    <a href="index.php">Funktionierender Youtube Player mit ID und verlinkung</a> <br />
                </section>
                <h3>Kontakt</h3>
                <p>Sie können mich über diese <a href="mailto:ingowollenschlaeger@web.de">E-Mail</a> erreichen.</p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <?php require_once './assets/php/footer.php'; ?>
</body>

</html>