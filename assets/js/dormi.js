let pageSplash = document.getElementsByClassName("page-splash-cont")[0]

setTimeout(()=>{
    pageSplash.style.opacity = 0;
    pageSplash.style.transition = "opacity 1s ease-in-out";
    setTimeout(()=>{pageSplash.style.display="none"},1000)
},3000);


//MENU BTN
let body = document.getElementsByTagName('html')[0]
let hamburgerMenuStatus = 0
let hamburgerMenu = document.getElementsByClassName("hamburger-menu")[0]
let hamburgerMenuLine = document.getElementsByClassName("hamburger-menu-line")
let hamburgerMenuLineAnimation = gsap.timeline()
let mobileMenu = document.getElementsByClassName("mobile-navigation-cont")[0]
let mobileMenuItemsItems = document.getElementsByClassName("mobile-navigation-list")[0]
hamburgerMenuLineAnimation.pause()


hamburgerMenuLineAnimation.to(hamburgerMenuLine[1],{
    width:"0%",
    duration:0.25
})
hamburgerMenuLineAnimation.to(hamburgerMenuLine[0],{
    top:"50%",
    y:"50%",
    height:"3px",
    rotate:90,
    scale:0.6,
    duration:0.5,
    delay:-0.25
})
hamburgerMenuLineAnimation.to(hamburgerMenuLine[2],{
    top:"50%",
    y:"50%",
    height:"3px",
    rotate:0,
    scale:0.6,
    duration:0.5,
    delay:-0.5
})
hamburgerMenuLineAnimation.to(mobileMenu,{
    display:"block",
    opacity:1,
    delay:-0.5
})
hamburgerMenuLineAnimation.from(mobileMenuItemsItems,{
    opacity:0,
    duration:0.25
})


window.addEventListener("resize",()=>{
    hamburgerMenuLineAnimation.reverse()
    hamburgerMenuStatus = 0
    body.style.setProperty('overflow-y','visible')
})
hamburgerMenu.addEventListener('click',()=>{
    if (hamburgerMenuStatus == 0){
        hamburgerMenuLineAnimation.restart()
        hamburgerMenuStatus = 1
        body.style.setProperty('overflow-y','hidden')

    }
    else{
        if(hamburgerMenuLineAnimation.isActive()){
            hamburgerMenuLineAnimation.pause()
        }
        else{
            hamburgerMenuLineAnimation.reverse()
            hamburgerMenuStatus = 0
            body.style.setProperty('overflow-y','visible')

        }
    }
})

