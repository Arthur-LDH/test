<?php
    if (isset($_POST['execute'])) {
        $commande = 'java -jar Test2.jar';
        
        $output = shell_exec($commande);

        echo "Script de Scraping executé.";
    }

    if (isset($_POST['load'])) {
        $txt = 'Resultat/java.txt';

        $contenu = file_get_contents($txt);

        $contenu !== false ? $contenu : "Impossible de lire le fichier.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Scraping</title>
</head>
<body class="w-100">
    <section class="d-flex justify-content-center w-100 mt-5 px-5">
        <div class="form-floating col-6">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 500px;"><?=$contenu?></textarea>
            <label for="floatingTextarea">Contenu du Scraping</label>
        </div>
    </section>
    <section class="d-flex justify-content-center gap-4 w-100 mt-5 px-5">
        <form method="post">
            <input type="submit" name="execute" class="btn btn-outline-primary" value="Start">
        </form>
        <form method="post">
            <input type="submit" name="load" class="btn btn-outline-success" value="Load">
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>