<?php

class HomeController{
    public function index(){
        $viewContent = file_get_contents("views/Home.php");
        echo $viewContent;
    }
}