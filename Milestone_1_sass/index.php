<?php 
require __DIR__ . "/src/server/server.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="dist/css/app.css">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/aa8b984e32.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <div id="app">

            <header class="bg_head d-flex justify-content-between align-items-center">

                <i class="fab fa-spotify mx-4"></i>

            </header>

            <main class="d-flex flex-wrap justify-content-center">
                <?php foreach ($dischi as $disco) { ?>
                    <div class="card bg_head">

                        <img src="<?php echo $disco["poster"] ?>" alt="">

                        <div class="title text-uppercase">
                            <?php echo $disco["title"] ?>
                        </div>

                        <div class="artist">
                            <?php echo $disco["author"] ?>
                        </div>

                        <div class="year">
                            <?php echo $disco["year"] ?>
                        </div>
                    
                    </div>
                <?php } ?>
            </main>

        </div>
        
        <!-- Vue JS -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <!-- AXIOS -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <!-- JS -->
        <script src="/dist/js/app.js"></script>
    </body>
</html>