<?php

class MapaController{
    public function index(){
        $viewContent = file_get_contents("views/Mapa.php");
        echo $viewContent;
    }
}