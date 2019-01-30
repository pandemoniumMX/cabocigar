<?php
	
    include'conexion.php';
    $ramos = "SELECT ID_RAMO, RAM_NOMBRE From ramos where estatus='A'";
    $specs="SELECT * FROM  `caracteristicas` ";
    $cliente="SELECT * FROM usuarios where USU_ROLL='Empresa' and USU_STATUS='A' and ID_NEGOCIO IS NULL";

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
                            <li class="active">
                                    <a href="registro negocio.php">Nuevo registro empresa</a>
                                </li>
                                <li>
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
                            <li class="active">
                                <a href="registro_negocio.php">Nuevo registro empresa</a>
                                </li>
                                <li>
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
            <div class="card-body"> <form action="registro_negocio_fn.php" method="post" name="data" content="text/html; charset=utf-8" >

                <div id='show-me'>

                    <div class="col-lg-6">
                        <div class="card">

                                <div class="card-body">
                                     <strong class="card-title mb-3">Datos de la empresa</strong>

                                     <div class="form-group">
                                            <label for="company" class=" form-control-label">Nombre completo de la empresa</label>
                                            <input type="text" id="company" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Razón social</label>
                                            <input type="text" id="vat" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">RFC</label>
                                            <input type="text" id="street" placeholder="RFC" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Responsable</label>
                                            <input type="text" id="street" placeholder="Persona a cargo" class="form-control">                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Descripcion</label>
                                            <textarea name="textarea-input" id="textarea-input" rows="5" placeholder="Descripcion" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Dirección</label>
                                            <textarea name="textarea-input" id="textarea-input" rows="5" placeholder="Dirección y horario" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="textarea-input" class=" form-control-label">Etiquetas</label>
                                            <textarea name="textarea-input" id="textarea-input" rows="5" placeholder="Separadas con una coma..." class="form-control"></textarea>
                                        </div>
        </br>
                                            <button type="button" id='see-me' class="btn btn-success btn-lg btn-block">Siguiente</button>

                                </div>
                        </div>
                    </div>                        
                </div>
                         <div id='show-me-two' style='display:none;'>
                           <div class="col-md-4">
                             <div class="card">
                                <div class="card-body">
                                     <strong class="card-title mb-3">Categoría</strong>

                                            <div>Selecciona Ramo : 
                                            <select class="form-control form-control-sm" textalign="center" required name="ramo" id="ramo">
                                            <option value="" ></option>
                                            <?php
                                            $ejec7 = mysqli_query($conn, $ramos);
                                            while($fila=mysqli_fetch_array($ejec7)){?>
                                            <?php echo '<option value="'.$fila["ID_RAMO"].'">'.$fila["RAM_NOMBRE"].'</option>'; ?>
                                            <?php } ?>
                                            </select></div>
                        
                                                
                                                <div>Selecciona categoria : </br><select name="categoria" id="categoria"></select></div>
                                                
                                                
                                                <div>Selecciona subcategoria : </br><select name="subcategoria" id="subcategoria"></select></div>
                                                

                                                <div>Usuario de cliente: 
                                            <select class="form-control form-control-sm" textalign="center" required name="usuario" id="usuario">
                                            <option value="" ></option>
                                            <?php
                                            $ejec7 = mysqli_query($conn, $cliente);
                                            while($fila=mysqli_fetch_array($ejec7)){?>
                                            <?php echo '<option value="'.$fila["ID_USUARIO"].'">'.$fila["USU_USUARIO"].'</option>'; ?>
                                            <?php } ?>
                                            </select></div>
                                            <br />
                                                <div class="row">

                                                    <div class="col-lg-6">
                                                    <button type="button"  id='watch-me' class="btn btn-danger btn-lg btn-block">Atras</button>
                                                    </div>
                                                    <div class="col-lg-6">
                                                    <button type="button" id='look-me' class="btn btn-success btn-lg btn-block">Siguiente</button>
                                                    </div>
                                                
                                                </div> 

                                            </div>                      
                                      </div>
                                    </div>
                                </div>
                         
                 
<div id='show-me-three' style='display:none; '>

<div class="col-lg-6">
    <div class="card">

            <div class="card-body">
                 <strong class="card-title mb-3">Caracteristicas de la empresa</strong>
                 <div class="form-group">
                 <label>
                 <?php
                $ejec1 = mysqli_query($conn, $specs);
                while($fila=mysqli_fetch_array($ejec1)){ ?>               
                      <input type="checkbox"> <?php echo $fila['CAR_NOMBRE']; ?>
                </br>                  

              <?php } ?>
              </div>              
                    <div class="row">
                        <div class="col-lg-6">
                        <button type="button"  id='see-me' class="btn btn-danger btn-lg btn-block">Atras</button>
                        </div>
                        <div class="col-lg-6">
                        <button type="button" id='look-me2' class="btn btn-success btn-lg btn-block">Siguiente</button>
                        </div>
                    </div>   
</div> 
</div>

</div>   
</div>   



<div id='show-me-three2' style='display:none; '>
                        <div class="row">
                            <div class="col-md-4">

                                <div class="card">
                                        <img class="card-img-top" src="images/noimage.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Card Image Title</h4>
                                        <input type="file" accept="image/*" onchange="preview_image(event)">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="card">
                                        <img class="card-img-top" src="images/noimage.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Card Image Title</h4>
                                        <input type="file" accept="image/*" onchange="preview_image(event)">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="card">
                                        <img class="card-img-top" src="images/noimage.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Card Image Title</h4>
                                        <input type="file" accept="image/*" onchange="preview_image(event)">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="card">
                                        <img class="card-img-top" src="images/noimage.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Card Image Title</h4>
                                        <input type="file" accept="image/*" onchange="preview_image(event)">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="card">
                                        <img class="card-img-top" src="images/noimage.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Card Image Title</h4>
                                        <input type="file" accept="image/*" onchange="preview_image(event)">

                                    </div>
                                </div>
                            </div>



                                <div class="col-lg-6">
                                <button type="button"  id='look-me' class="btn btn-danger btn-lg btn-block">Atras</button>
                                </div>
                                <div class="col-lg-6">
                                <button type="button" id='look-me3' class="btn btn-success btn-lg btn-block">Siguiente</button>
                                </div>


                            </div>
    </div>
    

    <div id='show-me-three3' style='display:none; '>

<div class="col-lg-6">
    <div class="card">

            <div class="card-body">
                 <strong class="card-title mb-3">Caracteristicas de la empresa</strong>

          
<div class="row">
                         <div class="col-md-4">
                        <div class="card">
                                <div class="card-body">
                                     <strong class="card-title mb-3">Nivel de publicidad</strong>


                                        <select class="form-control form-control-sm" textalign="center" required name="destino" id="destino"><option value="" >
                                        </option><option value="Almacen" >Normal</option>
                                        <option value="Cliente">Alta</option>
                                        <option value="Cliente">Máxima</option>
                                        </select>

                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-4">
                        <div class="card">
                                <div class="card-body">
                                     <strong class="card-title mb-3">Rango de precios</strong>


                                    <select class="form-control form-control-sm" textalign="center" required name="expr" id="expr"><option value="" >
                                    </option><option value="$$" >Hasta $99.00</option>
                                    <option value="$$$">Hasta $999.00</option>
                                    <option value="$$$$">Hasta $9999.00</option>
                                    <option value="$$$$$">Hasta $99999.00</option>
                                    </select>

                                        </div>
                                    </div>
                                        </div>

  

                        <div class="col-lg-6">
                        <button type="button"  id='see-me' class="btn btn-danger btn-lg btn-block">Atras</button>
                        </div>
                        <div class="col-lg-6">
                        <button type="submit" id='look-me2' class="btn btn-success btn-lg btn-block">Agregar empresa</button>
                        </div>


                    </div> 
                    </div>

                    </div>   
                    </div>  



                                </div>
                                </form>
            </div>    <!-- Div que cierra-->



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

    
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert2.js"></script>

    

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

<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('preview');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>

</body>

</html>
<!-- end document-->
