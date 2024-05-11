<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MACMA - Karta produktu</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/swiper-bundle.css" />
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./scss/main.css">
        <!-- Include Fancybox CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
        <style>
            /* Additional styling for Fancybox  modal */
            #zoomModal img {
                max-width: 100%;
                max-height: 100%;
                display: block;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <header> 
            <?php include "./components/common/topbar.php"; ?> 
            <?php include "./components/common/nav.php"; ?> 
        </header>
        <main id="main-wrapper">
            <div class="breadcrumbs container">
                <ul>
                    <li class="breadcrumb-item">
                        <a href="./index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Długopisy i artykuły piśmienne</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Długopisy metalowe</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Długopis metalowy</a>
                    </li>
                </ul>
            </div>
            <?php include "./components/product_card/product_card_gallery_info.php"; ?> 
            <?php include "./components/product_card/product_card_tabs.php"; ?> 
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
        <script src="./js/swiper/swiper-bundle.js"></script>
        <script src="./js/products_card_gallery/products_card_gallery.js"></script>
        <!-- Include Fancybox JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
        <script>
            $(document).ready(function(){
                // Add click event listener to product-download icons
                $(".product-download").click(function(e){
                    e.preventDefault(); // Prevent default action of anchor tag

                    // Get the URL of the image to be downloaded
                    var imageUrl = $(this).closest(".swiper-slide").find("img").attr("src");

                    // Create a temporary link element to trigger download
                    var downloadLink = document.createElement("a");
                    downloadLink.href = imageUrl;
                    downloadLink.download = "product_image.jpg"; // You can set the filename here
                    downloadLink.style.display = "none";
                    document.body.appendChild(downloadLink);
                    downloadLink.click();
                    document.body.removeChild(downloadLink);
                });

                // Add click event listener to product-zoom-in icons
                $(".product-zoom-in").click(function(e){
                    e.preventDefault(); // Prevent default action of anchor tag

                    // Get the URL of the image to be zoomed
                    var imageUrl = $(this).closest(".swiper-slide").find("img").attr("src");

                    // Open Fancybox modal with the zoomed image
                    $.fancybox.open({
                        src: imageUrl,
                        type: 'image',
                        // You can add more options for Fancybox here
                    });
                });
            });
        </script>

    </body>
</html>