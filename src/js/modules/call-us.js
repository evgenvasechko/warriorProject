window.addEventListener('DOMContentLoaded', function() {
        var callUsBtn = document.querySelector('#call-us');
        var callUsForm = document.querySelector('#call-us-form');
        var callUsField = document.querySelectorAll('input');
        var callUsLabel = document.querySelectorAll('label');
        var callUsClose = document.querySelector('.close');
        var i;
    
        callUsBtn.addEventListener('click', function(e) {
            callUsForm.style.display = 'block';
        });

        callUsClose.addEventListener('click', function(e) {
            callUsForm.style.display = 'none';
        });

        for (var i = 0; i < callUsField.length; i++) {
            callUsField[i].addEventListener('focus', function(){
                this.nextElementSibling.classList.add('focus');
            })
        }
});