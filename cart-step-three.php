<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MACMA - Koszyk - Wysyłka</title>
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
            <div class="progress cart-progress-bar">
                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="cart-steps-container">
                <div class="container">
                    <div class="cart-steps-container-slot">
                        <p>1. Produkty</p>
                    </div>
                    <div class="cart-steps-container-slot">
                        <p>2. Znakowanie</p>
                    </div>
                    <div class="cart-steps-container-slot">
                        <p class="active">3. Wysyłka</p>
                    </div>
                    <div class="cart-steps-container-slot">
                        <p>4. Twoje dane</p>
                    </div>
                    <div class="cart-steps-container-slot">
                        <p>5. Finalizacja</p>
                    </div>
                </div>
            </div>
            <?php include "./components/cart/cart_step_three_content_delivery.php"; ?> 
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