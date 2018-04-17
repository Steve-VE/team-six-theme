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

let allPosts;


window.onload = () => {
    allPosts = document.querySelectorAll(".post");
    console.log(allPosts);

    window.setInterval(lookForPost, 10);
    lookForPost();
};



function lookForPost(){
    let screenValue = window.scrollY + (window.innerHeight * 0.9);

    for(let i = allPosts.length - 1; i >= 0; i--){
        let currentPost = allPosts[i];
        if(currentPost.offsetTop < screenValue){
            let style = window.getComputedStyle(currentPost);
            let opacity = parseFloat(style.getPropertyValue("opacity"));

            if(opacity < 1){
                opacity += 0.01;
                currentPost.setAttribute("style", "opacity: " + opacity + ";");
            }
        }
    }
}


