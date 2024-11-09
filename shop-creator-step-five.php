<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MACMA - Kreator sklepów i katalogów online - Banery</title>
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
        <main>
            <div class="breadcrumbs container">
                <ul>
                    <li class="breadcrumb-item">
                        <a href="./index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Kreator sklepów i katalogów online</a>
                    </li>
                </ul>
            </div>
            <div class="shop-creator-wrapper container">
                <div class="shop-creator-title">
                    <h1>Kreator sklepów i katalogów online</h1>
                </div>
                <div class="progress common-progress-bar">
                    <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 71.0%" aria-valuenow="71.0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="common-steps-container">
                    <div class="container">
                        <div class="common-steps-container-slot">
                            <p>1. Adres</p>
                        </div>
                        <div class="common-steps-container-slot">
                            <p>2. Sklep</p>
                        </div>
                        <div class="common-steps-container-slot">
                            <p>3. Dane</p>
                        </div>
                        <div class="common-steps-container-slot">
                            <p>4. Ceny</p>
                        </div>
                        <div class="common-steps-container-slot">
                            <p class="active">5. Banery</p>
                        </div>
                        <div class="common-steps-container-slot">
                            <p>6. Klauzula</p>
                        </div>
                        <div class="common-steps-container-slot">
                            <p>7. Finalizacja</p>
                        </div>
                    </div>
                </div> 
                <?php include "./components/shop_creator/shop_creator_step_five_content.php"; ?>
            </div>
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