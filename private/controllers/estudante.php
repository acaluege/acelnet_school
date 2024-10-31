<?php

/**
* Home Controller
*/
class Estudante extends Controller
{
     function index()
    {
        echo $this->view('estudante');
    }
}