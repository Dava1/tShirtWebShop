<?php
class HomeController
{
    public function __construct()
    {
        require 'views/HomeView.php';
        $view = new HomeModel();
    }
}