let vehiclestatus = document.querySelector('.vehicle-status');
let vehiclestatusdot = document.querySelector('.vehicle-status-dot');
let vehiclestatustext = document.querySelector('.vehicle-status-text');

vehiclestatus.onclick = function () {
    vehiclestatusdot.classList.toggle('translate-x-full')
    vehiclestatusdot.classList.toggle('bg-red-700')
    vehiclestatusdot.classList.toggle('bg-green-700')
    vehiclestatustext.innerText = 'Habilitado'
}