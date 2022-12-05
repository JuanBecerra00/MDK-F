let regbutton = document.querySelector('.reg-button');
let reg = document.querySelector('.reg');
let edit = document.querySelector('.edit');
let regbg = document.querySelector('.reg-bg');
let cancelregbutton = document.querySelector('.cancel-reg-button');
let canceleditbutton = document.querySelector('.cancel-edit-button');
let editbutton = document.querySelector('.edit-button');
let deletebutton = document.querySelector('.delete-button');
let exportbutton = document.querySelector('.export-button');
let exportformats = document.querySelector('.export-formats');
let mostusedcontainer = document.querySelector('.most-used-container');
let userstable = document.querySelector('.users-table');


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


exportbutton.onclick = function () {
    exportformats.classList.toggle('active')
    mostusedcontainer.classList.toggle('active')
    userstable.classList.toggle('max-sm:h-[40vh]')
    userstable.classList.toggle('max-sm:h-[50vh]')
}

function deletedbdata(){
    console.log(checkarray.size);
    for (let i = 0; i < checkarray.size; i++) {
        var id = checkarray[i];
        console.log(id);
        document.getElementById(id).submit();
    }
}