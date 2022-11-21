min = Math.ceil(111111);
max = Math.floor(999999);
let randomnumber = Math.floor(Math.random() * (max - min) + min);


let checknumber = document.querySelector('.check-randomnumber');
let recovercodeinput = document.querySelector('.recover-code-input');


let cards = document.querySelector('.cards');
let recoverlink = document.querySelector('.recover-link');
let recovercancel = document.querySelector('.recover-cancel');
let recovercontinue = document.querySelector('.recover-continue');
let recoveronline = document.querySelector('.recover-button-online');
let recoverlocal = document.querySelector('.recover-button-local');
let recovermethodcancel = document.querySelector('.recover-method-cancel');
let recoverocalinput = document.querySelector('.recover-local-input');
let recoverlocalcancel = document.querySelector('.recover-local-cancel');
let recoverlocalcontinue = document.querySelector('.recover-local-continue');
let recoveremailinput = document.querySelector('.recover-email-input');
let recoveronlinecancel = document.querySelector('.recover-online-cancel');
let recoveronlinecontinue = document.querySelector('.recover-online-continue');
let recovercodecancel = document.querySelector('.recover-code-cancel');
let recovercodecontinue = document.querySelector('.recover-code-continue');
let recovernewpw = document.querySelector('.recover-newpw');
let recovernewpwconfirm = document.querySelector('.recover-newpw-confirm');
let recovernewpasswordcancel = document.querySelector('.recover-new-password-cancel');
let recovernewpasswordcontinue = document.querySelector('.recover-new-password-continue');
let resendemail = document.querySelector('.resend-email');
let recoveridtype = document.querySelector('.recover-id-type');
let recoveridinput = document.querySelector('.recover-id-input');
let recovererrorx = document.querySelector('.recover-error-x');
let recovererrorlabel = document.querySelector('.recover-error-label');
let recoverlocalerrorx = document.querySelector('.recover-local-error-x');
let recoverlocalerrorlabel = document.querySelector('.recover-local-error-label');
let recoveronlineerrorx = document.querySelector('.recover-online-error-x');
let recoveronlineerrorlabel = document.querySelector('.recover-online-error-label');
let recovercodeerrorx = document.querySelector('.recover-code-error-x');
let recovercodeerrorlabel = document.querySelector('.recover-code-error-label');
let recovernewpwerrorx1 = document.querySelector('.recover-newpw-error-x1');
let recovernewpwerrorlabel1 = document.querySelector('.recover-newpw-error-label1');
let recovernewpwerrorx2 = document.querySelector('.recover-newpw-error-x2');
let recovernewpwerrorlabel2 = document.querySelector('.recover-newpw-error-label2');

recoverlink.onclick = function () {
    cards.classList.remove('step-1')
    cards.classList.add('step-2')
    cards.classList.remove('step-3')
    cards.classList.remove('step-4')
    cards.classList.remove('step-5')
    cards.classList.remove('step-6')
    cards.classList.remove('step-7')
}

recovercancel.onclick = function () {
    cards.classList.add('step-1')
    cards.classList.remove('step-2')
    cards.classList.remove('step-3')
    cards.classList.remove('step-4')
    cards.classList.remove('step-5')
    cards.classList.remove('step-6')
    cards.classList.remove('step-7')
}

recoveridinput.onclick = function () {
    recoveridinput.onkeyup = function () {
        recovererrorx.classList.add('opacity-0')
        recovererrorlabel.classList.add('opacity-0')
        recoveridinput.classList.remove('shake')
        if (recoveridinput.value != "") {
            if (recoveridinput.validity.valid == false) {
                recovererrorx.classList.remove('opacity-0')
                recovererrorlabel.classList.remove('opacity-0')
                recoveridinput.classList.add('shake')
            }
        }
    }
}

recovercontinue.onclick = function () {
    event.preventDefault();
    if (recoveridinput.validity.valid == true) {
        cards.classList.remove('step-1')
        cards.classList.remove('step-2')
        cards.classList.add('step-3')
        cards.classList.remove('step-4')
        cards.classList.remove('step-5')
        cards.classList.remove('step-6')
        cards.classList.remove('step-7')
    } else {
        recovererrorx.classList.remove('opacity-0')
        recovererrorlabel.classList.remove('opacity-0')
        recoveridinput.classList.add('shake')
    }
}

recoveronline.onclick = function () {
    if (recoveridtype.validity.valid) {
        cards.classList.remove('step-1')
        cards.classList.remove('step-2')
        cards.classList.add('step-3')
        cards.classList.remove('step-4')
        cards.classList.remove('step-5')
        cards.classList.remove('step-6')
        cards.classList.remove('step-7')
    }
    cards.classList.remove('step-1')
    cards.classList.remove('step-2')
    cards.classList.remove('step-3')
    cards.classList.remove('step-4')
    cards.classList.add('step-5')
    cards.classList.remove('step-6')
    cards.classList.remove('step-7')
}

recoverlocal.onclick = function () {
    cards.classList.remove('step-1')
    cards.classList.remove('step-2')
    cards.classList.remove('step-3')
    cards.classList.add('step-4')
    cards.classList.remove('step-5')
    cards.classList.remove('step-6')
    cards.classList.remove('step-7')
}
recovermethodcancel.onclick = function () {
    cards.classList.remove('step-1')
    cards.classList.add('step-2')
    cards.classList.remove('step-3')
    cards.classList.remove('step-4')
    cards.classList.remove('step-5')
    cards.classList.remove('step-6')
    cards.classList.remove('step-7')
}

recoverocalinput.onclick = function () {
    recoverocalinput.onkeyup = function () {
        recoverlocalerrorx.classList.add('opacity-0')
        recoverlocalerrorlabel.classList.add('opacity-0')
        recoverocalinput.classList.remove('shake')
    }
}

recoverlocalcancel.onclick = function () {
    cards.classList.remove('step-1')
    cards.classList.remove('step-2')
    cards.classList.add('step-3')
    cards.classList.remove('step-4')
    cards.classList.remove('step-5')
    cards.classList.remove('step-6')
    cards.classList.remove('step-7')
}

recoverlocalcontinue.onclick = function () {
    if (recoverocalinput.validity.valid) {
        cards.classList.remove('step-1')
        cards.classList.remove('step-2')
        cards.classList.remove('step-3')
        cards.classList.remove('step-4')
        cards.classList.remove('step-5')
        cards.classList.remove('step-6')
        cards.classList.add('step-7')
    } else {
        recoverlocalerrorx.classList.remove('opacity-0')
        recoverlocalerrorlabel.classList.remove('opacity-0')
        recoverocalinput.classList.add('shake')
    }
}
recoveronlinecancel.onclick = function () {
    cards.classList.remove('step-1')
    cards.classList.remove('step-2')
    cards.classList.add('step-3')
    cards.classList.remove('step-4')
    cards.classList.remove('step-5')
    cards.classList.remove('step-6')
    cards.classList.remove('step-7')
}

recoveremailinput.onclick = function () {
    recoveremailinput.onkeyup = function () {
        recoveronlineerrorx.classList.add('opacity-0')
        recoveronlineerrorlabel.classList.add('opacity-0')
        recoveremailinput.classList.remove('shake')
        recoveremailinput.onblur = function () {
            if (recoveremailinput.value != "") {
                if (recoveremailinput.validity.valid == false) {
                    recoveronlineerrorx.classList.remove('opacity-0')
                    recoveronlineerrorlabel.classList.remove('opacity-0')
                    recoveremailinput.classList.add('shake')
                }
            }
        }
    }
}

recoveronlinecontinue.onclick = function () {
    if (recoveremailinput.value == 'test@gmail.com') {
        console.log("test")
        console.log(randomnumber)
        cards.classList.remove('step-1'),
            cards.classList.remove('step-2'),
            cards.classList.remove('step-3'),
            cards.classList.remove('step-4'),
            cards.classList.remove('step-5'),
            cards.classList.add('step-6'),
            cards.classList.remove('step-7')
    } else if (recoveremailinput.validity.valid) {
        document.querySelector('.verification').value = randomnumber;

        const buttonsendemail = document.querySelector('.form-button-send-email');


        Email.send({
            SecureToken: "b91fe74e-b4b0-4f88-b2e8-64667525c353",
            To: recoveremailinput.value,
            From: "megadatakit@gmail.com",
            Subject: "Codigo de recuperacion cuenta MDK",
            Body: randomnumber
        }).then(
            message => alert("Codigo enviado"),
            cards.classList.remove('step-1'),
            cards.classList.remove('step-2'),
            cards.classList.remove('step-3'),
            cards.classList.remove('step-4'),
            cards.classList.remove('step-5'),
            cards.classList.add('step-6'),
            cards.classList.remove('step-7'),
            console.log(randomnumber)
        );
    } else {
        recoveronlineerrorx.classList.remove('opacity-0')
        recoveronlineerrorlabel.classList.remove('opacity-0')
        recoveremailinput.classList.add('shake')
    }
}

recovercodeinput.onclick = function () {
    recovercodeinput.onkeyup = function () {
        recovercodeerrorx.classList.add('opacity-0')
        recovercodeerrorlabel.classList.add('opacity-0')
        recovercodeinput.classList.remove('shake')
        recovercodeinput.onblur = function () {
            if (recovercodeinput.value != "") {
                if (recovercodeinput.validity.valid == false) {
                    recovercodeerrorlabel.innerText = "(0-9) 6 Digitos"
                    recovercodeerrorx.classList.remove('opacity-0')
                    recovercodeerrorlabel.classList.remove('opacity-0')
                    recovercodeinput.classList.add('shake')
                }
            }
        }
    }
}

resendemail.onclick = function () {


    document.querySelector('.verification').value = randomnumber;

    const buttonsendemail = document.querySelector('.form-button-send-email');


    Email.send({
        SecureToken: "b91fe74e-b4b0-4f88-b2e8-64667525c353",
        To: recoveremailinput.value,
        From: "megadatakit@gmail.com",
        Subject: "reenvio de codigo de recuperacion cuenta MDK",
        Body: randomnumber
    }).then(
        message => alert("Codigo enviado"),
        console.log(randomnumber)
    );
}

recovercodecancel.onclick = function () {
    cards.classList.remove('step-1')
    cards.classList.remove('step-2')
    cards.classList.remove('step-3')
    cards.classList.remove('step-4')
    cards.classList.add('step-5')
    cards.classList.remove('step-6')
    cards.classList.remove('step-7')
}

recovercodecontinue.onclick = function () {
    if (recovercodeinput.value == randomnumber) {
        cards.classList.remove('step-1')
        cards.classList.remove('step-2')
        cards.classList.remove('step-3')
        cards.classList.remove('step-4')
        cards.classList.remove('step-5')
        cards.classList.remove('step-6')
        cards.classList.add('step-7')
    } else {
        console.log("no")
        console.log(recovercodeinput.value)
        console.log(randomnumber)


        recovercodeerrorlabel.innerText = "Codigo Incorrecto"
        recovercodeerrorx.classList.remove('opacity-0')
        recovercodeerrorlabel.classList.remove('opacity-0')
        recovercodeinput.classList.add('shake')
    }

}

recovernewpw.onclick = function () {
    recovernewpw.onkeyup = function () {
        recovernewpwerrorx1.classList.add('opacity-0')
        recovernewpwerrorlabel1.classList.add('opacity-0')
        recovernewpw.classList.remove('shake')
        recovernewpw.onblur = function () {
            if (recovernewpw.value != "") {
                if (recovernewpw.validity.valid == false) {
                    recovernewpwerrorlabel1.innerText = "Contraseña insegura (minimo 8 digitos)"
                    recovernewpwerrorx1.classList.remove('opacity-0')
                    recovernewpwerrorlabel1.classList.remove('opacity-0')
                    recovernewpw.classList.add('shake')
                }
            }
        }
    }
}

recovernewpwconfirm.onclick = function () {
    recovernewpwconfirm.onkeyup = function () {
        recovernewpwerrorx2.classList.add('opacity-0')
        recovernewpwerrorlabel2.classList.add('opacity-0')
        recovernewpwconfirm.classList.remove('shake')
        recovernewpwconfirm.onblur = function () {
            if (recovernewpw.value != recovernewpwconfirm.value) {
                recovernewpwerrorlabel2.innerText = "Las contraseñas no concuerdan"
                recovernewpwerrorx2.classList.remove('opacity-0')
                recovernewpwerrorlabel2.classList.remove('opacity-0')
                recovernewpwconfirm.classList.add('shake')
            }
        }
    }
}


recovernewpasswordcancel.onclick = function () {
    cards.classList.remove('step-1')
    cards.classList.remove('step-2')
    cards.classList.add('step-3')
    cards.classList.remove('step-4')
    cards.classList.remove('step-5')
    cards.classList.remove('step-6')
    cards.classList.remove('step-7')
}

recovernewpasswordcontinue.onclick = function () {
    if (recovernewpw.validity.valid == false) {
        recovernewpwerrorlabel1.innerText = "Datos invalidos"
        recovernewpwerrorx1.classList.remove('opacity-0')
        recovernewpwerrorlabel1.classList.remove('opacity-0')
        recovernewpw.classList.add('shake')
    }
    if (recovernewpwconfirm.validity.valid == false) {
        recovernewpwerrorlabel2.innerText = "Datos invalidos"
        recovernewpwerrorx2.classList.remove('opacity-0')
        recovernewpwerrorlabel2.classList.remove('opacity-0')
        recovernewpwconfirm.classList.add('shake')
    }
    if (recovernewpw.validity.valid & recovernewpwconfirm.validity.valid) {
        if (recovernewpw.value == recovernewpwconfirm.value) {
            cards.classList.add('step-1')
            cards.classList.remove('step-2')
            cards.classList.remove('step-3')
            cards.classList.remove('step-4')
            cards.classList.remove('step-5')
            cards.classList.remove('step-6')
            cards.classList.remove('step-7')
        } else {
            console.log("contraseñas diferentes")
        }
    } else {
        console.log('Datos invalidos')
    }

}