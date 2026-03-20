<?php

class Controller {

    public function __construct(){
        // Aquí puedes poner lógica común a todos los controladores
    }

    protected function auth(){

        if(!isset($_SESSION['login'])){
            header("Location: ".BASE_URL."auth/login");
            exit();
        }

    }

}