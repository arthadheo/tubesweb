<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Groceria</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled-1.css">
    <link rel="stylesheet" href="assets/css/untitled-2.css">
    <link rel="stylesheet" href="assets/css/untitled.css">

    <style>
    .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

        /* The actual popup */
        .popup .popuptext {
        visibility: hidden;
        width: 160px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -80px;
        }

        /* Popup arrow */
        .popup .popuptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
        }

        /* Toggle this class - hide and show the popup */
        .popup .show {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s;
        }

        /* Add animation (fade in the popup) */
        @-webkit-keyframes fadeIn {
        from {opacity: 0;} 
        to {opacity: 1;}
        }

        @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity:1 ;}
        }

        .align {
            align-items: center;
            display: flex;
            justify-content: center;
            }

            /* helpers/grid.css */

            :root {
            --gridMaxWidth: 24em;
            --gridWidth: 90%;
            }

            .grid {
            margin-left: auto;
            margin-right: auto;
            max-width: var(--gridMaxWidth);
            width: var(--gridWidth);
            }

            /* helpers/icon.css */

            .icon {
            display: inline-block;
            height: 1.25em;
            line-height: 1.25em;
            margin-right: 0.625em;
            text-align: center;
            vertical-align: middle;
            width: 1.25em;
            }

            .icon--info {
            background-color: #e5e5e5;
            border-radius: 50%;
            }

            /* layout/base.css */

            :root {
            --bodyBackgroundColor: #eaeaea;
            --bodyColor: #999;
            --bodyFontFamily: 'Helvetica', 'Arial';
            --bodyFontFamilyFallback: sans-serif;
            --bodyFontSize: 0.875rem;
            --bodyFontWeight: 400;
            --bodyLineHeight: 1.5;
            }

            *,
            *::before,
            *::after {
            box-sizing: inherit;
            }

            html {
            box-sizing: border-box;
            height: 100%;
            }

            body {
            background-color: var(--bodyBackgroundColor);
            font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
            font-size: var(--bodyFontSize);
            font-weight: var(--bodyFontWeight);
            line-height: var(--bodyLineHeight);
            margin: 0;
            min-height: 100%;
            }

            /* modules/anchor.css */

            :root {
            --anchorColor: inherit;
            --anchorHoverColor: #1dabb8;
            }

            a {
            color: var(--anchorColor);
            text-decoration: none;
            transition: color 0.3s;
            }

            a:hover {
            color: var(--anchorHoverColor);
            }

            /* modules/form.css */

            fieldset {
            border: none;
            margin: 0;
            }

            input {
            appearance: none;
            border: none;
            font: inherit;
            margin: 0;
            outline: none;
            padding: 0;
            }

            input[type='submit'] {
            cursor: pointer;
            }

            .form input[type='email'],
            .form input[type='password'] {
            width: 100%;
            }

            /* modules/login.css */

            :root {
            --loginBorderRadius: 0.25em;
            --loginHeaderBackgroundColor: #282830;

            --loginInputBorderRadius: 0.25em;
            }

            .login__header {
            background-color: var(--loginHeaderBackgroundColor);
            border-top-left-radius: var(--loginBorderRadius);
            border-top-right-radius: var(--loginBorderRadius);
            color: #fff;
            padding: 1.5em;
            text-align: center;
            text-transform: uppercase;
            }

            .login__title {
            font-size: 1rem;
            margin: 0;
            }

            .login__body {
            background-color: #fff;
            padding: 1.5em;
            position: relative;
            }

            .login__body::before {
            background-color: #fff;
            content: '';
            height: 0.5em;
            left: 50%;
            margin-left: -0.25em;
            margin-top: -0.25em;
            position: absolute;
            top: 0;
            transform: rotate(45deg);
            width: 0.5em;
            }

            .login input[type='email'],
            .login input[type='password'] {
            border: 0.0625em solid #e5e5e5;
            padding: 1em 1.25em;
            }

            .login input[type='email'] {
            border-top-left-radius: var(--loginInputBorderRadius);
            border-top-right-radius: var(--loginInputBorderRadius);
            }

            .login input[type='password'] {
            border-bottom-left-radius: var(--loginInputBorderRadius);
            border-bottom-right-radius: var(--loginInputBorderRadius);
            border-top: 0;
            }

            .login input[type='submit'] {
            background-color: #1dabb8;
            border-radius: var(--loginInputBorderRadius);
            color: #fff;
            font-weight: 700;
            order: 1;
            padding: 0.75em 1.25em;
            transition: background-color 0.3s;
            }

            .login input[type='submit']:focus,
            .login input[type='submit']:hover {
            background-color: #198d98;
            }

            .login__footer {
            align-items: center;
            background-color: #fff;
            border-bottom-left-radius: var(--loginBorderRadius);
            border-bottom-right-radius: var(--loginBorderRadius);
            display: flex;
            justify-content: space-between;
            padding-bottom: 1.5em;
            padding-left: 1.5em;
            padding-right: 1.5em;
            }

            .login__footer p {
            margin: 0;
            }

    </style>
</head>

<body style="height: 983;opacity: 1;font-size: 24; background-color: white">
    <div class="brands"></div>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1"><img class="img-fluid" src="assets/img/logo%20groceria.png" width="150" height="100">
                    <ul class="nav navbar-nav mx-auto" style="background-color: #fbfbfb;">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url('mainpage')?>">Beranda</a></li>
                        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Belanja</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Tentang Kami</a></li>
                    </ul><input type="search" style="border-color: #f6f5f5;opacity: 1;border-radius: 20px;width: 265px;font-size: 14px;padding: 4px;"><span class="navbar-text actions" style="width: 10px;"> </span><i class="fa fa-search" style="width: 24px;height: 24px;background-position: center;background-size: cover;font-size: 24px;"></i>
                    <span class="navbar-text actions" style="width: 10px;"> </span>
                        <i class="fa fa-shopping-cart" style="width: 24px;height: 24px;background-position: center;background-size: cover;font-size: 24px;"></i>
                    <span class="navbar-text actions" style="width: 10px;"> </span>
                    <a class="login-trigger fa fa-user" style="width: 24px;height: 24px;background-position: center;background-size: cover;font-size: 24px;" href="#" data-target="#login" data-toggle="modal"></a>

                        <div id="login" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            
                            <div class="modal-content">
                            <div class="modal-body">
                                <button data-dismiss="modal" class="close">&times;</button>
                                <h4>Login</h4>
                                <form>
                                <input type="text" name="username" class="username form-control" placeholder="Username"/>
                                <input type="password" name="password" class="password form-control" placeholder="password"/>
                                <input class="btn login" type="submit" value="Login" />
                                </form>
                                <a href="<?php echo base_url('daftar')?>"> belum punya akun? daftar disini </a>
                            </div>
                            </div>
                        </div>  
                        </div>
                    </div>
            </div>
        </nav>
    </div>

  
    </body>
    </html>