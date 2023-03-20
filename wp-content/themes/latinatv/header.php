<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo("charset")?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head();?>
</head>

<body style="background-color: black;">

<?php wp_body_open();?>
<header class="encabezado">
        <div class="container gx-5 py-3" style="background-color: #F5F5F5;">
            <div class="row">
                <div class="encabezado__hamburguesa col-2">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-menu.svg" alt="menu icon">
                        Menú
                    </a>
                </div>
                <div class=" col-5 col-md-2 px-2 px-md-4">
                     <?php the_custom_logo();?>
                </div>
                <div class="encabezado__menu col-6 col-md-5">
                    <?php wp_nav_menu(
    array(
        "menu" => 'menu-principal',
        'menu_class' => 'encabezado_header',
    )
);?>
                </div>
                <div class="encabezado__cart col-5 col-md-1">
                <div class="cp-tvvivo-icon text-center">
						<a href="https://www.latina.pe/tvenvivo"><img src="https://play.latina.pe/wp-content/themes/genesis-play/img/tv_envivo.png" alt=""></a>
						<a href="https://www.latina.pe/tvenvivo"><b  class="text-dark " id="texto-programa-envivo">Reporte semanal</b></a>
						<span></span>
					</div>
                </div>
            </div>
      
        </div>
    </header>

    <main>
        <div >