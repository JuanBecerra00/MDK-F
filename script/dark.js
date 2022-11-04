let theme = document.querySelector(".theme");

theme.onclick = function () {
    if (document.cookie == "dark"){
        document.cookie = "a";
    }else{
        document.cookie = "dark";
    }
    let html = document.querySelector('html');
        let x = document.cookie;
        if (x=="dark") {
            html.classList.add('dark')
        }else{
            html.classList.remove('dark')
        }
}
