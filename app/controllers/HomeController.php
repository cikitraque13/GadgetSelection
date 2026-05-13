<?php

require_once __DIR__ . '/../system/View.php';

class HomeController
{
    public function index()
    {
        View::render('pages/home/home');
    }
}