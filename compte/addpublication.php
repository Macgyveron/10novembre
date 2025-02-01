<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="10styl.css">
</head>

<body>


    <div class="addpublicationfond">
        <div class="addpublicationcorps">
            <div class="addpublicationentet">
                <h1>addpublication</h1>
            </div>
            <form class="addpublicationform" action="" method="post">
                <label class="addlabel1" for="addtitre">Entre le titre</label>
                <input name="addtitre" type="text" placeholder="Entrer le titre">
                <label class="addlabel2" for="addimage">Ajouter l'image</label>
                <input type="file" name="addimage" id="addimage">
                <label class="addlabel3" for="addcomentaire">Entrer votre commentaire</label>
                <div class="addtextarea"><textarea class="addtextarea" name="addcommentaire"
                        id="addcommentaire"></textarea></div>
                <input class="addsubmit" type="submit" value="ajouter">
            </form>

        </div>

    </div>

    <?php
        include("10footer.php");

?>
</body>

</html>