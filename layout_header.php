<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?php echo isset($page_title) ? strip_tags($page_title) : "E-Life"; ?></title>
    <!--<title>E-Life</title>-->

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="<?php echo $home_url . "style.css" ?>" rel="stylesheet" />
    <!--<link rel="stylesheet" href="style.css">-->

</head>

<body>
    <?php include_once 'nav.php';?>
    <div class="container">
        <?php
        if($page_title!="Login"){
        ?>
        <div class='col-md-12'>
            <div class="page-header">
                <h1><?php echo isset($page_title) ? $page_title :  "LOL"; ?>
                </h1>
            </div>
        </div>
        <?php
        }
        ?>

        