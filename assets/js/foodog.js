function scrollUp(){
    let scrollPosition = document.documentElement.scrollTop;
    let scrollSpeed = scrollPosition / 50;

    var intervalID = window.setInterval(function(){
        if(scrollPosition > 0){
            scrollPosition -= scrollSpeed;
            if(scrollPosition < 0){
                scrollPosition = 0;
            }

            window.scrollTo(0, scrollPosition);
        }
        else{
            clearInterval(intervalID);
        }
    }, 10);
}


/* // Correctif pour le "flou" sur les images (BUG pour le moment !)
window.onload = function(){
    let images = document.getElementsByTagName("img");

    for(let i=0; i < images.length; i++){
        let width = images[i].width;
        images[i].style.width = width + "px";
    }
};//*/


