<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EasyGifts - Konfigurator USB - Podsumowanie</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>
        <header> 
            <?php include "./components/common/topbar.php"; ?> 
            <?php include "./components/common/nav.php"; ?> 
        </header>
        <main id="main-wrapper" class="grey-background">
            <div class="breadcrumbs container">
                <ul>
                    <li class="breadcrumb-item">
                        <a href="./index.php">Strona główna</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span>Konfigurator USB</span>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="usb-title">
                    <h1 class="title">Konfigurator USB</h1>
                </div>
                <div class="progress common-progress-bar bg-white">
                    <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="common-steps-container bg-white w-100">
                    <div class="container">
                        <div class="common-steps-container-slot">
                            <p>1. Personalizacja pendrive’a</p>
                        </div>
                        <div class="common-steps-container-slot">
                            <p class="active">2. Podsumowanie</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "./components/usb_configurator/usb_config_main_wrapper_step_two.php"; ?> 
        </main>
        <footer> 
            <?php include "./components/common/footer.php"; ?> 
        </footer>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/bootbox.min.js"></script>
        <script src="./js/select2.min.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>