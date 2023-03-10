<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <meta property="og:image" content="<?=get_config('base_path')?>assets/brand/photogram-icon.png">
    <meta property="site_name" content="Photogram">
    <meta property="og:title" content="Photogram · Gallery of Memories">
    <meta property="description"
        content="Create an account or log in to Photogram. Share photos &amp; videos with friends, family and other people you know.">
    <?
        if (basename($_SERVER['PHP_SELF']) == "login.php" || basename($_SERVER['PHP_SELF']) == "signup.php") {?>
            <title>Sign in/up · Photogram</title>
        <?} else {?>
            <title>Photogram</title>
        <? } 
    ?>
    <!-- Favicon for photogram -->
    <link rel="shortcut icon" href="<?=get_config('base_path')?>assets/brand/favicon.ico">
    <!-- Custom-compiled bootstrap css -->
    <link href="<?=get_config('base_path')?>css/main.min.css" rel="stylesheet">
    <!-- Hover css -->
    <link rel="stylesheet" href="<?=get_config('base_path')?>css/hover-min.css">

    <?
    // It allows us to load the css for the respective web pages
    // If the required css files exist, it will automatically loaded
    if (file_exists($_SERVER['DOCUMENT_ROOT'].get_config('base_path')."css/".basename($_SERVER['PHP_SELF'], ".php").".css")) {?>
        <link rel="stylesheet" href="<?=get_config('base_path')."css/".basename($_SERVER['PHP_SELF'], ".php").".css"?>">
    <? } ?>
</head>