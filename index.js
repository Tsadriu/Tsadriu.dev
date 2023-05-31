// Get the button:
let goTopButton = document.getElementById("goTopButton");

window.onscroll = function() {
    checkForPosition()
};

function checkForPosition() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
    {
        goTopButton.style.display = "block";
    }
    else
    {
        goTopButton.style.display = "none";
    }
}

function goTopPage() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

/* Animation of the .dev text */
const logoDesc = document.querySelector('.logo-desc i');

logoDesc.addEventListener('animationiteration', () => {
    let randomColor = Math.floor(Math.random() * 7);
    let availableColors = [0, 30, 60, 120, 240, 270, 300];

    logoDesc.style.setProperty('--customHue', availableColors[randomColor].toString());
});