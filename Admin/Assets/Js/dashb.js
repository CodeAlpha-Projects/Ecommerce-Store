const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");

menuBtn.addEventListener('click', () =>{  
    sideMenu.style.display = 'block';
})


closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})


// Change theme

themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
}) 



// Display Aside


 const displayAside = document.getElementById('display-aside');
 const closeAside = document.getElementById('close-aside');
 closeAside.style.display = 'none';


displayAside.addEventListener('click', (e) =>{
    sideMenu.style.display = 'block';
    closeAside.style.display = 'block';
    displayAside.style.display = 'none';
});


closeAside.addEventListener('click', (e) =>{
    sideMenu.style.display = 'none';
    closeAside.style.display = 'none';
    displayAside.style.display = 'block';
});


