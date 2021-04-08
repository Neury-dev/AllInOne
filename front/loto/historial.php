<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Historial</title>
    <link rel="stylesheet" href="../../front-css/loto/header.css">
    <link rel="stylesheet" href="../../front-css/loto/nav.css">
    <link rel="stylesheet" href="../../front-css/loto/historial.css">
</head>
<body>
    <?php require_once '../../sql/loto/header_nav.php'; ?>
    
    <section>
<!-- Busqueda con AJAX -->
        <p><input type="text" placeholder="Historial: Buscar coincidencia..." onkeyup="buscarSorteo(this.value)"></p>
        <span id="mostrarHistorial"> <?php require_once '../../sql/loto/historial.php'; ?> </span>
    </section>
    
    <script type="text/javascript" src="../../show/loto/nav.js"></script>
<script src="../../show/loto/historial.js"></script>
</body>
</html>
