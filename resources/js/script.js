let containerNavbar = document.querySelector('.container-navbar');
let navbar = document.querySelector('.navbar')


// console.log(window);

window.addEventListener( 'scroll', ()=>{
    let scrolled = window.scrollY;
    // console.log(scrolled);
    
    if (scrolled > 0) {
        containerNavbar.classList.add('sticky-top');
        navbar.style.backgroundColor = 'var(--green-light)';
       
        logo.style.transform = 'rotateY(180deg)';
    } else {
        containerNavbar.classList.remove('sticky-top');
        navbar.style.backgroundColor = 'var(--green-dark)';
       
        logo.style.transform = 'rotateY(0deg)';
    }
    
})

//catturo il pulsante per attivare la dark-mode
let btnDarkMode = document.querySelector('#btnDarkMode');

let isClicked = true;

btnDarkMode.addEventListener('click', ()=>{

    if(isClicked){ //dark mode

        document.documentElement.style.setProperty('--light', 'rgb(20, 20, 20)');
        document.documentElement.style.setProperty('--dark', 'rgb(245, 245, 245)');

        btnDarkMode.innerHTML = ` <i class="fa-solid fa-sun fa-2x"></i> `;

        isClicked = false;

        //impostare una coppia chiave valore nel local storage
        localStorage.setItem('mode', 'dark');
    } else { //light mode

        document.documentElement.style.setProperty('--light', 'rgb(245, 245, 245)');
        document.documentElement.style.setProperty('--dark', 'rgb(20, 20, 20)');

        btnDarkMode.innerHTML = `<i class="fa-solid fa-moon fa-2x"></i>`;

        isClicked = true;

        localStorage.setItem('mode', 'light');
    }
}) 

//leggere un valore di una chiave all'interno del local storage
let mode = localStorage.getItem('mode');
console.log(mode);

if (mode === 'dark') {
    document.documentElement.style.setProperty('--light', 'rgb(20, 20, 20)');
    document.documentElement.style.setProperty('--dark', 'rgb(245, 245, 245)');
    btnDarkMode.innerHTML = ` <i class="fa-solid fa-sun fa-2x"></i> `;
    isClicked = false;
} else {
    document.documentElement.style.setProperty('--light', 'rgb(245, 245, 245)');
    document.documentElement.style.setProperty('--dark', 'rgb(20, 20, 20)');
    btnDarkMode.innerHTML = `<i class="fa-solid fa-moon fa-2x"></i>`;
    isClicked = true;
}
