<?php

class TrilhasController{
    public function index(){
        $viewContent = file_get_contents("views/Trilhas.php");
        echo $viewContent;
    }
}