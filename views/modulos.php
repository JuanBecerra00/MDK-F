<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
    <link rel="shortcut icon" href="/resources/img/logo.ico" type="image/x-icon">
    <script>
        let html = document.querySelector('html');
        let x = document.cookie;

        window.onload = function () {
            if (x == "dark") {
                html.classList.add('dark')

            } else {
                html.classList.remove('dark')
            }
        };


    </script>
    <link href="/css/output.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .ion {
            font-size: 26px;
        }

        .ion-small {
            font-size: 20px;
        }

        .ion-card {
            font-size: 82px;
        }

        .ion-separator {
            font-size: 30px;
        }

        .header-submenu {
            z-index: -1;
            transition: transform .5s, width .5s, height .5s, padding .5s, border-radius .5s;
            transition-delay: 1.2s, .7s, .5s, .7s, .7s;
            font-size: 14px;
        }

        .header-submenu.active {
            width: 120px;
            height: 140px;
            border-radius: 5px;
            transform: translateY(80px);
            transition-delay: 0.2s, .5s, .7s, .5s, .5s;
        }

        .arrowtop {
            left: calc(50% - 8px);
        }

        .header-submenu.active .arrowtop {
            top: -5px;
        }

        .header-submenu li {
            transition-delay: calc(0s + var(--i));
        }

        .header-submenu.active li {
            opacity: 1;
            visibility: visible;
            transition: .5s;
            transition-delay: calc(1s + var(--i));
        }

        .header-submenu.active a:hover {
            transition-delay: 0s;
            transition: .5s;
            background: #221e1e;
            color: #b81d28;
        }

        .header-submenu-button.active {
            animation: pop .5s;
        }

        @keyframes pop {
            10% {
                transform: scale(.9);
            }
        }

        .header-submenu-button-locker {
            transition: .7s;
        }

        .header-submenu-button-locker.active {
            width: 133px;
            height: 50px;
            transition: 0;
        }

        .header-submenu-button-locker.active:hover {
            border: 1px solid #b81d28;
        }

        aside {
            transform: translateY(-46%);
            top: 50%;
            left: 50px;
        }

        aside.active .aside-label {
            opacity: 0;
            visibility: hidden;
        }

        .aside-bg {
            transform: translateY(-20px);
        }

        .aside-bg.active {
            width: 4.4rem;
        }

        .menu-toggle {
            background: #000;
            z-index: 1;
            left: 0;
        }

        @media not all and (max-width: 640px) {
            .iframe {
            width: calc(100% - 300px);
            height: calc(100% - 70px);
        }

        .iframe.active {
            width: calc(100% - 140px);
        }
        }

        aside .ion {
            font-size: 26px;
        }

        aside ul li a {
            font-size: 20px;
        }

        aside ul li a:hover {
            color: #b81d28;
        }

        .dark aside ul li a:hover {
            color: #221e1e;
        }

        aside ul li a:hover .ion {
            color: #b81d28;
        }

        .dark aside ul li a:hover .ion {
            color: #221e1e;
        }

        a.select {
            color: #221e1e;
        }

        .dark a.select {
            color: #ffffff;
        }

        a.select .ion {
            color: #221e1e;
            animation: pop .5s;
        }

        .dark a.select .ion {
            color: #ffffff;
            animation: pop .5s;
        }

        a.select:hover {
            color: #b81d28;
        }

        .dark a.select:hover {
            color: #b81d28;
        }

        a.select:hover .ion {
            color: #b81d28;
        }

        .dark a.select:hover .ion {
            color: #b81d28;
        }

        .ion-menu.active {
            left: 0;
            transform: rotate(0);
            transition: .5s;
        }

        .selected {
            height: 50px;
            transition: .5s;
        }

        .selected.active {
            width: 62px;
            transition: .5s;
        }

        .aside-separator {
            width: 180px;
            margin-top: 25px;
            margin-bottom: 25px;
            transition: .5s;
        }

        .aside-separator.active {
            width: 27px;
            margin-top: 50px;
            transition: .5s;
        }

        .aside-ul li a {
            height: 40px;
            width: 100%;
            z-index: 20;
        }

        aside ul li .ion {}

        .selected.users {
            transform: translateY(0px);
        }

        .selected.clients {
            transform: translateY(4.9333rem);
        }

        .selected.cars {
            transform: translateY(9.89rem);
        }

        .selected.buy {
            transform: translateY(14.7999rem);
        }

        .selected.storage {
            transform: translateY(19.9rem);
        }

        .selected.sell {
            transform: translateY(26.5rem);
        }

        .selected-deco-top {
            transform: translateY(-100%);
        }

        .selected-deco-bottom {
            transform: translateY(100%);
        }

        .selected-deco-top-bg {
            transform: translateY(-90%);
        }

        .selected-deco-bottom-bg {
            transform: translateY(90%);
        }
    </style>
</head>

<body class="bg-white dark:bg-darkgrayd duration-500 max-sm:h-screen overflow-hidden">
    <header class="bg-grayd fixed max-sm:static w-screen flex px-20
            max-sm:px-5 place-content-between items-center z-50 overflow-visible
            h-20 max-sm:overflow-hidden">
        <div class="flex align-center rounded-2xl p-1.5 duration-500
                text-white">


            <ion-icon name="add"
                class="header-aside-x ion text-white duration-200 ion-module rotate-45 absolute sm:invisible sm:opacity-0 max-sm:opacity-0">
            </ion-icon>
            <ion-icon name="menu" class="header-aside text-[24px]
                    sm:w-0 sm:invisible sm:h-0"></ion-icon>
            <a href="index.html"><img src="/resources/img/logo.svg" alt="X" class="header-logo h-8 max-sm:w-0 max-sm:invisible
                        max-sm:h-0" tabindex="1"></a>
        </div>
        <a href="index.html"><img src="/resources/img/logo.svg" alt="X" class="header-logo h-8 sm:w-0 sm:invisible sm:h-0"
                tabindex="1"></a>
        <ul class="header-modules flex text-white items-center text-header">
            <li class="max-sm:w-0 max-sm:invisible max-sm:h-0">
                <a href="" tabindex="1">
                    <div class="flex align-center rounded-2xl p-1.5
                            duration-500 hover:bg-redd">
                        <ion-icon name="help" class="ion-small"></ion-icon>
                    </div>
                </a>
            </li>
            <li class="max-sm:w-0 max-sm:invisible max-sm:h-0">
                <div class="flex align-center rounded-2xl p-1.5 p-0
                        rotate-90 ion-separator">
                    <ion-icon name="remove-outline" class=""></ion-icon>
                </div>
            </li>
            <li class="submenu-li ">
                <div class="header-submenu-div relative flex
                        justify-center">
                    <button class="header-submenu-button flex p-1.5 max-sm:p-0
                            duration-500 flex items-center gap-2 max-sm:gap-0
                            border border-grayd rounded sm:hover:border-redd
                            cursor-pointer px-3" tabindex="1">

                        <ion-icon name="person" style="font-size: 24px;" class="header-user max-sm:opacity-1">
                        </ion-icon>
                        <ion-icon name="add"
                            class="header-user-x ion text-white duration-200 ion-module rotate-45 absolute sm:opacity-0 max-sm:opacity-0">
                        </ion-icon>
                        <div class="max-sm:invisible max-sm:w-0">
                            <strong>Juan Becerra</strong>
                            <p>Administrador</p>
                        </div>
                    </button>
                    <button class="header-submenu-button-locker absolute -ml-2
                            opacity-0 border-grayd rounded" tabindex="1">
                    </button>
                    <div class="header-submenu max-sm:invisible absolute w-7
                            h-7 bg-grayd rounded-2xl ease-in-out shadow-custom " tabindex="1">
                        <div class="arrowtop absolute w-4 h-4 bg-grayd top-1
                                rotate-45 rounded-sm duration-500 delay-700
                                ease-in-out flex">
                        </div>
                        <ul class="header-submenu-ul flex flex-col m-5">
                            <li style="--i:0s;" class="submenu-profile
                                    opacity-0 invisible duration-500">
                                <a href="#" class="flex items-center mb-2.5
                                        duration-500" tabindex="1">
                                    <span class="w-7 mr-2.5 flex
                                            justify-center">
                                        <ion-icon name="person" class="ion"></ion-icon>
                                    </span> <span for="">Perfil</span>
                                </a>
                            </li>
                            <li style="--i:0.1s;" class="submenu-settings
                                    opacity-0 invisible duration-500">
                                <a href="#" class=" flex items-center mb-2.5
                                        duration-500" tabindex="1">
                                    <span class="w-7 mr-2.5 flex
                                            justify-center">
                                        <ion-icon name="cog" class="ion"></ion-icon>
                                    </span> <span for="">Ajustes</span>
                                </a>
                            </li>
                            <li style="--i:0.2s;" class="submenu-exit
                                    opacity-0 invisible duration-500">
                                <a href="login.html" class="flex
                                        items-center mb-2.5 duration-500" tabindex="1">
                                    <span class="w-7 mr-2.5 flex
                                            justify-center">
                                        <ion-icon name="exit" class="ion"></ion-icon>
                                    </span> <span for="">Salir</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="ml-2">
                    </div>
            </li>
        </ul>
    </header>
    
    <aside
        class="max-sm:invisible max-sm:opacity-0 max-sm:w-0 max-sm:h-0 aside active -z-20 text-white w-56 absolute p-2 duration-500">

        <div class="menu-toggle absolute">
            <ion-icon name="chevron-forward"
                class="ion ion-menu active text-white absolute text-white duration-500 p-3 rounded-l-3xl ml-2.5 left-39 rotate-180 hover:text-redd">
            </ion-icon>
            </ion-icon><br>
        </div>
        <div
            class=" -z-10 left-0 aside-bg active w-57 absolute rounded-xl h-aside bg-grayd p-0 duration-500 duration-500 dark:bg-darkredd">
        </div>
        <div
            class="selected active rounded-l-3xl top-23.25 absolute bg-white duration-500 dark:bg-darkgrayd w-selected">
            <div class="selected-deco-top-bg w-3 h-3 bg-white duration-500 absolute right-0 dark:bg-darkgrayd"></div>
            <div
                class="selected-deco-top w-5 h-5 bg-grayd absolute right-0 rounded-br-xl duration-500 dark:bg-darkredd">
            </div>
            <div
                class="selected-deco-bottom-bg w-3 h-3 bg-white duration-500 absolute bottom-0 right-0 dark:bg-darkgrayd">
            </div>
            <div
                class="selected-deco-bottom w-5 h-5 bg-grayd absolute bottom-0 right-0 rounded-tr-xl rounded-br-xl duration-500 dark:bg-darkredd">
            </div>
        </div>
        <ul class="aside-ul mt-20 p-3">
            <li class="h-6 flex mb-14">
                <a href="/views/modules/usuarios/Usuarios.php" class="module-users select" target="display">
                    <ion-icon name="person" class="ion text-white duration-200 mt-1.5 ion-module"></ion-icon>
                    <label class="aside-label relative bottom-1 ml-5 duration-300 cursor-pointer">Usuarios</label>
                </a>
            </li>
            <li class="h-6 flex mb-14">
                <a href="/views/modules/clientes/clientes.html" class="module-clients" target="display">
                    <ion-icon name="people" class="ion text-white duration-200 mt-1.5 ion-module"></ion-icon>
                    <label class="aside-label relative bottom-1 ml-5 duration-300 cursor-pointer">Clientes</label>
                </a>
            </li>
            <li class="h-6 flex mb-14">
                <a href="/views/modules/vehiculos/vehiculos.html" class="module-cars" target="display">
                    <ion-icon name="car" class="ion text-white duration-200 mt-1.5 ion-module"></ion-icon>
                    <span class="aside-label relative bottom-1 ml-5 duration-300 cursor-pointer">Vehiculos</span>
                </a>
            </li>
            <li class="h-6 flex mb-14">
                <a href="/views/modules/proveedores/Proveedores.html" class="module-buy" target="display">
                    <ion-icon name="cart" class="ion text-white duration-200 mt-1.5 ion-module"></ion-icon>
                    <label class="aside-label relative bottom-1 ml-5 duration-300 cursor-pointer">Proveedores</label>
                </a>
            </li>
            <li class="h-6 flex mb-14">
                <a href="/views/modules/insumos/insumos.html" class="module-storage" target="display">
                    <ion-icon name="file-tray-full" class="ion text-white duration-200 mt-1.5 ion-module"></ion-icon>
                    <label class="aside-label relative bottom-1 ml-5 duration-300 cursor-pointer">Insumos</label>
                </a>
            </li>
            <hr class="aside-separator active">
            <li class="h-6 flex mb-14">
                <a href="/views/modules/facturacion/facturacion.html" target="display" class="module-sell">
                    <ion-icon name="cash" class="ion text-white duration-200 mt-1.5 ion-module ion-money"></ion-icon>
                    <label class="aside-label relative bottom-1 ml-5 duration-300 cursor-pointer">Facturacion</label>
                </a>
            </li>
        </ul>
        <div
            class="theme  cursor-pointer -ml-2 bg-grayd w-themew h-themew rounded-xl flex justify-center items-center dark:bg-darkredd">
            <span href="#" class="flex items-center justify-center duration-200">
                <ion-icon name="moon" class="moon ion opacity-0 dark:opacity-100"></ion-icon>
                <ion-icon name="sunny-outline"
                    class="sun ion absolute duration-200 opacity-100 rotate-180 dark:opacity-0 dark:-rotate-180">
                </ion-icon>
            </span>
        </div>
    </aside>
    <iframe src="/views/modules/usuarios/Usuarios.php"
        class="iframe max-sm:h-[calc(100vh-165px)]
        max-sm:h-[calc(100vh-165px)] max-sm:w-screen sm:mt-12 active sm:-z-10 absolute sm:right-0 duration-500 bg-transparent" name="display"></iframe>


        <div class="aside-mobile max-sm:h-[calc(100vh-165px)] max-sm:w-screen
                    max-sm:bg-grayd max-sm:-translate-x-full absolute
                    duration-200 p-5 flex flex-col place-content-between sm:translate-y-[1000%]">
            <ul class="mobile-aside-ul flex flex-col justify-center text-white gap-5">
                <a href="/views/modules/usuarios/Usuarios.html" class="mobile-module-users flex items-center" target="display">
                    <li class="h-12 flex items-center">
                        <ion-icon name="person" class="ion text-white
                                        duration-200 ion-module"></ion-icon>

                        <label class="aside-label relative ml-5
                                        duration-300 cursor-pointer">Usuarios</label>
                    </li>
                </a>


                <a href="/views/modules/clientes//clientes.html" class="mobile-module-clients" target="display">
                    <li class="h-12 flex items-center">
                        <ion-icon name="people" class="ion text-white
                                    duration-200 ion-module"></ion-icon>
                        <label class="aside-label relative ml-5
                                    duration-300 cursor-pointer">Clientes</label>
                    </li>
                </a>
                <a href="/views/modules/vehiculos/vehiculos.html" class="mobile-module-cars" target="display">
                    <li class="h-12 flex items-center">
                        <ion-icon name="car" class="ion text-white
                                duration-200 ion-module"></ion-icon>
                        <span class="aside-label relative ml-5
                                duration-300 cursor-pointer">Vehiculos</span>
                    </li>

                </a>
                <a href="/views/modules/proveedores.html" class="mobile-module-buy" target="display">
                    <li class="h-12 flex items-center">
                        <ion-icon name="cart" class="ion text-white
                                    duration-200 ion-module"></ion-icon>
                        <label class="aside-label relative ml-5
                                    duration-300 cursor-pointer">Proveedores</label>
                    </li>
                </a>
                <a href="/views/insumos.html" class="mobile-module-storage" target="display">
                    <li class="h-12 flex items-center">
                        <ion-icon name="file-tray-full" class="ion
                                    text-white duration-200 ion-module"></ion-icon>
                        <label class="aside-label relative ml-5
                                    duration-300 cursor-pointer">Insumos</label>
                    </li>
                </a>
                <hr class="mobile-aside-separator active w-full">
                <a href="/views/facturacion.html" target="display" class="mobile-module-sell">
                    <li class="h-12 flex items-center">
                        <ion-icon name="cash" class="ion text-white
                                    duration-200 ion-module ion-money"></ion-icon>
                        <label class="aside-label relative ml-5
                                    duration-300 cursor-pointer">Facturacion</label>
                    </li>
                </a>
                
            </ul>
            <div class="h-12 flex mobile-theme items-center text-white">
                <ion-icon name="moon" class="moon ion opacity-0 dark:opacity-100"></ion-icon>
                <ion-icon name="sunny-outline"
                    class=" sun ion absolute left-5 duration-200 opacity-100 rotate-180 dark:opacity-0 dark:-rotate-180">
                </ion-icon>
                <label class="aside-label relative ml-5
                                duration-300 cursor-pointer">Tema</label>
            </div>
        </div>
        <div class="user-mobile max-sm:h-[calc(100vh-165px)] max-sm:w-screen
                    max-sm:bg-grayd max-sm:translate-x-full absolute
                    duration-200 p-5 flex flex-col place-content-between sm:translate-y-[1000%]">
            <ul class="mobile-aside-ul flex flex-col justify-center text-white gap-5">
                <a href="/views/Usuarios.html" class="mobile-module-users flex items-center">
                    <li class="h-12 flex items-center">
                        <ion-icon name="person" class="ion text-white
                                        duration-200 ion-module"></ion-icon>

                        <label class="aside-label relative ml-5
                                        duration-300 cursor-pointer">Perfil</label>
                    </li>
                </a>


                <a href="/views/settings.html" class="mobile-module-clients" target="display">
                    <li class="h-12 flex items-center">
                        <ion-icon name="cog-outline" class="ion text-white
                                    duration-200 ion-module"></ion-icon>
                        <label class="aside-label relative ml-5
                                    duration-300 cursor-pointer">Ajustes</label>
                    </li>
                </a>
                
            </ul>
            <a href="/views/login.html">
                <div class="h-12 flex items-center text-white mb-0">
                    <ion-icon name="log-out" class="ion"></ion-icon>

                    <label class="aside-label relative ml-5
                                duration-300 cursor-pointer">Salir</label>
                </div>
            </a>
        </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="/script/aside.js"></script>
    <script src="/script/script.js"></script>
    <script src="/script/dark.js"></script>

    <footer class="absolute bottom-0 bg-grayd w-full text-white h-8">
        <ul class="absolute flex gap-5 inset-y-0 w-full place-content-between px-12 max-sm:px-5">
            <li class="sm:invisible sm:opacity-0"><a href="" class="align-middle hover:underline">Ayuda</a></li>
            <div class="flex gap-5">
                <li><a href="" class="align-middle hover:underline">Empresa</a></li>
                <li><a href="" class="align-middle hover:underline">Creditos</a></li>
            </div>
        </ul>
    </footer>
</body>

</html>