let vehiclestatus = document.querySelector('.vehicle-status');
let dataedit = document.querySelector('.data_edit');
let dataeditsave = document.querySelector('.data_edit_save');
let dataeditcancel = document.querySelector('.data_edit_cancel');
let filenamep = document.querySelector('.filenamep');
let vehiclestatusdot = document.querySelector('.vehicle-status-dot');
let vehiclestatustext = document.querySelector('.vehicle-status-text');


let nptid = document.getElementById("npt_id");
let nptplate = document.getElementById("npt_plate");
let nptowner = document.getElementById("npt_owner");
let nptmodel = document.getElementById("npt_model");
let nptstatus = document.getElementById("npt_status");
let warning = document.querySelector('.warning');
let warningaccept = document.querySelector('.warning-accept');
let warningcancel = document.querySelector('.warning-cancel');

dataedit.onclick = function () {
    dataedit.classList.toggle('opacity-0')
    dataedit.classList.toggle('invisible')
    dataeditsave.classList.toggle('opacity-0')
    dataeditsave.classList.toggle('invisible')
    dataeditcancel.classList.toggle('opacity-0')
    dataeditcancel.classList.toggle('invisible')

    nptplate.disabled = false;
    nptowner.disabled = false;
    nptmodel.disabled = false;
    nptstatus.disabled = false;

    if (nptstatus.checked == true) {
        vehiclestatusdot.classList.remove('bg-zinc-700')
        vehiclestatusdot.classList.remove('bg-red-700')
        vehiclestatusdot.classList.add('bg-green-700')
    } else {
        vehiclestatusdot.classList.remove('bg-zinc-700')
        vehiclestatusdot.classList.add('bg-red-700')
        vehiclestatusdot.classList.remove('bg-green-700')
    }
}

dataeditcancel.onclick = function () {
    dataedit.classList.toggle('opacity-0')
    dataedit.classList.toggle('invisible')
    dataeditsave.classList.toggle('opacity-0')
    dataeditsave.classList.toggle('invisible')
    dataeditcancel.classList.toggle('opacity-0')
    dataeditcancel.classList.toggle('invisible')

    nptid.disabled = true;
    nptplate.disabled = true;
    nptowner.disabled = true;
    nptmodel.disabled = true;
    nptstatus.disabled = true;
    vehiclestatusdot.classList.add('bg-zinc-700')
}

dataeditsave.onclick = function () {
    warning.classList.toggle('invisible')
    warning.classList.toggle('opacity-0')
}

warningcancel.onclick = function () {
    warning.classList.toggle('invisible')
    warning.classList.toggle('opacity-0')
}

warningaccept.onclick = function () {
    warning.classList.toggle('invisible')
    warning.classList.toggle('opacity-0')
}

vehiclestatus.onclick = function () {
    if (nptstatus.disabled == false) {
        if (nptstatus.checked == true) {
            nptstatus.checked = false;
            vehiclestatustext.innerText = 'Deshabilitado'
            vehiclestatusdot.classList.remove('translate-x-full')
            vehiclestatusdot.classList.add('bg-red-700')
            vehiclestatusdot.classList.remove('bg-green-700')
        } else {
            nptstatus.checked = true;
            vehiclestatustext.innerText = 'Habilitado'
            vehiclestatusdot.classList.add('translate-x-full')
            vehiclestatusdot.classList.remove('bg-red-700')
            vehiclestatusdot.classList.add('bg-green-700')
        }
    }
}

function getFileData(myFile) {
    var file = myFile.files[0];
    var filename = file.name;
    filenamep.innerText = filename
}