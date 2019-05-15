window.addEventListener('DOMContentLoaded', function() {
    var previousButton = document.querySelector('.previous');
    var nextButton = document.querySelector('.next');
    var slider = document.querySelector('.carousel');
    var slyderElems = slider.querySelectorAll('img');
    var i;
    var visible = slyderElems[0];

    

    nextButton.addEventListener('click', function(e){
        if(visible.nextSibling === null) {
            visible.style.display = 'none';
            visible = slyderElems[0];
            visible.style.display = 'block';
        } else {
            visible.style.display = 'none';
            visible = visible.nextSibling;
            visible.style.display = 'block';
        }
    })
    previousButton.addEventListener('click', function(e){
        if(visible.previousSibling === null) {
            visible.style.display = 'none';
            visible = slyderElems[2];
            visible.style.display = 'block';
        } else {
            visible.style.display = 'none';
            visible = visible.previousSibling;
            visible.style.display = 'block';
        }
    })
});