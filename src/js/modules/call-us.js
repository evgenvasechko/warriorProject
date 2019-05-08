window.addEventListener('DOMContentLoaded', function() {
        var callUsBtn = document.querySelector('#call-us');
        var callUsForm = document.querySelector('#call-us-form');
        var callUsField = document.querySelectorAll('input');
        var callUsLabel = document.querySelectorAll('label');
        var callUsClose = document.querySelector('.close');
        var indexPage = document.querySelector('body');
        var scrolled;
        var i;

        window.onscroll = function() {
            scrolled = window.pageYOffset || document.documentElement.scrollTop;
        }
    
        callUsBtn.addEventListener('click', function(e) {
            callUsForm.style.display = 'block';
            callUsForm.style.top = scrolled + 100 + 'px';
            document.body.style.overflow = "hidden";
            //indexPage.classList.add('darked');
        });

        callUsClose.addEventListener('click', function(e) {
            callUsForm.style.display = 'none';
            document.body.style.overflow = "";
            //indexPage.classList.remove('darked');
        });

        for (var i = 0; i < callUsField.length; i++) {
            callUsField[i].addEventListener('focus', function(){
                this.nextElementSibling.classList.add('focus');
            })
        }
});