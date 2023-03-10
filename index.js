const logoDesc = document.querySelector('.logo-desc i');

logoDesc.addEventListener('animationiteration', () => {
    let randomColor = Math.floor(Math.random() * 7);
    let availableColors = [0, 30, 60, 120, 240, 270, 300];

    logoDesc.style.setProperty('--customHue', availableColors[randomColor].toString());
});

function currentTime() {
    let date = new Date();
    let hh = date.getHours();
    let mm = date.getMinutes();
    let ss = date.getSeconds();

    hh = (hh < 10) ? "0" + hh : hh;
    mm = (mm < 10) ? "0" + mm : mm;
    ss = (ss < 10) ? "0" + ss : ss;

    document.getElementById("clock").innerText = hh + ":" + mm + ":" + ss;
    setTimeout(function(){ currentTime() }, 1000);
}

currentTime();