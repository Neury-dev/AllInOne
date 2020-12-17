<!DOCTYPE html>
<html>
<head>
    <title>Sistema JSON</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="last-modified" content="Thu, 18 Nov 2020 19:11:42 GMT">
    <link rel="stylesheet" href="front-css/sistema-JSON//sistema-JSON.css">
    <style>
        /*@import url("http://localhost/AllInOne/front-css/root.css");*/

    </style>
</head>
<body>
    <header>
        <h1><a href="http://localhost/AllInOne/index.php">AllInOne</a></h1>
    </header>
    <section class="n-grid">
        <section class="area-1">
            <h2>Sistema JSON</h2>
            <hr>
            <section>
                <a href="sistema_JSON.php">JSON</a>
                <!--a href="front/sistema_JSON/en_JavaScript.php">JSON en JavaScript</a-->
                <a href="front/sistema_JSON/en_PHP.php">JSON en PHP</a>
            </section>
            <hr>
            <div id="n-respuesta"></div>
        </section>
        <section class="area-2">
            <h3>Entrada de datos</h3>
        </section>
        <section class="area-3">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="crear" id="crear">
                <label for="id">
                    <input type="text" name="id" id="id" value="">
                </label>
                <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha">
                <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" placeholder="Marca">
                <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" placeholder="1">
                <input type="submit" name="crear" id="crear-envio" value="Crear">
            </form>
        </section>
        <section class="area-4">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="form-buscar" id="form-buscar">
                <label for="buscar">Buscar:</label>
                <input type="search" id="buscar" placeholder="Buscar...">
            </form>
        </section>
        <section class="area-5">
            <div>
            <table>
                <caption>Salida de datos</caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Marca</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th colspan="2">Gestionar</th>
                    </tr>
                </thead>
                <tbody id="n-leer">

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <label for="cantidad">Cantidad</label>
                                <select id="cantidad">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </form>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="form-por" id="form-por">
                                <label for="por">Por</label>
                                <select id="por" name="por">
                                    <option value="id">ID</option>
                                    <option value="fecha">Fecha</option>
                                    <option value="hora">Hora</option>
                                    <option value="marca">Marca</option>
                                    <option value="nombre">Nombre</option>
                                    <option value="precio">Precio</option>
                                </select>
                            </form>
                            <button id="n-ordenar">Decendente</button>
                        </td>
                    </tr>
                     <tr>
                        <td colspan="8">
                            <button class="n-anterior">Anterior</button>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="paginacion">
                                <label for="inicio-de-paginacion" hidden="">
                                    <input type="number" id="inicio-de-paginacion" value="" min="0" >
                                </label>
                            </form>
                            <button class="n-siguiente">Siguiente</button>
                        </td>
                    </tr>
                 </tfoot>
            </table>
            </div>
        </section>
    </section>
<script src="show/sistema-JSON//crud.js" async=""></script>
<script>

</script>
</body>
</html>
