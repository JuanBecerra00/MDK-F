let userid = document.querySelector('.form-id');
let formpw = document.querySelector('.form-pw');
let xid = document.querySelector('.error-x-id')
let xpw = document.querySelector('.error-x-pw');
let eyes = document.querySelector('.error-eyes');
let loginbutton = document.querySelector('.form-button-login');
let errorid = document.querySelector('.error-message-id')
let errorpw = document.querySelector('.error-message-pw')
userid.onclick = function () {
    userid.onkeyup = function () {
        userid.classList.remove('shake')
        xid.classList.add('opacity-0')
        errorid.classList.add('opacity-0')
        eyes.classList.remove('error-visible')
        if (userid.validity.valid) {
            userid.classList.add('shake')
            xid.classList.remove('opacity-0')
            errorid.classList.remove('opacity-0')
            eyes.classList.add('error-visible')
        }
    }
}
formpw.onclick = function () {
    formpw.onkeyup = function () {
        formpw.classList.remove('shake')
        xpw.classList.add('opacity-0')
        errorpw.classList.add('opacity-0')
        eyes.classList.remove('error-visible')
    }
    formpw.onblur = function () {
        if (formpw.validity.valid==false) {
            if (formpw.value==""){

            }
            else{
            formpw.classList.add('shake')
            xpw.classList.remove('opacity-0')
            errorpw.classList.remove('opacity-0')
            eyes.classList.add('error-visible')
            }
        }
    }
}


loginbutton.onclick = function() {
    if(userid.value==""){
        userid.classList.add('shake')
        xid.classList.remove('opacity-0')
        eyes.classList.add('error-visible')
    }
    if(formpw.value==""){
        formpw.classList.add('shake')
        xpw.classList.remove('opacity-0')
        eyes.classList.add('error-visible')
    }
}