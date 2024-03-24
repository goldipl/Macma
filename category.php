<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MACMA - Kategoria</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./scss/main.css">
        <!-- Breadcrumb schema -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://www.macma.pl/index.php"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Oferta",
                    "item": "https://www.macma.pl/oferta"
                }, {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Artykuły biurowe",
                    "item": "https://www.macma.pl/oferta/artykuly-biurowe"
                }]
            }
        </script>
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
                        <a href="./index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Oferta</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Artykuły biurowe</a>
                    </li>
                </ul>
            </div>
            <div class="category-wrapper">
                <div class="container">
                    <aside class="category-wrapper__left">
                        <?php include "./components/category/category_menu.php"; ?> 
                        <?php include "./components/category/category_left_filters.php"; ?> 
                    </aside>
                    <div class="category-wrapper__right">
                        <?php include "./components/category/category_top_filters.php"; ?> 
                        <?php include "./components/category/category_top_pagination.php"; ?> 
                        <?php include "./components/category/category_filters_main.php"; ?> 
                        <?php include "./components/common/pagination.php"; ?> 
                        <?php include "./components/category/category_seo_text.php"; ?> 
                    </div>
                </div>
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
        <script src="./js/category/show_menu.js"></script>
        <script src="./js/category/price_checkbox.js"></script>
    </body>
</html>