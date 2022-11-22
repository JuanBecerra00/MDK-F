<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
    <link href="css/output.css" rel="stylesheet">
    <script>
        let html = document.querySelector('html');
        var checkCookie = function () {
            return function () {
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

        .export-formats.active{
            height: 4rem;
        }
        
        .export-formats.active *{
            opacity: 1;
        }
        .most-used-container.active{
            height: 27rem;
        }
    </style>
</head>

<body class="bg-transparent dark:text-white">

    <div class="absolute reg-bg h-screen w-screen z-10"></div>
    <div class="reg h-full w-152 absolute mt-0 p-0 z-30 right-0 bg-white dark:bg-darkgrayl">
        <div class="text-7xl flex justify-center items-center mt-20">
            <ion-icon name="cart" class="ion-title text-black-100 mr-6  dark:text-white"></ion-icon>
        <p class="text-cardtitle">Registro de Proveedores</p>
          </div>
          <div class="mt-14 flex justify-center">
            <div class="mb-12 mx-8">
                <form>
                    <label for="NIT">NIT</label><br>
                    <input type="text" id="NIT" pattern=".{8,}" maxlength="10" placeholder="xxxxxxxxxx" required
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd">
                    <br>
                    <label for="name-and-last">Telefono</label><br>
                    <input type="text" id="name-and-last" placeholder="XXXXXXXXXX"
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd">
                    <br>
                    <label for="name-re">Representante legal</label><br>
                    <input type="text" id="name-re" placeholder="Charles Darwin" pattern=".{8,}" maxlength="7" required
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd">
            </div>
            <div>
                <label for="cell-phone">Nombre</label><br>
                <input type="text" id="cell-phone" pattern=".{8,}" maxlength="13" placeholder="xxxxxxxxxx"
                    class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd"><br>
                <label for="correo">Correo electronico</label><br>
                <input type="email" id="correo" placeholder="ejemplo@gmail.com"
                    class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd"><br>
            </div>
        </form>
          </div>
          <div class="flex justify-center gap-6 right-10 absolute bottom-16">
            <button class="cancel-reg-button bg-grayd text-white w-20 h-10 rounded">Cancelar</button>
            <button class="bg-redd dark:bg-darkredd text-white w-20 h-10 rounded">Continuar</button>
          </div>
          </div>
    </body>
    <div class="edit h-full w-152 absolute mt-0 p-0 z-30 right-0 bg-white dark:bg-darkgrayl">
        <div class="text-7xl flex justify-center items-center mt-20">
            <ion-icon name="create" class="ion-title text-black-100 mr-6  dark:text-white"></ion-icon>
        <p class="text-cardtitle">Editar Proveedores</p>
          </div>
          <div class="mt-14 flex justify-center">
            <div class="mb-12 mx-8">
                <form>
                    <label for="NIT">NIT</label><br>
                    <input type="text" id="NIT" pattern=".{8,}" maxlength="10" placeholder="xxxxxxxxxx" required
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd">
                    <br>
                    <label for="name-and-last">Telefono</label><br>
                    <input type="text" id="name-and-last" placeholder="XXXXXXXXX"
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd">
                    <br>
                    <label for="name-re">Representante legal</label><br>
                    <input type="text" id="name-re" placeholder="Charles Darwin" pattern=".{8,}" maxlength="7"
                        required class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd">
            </div>
            <div>
                <label for="cell-phone">Nombre</label><br>
                <input type="text" id="cell-phone" pattern=".{8,}" maxlength="13" placeholder="xxxxxxxxxx"
                    class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd"><br>
                <label for="correo">Correo electronico</label><br>
                <input type="email" id="correo" placeholder="ejemplo@gmail.com"
                    class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd"><br>
                </div>
            </form>
          </div>
          <div class="flex justify-center gap-6 right-10 absolute bottom-16">
            <button class="delete-edit-button bg-grayd text-white w-24 h-10 rounded mr-52  ">Desactivar</button>
            <button class="cancel-edit-button bg-grayd text-white w-20 h-10 rounded">Cancelar</button>
            <button class="bg-redd dark:bg-darkredd text-white w-20 h-10 rounded">Continuar</button>
          </div>
          </div>

        
    </div>
    </div>
    <div class="mx-16 pt-16">
        <div class="">
            <div class="text-7xl text-black-100 flex items-center">
                <ion-icon name="cart" class="ion-title text-black-100 mr-12 dark:text-white"></ion-icon>
                <p class="text-title">Proveedores</p>
            </div>
        </div>


        <div class="stable flex justify-center">
            <div class="mt-8 h-160 flex">
                <div class="p-7 shadow-xl mr-5 rounded-3xl bg-white dark:bg-darkgrayl">
                    <form action="" class="search-form h-10 flex w-full justify-end items-center mb-3 pr-5">
                        <input type="search"
                            class="w-40 h-5 border border-gray-300 rounded outline-0 npt-search py-3 dark:bg-darkgrayl"
                            id="listsearch" placeholder=" ">
                        <label for="listsearch" class="lbl-search mr-3 flex items-center duration-500 absolute">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </form>
                    <table class="overflow-y-scroll h-custom">
                        <thead>
                            <tr class="flex gap-20">
                                <th class="list-select-all flex justify-center items-center mr-5 duration-500">
                                    <ion-icon name="caret-down"
                                        class="rounded-2xl p-1 -m-1 cursor-pointer hover:text-redd">
                                    </ion-icon>
                                </th>
                                <th
                                    class="w-16 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    NIT</th>
                                <th
                                    class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    Nombre</th>
                                <th
                                    class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    Telefono</th>
                                <th
                                    class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    Correo Electronico</th>
                                    <th
                                    class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    Representante</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $server = "localhost";
                            $user = "root";
                            $password = "";
                            $db = "mdk";
                            $conexion = new mysqli($server, $user, $password, $db);
                            if($conexion ->connect_error){
                                die("Conexion fallida: " . $conexion->connect_error);
                            }
                            
                            if (isset($_POST['reg_nombre'])){
                                $reg_id_type = $_POST['reg_id_type'];
                                $reg_id_number = $_POST['reg_id_number'];
                                $reg_job = $_POST['reg_job'];
                                $reg_nombre = $_POST['reg_nombre'];
                                $reg_phone = $_POST['reg_phone'];
                                $reg_password = $_POST['reg_password'];
                                $reg_question = $_POST['reg_question'];
                                $reg_answer = $_POST['reg_answer'];
                                $reg_email = $_POST['reg_email'];
                                $sql = "Select * from users";
                                $resultado = $conexion->query($sql);
                                $db_datacant = $resultado->num_rows;
                                $cant = $db_datacant+1;
                                $sql = "INSERT INTO users(id, name, phone, job, id_type, id_number, password, question, answer, email, status)
VALUES('$cant', '$reg_nombre', '$reg_phone', '$reg_job', '$reg_id_type', '$reg_id_number', '$reg_password', '$reg_question', '$reg_answer', '$reg_email', 0 )";

                                if ($reg_job=='A'){
                                    $cargo='Admin';
                                }elseif ($reg_job=='T'){
                                    $cargo='Trabajador';
                                }elseif ($reg_job=='M'){
                                    $cargo='Mecanico';
                                }
                                if ($conexion->query($sql) === true){
                                    
                                }else{
                                    die("Error al insertar los datos: ".$conexion->error);
                                }
                            }
                            $sql = "Select * from providers";
                            $resultado = $conexion->query($sql);

                            if ($resultado->num_rows > 0) {
                                while ($row = $resultado->fetch_assoc()) {

                                    if ($row['status'] == '0') {
                                        echo '<tr class="flex border-b sm:gap-15" tabindex="1">
                            <tr class="flex border-b gap-20">
                                <td class="flex justify-center items-center mr-5">
                                    <input type="checkbox" class="listcheck dark:accent-darkredd"
                                        onclick="checkchecks()">
                                </td>
                                <td class="w-16 h-12 mr-5 rounded flex justify-center items-center text-xl">612345</td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">Chevrolet
                                </td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">3124657984</td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">ejemplo@gmail.com</td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">Pepito</td>
                            </tr>
                            ';
                            }
                                }
                            }

                            $conexion->close();
                            ?>


                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="p-3 shadow-xl rounded-xl bg-white dark:bg-darkgrayl">
                        <div class="flex gap-2">
                            <button type="button"
                                class="reg-button flex justify-center items-center w-28 h-12 bg-redd text-white w-20 h-10 rounded hover:shadow-list duration-200 mb-2 focus:bg-l dark:bg-darkredd">
                                <ion-icon name="add" class="ion-submenu mr-2"></ion-icon>
                                <p>Añadir</p>
                            </button>
                            <button type="button"
                                class="edit-button flex justify-center items-center w-28 h-12 bg-grayd text-gray-500 w-20 h-10 rounded  duration-200 mb-2 focus:bg-l" disabled>
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
                                <button type="button"
                                class="reg-button flex justify-center items-center w-28 h-12 bg-redd dark:bg-darkredd text-white w-20 h-10 rounded hover:shadow-list duration-200 focus:bg-l">
                                <ion-icon name="trash-outline" class="ion-submenu mr-2"></ion-icon>
                                <p>Ocultos</p>
                            </button>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div
                        class="export-formats shadow-xl z- dark:bg-darkgrayl rounded-xl h-0 w-full mt-2 top-20 duration-500 flex justify-center items-center overflow-hidden gap-3 dark:bg-darkgrayl">
                        <button
                            class="bg-blue-900 text-white w-16 h-10  hover:shadow-list rounded flex justify-center items-center duration-500">
                            <ion-icon name="document-text"></ion-icon>
                        </button>
                        <button
                            class="bg-red-800 text-white w-16 h-10  hover:shadow-list rounded flex justify-center items-center duration-500">
                            <ion-icon name="print"></ion-icon>
                        </button>
                        <button
                            class="bg-green-900 text-white w-16 h-10 hover:shadow-list rounded flex justify-center items-center duration-500">
                            <ion-icon name="stats-chart"></ion-icon>
                        </button>
                    </div>
                    </div>
                    <div class="most-used-container p-2 shadow-xl rounded-3xl h-123.2 mt-2 bg-white dark:bg-darkgrayl duration-500">
                        <p class="most-used">Recientes</p>
                        <div class="flex justify-center mt-3">
                            <table class="overflow-y-scroll h-custom">
                                <thead>
                                    <tr class="flex gap-2">
                                        <th class="w-12 h-10 border-redd border-b flex justify-center items-center">
                                            NIT</th>
                                        <th class="w-20 h-10 border-redd border-b flex justify-center items-center">
                                            Nombre</th>
                                        <th class="w-20 h-10 border-redd border-b flex justify-center items-center">
                                            Telefono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="flex border-b gap-2">
                                        <td class="w-12 h-12 rounded flex justify-center items-center text-xl">612345</td>
                                        <td class="w-20 h-12 rounded flex justify-center items-center text-xl">Chevrolet
                                        </td>
                                        <td class="w-20 h-12 rounded flex justify-center items-center text-xl">3456551366</td>
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
    <script src="script/tailwind.config.js"></script>
</body>

</html>