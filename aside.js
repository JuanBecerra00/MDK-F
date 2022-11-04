let menutoggle = document.querySelector('.ion-menu');
let iframe = document.querySelector('.iframe');
let aside = document.querySelector('.aside');
let asidebg = document.querySelector('.aside-bg');
let asideseparator = document.querySelector('.aside-separator');
let selected = document.querySelector('.selected');
let selectedasub = document.querySelector('.selected-a-sub');
let selectedbsub = document.querySelector('.selected-b-sub');





let moduleusers = document.querySelector('.module-users');
let moduleclients = document.querySelector('.module-clients');
let modulecars = document.querySelector('.module-cars');
let modulebuy = document.querySelector('.module-buy');
let modulestorage = document.querySelector('.module-storage');
let modulesell = document.querySelector('.module-sell');


menutoggle.onclick = function () {
    menutoggle.classList.toggle('active')
    iframe.classList.toggle('active')
    aside.classList.toggle('active')
    asidebg.classList.toggle('active')
    asideseparator.classList.toggle('active')
    selected.classList.toggle('active')
    selectedasub.classList.toggle('active')
    selectedbsub.classList.toggle('active')
}
moduleusers.onclick = function () {
    moduleusers.classList.add('select')
    moduleclients.classList.remove('select')
    modulecars.classList.remove('select')
    modulebuy.classList.remove('select')
    modulestorage.classList.remove('select')
    modulesell.classList.remove('select')

    selected.classList.add('users')
    selected.classList.remove('clients')
    selected.classList.remove('cars')
    selected.classList.remove('buy')
    selected.classList.remove('storage')
    selected.classList.remove('sell')
}
moduleclients.onclick = function () {
    moduleusers.classList.remove('select')
    moduleclients.classList.add('select')
    modulecars.classList.remove('select')
    modulebuy.classList.remove('select')
    modulestorage.classList.remove('select')
    modulesell.classList.remove('select')

    selected.classList.remove('users')
    selected.classList.add('clients')
    selected.classList.remove('cars')
    selected.classList.remove('buy')
    selected.classList.remove('storage')
    selected.classList.remove('sell')
}
modulecars.onclick = function () {
    moduleusers.classList.remove('select')
    moduleclients.classList.remove('select')
    modulecars.classList.add('select')
    modulebuy.classList.remove('select')
    modulestorage.classList.remove('select')
    modulesell.classList.remove('select')

    selected.classList.remove('users')
    selected.classList.remove('clients')
    selected.classList.add('cars')
    selected.classList.remove('buy')
    selected.classList.remove('storage')
    selected.classList.remove('sell')
}
modulebuy.onclick = function () {
    moduleusers.classList.remove('select')
    moduleclients.classList.remove('select')
    modulecars.classList.remove('select')
    modulebuy.classList.add('select')
    modulestorage.classList.remove('select')
    modulesell.classList.remove('select')

    selected.classList.remove('users')
    selected.classList.remove('clients')
    selected.classList.remove('cars')
    selected.classList.add('buy')
    selected.classList.remove('storage')
    selected.classList.remove('sell')
}
modulestorage.onclick = function () {
    moduleusers.classList.remove('select')
    moduleclients.classList.remove('select')
    modulecars.classList.remove('select')
    modulebuy.classList.remove('select')
    modulestorage.classList.add('select')
    modulesell.classList.remove('select')

    selected.classList.remove('users')
    selected.classList.remove('clients')
    selected.classList.remove('cars')
    selected.classList.remove('buy')
    selected.classList.add('storage')
    selected.classList.remove('sell')
}
modulesell.onclick = function () {
    moduleusers.classList.remove('select')
    moduleclients.classList.remove('select')
    modulecars.classList.remove('select')
    modulebuy.classList.remove('select')
    modulestorage.classList.remove('select')
    modulesell.classList.add('select')

    selected.classList.remove('users')
    selected.classList.remove('clients')
    selected.classList.remove('cars')
    selected.classList.remove('buy')
    selected.classList.remove('storage')
    selected.classList.add('sell')
}