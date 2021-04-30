<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title();?></title>
    <?php wp_head(); ?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href=<?= get_theme_file_uri("vendor/bootstrap/css/bootstrap.min.css")?>>
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href=<?= get_theme_file_uri("vendor/font-awesome/css/font-awesome.min.css")?>>
    <!-- Custom icon font-->
    <link rel="stylesheet" href=<?= get_theme_file_uri("css/fontastic.css")?>>
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    <link rel="stylesheet" href=<?= get_theme_file_uri("vendor/@fancyapps/fancybox/jquery.fancybox.min.css")?>>
    <!-- theme stylesheet-->
    <link rel="stylesheet" href=<?= get_theme_file_uri("css/style.default.css")?> id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href=<?= get_theme_file_uri("css/custom.css")?>>
    <!-- Favicon-->
    <link rel="shortcut icon" href=<?= get_theme_file_uri("favicon.png")?>>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->