<?php
    require_once('connection.php');
    $sql= "SELECT COUNT(username) AS num FROM  usuarios WHERE username = :username";
    $stm = $conn -> prepare($sql);
    $stm -> bindValue(':username',$_POST["usuario"]);
    $stm -> execute();

    $cant = $stm ->fetch(PDO::FETCH_ASSOC);

    if($cant['num']>0){
        die('Este usuario ya existe');
    }else{
        $consulta = $conn -> prepare("INSERT INTO usuarios(username,password,email,birthdate) VALUES (:username,:password,:email,:birthdate)");
        $consulta -> bindParam(':username',$_POST["usuario"]);
        $consulta -> bindParam(':birthdate',$_POST["date"]);
        $consulta -> bindParam(':email',$_POST["email"]);
        $consulta -> bindParam(':password',$_POST["pass"]);
        

        $consulta->execute();

        header("location:../welcome.php");
    }

    
    
    
    

    
?>