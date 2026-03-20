<?php
//require_once "app/models/UsuarioModel.php";

class AuthController{

    public function login(){
        require_once "view/auth/login.php";
    }

    public function validar(){
        
        $usuario = $_POST['usuario'];
        //$password = $_POST['password'];

        $_SESSION['login'] = true;
        $_SESSION['usuario'] = $usuario;
        header("Location: ".BASE_URL."home");

        /*

        $modelo = new UsuarioModel();
        $user = $modelo->buscarUsuario($usuario);

        if($user && $user['password'] == $password){

            $_SESSION['login'] = true;
            $_SESSION['usuario'] = $user['usuario'];


            header("Location: /perfil/ver");

        }else{
            echo "Credenciales incorrectas";
        }


        */
    }

    public function recuperar(){
        echo "recuperando";
    }

    public function forgot(){
        require_once "view/auth/forgot.php";
    }

    public function logout(){
        session_destroy();
        header("Location: ".BASE_URL."index");
    }
}