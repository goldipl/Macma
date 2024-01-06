<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MACMA - Panel Klienta - Adresy dostaw</title>
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
        <main id="main-wrapper">
            <div class="dashboard-container container">
                <div class="dashboard-container__left">
                    <?php include "./components/dashboard/dashboard_menu.php"; ?> 
                </div>
                <div class="dashboard-container__right">
                    <?php include "./components/dashboard/dashboard_title.php"; ?>
                    <?php include "./components/dashboard/dashboard_logos_content.php"; ?> 
                </div>
            </div>
        </main>
        <footer> 
            <?php include "./components/common/footer.php"; ?> 
        </footer>
        <script>
            document.querySelector('.menu-links-box.big-orders > a:nth-of-type(6)').classList.add('active');
        </script>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/bootbox.min.js"></script>
        <script src="./js/select2.min.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/dashboard/dashboard_menu.js"></script>
        <script src="./js/dashboard/upload_logo.js"></script>
    </body>
</html>