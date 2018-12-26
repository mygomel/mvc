<?php
/**
 * Created by Maus 25.12.2018 7:41 mygomel@gmail.com
 */


namespace App;


abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    abstract public function __invoke();

}