<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/output.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
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

<body class="bg-transparent dark:text-white max-sm:w-screen max-sm:h-screen max-sm:overflow-x-clip">

    <div class="absolute reg-bg h-screen w-screen z-10"></div>
    <div
        class="reg h-screen sm:w-152 max-sm:w-screen absolute mt-0 p-0 z-30 right-0 bg-white dark:bg-darkgrayl max-sm:block max-sm:justify-center overflow-y-scroll">
        <div class="p-10">
            <div
                class="text-7xl text-black-100 flex mt-10 items-center justify-center max-sm:block max-sm:mt-11 max-sm:text-center">
                <ion-icon name="person-add" class="ion-title text-black-100 mr-6 dark:text-white max-sm:ml-2 max-sm:mr-0">
                </ion-icon>
                <p class="text-subtitle">Registro de usuarios</p>
            </div>
            <form method="post" action="Usuarios.php" class="mt-14 flex justify-center max-sm:block max-sm:mx-16 max-sm:mt-8 max-sm:text-center">
                <div class="mb-12 mr-16 max-sm:mr-1 max-sm:mb-1">
                    <label for="document" class="">Tipo de Documento</label><br>
                    <select name="reg_id_type" id="document"
                            class="mb-8 border-solid border border-black bg-transparent dark:border-white">
                        <option value="CC">Cedula de Ciudadania</option>
                        <option value="TI">Tarjeta de Identidad</option>
                        <option value="CE">Cedula de Extranjeria</option>
                        <option value="PA">Pasaporte</option>
                    </select>
                    <br>
                    <label for="n-document">Numero de documento</label><br>
                    <input type="text" id="n-document" placeholder="xxxxxxxxxx"  name="reg_id_number"
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd ">
                    <br>
                    <label for="name and last">Nombres y Apellidos</label><br>
                    <input type="text" id="name and last" placeholder="Pepito Perez" name="reg_nombre"
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd ">
                    <br>
                    <label for="Cargo">Cargo</label><br>
                    <select name="reg_job" id="Cargo" name="reg_job"
                        class="mb-8 bg-transparent border-solid border border-black dark:border-white">
                        <option value="A">Administrador</option>
                        <option value="T">Trabajador</option>
                        <option value="M">Mecánico</option>
                    </select>
                    <br>
                    <label for="phone">Telefono</label><br>
                    <input type="text" id="phone" placeholder="Pepito Perez" name="reg_phone"
                           class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd ">
                    <br>
                    <label for="email">Email</label><br>
                    <input type="text" id="email" placeholder="Pepito Perez" name="reg_email"
                           class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd ">
                    <br>
                </div>
                <div>
                    <label for="password">Contraseña</label><br>
                    <input type="password" id="password" pattern=".{8,}" maxlength="15"  name="reg_password"
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd "><br>
                    <label for="con-password"> Confirmar Contraseña</label><br>
                    <input type="password" id="con-password" pattern=".{8,}" maxlength="15"  name="reg_password2"
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd "><br>
                    <label for="question">Pregunta clave</label><br>
                    <input type="text" id="question" name="reg_question"
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd "><br>
                    <label for="answer">Respuesta</label><br>
                    <input type="text" id="answer" name="reg_answer"
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd "><br>
                </div>
        </div>

        

        <div class="flex justify-center gap-6 right-10 absolute bottom-16 max-sm:static max-sm:mb-5">
            <button type="reset" class="cancel-reg-button bg-grayd text-white w-20 h-10 rounded">Cancelar</button>
            <button type="submit" class="bg-redd dark:bg-darkredd text-white w-20 h-10 rounded">Continuar</button>
        </div>
    </div>
    </form>

    
    <div class="edit h-full max-sm:h-screen sm:w-152 max-sm:w-screen absolute mt-0 p-0 z-30 right-0 bg-white dark:bg-darkgrayl max-sm:overflow-y-scroll">
        <div class="p-10">
            <div class="text-7xl text-black-100 flex mt-10 items-center justify-center max-sm:block max-sm:mt-12 max-sm:text-center">
                <ion-icon name="create" class="ion-title text-black-100 mr-6 dark:text-white max-sm:ml-2 max-sm:mr-0"></ion-icon>
                <p class="text-subtitle">Editar usuarios</p>
            </div>
            <form class="mt-14 flex justify-center max-sm:block max-sm:mx-16 max-sm:mt-8 max-sm:text-center">
                <div class="mb-12 mx-8 max-sm:mx-2 max-sm:mb-0">
                    <label for="document">Tipo de Documento</label><br>
                    <select name="edit_id_type" id="document"
                        class="mb-8 border-solid border border-black bg-transparent dark:border-white">
                        <option value="CC">Cedula de Ciudadania</option>
                        <option value="TI">Tarjeta de Identidad</option>
                        <option value="CE">Cedula de Extranjeria</option>
                        <option value="PA">Pasaporte</option>
                    </select>
                    <br>
                    <label for="n-document">Numero de documento</label><br>
                    <input type="text" id="n-document" placeholder="xxxxxxxxxx" required
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd">
                    <br>
                    <label for="name and last">Nombres y Apellidos</label><br>
                    <input type="text" id="name and last" placeholder="Pepito Perez"
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd">
                    <br>
                    <label for="Cargo">Cargo</label><br>
                    <select name="edit_job" id="Cargo"
                        class="mb-8 bg-transparent border-solid border border-black dark:border-white">
                        <option value="A">Administrador</option>
                        <option value="T">Trabajador</option>
                        <option value="M">Mecánico</option>
                    </select>

                    <br>
                    <label for="phone">Telefono</label><br>
                    <input type="text" id="phone" placeholder="Pepito Perez" name="reg_phone"
                           class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd ">
                    <br>
                    <label for="email">Email</label><br>
                    <input type="text" id="email" placeholder="Pepito Perez" name="reg_email"
                           class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd ">
                    <br>
                </div>
                <div class="">
                    <label for="password">Contraseña</label><br>
                    <input type="password" id="password" pattern=".{8,}" maxlength="15" required
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd"><br>
                    <label for="con-password"> Confirmar Contraseña</label><br>
                    <input type="password" id="con-password" pattern=".{8,}" maxlength="15" required
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd"><br>
                    <label for="question">Pregunta clave</label><br>
                    <input type="text" id="question"
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd"><br>
                    <label for="answer">Respuesta</label><br>
                    <input type="text" id="answer"
                        class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd"><br>
                </div>
            </form>
        </div>

        <div class="flex justify-center gap-6 right-10 absolute bottom-16 max-sm:static max-sm:gap-2 mb-5">
            <button class="delete-edit-button bg-grayd text-white w-24 h-10 rounded mr-52 max-sm:mr-4 ">Desactivar</button>
            <button class="cancel-edit-button bg-grayd text-white w-20 h-10 rounded">Cancelar</button>
            <button class="bg-redd dark:bg-darkredd text-white w-20 h-10 rounded">Continuar</button>
        </div>
    </div>
    <div class="sm:mx-16 sm:pt-16 max-sm:pt-8">
        <div class="max-sm:w-screen max-sm:flex max-sm:justify-center">
            <div class="max-sm:invisible max-sm:w-0 text-black-100 flex items-center" style="font-size: 60px;">
                <ion-icon name="person" class="sm:ion-title text-black-100 sm:mr-12 dark:text-white"></ion-icon>
                <p class="">Usuarios</p>
            </div>
            <div class="sm:invisible text-black-100 flex items-center" style="font-size: 30px;">
                <ion-icon name="person" class="sm:ion-title text-black-100 sm:mr-12 dark:text-white"></ion-icon>
                <p class="">Usuarios</p>
            </div>
        </div>

        <form action="" class="sm:invisible sm:h-0 search-form h-10 flex w-full justify-center items-center">
            <label for="listsearch" class="lbl-search-mobile mr-3 flex items-center duration-500">
                <ion-icon name="search-outline"></ion-icon>
            </label>
            <input type="search"
                class="w-40 h-5 border border-gray-300 rounded outline-0 npt-search-mobile py-3 dark:bg-darkgrayl"
                id="listsearch" placeholder=" ">
        </form>
        <div class="stable flex justify-center">
            <div class="sm:mt-8 flex max-sm:flex-col">
                <div class="max-sm:w-screen max-sm:flex max-sm:justify-center">
                    <div class="users-table max-sm:w-[calc(100vw-40px)] sm:mt-8 max-sm:h-[50vh] max-sm:overflow-x-scroll p-7 shadow-xl sm:mr-5 sm:rounded-3xl max-sm:rounded-xl bg-white dark:bg-darkgrayl duration-500">
                        <form action="" class="max-sm:invisible max-sm:h-0 search-form h-10 flex w-full justify-end items-center mb-3 pr-5">
                            <input type="search"
                                class="w-40 h-5 border border-gray-300 rounded outline-0 npt-search py-3 dark:bg-darkgrayl"
                                id="listsearch" placeholder=" ">
                            <label for="listsearch" class="lbl-search mr-3 flex items-center duration-500 absolute">
                                <ion-icon name="search-outline"></ion-icon>
                            </label>
                        </form>
                        <!-----><table class="overflow-y-scroll h-custom">
                            <thead>
                                <tr class="flex sm:gap-15">
                                    <th class="list-select-all flex justify-center items-center mr-5 duration-500">
                                        <ion-icon name="caret-down"
                                            class="rounded-2xl p-1 -m-1 cursor-pointer hover:text-redd">
                                        </ion-icon>
                                    </th>
                                    <th
                                        class="w-16 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                        ID</th>
                                    <th
                                        class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                        Nombre</th>
                                    <th
                                        class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                        Telefono</th>
                                    <th
                                            class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                        Correo</th>
                                    <th
                                        class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                        Cargo</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $server = "localhost";
                            $user = "root";
                            $password = "74334274";
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
                                }else if(isset($_POST['checkrow'])){
                                $id =$_POST['checkrow'];
                                $sql = "UPDATE users SET status = 1 where id = $id";
                                if ($conexion->query($sql) === true){

                                }else{
                                    die("Error al insertar los datos: ".$conexion->error);
                                }
                            }
                            $sql = "Select * from users";
                            $resultado = $conexion->query($sql);
                            
                            if ($resultado->num_rows > 0){
                                while ($row = $resultado->fetch_assoc()){
                                    if ($row['job']=='A'){
                                        $db_cargo='Admin';
                                    }elseif ($row['job']=='T'){
                                        $db_cargo='Trabajador';
                                    }elseif ($row['job']=='M'){
                                        $db_cargo='Mecanico';
                                    }
                                    if ($row['status']=='0'){
                                        ?>
                                        <form id="form<?php echo $row['id'];?>" action="#" method="post">
                                            <tr class="flex border-b sm:gap-15" tabindex="1">
                                                <td class="flex justify-center items-center mr-5">
                                                    <input name="checkrow" value="<?php echo $row['id'];?>" id="<?php echo $row['id'];?>" type="checkbox" class="listcheck dark:accent-darkredd"
                                                           onclick="checkchecks()" onchange="checkdbrow(this)">
                                                    
                                                </td>
                                                <td class="w-16 h-12 mr-5 rounded flex justify-center items-center text-xl"><?php echo $row['id'];?></td>
                                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl"><?php echo $row['name'];?>
                                                </td>
                                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl"><?php echo $row['phone'];?></td>

                                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl"><?php echo $row['email'];?></td>

                                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl"><?php echo $db_cargo;?> </td>
                                                <td class="edit-button "><ion-icon name="create" class="edit_db flex justify-center items-center h-12 w-5 textslate-500 hover:text-redd duration-200"></ion-icon>
                                                    </td>
                                            </tr>
                                        </form>
                                        <?php
                                        
                                    }
                                }
                            }
                            $conexion->close();
                            ?>
                                
                                

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
                    <div class="max-sm:w-screen max-sm:flex max-sm:justify-center max-sm:mt-0 max-sm:p-5">
                        <div class="max-sm:w-full max-sm:p-3 shadow-xl rounded-xl bg-white dark:bg-darkgrayl">
                            <div class="sm:flex gap-2 justify-center max-sm:grid max-sm:grid-cols-2">
                                <button type="button"
                                    class="reg-button flex justify-center items-center sm:w-28 max-sm:w-full h-12 bg-redd text-white w-20 h-10 rounded hover:shadow-list duration-200 mb-2 sm:mt-2 focus:bg-l dark:bg-darkredd">
                                    <ion-icon name="add" class="ion-submenu mr-2"></ion-icon>
                                    <p>Añadir</p>
                                </button>
                                <button type="button" onclick="deletedbdata()"
                                    class="delete-button flex justify-center items-center sm:w-28 max-sm:w-full h-12 bg-grayd text-gray-500 w-20 h-10 rounded  duration-200 mb-2 sm:mt-2 focus:bg-l" disabled>
                                    <ion-icon name="trash-outline" class="ion-submenu mr-2"></ion-icon>
                                    <p>Eliminar</p>
                                </button>
                            </div>
                            <div class="sm:flex gap-2 justify-center max-sm:grid max-sm:grid-cols-2">
                                <button type="button" class="export-button reg-button flex justify-center items-center sm:w-28 max-sm:w-full h-12 bg-redd dark:bg-darkredd text-white w-20 h-10 rounded hover:shadow-list duration-200 focus:bg-l mb-2">
                                    <ion-icon name="download-outline" class="ion-submenu mr-2"></ion-icon>
                                    <p>Exportar</p>
                                </button>
                                <a href="usuarios-del.html" target="display">
                                    <button type="button"
                                    class="reg-button flex justify-center items-center sm:w-28 max-sm:w-full h-12 bg-redd dark:bg-darkredd text-white w-20 h-10 rounded hover:shadow-list duration-200 focus:bg-l">
                                    <ion-icon name="trash-outline" class="ion-submenu mr-2"></ion-icon>
                                    <p>Ocultos</p>
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-sm:h-fit max-sm:w-full flex justify-center items-center px-5">
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
                    <div class="max-sm:invisible max-sm:h-0  max-sm:w-0 most-used-container p-2 shadow-xl rounded-3xl sm:h-123.2 mt-2 bg-white dark:bg-darkgrayl duration-500 max-sm:w-screen">
                        <p class="most-used">Recientes</p>
                        <div class="flex justify-center mt-3">
                            <table class="sm:overflow-y-scroll sm:h-custom">
                                <thead>
                                    <tr class="flex gap-2">
                                        <th class="w-12 h-10 border-redd border-b flex justify-center items-center">
                                            ID</th>
                                        <th class="w-20 h-10 border-redd border-b flex justify-center items-center">
                                            Nombre</th>
                                        <th class="w-20 h-10 border-redd border-b flex justify-center items-center">
                                            Telefono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="flex border-b gap-2">
                                        <td class="w-12 h-12 rounded flex justify-center items-center text-xl">1</td>
                                        <td class="w-20 h-12 rounded flex justify-center items-center text-xl overflow-hidden">Juan Becerra
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

    <script src="/script/checks.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>