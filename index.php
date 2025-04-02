<?php

$json_dischi = file_get_contents('./dischi.json');

$dischi = json_decode($json_dischi, true);

// var_dump($dischi);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
</head>
<body>
    <header class="p-3 bg-primary d-flex justify-content-between">
        <div class="height-50">Logo</div>
    </header>
    
    <main>
        <div class="container mt-4 d-flex flex-wrap col-8 gap-5">

            <?php foreach($dischi as $disco) { ?>

                <div class="card d-flex flex-column align-items-center text-center" style="width: 18rem;">
                <img src="<?php echo $disco["url_cover"] ?>" class="card-img-top" alt="<?php echo $disco["titolo"] ?>">
                <div class="card-body">
                    <p class="card-title fw-bold"> <?php echo $disco["titolo"] ?></p>
                    <p class="card-subtitle"> <?php echo $disco["artista"] ?></p>
                    <p class="card-subtitle"> <?php echo $disco["anno_pubblicazione"] ?></p>
                </div>
            </div>

            <?php } ?>
        </div>
    </main>
</body>
</html>