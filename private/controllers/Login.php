<?php

/**
* Home Controller
*/
class Login extends Controller
{
    function index()
    {
        echo $this->view('login');
    }
}