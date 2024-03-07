let pageSplash = document.getElementsByClassName("page-splash-cont")[0]

setTimeout(()=>{
    pageSplash.style.opacity = 0;
    pageSplash.style.transition = "opacity 1s ease-in-out";
    setTimeout(()=>{pageSplash.style.display="none"},1000)
},3000);
