<?php
    $slug = isset($slug) ? $slug : 'home';
    $title = isset($title) ? $title.' - i21 Studio' : 'i21 Studio';
?>
<!doctype html>
<html lang='es'>
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	    <title><?php echo $title; ?></title>
        <link rel="shortcut icon" href="favicon.ico" />
        <meta name="description" content="En i21 damos vida a tus proyectos de arquitectura." />
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/main.min.css'); ?>" />
    </head>
    <body>
 <!--       
        <div class="row-fluid main-wrp">
            <div class="navbar navbar-static-top">
                <div class="navbar-inner">
                    <div class="navbar-wrapper">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-align-justify"></span>
                        </a>
                        <a class="brand" href="<?php echo site_url('/'); ?>">
                            <img src="<?php echo base_url('/assets/img/logo-nav.png'); ?>" alt="i21"/>
                        </a>
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li class="<?php echo $slug=='home' ? 'item active' : 'item'; ?>">
                                    <a href="<?php echo site_url('/'); ?>">Home</a>
                                </li>
                                <li class="<?php echo $slug=='services' ? 'item active' : 'item'; ?>">
                                    <a href="#">Services</a>
                                </li>
                                <li class="<?php echo $slug == 'how-it-works' ? 'item active' : 'item'; ?>">
                                    <a href="#">How it works</a>
                                </li>
                                <li class="<?php echo $slug=='about-us' ? 'item active' : 'item'; ?>">
                                    <a href="#">About us</a>
                                </li>
                                <li class="<?php echo $slug=='help' ? 'item active' : 'item'; ?>">
                                    <a href="#">Help</a>
                                </li>
                                <li class="<?php echo $slug=='my-account' ? 'item active' : 'item'; ?> dropdown">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="my-account-label" data-target="#">Account <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="my-account-label" >
                                        <li class="item" role="presentation">
                                            <a role="menuitem" href="#">Login</a>
                                        </li>
                                        <li class="item" role="presentation">
                                            <a href="#" role="menuitem">Sign up</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
-->
