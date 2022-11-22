let theme = document.querySelector(".theme");
let mobiletheme = document.querySelector(".mobile-theme");

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
mobiletheme.onclick = function () {
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
