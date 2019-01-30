<?php	
    include'conexion.php';
    $ramo = "SELECT ID_RAMO, RAM_NOMBRE From ramos where estatus='A'";
    $categoria = "SELECT * From categorias where CAT_estatus='A'";
    $subcategoria = "SELECT * From subcategoria where sub_estatus='A'";


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
    <title>Maps</title>

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
                                <li>
                                <a href="modificar_empresa.php">Modificar empresa</a>
                                </li>
                              
                            </ul>
                        </li>
                        <li class="active">
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
                                <li>
                                <a href="modificar_empresa.php">Modificar empresa</a>
                                </li>
                             
                            </ul>
                        </li>
                    
                        <li class="active">
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
                                                <a href="#">
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
                                        <strong>Modificación de tablas </strong>
                                      
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-success active" id="watch-me">Nueva categoría/subcategoría</button>
                                        <button type="button" class="btn btn-secondary" id="see-me">Tabla Categoría</button>
                                        <button type="button" class="btn btn-primary" id="look-me">Tabla Subcategoría</button>
                                    </div>
                                </div>

                                <div id='show-me'>
                    <div class="row">
                            <div class="col-md-4">

                                <div class="card">
                                <div class="card-header">Registro de nueva categoría</div>
                                <div class="card-body"> <form  action="categorias_insert_cat_fn.php"  method="post" name="data">

                                        <strong class="card-title mb-3">Ramo</strong>

                                        <select class="form-control form-control-sm" textalign="center" required name="ramo" id="ramo">
                                        <option value="" ></option>
                                        <?php
                                        $ejec7 = mysqli_query($conn, $ramo);
                                        while($fila=mysqli_fetch_array($ejec7)){?>
                                        <?php echo '<option value="'.$fila["ID_RAMO"].'">'.$fila["RAM_NOMBRE"].'</option>'; ?>
                                        <?php } ?>
                                        </select>

                                        <strong class="card-title mb-3">Nueva categoría</strong>

                                        <input type="text" id="cat" name="cat" required placeholder="Ej. 'Reparacion'" class="form-control">


                                        <strong class="card-title mb-3">URL de la nueva categoría</strong>

                                        <input type="text" id="url" name="url" required placeholder="Ej. 'reparacion.php'" class="form-control">
                                        </br>
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Registrar categoría</button>

                                        </form></div>

                                </div>
                                </div>

                            <div class="col-md-4">

                                <div class="card">
                                <div class="card-header">Registro de nueva subcategoría</div>
                                <div class="card-body"> <form action="categorias_insert_sub_fn.php" method="post" name="data">


                                        <strong class="card-title mb-3">Categorías</strong>

                                        <select class="form-control form-control-sm" textalign="center" required name="categoria" id="categoria" placeholder="Ej. 'Reparación'">
                                        <option value="" ></option>
                                        <?php
                                        $ejec = mysqli_query($conn, $categoria);
                                        while($fila=mysqli_fetch_array($ejec)){?>
                                        <?php echo '<option value="'.$fila["ID_CATEGORIA"].'">'.$fila["CAT_NOMBRE"].'</option>'; ?>
                                        <?php } ?>
                                        </select>

                                        <strong class="card-title mb-3">Nueva subcategoría</strong>

                                        <input type="text" id="subcat" name="subcat" required placeholder="Ej. 'Reparación zapatos'" class="form-control">


                                        </br></br></br>
                                        <button type="submit"  class="btn btn-success btn-lg btn-block">Registrar subcategoría</button>

                                        </form></div>
                                </div>
                            </div>

                    </div>

                </div>   
                <div id='show-me-two' style='display:none; border:2px solid #ccc'>

                <table id="a-tables" class="table table-hover table-dark table-responsive">
    <thead>

        <th data-field="id">ID</th>
      <th data-field="fecha" data-sortable="true">Nombre</th>
      <th data-field="estatus" data-sortable="true">ID RAMO</th>
      <th data-field="estatus" data-sortable="true">STATUS</th>
      <th data-field="estatus" data-sortable="true">URL</th>
      <th class="disabled-sorting">Acción</th>

    </thead>
    <?php
      $ejecutar = mysqli_query($conn, $categoria);
    while($fila=mysqli_fetch_array($ejecutar)){
        $id          = $fila['ID_CATEGORIA'];
        $nom           = $fila['CAT_NOMBRE'];
        $ape          = $fila['ID_RAMO'];
        $dir          = $fila['CAT_ESTATUS'];
        $cel        = $fila['CAT_URL'];


?>
                    <tr>
                        <td width="8%"><?php echo $id ?></td>
                        <td width="14%"><?php echo $nom ?></td>
                        <td width="14%"><?php echo $ape ?></td>
                        <td width="14%"><?php echo $dir ?></td>
                        <td width="14%"><?php echo $cel ?></td>
                        <td width="14%">
                          <?php echo"
                     <a href='#' onclick='update_cat($id), update_cat_fn($id);' title='Modificar Categoría' ><i class='btn-sm btn-success fa fa-refresh'></i></a>   
                        "
                      ?>

          </tr>
        <?php } ?>
        <tbody></br>
            Resultado de tabla categoría
      </tbody>
  </table>
  </div>

  <div id='show-me-three' style='display:none; border:2px solid #ccc'>

<table id="a-tables2" class="table table-hover table-dark table-responsive">
<thead>

<th data-field="id">ID</th>
<th data-field="fecha" data-sortable="true">Nombre</th>
<th data-field="estatus" data-sortable="true">ID CATEGORIA</th>
<th data-field="estatus" data-sortable="true">STATUS</th>
<th class="disabled-sorting">Acción</th>

</thead>
<?php
$ejecutar = mysqli_query($conn, $subcategoria);
while($fila=mysqli_fetch_array($ejecutar)){
$id          = $fila['ID_SUBCATEGORIA'];
$nom           = $fila['SUB_NOMBRE'];
$ape          = $fila['ID_CATEGORIA'];
$dir          = $fila['SUB_ESTATUS'];


?>
    <tr>
        <td width="8%"><?php echo $id ?></td>
        <td width="14%"><?php echo $nom ?></td>
        <td width="14%"><?php echo $ape ?></td>
        <td width="14%"><?php echo $dir ?></td>
        <td width="14%">
          <?php echo"
        <a href='#' onclick='update_sub(), update_sub_fn();' title='Modificar Subcategoría' ><i class='btn-sm btn-success fa fa-refresh'></i></a>   
                 "
          
      ?>

</tr>
<?php } ?>
<tbody></br>
Resultado de tabla subcategoría
</tbody>
</table>
</div>




            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
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
        function update_cat_fn(id){
        $.ajax({

        // la URL para la petición
        url : 'categorias_getcat_fn.php',
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
        $("#cat").val(data.data.cat);
        $("#ramo").val(data.data.ramo);
        $("#sta").val(data.data.sta);
        $("#url").val(data.data.url);
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
//ventana de nuevo cliente
    function update_cat(id){
   swal({
   title: 'Modificar categoría ',
   html:
   '<div class="col-lg-12"> <form action="usuarios_insert_fn.php" method="post" name="data">'+
   '<input type="text" id="id" name="id" readonly required placeholder="Ej. Reparacion" class="form-control">'+
   '<label>Categoría</label>' +
    '<input type="text"  name="cat" id="cat" required class="form-control">'+
   '<label>Ramo</label>' +
    '<select class="form-control form-control-sm" textalign="center" required name="ramo" id="ramo">'+
    '<option value="" ></option>'+
    <?php
    $ejec7 = mysqli_query($conn, $ramo);
    while($fila=mysqli_fetch_array($ejec7)){?>
    '<?php echo '<option value="'.$fila["ID_RAMO"].'">'.$fila["RAM_NOMBRE"].'</option>'; ?>'+
    <?php } ?>
    '</select>'+
    
    '<label>Url</label>' +
    '<input type="text" name="url" id="url"  required  class="form-control">'+   
    '<label>Estatus</label>' +
    '<select class="form-control form-control-sm" required textalign="center" name="sta" id="sta"><option value="" ></option><option value="A" >A</option><option value="C">C</option></select></br>'+   
   
    '<button type="submit" class="btn btn-success btn-lg btn-block">Actualizar categoría</button>'+
   '</form></div>',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: '</form> Actualizar solicitud',
   cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
   showConfirmButton: false,
   focusConfirm: false,
   buttonsStyling: false,
   reverseButtons: true,
   allowOutsideClick: false

    })
    };
    
  </script>

  <script type="text/javascript">
//ventana de nuevo cliente
    function update_sub(){


   swal({
   title: 'Modificar categoría ',
   html:
   '<div class="col-lg-12"> <form action="usuarios_insert_fn.php" method="post" name="data">'+
   '<strong class="card-title mb-3">Categorías</strong>'+

    '<select class="form-control form-control-sm" textalign="center" required name="categoria" id="categoria" placeholder="Ej. Reparación">'+
    '<option value="" ></option>'+
    <?php
    $ejec = mysqli_query($conn, $categoria);
    while($fila=mysqli_fetch_array($ejec)){?>
    '<?php echo '<option value="'.$fila["ID_CATEGORIA"].'">'.$fila["CAT_NOMBRE"].'</option>'; ?>'+
    <?php } ?>
    '</select>'+

    '<strong class="card-title mb-3">Nueva subcategoría</strong>'+

    '<input type="text" id="subcat" name="subcat" required placeholder="Ej. Reparación zapatos" class="form-control">'+


    '</br></br></br>'+
    '<button type="submit"  class="btn btn-success btn-lg btn-block">Registrar subcategoría</button>'+
   '</form></div>',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: '</form> Actualizar solicitud',
   cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
   showConfirmButton: false,
   focusConfirm: false,
   buttonsStyling: false,
   reverseButtons: true,
   allowOutsideClick: false

})
};
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

</body>

</html>
<!-- end document-->
