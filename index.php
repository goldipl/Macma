<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MACMA | Strona główna</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link href="./css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/swiper-bundle.css" />
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>
        <header> 
            <?php include "./components/common/topbar.php"; ?> 
            <?php include "./components/common/nav.php"; ?> 
        </header>
        <main id="main-wrapper">
            <?php include "./components/main_page/swiper.php"; ?> 
        </main>
        <footer> 
            <?php include "./components/common/footer.php"; ?> 
        </footer>
        <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/swiper-bundle.js"></script>
        <script src="./js/swiper.js"></script>
    </body>
</html>