<?php session_start();
$errores='';
$mensaje='';
//verificar que no haya una sesion activa
if(isset($_SESSION['usuario'])){
header('Location: sistemavacantes.php');
}
require 'conexiondb.php';
//recibir los datos de la misma pagina
if($_SERVER['REQUEST_METHOD']=='POST'){//si el metodo es igual al POST, si se enviaron.
    $email =filter_var(strtolower($_POST['correo']), FILTER_SANITIZE_STRING);//limpiamos la variable y la hacemos minuscula
    $clave_registro =filter_var($_POST['clave_registro'], FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

//encriptar las contraseñas
$password =  hash('sha512', $password);
$password2 = hash('sha512', $password2);
    

    if(empty($email) or empty($clave_registro) or empty($password) or empty($password2)){
      $errores .='<li>Por favor rellena todos los datos correctamente</li>';
    }else{
        
       $statement = $conexion->prepare('SELECT * FROM users WHERE email = :correo LIMIT 1');
       $statement->bindParam(':correo',$email);
       $statement->execute();

       //$statement->execute(array(':usuario'=>$name_usuario));
       $resultado = $statement->fetch();
       
       if($resultado != false){
         $errores .= '<li>Este usuario ya existe</li>';
       }

       if($password != $password2){
         $errores .= '<li>Las contraseñas no coinciden</li>';
       }
//se evalua, si la clave de registro es correcta
       $statement_clave = $conexion->prepare('SELECT * FROM claves_registro WHERE clave=:clave LIMIT 1');
       $statement_clave->execute(array(':clave'=>$clave_registro));
       $resultado_claves = $statement_clave->fetch();
       if ($resultado_claves == false) {
         $errores .= '<li>La clave de registro es incorrecta</li>';
       }
    }

    if($errores ==''){
      $statement = $conexion->prepare('INSERT INTO users(id,email,pass) VALUES(null,:correo,:password)');
      $statement->bindParam(':correo',$email);
      $statement->bindParam(':password',$password);
      $statement->execute();
     $mensaje .= 'Usuario creado exitosamente';
    }
}
?>