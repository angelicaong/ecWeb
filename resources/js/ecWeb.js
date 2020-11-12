// Navbar JS
const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.new-nav-area');
    const navLinks = document.querySelectorAll('.new-nav-area li');
    const navLogoutBtn = document.querySelectorAll('.nav-logout-btn');

    
    burger.addEventListener('click',()=> {
        //Toggle Nav
        nav.classList.toggle('nav-active');

        //Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });

        // //Animate Links
        // navLogoutBtn.forEach((link, index) => {
        //     if (link.style.animation) {
        //         link.style.animation = '';
        //     } else {
        //     link.style.animation = `navLinkFade 0.5s ease forwards ${index }s`;
        //     }
        // });

        //Burger animation
        burger.classList.toggle('toggle');
        
    });

}

navSlide();