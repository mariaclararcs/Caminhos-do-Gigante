<?php

class EcoturismoController{
    public function index(){
        $viewContent = file_get_contents("views/Ecoturismo.php");
        echo $viewContent;
    }
}