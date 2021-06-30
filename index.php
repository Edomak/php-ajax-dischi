<?php 
    include __DIR__ . '/database/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jomhuria&family=Lato:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>php-ajax-dischi</title>
    </head>
    <body>
        <header>
            <img src="img/spotify.png" alt="logoSpotify">
            <h1>php-ajax-dischi</h1>
        </header>
        <main>
            <div class="container">
            <?php
                foreach ($dataDiscs as $disc){
            ?>
                <div class="disco_box">
                    <img 
                    src="<?php echo $disc['poster']?>" alt="Copertina Disco">
                    <h2>
                        <?php echo $disc['title']?>
                    </h2>
                    <p>
                        <?php echo $disc['author']?>
                    </p>
                    <p>
                        <?php echo $disc['year']?>
                    </p>
                </div>
                <?php } ?>
            </div>
        </main>
    </body>
</html>