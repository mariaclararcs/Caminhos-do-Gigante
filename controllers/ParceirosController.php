<?php

class ParceirosController{
    public function index(){
        $viewContent = file_get_contents("views/Parceiros.php");
        echo $viewContent;
    }
}