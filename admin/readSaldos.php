<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Owner</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, inirial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/tablas.css">
    <link rel="stylesheet" href="../css/header.css">
</head>
<header>
</header>

<body>
    <?php
    require '../layout/headerAdmin.php'
    ?>
    </fieldset>
    <div>
        <div>
            <form action="" method="post" class="buscar">
                <label for="campo" ;>Buscar: </label>
                <input type="text" name="campo" id="campo" class="busca">
                <a style="border: 2px solid #fff;" href="registroSaldo.php">Add</a>
            </form><br>
        </div>
        <div class="table-container">
            <table class="container">


                <tr class="container">
                    <th>ID </th>
                    <th>Saldo</th>

                    <th>Nombre</th>
                    <th>Departamneto</th>

                    <th>accion</th>

                </tr>


                <tbody id="content">

                </tbody>


            </table>
        </div>
        <br><br><br><br>

    </div>





    </form>

    <script src="../js/buscadorSaldos.js"></script>
    <script src="confirmacion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>