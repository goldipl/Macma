<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MACMA - Kreator sklepów i katalogów online - Klauzula</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>
        <header> <?php include "./components/common/topbar.php"; ?> <?php include "./components/common/nav.php"; ?> </header>
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
                    <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 85.2%" aria-valuenow="85.2" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <p>5. Banery</p>
                        </div>
                        <div class="common-steps-container-slot">
                            <p class="active">6. Klauzula</p>
                        </div>
                        <div class="common-steps-container-slot">
                            <p>7. Finalizacja</p>
                        </div>
                    </div>
                </div> <?php include "./components/shop_creator/shop_creator_step_six_content.php"; ?>
            </div>
        </main>
        <footer> <?php include "./components/common/footer.php"; ?> </footer>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/bootbox.min.js"></script>
        <script src="./js/select2.min.js"></script>
        <script src="./js/script.js"></script>
        <!-- Text Editor JS -->
        <script src="./js/text_editor/ckeditor.js"></script>
        <script>
            ClassicEditor.create(document.querySelector('#editor01'), {
                toolbar: ['undo', 'redo', '|', 'heading', '|', 'bold', 'italic', 'link', '|', 'blockQuote', 'bulletedList', 'numberedList', '|', 'alignment'],
                removePlugins: ['Image', 'MediaEmbed', 'CKFinder'],
                extraPlugins: ['Image'],
            }).catch(error => {
                console.error(error);
            });
            ClassicEditor.create(document.querySelector('#editor02'), {
                toolbar: ['undo', 'redo', '|', 'heading', '|', 'bold', 'italic', 'link', '|', 'blockQuote', 'bulletedList', 'numberedList', '|', 'alignment'],
                removePlugins: ['Image', 'MediaEmbed', 'CKFinder'],
                extraPlugins: ['Image'],
            }).catch(error => {
                console.error(error);
            });
            ClassicEditor.create(document.querySelector('#editor03'), {
                toolbar: ['undo', 'redo', '|', 'heading', '|', 'bold', 'italic', 'link', '|', 'blockQuote', 'bulletedList', 'numberedList', '|', 'alignment'],
                removePlugins: ['Image', 'MediaEmbed', 'CKFinder'],
                extraPlugins: ['Image'],
            }).catch(error => {
                console.error(error);
            });

            document.addEventListener('keydown', function(event) {
                const activeElement = document.activeElement;

                if (event.key === ' ' && activeElement.tagName === 'DIV' && activeElement.classList.contains('ck-editor__editable')) {
                    event.stopPropagation(); 
                }
            });
        </script>
        <style>
            .ck-editor__editable {
                outline: none;
                overflow-wrap: break-word;
                white-space: pre-wrap;
            }
        </style>
    </body>
</html>