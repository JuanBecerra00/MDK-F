let listselectall = document.querySelector('.list-select-all');
let checks = document.querySelectorAll(".listcheck");

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
        /*
    
        if (uncheck>=1){
            deletebutton.disabled = false
            deletebutton.classList.remove('bg-grayd')
            deletebutton.classList.add('bg-redd')
            deletebutton.classList.add('text-white')
            deletebutton.classList.remove('text-gray-500')
            deletebutton.classList.add('hover:shadow-list')
            deletebutton.classList.add('dark:bg-darkredd')
        }else{
            deletebutton.classList.add('bg-grayd')
            deletebutton.classList.add('text-gray-500')
            deletebutton.classList.remove('hover:shadow-list')
            deletebutton.disabled = true
            deletebutton.classList.remove('dark:bg-darkredd')
            deletebutton.classList.remove('bg-redd')
        }*/
    }
    

let checkarray = [];
function checkdbrow(e){
    var id = "form" + e.id;

    if (checkarray.includes(id)){
        checkarray.delete(id);
    }else{
        let nuevaLongitud = checkarray.push(id);
        console.log(checkarray.size);
        console.log("No esta");
    }
    }