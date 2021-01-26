<!DOCTYPE html>
<html>
<head>
    <style>
        figure {
            border: 1px #cccccc solid;
            padding: 4px;
            margin: auto;
        }

        figcaption {
            background-color: navy;
            color: white;
            font-weight: bolder;
            font-style: italic;
            padding: 2px;
            text-align: center;
        }

        img {
            width: 100px;
        }
    </style>
</head>
<body>
<?php
    require_once "client.php";
    $marca = $_REQUEST['marca'];
    $modelos = $client->ObtenerModelosPorMarca($marca);
?>
<h1>Modelos disponibles marca: <?= $marca ?></h1>
<?php
    foreach ($modelos as $modelo) {
?>
        <figure>
            <img src="images/<?= strtolower($marca) ?>.png" alt="logo <?= $marca ?>" />
            <figcaption><?= $modelo ?></figcaption>
        </figure>
<?php
    }
?>
</body>
</html>