window.addEventListener('DOMContentLoaded', function() {
    var closeModal = document.querySelector('.close')
    var previousButton = document.querySelector('.previous');
    var nextButton = document.querySelector('.next');
    var slider = document.querySelector('.carousel');
    var slyderElems = slider.querySelectorAll('img');
    var i;
    var visible = slyderElems[0];
    var sellUnit = document.querySelector('.sell-unit');
    var readMore = document.querySelectorAll('.read-more');

    window.onscroll = function() {
        scrolled = window.pageYOffset || document.documentElement.scrollTop;
    }

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

    for(var j=0; j<readMore.length; j++) {
        readMore[j].addEventListener('click', function(e){
            sellUnit.style.display = 'block';
            sellUnit.style.top = scrolled + 100 + 'px';
        })
    }

    closeModal.addEventListener('click', function(e){
        sellUnit.style.display = 'none';
    })
    
});