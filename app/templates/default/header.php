<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $data['title'] . ' - ' . SITETITLE; //SITETITLE defined in app/core/config.php     ?></title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--basic styles-->

        <link href="<?php echo helpers\url::template_path(); ?>css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo helpers\url::template_path(); ?>css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo helpers\url::template_path(); ?>css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="<?php echo helpers\url::template_path(); ?>css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!--page specific plugin styles-->

        <!--fonts-->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

        <!--ace styles-->

        <link rel="stylesheet" href="<?php echo helpers\url::template_path(); ?>css/ace.min.css" />
        <link rel="stylesheet" href="<?php echo helpers\url::template_path(); ?>css/ace-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo helpers\url::template_path(); ?>css/ace-skins.min.css" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="<?php echo helpers\url::template_path(); ?>css/ace-ie.min.css" />
        <![endif]-->

        <!--inline styles related to this page-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>


    <body>

        <div class="container">
