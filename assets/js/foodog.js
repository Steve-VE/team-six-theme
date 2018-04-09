function scrollUp(){
    console.log("scroll up !");
    window.scrollTo(0, 0);
}


/* // Correctif pour le "flou" sur les images (BUG pour le moment !)
window.onload = function(){
    let images = document.getElementsByTagName("img");

    for(let i=0; i < images.length; i++){
        let width = images[i].width;
        images[i].style.width = width + "px";
    }
};//*/