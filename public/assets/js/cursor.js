/*
    Mouse animation
 */
let innerCursor = document.querySelector('.inner-cursor')
function moveCursor(e) {
    let x = e.clientX
    let y = e.clientY
    innerCursor.style.left = `${x}px`
    innerCursor.style.top = `${y}px`
}
let linksNav = Array.from(document.querySelectorAll('.point-nav'))
linksNav.forEach((link) =>{
    link.addEventListener('mouseover', () =>{
        innerCursor.classList.add('grow')
    })
    link.addEventListener('mouseleave', () =>{
        innerCursor.classList.remove('grow')
    })
})
//Point-mail
let email = document.querySelector('.point-mail')
email.addEventListener('mouseover', () => { innerCursor.classList.add('grow') })
email.addEventListener('mouseleave', () => { innerCursor.classList.remove('grow') })
//Fin point-mail

//Btn-taff
let btnTaff = document.querySelector('.btn-taf')
btnTaff.addEventListener('mouseover', () => { innerCursor.classList.add('grow') })
btnTaff.addEventListener('mouseleave', () => { innerCursor.classList.remove('grow') })
//Fin btn-taff
window.addEventListener('mousemove', moveCursor)

const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll(".point-nav");
window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= sectionTop - sectionHeight / 3) {
            current = section.getAttribute("id");
        }
    });
});
