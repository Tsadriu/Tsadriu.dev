window.addEventListener('scroll', (event) => {
    let scrollPosition = window.scrollY;
    let headerElement = document.querySelector('#header');

    if(scrollPosition > headerElement.offsetHeight){
        headerElement.style.background = "black";
    } else {
        headerElement.style.background = "linear-gradient(to top right, rgba(0,0,0,0.3) 30%, rgba(0,0,0,1) 90%), url('assets/images/bg.png')";
    }
});