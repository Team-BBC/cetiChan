<html>
    <head>
    <?php 
        require_once("libraries/libraries.php"); 
      ?>
      <link rel="stylesheet" href="resources/main.css">
    </head>
    <body class="bg">
        <nav>
            <?php
                require_once "resources/navbar.php";
            ?>
        </nav>
        <div class="content" >
            <div class="texto">Registrarse</div>
                <form action="bdd/newuser.php" name="form1" id="form1" method="POST">
                    <div class="form-group mt-4" >
                        <input type="text" class="form-control w-75 mx-auto" name="usuario" id="usuario" placeholder="Nombre de usuario">
                    </div> 
                    <div class="form-group mt-4" >
                        <input id="date" class="form-control w-75 mx-auto" name="date" type="date" min="1000-01-01" max="3000-12-31">
                    </div> 
                   
                    <div class="form-group mt-4">
                        <input type="email" class="form-control w-75 mx-auto" name="email" id="email" placeholder="Correo electronico">
                    </div> 
                    <div class="form-group mt-4">
                        <input type="password" class="form-control w-75 mx-auto" name="pass" id="pass" placeholder="contraseña">
                    </div> 
                    <div class="contboton" >
                        <button type="submit" class="btn btn-dark mt-4">Registrame!</button>
                    </div> 
                </form>
            </div>
        </div>
        <div>
            <footer class="footer py-3 bg-white mb-0" style="clear:both;">
                <span class="text-muted">Foro CetiChan</span>
            </footer>
        </div>
        
        
    </body>
</html>
