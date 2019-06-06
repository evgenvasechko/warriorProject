// Модуль представляет из себя переменную, которой присвоено значение самовызывающейся анонимной функции
// Функция возвращает объект, предоставляющий публичный API для работы с модулем

import $ from 'jquery'
import { TSCallSignatureDeclaration } from 'babel-types';
window.$ = $
window.addEventListener('DOMContentLoaded', function() {
    //variables for modal of sell-unit
    var closeModal = document.querySelector('.close-modal');
    var previousButton = document.querySelector('.previous');
    var nextButton = document.querySelector('.next');
    var slider = document.querySelector('.carousel');
    var slyderElems = slider.querySelectorAll('img');
    var visible = slyderElems[0];
    var sellUnit = document.querySelector('.sell-unit');
    var readMore = document.querySelectorAll('.read-more');
    var callUsBtn = document.querySelector('#call-us');
    var limitOfPictures = slyderElems.length - 1;
    //Variables for call-us form
    var callUsForm = document.querySelector('#call-us-form');
    var callUsField = document.querySelectorAll('input');
    var callUsLabel = document.querySelectorAll('label');
    var callUsClose = document.querySelector('.close');
    var indexPage = document.querySelector('body');
    var scrolled;
    var i;
    //Variables for gallery modal
    var galleryModal = document.querySelector(".gallery-modal");
    var galleryClose = document.getElementsByClassName("gallery-modal__close")[0];
    var img = document.querySelectorAll(".gallery-image");
    var modalImg = document.getElementById("gallery-modal-image");
    var previousImage = document.querySelector(".gallery-modal__prev");
    var nextImage = document.querySelector(".gallery-modal__next");
    var g;
    var thisPicture;
    var newStart;
    var endStart;

    window.onscroll = function() {
        scrolled = window.pageYOffset || document.documentElement.scrollTop;
    }

    console.log(limitOfPictures);


// Script for sell-unit modal


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
            visible = slyderElems[limitOfPictures];
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
            sellUnit.style.top = scrolled + 20 + 'px';
        })
    }
    
    closeModal.addEventListener('click', function(e){
        sellUnit.style.display = 'none';
    })


// Script for call-us form


    callUsBtn.addEventListener('click', function(e) {
        callUsForm.style.display = 'block';
        callUsForm.style.top = scrolled + 100 + 'px';
        document.body.style.overflow = "hidden";
    });

    callUsClose.addEventListener('click', function(e) {
        callUsForm.style.display = 'none';
        document.body.style.overflow = "";
    });

    for (var i = 0; i < callUsField.length; i++) {
        callUsField[i].addEventListener('focus', function(){
            this.nextElementSibling.classList.add('focus');
        })
    }

// Script for gallery modal window

    for(g=0; g<img.length; g++) {
        img[g].addEventListener('click', function(e){
            galleryModal.style.display = "block";
            modalImg.src = this.src;
            thisPicture = this;
        })
        newStart = img[0];
        endStart = img[img.length - 1];
    }

    previousImage.addEventListener('click', function(e){
        if(thisPicture.previousSibling === null) {
            thisPicture = endStart;
            modalImg.src = thisPicture.src;
        } else {
            thisPicture = thisPicture.previousSibling;
            modalImg.src = thisPicture.src;
        }
    })

    nextImage.addEventListener('click', function(e){
        if(thisPicture.nextSibling === null) {
            thisPicture = newStart;
            modalImg.src = thisPicture.src;
        } else {
            thisPicture = thisPicture.nextSibling;
            modalImg.src = thisPicture.src;
        }
    })

    galleryClose.addEventListener('click', function(e){
        galleryModal.style.display = "none";
    })


//Script for gallery 'load more'
    
    var loadMoreButton = document.querySelector('.gallery-images__load-more');
    
});