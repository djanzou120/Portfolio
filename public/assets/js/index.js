$(document).ready(() => {
    setTimeout(()=>{
        gsap.from([".salutation", ".full-name", ".job", ".text-description"], { visibility:0 ,opacity: 0, duration: 1, y: 20, ease: 'strong.inOut'});
        gsap.from([".line"], {visibility: 0, opacity: 0, duration: 3, y: 90});
        gsap.from([".point-nav"], {visibility: 0, opacity: 0, x: -10, stagger: 0.2, ease: 'strong.inOut', duration: 2});
        gsap.from([".point-social"], {visibility: 0, opacity: 0, duration: 1, y: 50, stagger: 0.5});
        gsap.from([".point-mail"], {visibility: 0, opacity: 0, duration: 2,  ease: 'strong.inOut', stagger:1});
    }, 6998);
})

let linkMenu = document.querySelectorAll('.link-menu')
let menu = document.getElementById("menu");

function openLink(){
    linkMenu.forEach((link)=>{
        link.addEventListener("click", () => {
            let btn = document.getElementById('inputMenu')
            if(btn.checked == true){
                btn.checked = false;
            }
        })
    })
};
openLink()