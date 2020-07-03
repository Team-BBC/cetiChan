<html>
    <head>
    <?php 
        require_once("libraries/libraries.php"); 
      ?>
      <link rel="stylesheet" href="resources/main.css">
      <script src="resources/scripts.js"></script>
    </head>
    <body class="bg">
        <nav>
            <?php
                require_once "resources/navbar.php";
            ?>
        </nav>
        <?php
            if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true){
                echo '<div class="alert alert-primary alert-dismissible" role="alert">
                A simple primary alert—check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            }else{
                echo'<div class="content" >
                        <div class="texto">Login</div>
                    <form name="form1" id="form1" method="POST">
                        <div class="form-group mt-4" >
                            <input type="text" class="form-control w-75 mx-auto" name="usuario" id="usuario" placeholder="Nombre de usuario">
                            </div> 
                        <div class="form-group mt-4">
                            <input type="password" class="form-control w-75 mx-auto" name="pass" id="pass" placeholder="contraseña">
                        </div> 
                        
                        <div class=" contboton " >
                            <button type="submit" class="btn btn-dark mt-4">Iniciar Sesion</button>
                        </div> 
                    </form>
                    <form method="post">
                        <div class=" contboton  bd-highlight ">
                            <div class="p-2 bd-highlight">
                                <input type="button" name="btnRegistrar" onclick="window.location="register.php"" class="btn btn-dark" value="Registrar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>';
            }
        ?>
       <!-- <div class="content" >
            <div class="texto">Login</div>
                <form name="form1" id="form1" method="POST">
                    <div class="form-group mt-4" >
                        <input type="text" class="form-control w-75 mx-auto" name="usuario" id="usuario" placeholder="Nombre de usuario">
                    </div> 
                    <div class="form-group mt-4">
                        <input type="password" class="form-control w-75 mx-auto" name="pass" id="pass" placeholder="contraseña">
                    </div> 

                    <div class="contboton" >
                        <button type="submit" class="btn btn-dark mt-4">Iniciar Sesion</button>
                    </div> 
                </form>
                <form method="post">
                    <div class="contboton d-flex flex-row-reverse bd-highlight">
                        <div class="p-2 bd-highlight">
                            <input type="button" name="btnRegistrar" onclick="window.location='register.php'" class="btn btn-dark" value="Registrar">
                        </div>
                    </div>
                </form>
            </div>
        </div>-->
        <div>
        <?php
                require_once "resources/footer.php";
            ?>
        </div>
    </body>
</html>