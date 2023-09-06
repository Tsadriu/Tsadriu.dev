window.onload = function () {
    const setAge = () => {
        const birthDate = new Date('2000-03-25');
        const todayDate = new Date();
        let age = todayDate.getFullYear() - birthDate.getFullYear();
        const month = todayDate.getMonth() - birthDate.getMonth();
        const day = todayDate.getDate() - birthDate.getDate();

        if (month < 0 || (month === 0 && todayDate.getDate() < birthDate.getDate())) {
            age--;
        }

        document.getElementById('age').textContent = age;
    }

    setAge();
}

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

// Initialize hue
logoDesc.style.setProperty('--customHue', '0');

// Interval to increment hue
setInterval(() => {
    let currentHue = parseInt(logoDesc.style.getPropertyValue('--customHue'));
    let newHue = (currentHue + 10) % 360; // change hue value gradually.

    logoDesc.style.setProperty('--customHue', newHue);
}, 475);