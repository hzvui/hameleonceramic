<!DOCTYPE html>

<html>
<head>
    <title>Галерея - Хамелеон</title>
     <meta charset=»UTF-8″>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body {
        background: url(../../media/dark_green.jpg);
    background-repeat: no-repeat;
    background-size: 100%;
    }
    h1 {
        text-align: center;
    }
</style>
<body>
    <div style="background-color: aliceblue;" class="container">
    <div class="row">

    </div>
        <h1>Галерея</h1>
        <div class="row">
            <?php
            $imageDir = 'gallery-materials/'; // Директория с загруженными фотографиями
            $images = glob($imageDir . '*.{jpg,jpeg,png}', GLOB_BRACE); // Получаем список файлов с разрешенными расширениями
            
            if (!empty($images)) {
                foreach ($images as $image) {
                    echo '
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="' . $image . '" class="card-img-top" alt="Фотография">
                        </div>
                    </div>';
                }
            } else {
                echo '<p style ="text-align: center">Нет загруженных фотографий.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
