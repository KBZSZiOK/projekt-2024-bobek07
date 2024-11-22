const text = document.getElementById('movingText');
const screenWidth = window.innerWidth; 
const textWidth = text.offsetWidth;    

let position = -textWidth; 

function animateText() {
    position += 2; 
    text.style.left = position + 'px';

    if (position > screenWidth) {
        position = -textWidth; 
    }

    requestAnimationFrame(animateText); 
}

window.addEventListener('load', animateText);