<?php 
include __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX DISCHI</title>
    <!-- bootstrap cdn css -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container-fluid py-3">
            <a href="#" class="logo">
                <img src="./img/logo.png" />
            </a>
        </div>
    </header>
    <main>
        <div class="container py-3 text-center">
            <label for="gender_album" class="text-white fs-3">Seleziona la tipologia dell'album</label>
            <div class="pt-2">
                <select>
                    <option value="">All</option>
                    <option value="rock">Rock</option>
                    <option value="pop">Pop</option>
                    <option value="jazz">Jazz</option>
                    <option value="metal">Metal</option>
                </select>
            </div>
        </div>

        <section>
            <div class="container">
                <div
                    class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">

                    <?php foreach($discs['response'] as $disco) :?>
                    <div class="col text-center p-4">
                        <div class="album h-100 p-3">
                            <div class="img_album">
                                <img src="<?= $disco['poster'] ?>" alt="<?= $disco['titile'] ?>" />
                            </div>
                            <h3 class="py-3">
                                <?= $disco['title'] ?>
                            </h3>
                            <div class="info">
                                <div class="author">
                                    <?= $disco['author'] ?>
                                </div>
                                <div class="year">
                                    <?= $disco['year'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>