<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="">
    </head>
    <body>
        <div class="container mx-5 my-5">
            <form action="index.php?action=articleForm" method="post">
                <p>
                    <label for="title">Title</label><br>
                    <input type="text" name="title" id="title" value="<?php if(!empty($oArticle)) echo $oArticle->getTitle(); ?>"/>
                </p><hr>
                <p>
                    <label for="description">Description</label><br>
                    <textarea columns="30" rows="10"   name="description" id="description"><?php if(!empty($oArticle)) echo $oArticle->getDescription(); ?></textarea><hr>
                </p><hr>
                <p>
                    <label for="picture">Image</label><br>
                    <input type="url" name="picture" id="picture" value="<?php if(!empty($oArticle)) echo $oArticle->getPicture(); ?>"/>
                </p><hr>
                <p>
                    <label for="price">Prix</label><br>
                    <input type="number" name="price" id="price" value="<?php if(!empty($oArticle)) echo $oArticle->getPrice(); ?>"/>
                </p><hr>
                <?php if(!empty($oArticle)): ?><input type="hidden" name="id" id="id" value="<?php echo $oArticle->getId(); ?>"/><?php endif; ?>
                <input class="btn btn-success" type="submit" value="valider"/>
                <a class="btn btn-dark" href="index.php?action=articlesList"> RETOUR</a>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    </body>
</html> 