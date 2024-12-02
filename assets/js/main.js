function loadPage(url) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('content').innerHTML = xhr.responseText;
            setTimeout(setDatePlaceholder, 0); // Setze den Placeholder-Text für das Datumseingabefeld
        }
    };
    xhr.send();
}
// Setze den Placeholder-Text für das Datumseingabefeld
function setDatePlaceholder() {
    var dateInput = document.getElementById('geburtsdatum-placeholder');
    if (dateInput) {
        dateInput.placeholder = 'Geburtsdatum eingeben';
    }
}

// Setze den Placeholder-Text, wenn die Seite geladen wird
window.onload = function() {
    setTimeout(setDatePlaceholder, 0);
};

// Verstecke die Navigation, wenn nach unten gescrollt wird
let lastScrollTop = 0;
const navbar = document.querySelector('nav');

window.addEventListener('scroll', function() {
    let scrollTop = window.scrollY || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
        // Scroll down
        navbar.classList.add('hidden');
    } else {
        // Scroll up
        navbar.classList.remove('hidden');
    }
    lastScrollTop = scrollTop;
});

// Funktion zum Laden eines YouTube-Videos
function loadYouTubeVideo() {
    const link = document.getElementById('youtubeLink').value;
    const videoId = getYouTubeVideoId(link);
    if (videoId) {
        const playerDiv = document.getElementById('player');
        playerDiv.innerHTML = `<iframe width="560" height="315" src="https://www.youtube.com/embed/${videoId}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
    } else {
        alert('Ungültiger YouTube-Link');
    }
}

// Funktion zum Extrahieren der Video-ID aus einem YouTube-Link
function getYouTubeVideoId(url) {
    const regex = /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
    const match = url.match(regex);
    return match ? match[1] : null;
}