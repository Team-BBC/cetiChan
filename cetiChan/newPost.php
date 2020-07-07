<html>
    <head>
        <?php
            include 'libraries/libraries.php';
        ?>
        <title>Nuevo Post</title>
        <link rel="stylesheet" href="resources/main.css">
    </head>
    <body >
        <?php
            require'resources/navbar.php';
        ?>
        <div class="container-md">
            <form>
                <div class="form-group">
                    <label for="titulo">Title</label>
                    <input type="text" id="titulo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" rows="4"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <button class="btn btn-outline-primary">Enviar</button>
                    </div>
                    <div class="form-group col-md-6">
                        <button class="btn btn-outline-secondary">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
        <!--footer-->
        <?php include 'resources/footer.php';
        ?>
    </body>
</html>