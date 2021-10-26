<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liste</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>

<body>

    <header>
        <div class="container">
            <div class="justify-content-center mx-5 my-5 mt2">
                <h1 class="title mx-auto">Chez Doryan et Aurélien</h1>
                <h2 class="title mx-auto">Prendre son temps et se faire du bien</h2>
            </div>
        </div>
    </header>
    <div class="container">
        <table class="table table-striped justify-content-beetween">
            <a class="btn btn-success" href="index.php?action=categoryForm" title="ajouter">AJOUTER</a>
            <div class="container mx-5 mt-3 d-flex">
                <?php
                    if(is_array($categories) AND count($categories)>0):
                        foreach($categories as $oCategory):
                    ?>
                <tr class="justify-content-center">
                    <td> <img class="image-fluid" width="95%"
                            src="<?php echo $oCategory-> getPicture($dbc,$oCategory->getId()); ?>" alt=""></td>
                    <td> <h3 class="text-center mt-5"><?php echo $oCategory->getTitle(); ?><h3></td>
                    <td> <a class="btn btn-outline-info my-5"
                            href="index.php?action=categoryDetail&id=<?php echo $oCategory->getId();?>"
                            title="inspecter">Inspecter</a></td>
                    <td> <a class="btn btn-outline-warning my-5"
                            href="index.php?action=categoryForm&id=<?php echo $oCategory->getId();?>"
                            title="modifier">Modifier</a></td>
                    <td> <a class="btn btn-outline-danger my-5"
                            href="index.php?action=categoriesList&id=<?php echo $oCategory->getId();?>"
                            title="supprimer">Supprimer</a></td>
                </tr>

                <?php
                        endforeach;
                    endif;
                    ?>
        </table>
        <a class="btn btn-success" href="index.php?action=categoryForm" title="ajouter">AJOUTER</a>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>