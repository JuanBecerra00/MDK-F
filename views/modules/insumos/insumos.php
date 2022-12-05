<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/output.css" rel="stylesheet">
    <script>
        let html = document.querySelector('html');
        var checkCookie = function() {
            return function() {
                let x = document.cookie;
                if (x == "dark") {
                    html.classList.add('dark')
                } else {
                    html.classList.remove('dark')
                }
            };
        }();
        window.setInterval(checkCookie, 1);
    </script>

    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow:hidden;
        }
            .ion-title{
                color:black;
                font-size:65px;
            }
            .ion-submenu{
                font-size:20px;
            }
            .ion-medium{
                font-size:30px;
            }
            .text-title{
                font-size:60px;
            }
            .text-cardtitle{
                font-size:40px;
            }
            .text-subtitle{
                font-size:40px;
            }
            .list-submenu{
                font-size:16px;
            }
            .most-used{
                font-size:26px
            }
            .reg{
                transition:.5s;
                transform:translatex(100%);
    box-shadow:0 3px 10px rgba(0, 0, 0, 0.6);
            }
            .reg.active{
                transition:.5s;
                transform:translatex(0%);
            }
            .edit{
                transition:.5s;
                transform:translatex(100%);
    box-shadow:0 3px 10px rgba(0, 0, 0, 0.6);
            }
            .edit.active{
                transition:.5s;
                transform:translatex(0%);
            }
            .reg-bg{
                transition:backdrop-filter .5s, transform 0s;
                transition-delay:0s, .5s;
                transform:translateX(100%);
    background: rgba(0, 0, 0, 0);
            }
            .reg-bg.active{
                transition:.5s;
    backdrop-filter: blur(5px);
                transform:translatex(0%);
                transition:backdrop-filter .5s, transform 0s;
            }
            .deleted{
                transform: translateX(90%);
            }
        .reg-back {
            transform: translateX(-30px);
        }

        .list-select-all.no-rotating {
            animation: norotating .5s forwards;
            transform: rotate(180deg);
        }

        @keyframes norotating {
            50% {
                transform: rotate(-20deg);
            }

            75% {
                transform: rotate(20deg);
            }

            100% {
                transform: rotate(0deg);
            }

        }

        .list-select-all.rotating {
            animation: rotating .5s forwards;
        }

        @keyframes rotating {
            50% {
                transform: rotate(200deg);
            }

            75% {
                transform: rotate(160deg);
            }

            100% {
                transform: rotate(180deg);
            }
        }

        .lbl-search {
            transform: translateX(-8rem);
        }

        .npt-search:focus~.lbl-search {
            transform: translateX(-9.5rem);
        }

        .npt-search:not(:placeholder-shown)~.lbl-search {
            transform: translateX(-9.5rem);
        }

        .export-button.active {
            animation: pop 1s;
        }

        @keyframes pop {
            10% {
                transform: scale(.9);
            }
        }

        .export-formats.active {
            height: 4rem;
        }

        .export-formats.active * {
            opacity: 1;
        }

        .most-used-container.active {
            height: 27rem;
        }
    </style>
</head>

<body class="bg-transparent dark:text-white">

    <div class="absolute reg-bg h-screen w-screen z-10"></div>
    <div class="reg h-full w-152 absolute mt-0 p-0 z-30 right-0 bg-white dark:bg-darkgrayl  max-sm:block max-sm:justify-center max-sm:overflow-y-scroll max-sm:overflow-x-hidden max-sm:w-screen">
        <div class="p-10 max-sm:p-5">
            <div class="text-7xl flex mt-10 items-center justify-center max-sm:block max-sm:mt-0 max-sm:text-center">
                <ion-icon name="file-tray-full" class="ion-title mr-6 dark:text-white max-sm:mr-0 max-sm:text-[4rem]"></ion-icon>
                <p class="text-cardtitle">Registro de Insumos</p>
            </div>
            <form class="mt-14 flex justify-center max-sm:block max-sm:mx-16 max-sm:mt-4 max-sm:items-center max-sm:w-screen">
                <div class="mb-12 mr-16 max-sm:mr-0 max-sm:mb-0">
                    <label for="name-pro">Nombre del producto</label><br>
                    <input type="text" id="name_pro" placeholder="Camaro" name="reg_name_pro" class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4">
                    <br>
                    <label for="amount">Cantidad</label><br>
                    <input type="text" id="amount" placeholder="5" pattern=".{8,}" maxlength="7" name="reg_amount" class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4">
                    <label for="value_uni">Valor unitario</label><br>
                    <input type="number" id="value_uni" required name="reg_value_uni" class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4 ">
                </div>
                <div class="">
                    <label for="number_fact"> N° de factura</label><br>
                    <input type="text" id="number_fact" pattern=".{8,}" maxlength="13" required name="reg_number_fact" class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4"><br>
                    <label for="date_buy"> Fecha de compra</label><br>
                    <input type="date" id="date_buy" pattern=".{8,}" maxlength="13" required name="reg_date_buy" class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4"><br>
                </div>
            </form>
            <div class="flex justify-center gap-6 right-10 absolute bottom-16 max-sm:static max-sm:gap-2 max-sm:mb-3 max-sm:mt-3">
                <button class="cancel-reg-button bg-grayd text-white w-20 h-10 rounded">Cancelar</button>
                <button class="bg-redd dark:bg-darkredd text-white w-20 h-10 rounded">Continuar</button>
            </div>
        </div>
    </div>
    <div class="edit h-full w-152 absolute mt-0 p-0 z-30 right-0 bg-white dark:bg-darkgrayl  max-sm:block max-sm:justify-center max-sm:overflow-y-scroll max-sm:overflow-x-hidden max-sm:w-screen">
        <div class="p-10 max-sm:p-5">
            <div class="text-7xl flex mt-10 items-center justify-center max-sm:block max-sm:mt-0 max-sm:text-center">
                <ion-icon name="create" class="ion-title mr-6 dark:text-white max-sm:mr-0 max-sm:text-[4rem]"></ion-icon>
                <p class="text-cardtitle">Editar Insumos</p>
            </div>
            <form class="mt-14 flex justify-center max-sm:block max-sm:mx-16 max-sm:mt-4 max-sm:items-center max-sm:w-screen">
                <div class="mb-12 mr-16 max-sm:mr-0 max-sm:mb-0">
                    <label for="name_pro">Nombre del producto</label><br>
                    <input type="text" id="name_pro" placeholder="Camaro" name="edit_name_pro" class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4">
                    <br>
                    <label for="amount">Cantidad</label><br>
                    <input type="text" id="amount" placeholder="5" pattern=".{8,}" maxlength="7" name="edit_amount" class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4">
                    <br>
                    <label for="value_uni">Valor unitario</label>
                    <input type="number" id="value_uni" required name="edit_value_uni" class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4"><br>
                    <label for="number_fact"> N° de factura</label>
                </div>
                <div class="">
                    <input type="text" id="number_fact" pattern=".{8,}" maxlength="13" required name="edit_number_fact" class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4"><br>
                    <label for="date_buy"> Fecha de compra</label><br>
                    <input type="date" id="date_buy" pattern=".{8,}" maxlength="13" required name="edit_date_buy" class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4"><br>
                </div>
            </form>
            <div class="flex justify-center gap-6 right-10 absolute bottom-16 max-sm:static max-sm:gap-2 max-sm:mb-3 max-sm:mt-3">
                <button class="delete-edit-button bg-grayd text-white w-24 h-10 rounded mr-52 max-sm:mr-4">Desactivar</button>
                <button class="cancel-edit-button bg-grayd text-white w-20 h-10 rounded">Cancelar</button>
                <button class="bg-redd dark:bg-darkredd text-white w-20 h-10 rounded">Continuar</button>
            </div>
        </div>
    </div>
    <div class="mx-16 pt-16">
        <div class="">
            <div class="text-7xl text-black-100 flex items-center">
                <ion-icon name="file-tray-full" class="ion-title text-black-100 mr-12 dark:text-white"></ion-icon>
                <p class="text-title">Insumos</p>
            </div>
        </div>


        <div class="stable flex justify-center">
            <div class="mt-8 h-160 flex">
                <div class="p-7 shadow-xl mr-5 rounded-3xl bg-white dark:bg-darkgrayl">
                    <form action="" class="search-form h-10 flex w-full justify-end items-center mb-3 pr-5">
                        <input type="search" class="w-40 h-5 border border-gray-300 rounded outline-0 npt-search py-3 dark:bg-darkgrayl" id="listsearch" placeholder=" ">
                        <label for="listsearch" class="lbl-search mr-3 flex items-center duration-500 absolute">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </form>
                    <table class="overflow-y-scroll h-custom">
                        <thead>
                            <tr class="flex">
                                <th class="list-select-all flex justify-center items-center mr-5 duration-500">
                                    <ion-icon name="caret-down" class="rounded-2xl p-1 -m-1 cursor-pointer hover:text-redd">
                                    </ion-icon>
                                </th>
                                <th class="w-16 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    ID</th>
                                <th class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    Nombre</th>
                                <th class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    Cantidad</th>
                                <th class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    Valor Unitario</th>
                                <th class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    Total</th>
                                <th class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    N° Factura</th>
                                <th class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    Fecha de compra</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $server = "localhost";
                            $user = "root";
                            $password = "";
                            $db = "mdk";
                            $conexion = new mysqli($server, $user, $password, $db);
                            if ($conexion->connect_error) {
                                die("Conexion fallida: " . $conexion->connect_error);
                            }

                            if (isset($_POST['reg_nombre'])) {
                                $product_reg_name = $_POST['pro_reg_name'];
                                $product_reg_amount = $_POST['pro_reg_amount'];
                                $product_reg_value_uni = $_POST['pro_reg_value'];
                                $product_reg_facture = $_POST['pro_reg_fact_num'];
                                $product_reg_date = $_POST['pro_reg_date'];
                                $sql = "Select * from users";
                                $resultado = $conexion->query($sql);
                                $db_datacant = $resultado->num_rows;
                                $cant = $db_datacant + 1;
                                $sql = "INSERT INTO users(id,name_pro, amount, value_uni, number_fact, date_buy)
VALUES('$cant', '$reg_name_pro', '$reg_amount', '$reg_value_uni', '$reg_number_fact', '$reg_date_buy' 0 )";
                                if ($conexion->query($sql) === true) {
                                } else {
                                    die("Error al insertar los datos: " . $conexion->error);
                                }
                            }
                            $sql = "Select * from users";
                            $resultado = $conexion->query($sql);
                            if ($resultado->num_rows > 0){
                            while ($row = $resultado->fetch_assoc()){
                            if ($row['status']=='0'){
                                echo '<tr class="flex border-b sm:gap-15" tabindex="1">
                                    <td class="flex justify-center items-center mr-5">
                                        <input type="checkbox" class="listcheck dark:accent-darkredd"
                                            onclick="checkchecks()">
                                    </td>
                                    <td class="w-16 h-12 mr-5 rounded flex justify-center items-center text-xl">' . $row['id'] . '</td>
                                    <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">' . $row['name_pro'] . '
                                    </td>
                                    <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">' . $row['amount'] . '</td>
                                    
                                    <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">' . $row['value_uni'] . '</td>
                                    
                                    <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">' . $row['number_fact'] . ' </td>

                                    <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">' . $row['date_buy'] . ' </td>
                                    <td><ion-icon name="create" class="edit_db flex justify-center items-center h-12 w-5 textslate-500 hover:text-redd duration-200"></ion-icon></td>
                                </tr>';
                            }}}
                            $conexion->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="p-3 shadow-xl rounded-xl bg-white dark:bg-darkgrayl">
                        <div class="flex gap-2">
                            <button type="button" class="reg-button flex justify-center items-center w-28 h-12 bg-redd text-white w-20 h-10 rounded hover:shadow-list duration-200 mb-2 focus:bg-l dark:bg-darkredd">
                                <ion-icon name="add" class="ion-submenu mr-2"></ion-icon>
                                <p>Añadir</p>
                            </button>
                            <button type="button" class="edit-button flex justify-center items-center w-28 h-12 bg-grayd text-gray-500 w-20 h-10 rounded  duration-200 mb-2 focus:bg-l" disabled>
                                <ion-icon name="create-outline" class="ion-submenu mr-2"></ion-icon>
                                <p>Editar</p>
                            </button>
                        </div>
                        <div class="flex gap-2">
                            <button type="button" class="export-button reg-button flex justify-center items-center w-28 h-12 bg-redd dark:bg-darkredd text-white w-20 h-10 rounded hover:shadow-list duration-200 focus:bg-l">
                                <ion-icon name="download-outline" class="ion-submenu mr-2"></ion-icon>
                                <p>Exportar</p>
                            </button>
                            <a href="usuarios-del.html" target="display">
                                <button type="button" class="reg-button flex justify-center items-center w-28 h-12 bg-redd dark:bg-darkredd text-white w-20 h-10 rounded hover:shadow-list duration-200 focus:bg-l">
                                    <ion-icon name="trash-outline" class="ion-submenu mr-2"></ion-icon>
                                    <p>Ocultos</p>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="export-formats shadow-xl z- dark:bg-darkgrayl rounded-xl h-0 w-full mt-2 top-20 duration-500 flex justify-center items-center overflow-hidden gap-3 dark:bg-darkgrayl">
                            <button class="bg-blue-900 text-white w-16 h-10  hover:shadow-list rounded flex justify-center items-center duration-500">
                                <ion-icon name="document-text"></ion-icon>
                            </button>
                            <button class="bg-red-800 text-white w-16 h-10  hover:shadow-list rounded flex justify-center items-center duration-500">
                                <ion-icon name="print"></ion-icon>
                            </button>
                            <button class="bg-green-900 text-white w-16 h-10 hover:shadow-list rounded flex justify-center items-center duration-500">
                                <ion-icon name="stats-chart"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div class="most-used-container p-2 shadow-xl rounded-3xl h-123.2 mt-2 bg-white dark:bg-darkgrayl duration-500">
                        <p class="most-used">Mas usados</p>
                        <div class="flex justify-center mt-3">
                            <table class="overflow-y-scroll h-custom">
                                <thead>
                                    <tr class="flex gap-2">
                                        <th class="w-12 h-10 border-redd border-b flex justify-center items-center">
                                            ID</th>
                                        <th class="w-20 h-10 border-redd border-b flex justify-center items-center">
                                            Nombre</th>
                                        <th class="w-20 h-10 border-redd border-b flex justify-center items-center">
                                            Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="flex border-b gap-2">
                                        <td class="w-12 h-12 rounded flex justify-center items-center text-xl">1</td>
                                        <td class="w-20 h-12 rounded flex justify-center items-center text-xl">Aceite
                                            Motor
                                        </td>
                                        <td class="w-20 h-12 rounded flex justify-center items-center text-xl">10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script/reg.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>