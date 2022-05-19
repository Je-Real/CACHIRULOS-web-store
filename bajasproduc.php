<?php
    session_start();

    if (isset($_SESSION['usr'])){
        header('Location: index.php');
    }
    else if (!(isset($_SESSION['prv'])) and !(isset($_SESSION['adm']))){
        header('Location: users/login.php');
    }
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>CACHIRULO'S</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h nav-logo" href="index.php">
							<p style="text-align: center; font-family: Impact; color: black; font-size: 30px;">CACHIRULO'S</p>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset nav-options" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item submenu dropdown active">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item submenu dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Proveedores</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="altasproduc.php">Altas Productos</a>
                                    <li class="nav-item"><a class="nav-link" href="stock.php">Stock Productos</a>
                                </ul>
                            </li>
                            <?php include('header_user.php'); ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>BAJAS PRODUCTOS</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
            <div class="row" id="show">
                <form class="row contact_form" name="form1" action="actions/action_dropprod.php" method="post" id="cForm" novalidate="novalidate" style="width: 100%;">
                    <div class="col-md-4">
                        <p>Empresa</p>
                        <select name="empresa" id="emp_d" class="form-control">
                        </select>
                    </div>
                    <div class="col-md-4">
                        <p>Producto</p>
                        <select name="producto" id="prod_d" class="form-control">
                        </select>
                    </div>
                    <div class="col-md-12 text-center">
                        <!--<button type="button" name="buscar" id="buscar" class="btn submit_btn" onclick="search();">BUSCAR</button>-->
                        <button type="submit" name="buscar" id="buscar" class="btn submit_btn">BUSCAR</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Acerca de Cachirulo's</h6>
                        <p>El mundo se ha cobnvertido tan actualizado en las personas ya que no quieren tener una vida
                            fuera de la red de Internet, prefieren mantenerse conectadas por medio de aplicaciones,
                            páginas web o bien entender mensajes por medio de imágenes. Ha llegado al punto de
                            convertirse en la herramienta principal y por eso Cachirulo's te ofrece las mejores ofertas
                            a los mejores precios.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Enlaces de Navegación</h6>
                        <div class="row">
                            <div class="col-4">
                                <ul class="list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Feature</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Boletín Informativo</h6>
                        <p>Para profesionales de negocios atrapados entre los altos precios de Internet </p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">InstaFeed</h6>
                        <ul class="list instafeed d-flex flex-wrap">
                            <li><img src="img/instagram/Image-01.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-02.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-03.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-04.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-05.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-06.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-07.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-08.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-md-8 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-4 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <!--<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>-->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    
        $(document).ready(function() {
            var precio, cant, tot, id;

            $.ajax({
                type: 'POST',
                url: 'actions/lista_empresa.php'
            })
            
            .done(function(listas_emp) {
                $('#emp_d').html(listas_emp);
            })

            .fail(function() {
                alert('Hubo un error al cargar_emp');
            })

            $('#emp_d').change(function () {
                id = $('#emp_d').val();
                console.log(id);

                $.ajax({
                    type: 'POST',
                    url: 'actions/lista_producto.php',
                    data: {'id': id}
                })
                
                .done(function(listas_prod) {
                    $('#prod_d').html(listas_prod);
                })

                .fail(function() {
                    alert('Hubo un error al productos');
                })
            })
        })
    </script>
    
</body> 
</html>