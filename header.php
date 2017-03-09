<!-- Markup for the header -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SimmyPress</title>
  <link href="<?php bloginfo( 'template_directory' );?>/build/css/main.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head();?>
</head>

<body>

  <!-- Inserting menu -->
  <?php wp_nav_menu( array( 'theme_location' => 'custom-menu' ) ); ?>

  <div class="page-wrapper">

    <div class="header">
      <h1 class="header__title"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
      <p class="header__description"><?php echo get_bloginfo( 'description' ); ?></p>
    </div>
