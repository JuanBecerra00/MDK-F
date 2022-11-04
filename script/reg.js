let regbutton = document.querySelector('.reg-button');
let reg = document.querySelector('.reg');
let edit = document.querySelector('.edit');
let regbg = document.querySelector('.reg-bg');
let cancelregbutton = document.querySelector('.cancel-reg-button');
let canceleditbutton = document.querySelector('.cancel-edit-button');
let listselectall = document.querySelector('.list-select-all');
let editbutton = document.querySelector('.edit-button');
let exportbutton = document.querySelector('.export-button');
let exportformats = document.querySelector('.export-formats');
let mostusedcontainer = document.querySelector('.most-used-container');

let checks = document.querySelectorAll(".listcheck");

regbutton.onclick = function () {
    reg.classList.toggle('active')
    regbg.classList.toggle('active')
}
regbg.onclick = function () {
    reg.classList.remove('active')
    edit.classList.remove('active')
    regbg.classList.remove('active')
}
cancelregbutton.onclick = function () {
    reg.classList.toggle('active')
    regbg.classList.toggle('active')
}
canceleditbutton.onclick = function () {
    edit.classList.toggle('active')
    regbg.classList.toggle('active')
}
editbutton.onclick = function () {
    if (editbutton.disabled == true) {

    }else{
        edit.classList.add('active')
        regbg.classList.add('active')
    }
    
}
canceleditbutton.onclick = function () {
    edit.classList.toggle('active')
    regbg.classList.toggle('active')
}
listselectall.onclick = function () {
var uncheck=0;
    for (var i=0; i < checks.length; i++) {
        if (checks[i].checked == false) {
            for (var i=0; i < checks.length; i++) {
            checks[i].checked = true;
        }
        }else{
            uncheck++
        }
    }
    if (uncheck==checks.length){
        for (var i=0; i < checks.length; i++) {
            checks[i].checked = false;
            listselectall.classList.remove('rotating')
            listselectall.classList.add('no-rotating')
        }
    }else{
        listselectall.classList.add('rotating')
        listselectall.classList.remove('no-rotating')
    }
    
}
function checkchecks(){
    var uncheck=0;
    for (var i=0; i < checks.length; i++) {
        if (checks[i].checked != false) {
            uncheck++
        }
    }
    if (uncheck==checks.length){
        listselectall.classList.add('rotating')
        listselectall.classList.remove('no-rotating')
    }else{
        listselectall.classList.remove('rotating')
        listselectall.classList.add('no-rotating')
    }

    if (uncheck==1){
        editbutton.disabled = false
        editbutton.classList.remove('bg-grayd')
        editbutton.classList.add('bg-redd')
        editbutton.classList.add('text-white')
        editbutton.classList.remove('text-gray-500')
        editbutton.classList.add('hover:shadow-list')
        editbutton.classList.add('dark:bg-darkredd')
    }else{
        editbutton.classList.add('bg-grayd')
        editbutton.classList.add('text-gray-500')
        editbutton.classList.remove('hover:shadow-list')
        editbutton.disabled = true
        editbutton.classList.remove('dark:bg-darkredd')
        editbutton.classList.remove('bg-redd')
    }
}

exportbutton.onclick = function () {
    exportformats.classList.toggle('active')
    mostusedcontainer.classList.toggle('active')
}

