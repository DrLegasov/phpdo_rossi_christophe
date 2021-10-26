<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Detail</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="">
    </head>
    <body>
        <div class="container mx-5 my-5">

            <?php
            if(!empty($oCategory)):
            ?>
            <h1><?php echo $oCategory->getTitle(); ?></h1>
            <p><?php echo $oCategory->getDescription(); ?></p>
            <ul>
                <li><?php echo $oCategory-> getPicture(); ?>
            </ul>
            <?php
            endif;
            ?> 
            <a class="btn btn-outline-dark" href="index.php?action=categoriesList"> RETOUR</a>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </body>
</html>