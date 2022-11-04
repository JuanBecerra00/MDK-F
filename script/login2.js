min = Math.ceil(111111);
max = Math.floor(999999);
let randomnumber = Math.floor(Math.random() * (max - min) + min);


let checknumber = document.querySelector('.check-randomnumber');
let checkrn = document.querySelector('.checkrn');


let cards = document.querySelector('.cards');
let recoverlink = document.querySelector('.recover-link');
let recovercancel = document.querySelector('.recover-cancel');
let recovercontinue = document.querySelector('.recover-continue');
let recoveronline = document.querySelector('.recover-button-online');
let recoverlocal = document.querySelector('.recover-button-local');
let recovermethodcancel = document.querySelector('.recover-method-cancel');
let recoverquestioninput = document.querySelector('.recover-question-input');
let recoverlocalcancel = document.querySelector('.recover-local-cancel');
let recoverlocalcontinue = document.querySelector('.recover-local-continue');
let recoveremailinput = document.querySelector('.recover-email-input');
let recoveronlinecancel = document.querySelector('.recover-online-cancel');
let recoveronlinecontinue = document.querySelector('.recover-online-continue');
let recovercodecancel = document.querySelector('.recover-code-cancel');
let recovercodecontinue = document.querySelector('.recover-code-continue');
let recovernewpw = document.querySelector('.recover-new-pw');
let recovernewpwconfirm = document.querySelector('.recover-new-pw-confirm');
let recovernewpasswordcancel = document.querySelector('.recover-new-password-cancel');
let recovernewpasswordcontinue = document.querySelector('.recover-new-password-continue');
let resendemail = document.querySelector('.resend-email');
let recoveridtype = document.querySelector('.recover-id-type');
let recoveridinput = document.querySelector('.recover-id-input');
let errorcontainer = document.querySelector('.error-container');
let errortext = document.querySelector('.error-text');

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

recovercontinue.onclick = function () {
    if (recoveridtype.validity.valid == true & recoveridinput.validity.valid == true) {
        cards.classList.remove('step-1')
        cards.classList.remove('step-2')
        cards.classList.add('step-3')
        cards.classList.remove('step-4')
        cards.classList.remove('step-5')
        cards.classList.remove('step-6')
        cards.classList.remove('step-7')
    }else{
        errortext.innerText = "Datos invalidos"
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
    if (recoverquestioninput.validity.valid) {
        cards.classList.remove('step-1')
        cards.classList.remove('step-2')
        cards.classList.remove('step-3')
        cards.classList.remove('step-4')
        cards.classList.remove('step-5')
        cards.classList.remove('step-6')
        cards.classList.add('step-7')
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
    if (checkrn.value == randomnumber) {
        cards.classList.remove('step-1')
        cards.classList.remove('step-2')
        cards.classList.remove('step-3')
        cards.classList.remove('step-4')
        cards.classList.remove('step-5')
        cards.classList.remove('step-6')
        cards.classList.add('step-7')
    } else {
        console.log("no")
        console.log(checkrn.value)
        console.log(randomnumber)
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
    }else {
        console.log('Datos invalidos')
    }

}