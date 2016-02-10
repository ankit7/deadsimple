<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->
    <link href='https://fonts.googleapis.com/css?family=Work+Sans' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri (); ?>/assets/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri (); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="container">
      <?php if ( is_home() ) {?>
        <div class="blog-header"><h1 class="blog-title"><?php bloginfo( 'name' ); ?></h1><p class="lead blog-description"><?php bloginfo( 'description' ); ?></p></div>
      <?php } ?>
  