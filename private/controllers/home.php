<?php

/**
* Home Controller
*/
class Home extends Controller
{
    function index()
    {
        echo $this->view('home');
    }
}