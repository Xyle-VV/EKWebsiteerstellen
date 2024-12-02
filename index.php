<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Willkommen auf meiner Website</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/main.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" defer></script>
</head>

<body>
    <?php
    $title = "Index";
    $headerTitle = "Willkommen auf meiner Website";
    require_once './assets/php/header.php';
    require_once './assets/php/navBar.php';
    ?>

    <div class="index-container">
        <div class="index-content">
            <div class="index-text">
                <p>
                    Mein Name ist Ingo Wollenschläger und ich bin ein Webentwickler. Ich liebe es, Websites
                    zu erstellen und neue Technologien zu lernen.
                </p>
                <ul>
                    <li>Kurs: Web Programmierung von Ali Khorsandfard</li>
                    <li>Fachinformatiker Systemintegration Winter 2024</li>
                    <li>Ort: DAA Aachen</li>
                    <li>Projekt: Webentwicklung</li>
                    <li>Technologien: HTML, CSS, JavaScript, PHP</li>
                    <li><p>Sie können mich über diese <a href="mailto:ingowollenschlaeger@web.de">E-Mail</a> erreichen.</p></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="youtube-container" style="margin-top: 50px;">
        <h2>YouTube Player</h2>
        <input type="text" id="youtubeLink" placeholder="YouTube-Link eingeben">
        <button onclick="loadYouTubeVideo()">Video laden</button>
        <div id="player"></div>
    </div>

    <?php require_once './assets/php/footer.php'; ?>

    <script>
        function loadYouTubeVideo() {
            const link = document.getElementById('youtubeLink').value;
            const videoId = link.split('v=')[1];
            const embedLink = `https://www.youtube.com/embed/${videoId}`;
            document.getElementById('player').innerHTML = `<iframe width="560" height="315" src="${embedLink}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
        }
    </script>
</body>

</html>