<?php	
include'check_sesion.php';
include'functions.php';
    include'conexion.php';
    $var_id= $_SESSION['clave'];
    $var_sucursal = $_SESSION['sucursal'];
    $var_name=$_SESSION['USU_NOMBRE'];

    $inventario ="SELECT i.ID_INVENTARIO, i.INV_NOMBRE, i.INV_SABOR, i.INV_TIPO, i.INV_PRECIOMX, i.INV_PRECIOUS,i.INV_DESCUENTO,i.INV_ALMACEN,i.INV_EXHIBICION, m.MAR_NOMBRE
     FROM tbl_inventario i, tbl_marcas m
      WHERE i.ID_SUCURSAL='$var_sucursal' and  i.ID_MARCA= m.ID_MARCA";

   
?>
<!DOCTYPE html>
<html lang="en">

<head>



    <!-- Required meta tags-->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Modifica empresas</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>

    <script type="text/javascript">

$(document).ready(function(){
    $("#ramo").click(function () {
    $("#ramo option:selected").each(function () {
    ID_RAMO = $(this).val();
    $.post("registro_negocio_combo_cat.php", { ID_RAMO: ID_RAMO }, function(data){
    $("#categoria").html(data);
          });            
        });
    })
});

$(document).ready(function(){
    $("#categoria").click(function () {
    $("#categoria option:selected").each(function () {
        ID_CATEGORIA = $(this).val();
    $.post("registro_negocio_combo_subcat.php", { ID_CATEGORIA: ID_CATEGORIA }, function(data){
    $("#subcategoria").html(data);
          });            
        });
    })
});

</script>
        


</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cogs"></i>Empresas</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="registro negocio.php">Nuevo registro empresa</a>
                                </li>
                                <li class="active">
                                <a href="modificar_empresa.php">Modificar empresa</a>
                                </li>
                              
                            </ul>
                        </li>
                        <li>
                            <a href="categorias.php">
                            <i class="fas fa-star"></i>Categorias</a>
                        </li>
                        <li>
                            <a href="caracteristicas.php">
                                <i class="fas fa-heart"></i>Caracteristicas</a>
                        </li>
                
                        <li>                     
                            <a class="js-arrow" href="galeria.php">
                                <i class="fas fa-picture-o"></i>Galería</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="reseñas.php">
                            <i class="fas fa-comments"></i>Reseñas</a>                         
                        </li>
                        <li>
                        <a href="usuarios.php">
                            <i class="fas fa-user"></i>Usuarios</a>                           
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cogs"></i>Empresas</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a href="registro_negocio.php">Nuevo registro empresa</a>
                                </li>
                                <li class="active">
                                <a href="modificar_empresa.php">Modificar empresa</a>
                                </li>
                             
                            </ul>
                        </li>
                    
                        <li>
                            <a href="categorias.php">
                                <i class="fas fa-star"></i>Categorias</a>
                        </li>
                        <li>
                            <a href="caracteristicas.php">
                            <i class="fas fa-heart"></i>Caracteristicas</a>
                        </li>
                      
                        <li>                     
                            <a href="galeria.php">
                                <i class="fas fa-picture-o"></i>Galería</a>
                        </li>
                        <li>

                            <a  href="reseñas.php">
                            <i class="fas fa-comments"></i>Reseñas</a>                         
                        </li>
                        <li>
                        <a href="usuarios.php">
                                <i class="fas fa-user"></i>Usuarios</a>                           
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="destroy.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="card">
                                    <div class="card-header">
                                      Funciones específicas: <strong> Total ventas del día : $ </strong>
                                      
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-success active" onclick="add_caract();">Ventas</button>
                                        <button type="button" class="btn btn-danger " onclick="add_caract();">Cancelaciones</button>

                                        <button type="button" class="btn btn-info " onclick="add_caract();">Corte</button>

                                    </div>
                                </div>

                                <div id='show-me'>
                                <div class="row">
                            <div class="col-lg-8">

                                <table id="a-tables" class="table table-hover table-dark table-responsive">
                                                    <thead>

                                                        <th data-field="id">ID</th>
                                                    <th data-field="fecha" data-sortable="true">Marca</th>
                                                    <th data-field="estatus" data-sortable="true">Nombre</th>
                               
                                                    <th data-field="estatus" data-sortable="true">Precio MX</th>
                                                    <th data-field="fecha" data-sortable="true">% OFF </th>
                                                    <th data-field="estatus" data-sortable="true">Disponible</th>
                                                    <th data-field="estatus" data-sortable="true">Cantidad</th>
                                                    <th  data-field="estatus" data-sortable="true">Total</th>
                                                    

                                                    <th class="disabled-sorting">Acción</th>

                                                    </thead>
                                                    <?php
                                                    $ejecutar = mysqli_query($conn, $inventario);
                                                    while($fila=mysqli_fetch_array($ejecutar)){
                                                        $id          = $fila['ID_INVENTARIO'];
                                                        $mar          = $fila['MAR_NOMBRE'];
                                                        $nom           = $fila['INV_NOMBRE'];
                                            
                                                        $mx          = $fila['INV_PRECIOMX'];
                                                        $des          = $fila['INV_DESCUENTO'];
                                                        $ex           = $fila['INV_EXHIBICION'];


                                                ?>
                                                                    <tr>
                                                                        <td width="8%"><?php echo $id ?></td>
                                                                        <td width="14%"><?php echo $mar ?></td>
                                                                        <td width="14%"><?php echo $nom ?></td>
                                                                        
                                                                        <td width="14%"><input type="number" id="precio"  value="<?php echo $mx ?>" readonly class="form-control"></td>
                                                                        <td width="14%"><input type="number" id="descuento"  value="<?php echo $des ?>" readonly class="form-control"></td>
                                                                        <td width="14%"><?php echo $ex ?></td>
                                                                        <td width="14%"><input type="cantidad" id="cantidad"  value="0" min="1" onkeydown="operaciones();" class="form-control"></td>
                                                                        <td width="10%"><input type="number" id="total"  value="0" class="form-control-sm" readonly></td>

                                                                        <td width="14%">
                                                                        <a href='#' onclick='modificar(), update_em_fn();' title='Agregar' ><i class='btn-sm btn-success fa fa-shopping-cart'></i></a>
                                                                        <?php
                                                                        /*
                                                                            echo "        
                                                                            <a href='#' onclick='modificar(), update_em_fn();' title='Modificar empresa' ><i class='btn-sm btn-success fa fa-refresh'></i></a>   
                                                                            <a href='#' onclick='expo(), update_ex_fn();' title='Modificar exposición' ><i class='btn-sm btn-danger fa fa-bolt'></i></a>    
                                                                            <a href='modificar_empresa_car.php?id=", base64_encode(), "'  title='Modificar caracteristicas' ><i class='btn-sm btn-info fa fa-star'></i></a>                                                      
                                                                                                                 
                                                                            <a href='recepcion_historial_cliente.php?id=", base64_encode(), "'  title='Modificar galería'><i class='btn-sm btn-primary fa fa-picture-o'></i></a>
                                                                            </td>"; 
                                                                            */
                                                                            
                                                                    ?>

                                                        </tr>
                                                        <?php } ?>
                                                        <tbody></br>
                                                            Resultado de tabla categoría
                                                    </tbody>
                                                </table>
                                                </div>

                                                <!-- Fin de la tabla-->
                                                <div class="col-lg-4">
                                                    <section class="card">
                                                    <div class="card-header">
                                                                    <strong>Venta</strong>
                                                                    <small> Total</small>
                                                    </div>

                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Company</label>
                                            <input type="text" id="company" placeholder="Enter your company name" class="form-control">
                                        </div>

                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label for="company" class=" form-control-label">Total MX:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="number" id="company" readonly placeholder="5000" class="form-control">
                                                </div>

                                        </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label for="company" class=" form-control-label">Total US:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="number" id="company" readonly placeholder="5000" class="form-control">
                                                </div>

                                        </div>

                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label>Tipo de cobro</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <select class="form-control form-control-sm" required textalign="center" name="est" id="est"><option value="" ></option>
                                                <option value="Pesos">Pesos</option>
                                                <option value="Dolares">Dolares</option>
                                                <option value="Tarjeta">Tarjeta</option>
                                                </select>   
                                                </div>
                                             
                                            </div>



                                    
                                        </div>
                                        <button type="button" class="btn btn-info " onclick="add_caract();">Cobrar</button>

                                    </div>








                                 


                                                    </section>
                                                    
                                                    </div>
                            </div>
                                                    

                                                    

                                </div>
                            </div>

                    </div>

                </div>
        </div>

    </div>





    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>
    <script src="vendor/vector-map/jquery.vmap.brazil.js"></script>
    <script src="vendor/vector-map/jquery.vmap.europe.js"></script>
    <script src="vendor/vector-map/jquery.vmap.france.js"></script>
    <script src="vendor/vector-map/jquery.vmap.germany.js"></script>
    <script src="vendor/vector-map/jquery.vmap.russia.js"></script>
    <script src="vendor/vector-map/jquery.vmap.usa.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    <!-- Data table plugin-->
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#a-tables').DataTable();</script>

    
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert2.js"></script>

    <script>
        //Script para mandar ID para generar la orden
        function update_em_fn(id){
        $.ajax({

        // la URL para la petición
        url : 'modificar_empresa_getem_fn.php',
        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        data : {
        id : id
        },
        // especifica si será una petición POST o GET
        type : 'POST',
        // el tipo de información que se espera de respuesta
        dataType : 'json',
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function(data) {
        //Manda Llamar id,nombre y apellido
        $("#id").val(data.data.id);
        $("#nom").val(data.data.nom);
        $("#raz").val(data.data.raz);
        $("#rfc").val(data.data.rfc);
        $("#res").val(data.data.res);
        $("#dir").val(data.data.dir);
        $("#des").val(data.data.des);
        $("#eti").val(data.data.eti);
        $("#est").val(data.data.est);
        $("#ram").val(data.data.ram);
        $("#cat").val(data.data.cat);
        $("#sub").val(data.data.sub);
        },
        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto de la petición en crudo y código de estatus de la petición
        error : function(xhr, status) {

        },
        // código a ejecutar sin importar si la petición falló o no
        complete : function(xhr, status) {

        }
        });
        }

    </script>

        
<script>
        //Script para mandar ID para generar la orden
        function update_ex_fn(id){
        $.ajax({

        // la URL para la petición
        url : 'modificar_empresa_getex_fn.php',
        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        data : {
        id : id
        },
        // especifica si será una petición POST o GET
        type : 'POST',
        // el tipo de información que se espera de respuesta
        dataType : 'json',
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function(data) {
        //Manda Llamar id,nombre y apellido
        $("#id").val(data.data.id);
        $("#expn").val(data.data.expn);
        $("#expr").val(data.data.expr);
        $("#expf").val(data.data.expf);
    
        },
        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto de la petición en crudo y código de estatus de la petición
        error : function(xhr, status) {

        },
        // código a ejecutar sin importar si la petición falló o no
        complete : function(xhr, status) {

        }
        });
        }

    </script>


<script type="text/javascript">
//ventana actualizar cliente
function modificar(id){


    swal({
         title: 'Modificar empresa',
         html:
         '<div class="card-body"> <form action="modificar_empresa_updateem_fn.php" method="post" name="data">'+
         '<input  type="text" name="id" id="id"  readonly class="form-control border-input" required>' +

         '<div class="row">'+
          '<div class="col-md-4">'+
            '<div class="form-group">'+
         '<label>Nombre del negocio</label>'+
         '<input input type="text" name="nom" id="nom" class="form-control border-input maxlength="25" required>' +

         '</div>'+
          '</div>'+

          '<div class="col-md-4">'+
            '<div class="form-group">'+
         '<label>Razón social</label>' +
         '<input input type="text" name="raz" id="raz" class="form-control border-input maxlength="25" required>' +
         '</div>'+
         '</div>'+

            '<div class="col-md-4">'+
            '<div class="form-group">'+



         '<label>RFC</label>' +
         '<input input type="text" name="rfc" id="rfc" class="form-control border-input maxlength="25" required>' +

          '</div>'+
         '</div>'+
         '</div>'+

         '<div class="row">'+
          '<div class="col-md-4">'+
            '<div class="form-group">'+

         '<label>Responsable</label>' +
         '<input input type="text" name="res" id="res" class="form-control border-input maxlength="25" required>' +
         '</div>'+
         '</div>'+

         
         '<div class="col-md-4">'+
            '<div class="form-group">'+

         '<label>Status</label>' +
         '<select class="form-control form-control-sm" required textalign="center" name="est" id="est"><option value="" ></option><option value="A" >A</option><option value="C">C</option></select></br>'+   
         '</div>'+
         '</div>'+
         '</div>'+        

         '<div class="row">'+
          '<div class="col-md-4">'+
            '<div class="form-group">'+
             '<label>Dirección</label>' +      
                 '<textarea type="text" name="dir" id="dir"  class="form-control border-input" rows="5"></textarea>'+

                      
        '</div>'+
         '</div>'+

                 

         '<div class="col-md-4">'+
            '<div class="form-group">'+

         '<label>Descripción</label>' +     
         '<textarea type="text" name="des" id="des"  class="form-control border-input" rows="5"></textarea>'+
 
        '</div>'+
         '</div>'+

          '<div class="col-md-4">'+
            '<div class="form-group">'+

         '<label>Etiquetas</label>' +     
         '<textarea type="text" name="eti" id="eti"  class="form-control" rows="5"></textarea>'+
 
        '</div>'+
         '</div>'+
         '</div>'+

         '<div class="row">'+
          '<div class="col-md-4">'+
            '<div class="form-group">'+

       
         '<div>Selecciona Ramo : '+
            '<select class="form-control form-control-sm"  required name="ram" id="ram">' +
            '<option value="" ></option>'+
            <?php
            $ejec7 = mysqli_query($conn, $ramos);
            while($fila=mysqli_fetch_array($ejec7)){?>
            '<?php echo '<option value="'.$fila['ID_RAMO'].'">'.$fila["RAM_NOMBRE"].'</option>'; ?>'+
            <?php } ?>
            '</select></div>'+

            '<div>Selecciona categoria : '+
            '<select class="form-control form-control-sm" textalign="center" required name="cat" id="cat">' +
            '<option value="" ></option>'+
            <?php
            $categoria = "SELECT ID_CATEGORIA, CAT_NOMBRE From categorias where cat_estatus='A'";
            $ejec1 = mysqli_query($conn, $categoria);
            while($fila=mysqli_fetch_array($ejec1)){?>
            '<?php echo '<option value="'.$fila['ID_CATEGORIA'].'">'.$fila["CAT_NOMBRE"].'</option>'; ?>'+
            <?php } ?>
            '</select></div>'+

                   '<div>Selecciona subcategoria : '+
            '<select class="form-control form-control-sm" textalign="center" required name="sub" id="sub">' +
            '<option value="" ></option>'+
            <?php
            $ejec2 = mysqli_query($conn, $subcategoria);
            while($fila=mysqli_fetch_array($ejec2)){?>
            '<?php echo '<option value="'.$fila['ID_SUBCATEGORIA'].'">'.$fila["SUB_NOMBRE"].'</option>'; ?>'+
            <?php } ?>
            '</select></div>'+
         '</div>'+
         '</div>'+
         '</div>'+




         '<Button type="submit" id="confirmar" name="confirmar" class= "btn btn-info btn-fill btn-wd">Actualizar empresa</Button>'+
         '</form></div>',

showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText:  'Registrar y generar reporte',
cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
showConfirmButton: false,
focusConfirm: false,
buttonsStyling: false,
reverseButtons: true, 
customClass: 'swal-wide',
allowOutsideClick: false

})

};

</script>

<script type="text/javascript">
    //ventana exposicion
    function expo(id){
      
    swal({
    title: 'Exposición',
    html:
    '<div class="card-body"> <form action="modificar_empresa_updateex_fn.php" method="post" name="data" content="text/html; charset=utf-8" >'+
    //Manda Llamar id,nombre y apellido
    '<input input type="text" name="id" id="id"  readonly class="form-control border-input" required>' +
    '<div class="col-md-12">'+
      '<div class="form-group">'+

      '<label>Nivel de exposicion</label>'+
      '<select class="form-control form-control-sm" textalign="center" required name="expn" id="expn"><option value="" >'+
        '</option><option value="Normal" >Normal</option>'+
        '<option value="Alta">Alta</option>'+
        '<option value="Maxima">Máxima</option>'+
        '</select>' +
      '<label>Fecha límite de exposicion</label>'+
      '<input type="text" id="expf" name="expf" placeholder="Formato dd/mm/yyyy" required class="form-control border-input" pattern="[0-9]{1,2}/[0-9]{1,2}/[0-9]{4}">'+//validacion fecha
      '<label>Rango de precios</label>'+

      '<select class="form-control form-control-sm" textalign="center" required name="expr" id="expr"><option value="" >'+
        '</option><option value="$$" >Hasta $99.00</option>'+
        '<option value="$$$">Hasta $999.00</option>'+
        '<option value="$$$$">Hasta $9999.00</option>'+
        '<option value="$$$$$">Hasta $99999.00</option>'+
        '</select>' +          
        '</div>'+
    '</div>'+


    '<div class="col-md-12">'+
    '<Button type="submit" class= "btn btn-info btn-fill btn-wd">Actualizar exposición</Button>'+

    '</form></div>',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: '</form> Actualizar solicitud',
    cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
    showConfirmButton: false,
    focusConfirm: false,
    buttonsStyling: false,
    reverseButtons: true, allowOutsideClick: false
    })

    };

    </script>

<script type="text/javascript">

function operaciones()
{
  var precio =document.getElementById('precio').value;
  var descuento =document.getElementById('descuento').value;
  //var cantidad =document.getElementById('cantidad').value;

   suma =parseInt(precio) * parseFloat(descuento);

   //total =parseInt(suma)-parseInt(abono);

   subtotal =parseInt(document.getElementById('total').value= suma);
  // totalt =parseInt(document.getElementById('restante').value= total);


}


</script>



<script type="text/javascript">
  $(document).ready(function ()
   {
     //primero
    $("#watch-me").click(function()
    {
     $("#show-me:hidden").show('slow');
     $("#show-me-two").hide();
     $("#show-me-three").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three4").hide();
     });
     $("#watch-me").click(function()
    {
      if($('watch-me').prop('checked')===false)
     {
      $('#show-me').hide();
     }
    });

    //segundo
    $("#see-me").click(function()
    {
      $("#show-me-two:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-three").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three4").hide();
     });
     $("#see-me").click(function()
    {
      if($('see-me-two').prop('checked')===false)
     {
      $('#show-me-two').hide();
     }
    });

    //tercero
    $("#look-me").click(function()
    {
      $("#show-me-three:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three4").hide();
     });
     $("#look-me").click(function()
    {
      if($('see-me-three').prop('checked')===false)
     {
      $('#show-me-three').hide();
     }
    });

    //cuarto
    $("#look-me2").click(function()
    {
      $("#show-me-three2:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three4").hide();
     });
     $("#look-me2").click(function()
    {
      if($('see-me-three2').prop('checked')===false)
     {
      $('#show-me-three2').hide();
     }
    });

      //quinto
    $("#look-me3").click(function()
    {
      $("#show-me-three3:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three").hide();
     $("#show-me-three4").hide();
     });
     $("#look-me3").click(function()
    {
      if($('see-me-three3').prop('checked')===false)
     {
      $('#show-me-three3').hide();
     }
    });


    //sexto
    $("#look-me4").click(function()
    {
      $("#show-me-three4:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three").hide();
     });
     $("#look-me4").click(function()
    {
      if($('see-me-three4').prop('checked')===false)
     {
      $('#show-me-three4').hide();
     }
    });

    //septimo
    $("#look-me5").click(function()
    {
      $("#show-me-three5:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three2").hide();
     $("#show-me-three4").hide();
     $("#show-me-three3").hide();
     $("#show-me-three").hide();
     });
     $("#look-me4").click(function()
    {
      if($('see-me-three5').prop('checked')===false)
     {
      $('#show-me-three5').hide();
     }
    });


   });


  </script>

  <script>
            $(document).ready(function() {
                $('#a-tables').DataTable();
                $('#a-tables2').DataTable();
                $('#tabla4').DataTable();
                $('#tabla5').DataTable();
            } );
    </script>


<style>
.swal-wide{
    width:60% !important;
}
</style>


</body>

</html>
<!-- end document-->
