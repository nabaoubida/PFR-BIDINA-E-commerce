<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= SITENAME; ?></title>
        <!-- Favicon-->
        <link rel="shortcut icon" type="x-icon" href="<?php echo URLROOT ?>/img/image/logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="<?= URLROOT ;?>/css/styles-dashboard.css"  /> 
        <link rel="stylesheet" href="<?= URLROOT ; ?>/css/style.css">
    </head>
    <body>
    <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading"><img class="dash image py-3" src="<?= URLROOT ;?>/img/image-2/logo1.png" alt="logo"></div>
                
                <div class="prof-dash text-white">
                    <img class="img-dash pb-3" src="<?= URLROOT ;?>/img/image-2/10909-612x612.jpg" alt="">
                    <?php //foreach($data['admins'] as $admin) : ?>
                    <h3 class="pb-3"><?= $_SESSION['user_fullName'] ?? '';  ?></h3>
                    <?php //endforeach ?>
                    <h5>Admin</h5>
                </div>    
                
                <div class="list-group list-group-flush">
                    <ul class="list-unstyled ">
                        <li><a class="sid-dash nav nav-link align-middle" href="<?= URLROOT; ?>/dashboardAdmin/dashAdm"><i class="fas fa-tachometer-alt"></i>&emsp; Dashboard</a></li>
                        <li><a class="sid-dash nav nav-link align-middle" href="<?= URLROOT; ?>/dashAdmProd/dashProd"><i class="fab fa-product-hunt"></i>&emsp; Produit</a></li> 
                        <li><a class="sid-dash nav nav-link align-middle" href="<?= URLROOT; ?>/dashboardAdmin/dashAdmUse"><i class="fas fa-user-alt"></i>&emsp; User</a></li>
                        <li><a class="sid-dash nav nav-link align-middle" href="<?= URLROOT; ?>/dashboardAdmin/message"><i class="fas fa-comment"></i>&emsp; Message</a></li>
                        <li><a class="sid-dash nav nav-link align-middle" href="<?= URLROOT; ?>/dashboardAdmin/command"><i class="fab fa-product-hunt"></i>&emsp; Commands</a></li> 
                        <?php if(isset($_SESSION['user_id'])): ?>
                            <li><a class="sid-dash nav nav-link align-middle position-relative side" href="<?= URLROOT; ?>/users/logout"> Logout &emsp;<i class="fas fa-sign-out-alt"></i></a></li>
                        <?php else :?>
                            <li><a class="sid-dash nav nav-link align-middle position-relative side" href="<?= URLROOT; ?>/users/signin"> Logout &emsp;<i class="fas fa-sign-out-alt"></i></a></li>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <div class="">
                        <button class="btn" id="sidebarToggle"><i class="fas fa-bars fs-4"></i></button>
                        <a href="<?= URLROOT; ?>" class="btn"><i class="fas fa-home fs-4"></i></a>
                        </div>
                        <form action="">
                            <input type="search" name="search" id="search">
                            <i class="ico fas fa-search"></i>
                        </form>
                    </div>
                </nav>