<html>
    <head>
    <?php 
        include 'libraries/libraries.php';
        include 'resources/script.php';
      ?>
      <link rel="stylesheet" href="resources/main.css">
    </head>
    <body class="bg">
        <nav>
            <?php
                require_once "resources/navbar.php";
            ?>
        </nav>     
        <div id="error">     
            <div class="content" >
                <form name="formLogin" id="formLogin" method="POST">
                    <div class="form-group mt-4" >
                        <input type="text" class="form-control w-75 mx-auto" name="usuario" id="usuario" placeholder="Nombre de usuario" required>
                        </div> 
                    <div class="form-group mt-4">
                        <input type="password" class="form-control w-75 mx-auto" name="pass" id="pass" placeholder="contraseña" required>
                    </div> 
                    
                    <div class=" contboton " >
                        <button type="submit" name="btnLogin" id="btnLogin" class="btn btn-dark mt-4">Iniciar Sesion</button>
                    </div> 
                </form>
                <form method="post">
                    <div class="contboton">
                        <input type="submit" name="btnRegistrar" id="btnRegistrar" class="btn btn-dark mt-4" value="Registrar"
                            onclick="window.open('register.php', '_blank', 'toolbar=yes, scrollbars=yes, resizable=yes, top=500, left=500, width=1000,height=800')"/>
                    </div>
                </form>
            </div>
        </div> 
            <?php
                if (isset($_POST['btnLogin'])) {
                    echo "<script>console.log('button click event')</script>";
                    //values from text fields
                    //$fieldUser = $_POST['usuario'];
                    //$fieldPass = $_POST['pass'];
                    try{
                        //object instance                     
                       $script=new dbConnect($_POST['usuario'], $_POST['pass']);
                        if ($script==true) {
                            echo "<script>console.log('this worked, user verified')</script>";
                            exit(header('Location: user/welcome.php'));
                        }else{

                        }    /*
                        $script->getBandera();
                        if($script==1){
                            echo "<script>$('#content').hide();</script>";
                        }*/
                    }catch (Exception $e){
                        echo 'Caught exception: ', $e->getMessage(), "\n";
                    }
                }
            ?>

            
            


       <!-- 

        validation script
        <script>
                            var x = document.forms["fieldUser"]["usuario"].value;
                            var y = document.forms["fieldPass"]["pass"].value;
                            if(x==""){
                                document.getElementById("text").innerHTML = "llenar campo usuario"
                            }
                            if(y==""){
                                document.getElementById("text").innerHTML = "llenar campo contraseña"
                            }
                        </script>


        parte de un codigo que trata sobre session
        /*if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true){
                echo '<div class="alert alert-primary alert-dismissible" role="alert">
                A simple primary alert—check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            }else{*/
        

        /*$loginOb = new dbConnect();
        call_user_func(array($loginOb, 'connection'));
        $user = $_POST['usuario'];
        $password = $_POST['pass'];
        $myobject = new myclass();

        $myobject::connection($user, $password);*/

        /*this is for the constructor
            $class_methods = get_class_methods(new Foo());

            foreach ($class_methods as $method_name) {
                echo "$method_name\n";
            }
            */   
            //namespace function call
            //call_user_func(__NAMESPACE__.'\Foo::test');



       <div class="content" >
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