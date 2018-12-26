<?php
/**
 * Created by Maus 25.12.2018 7:34 mygomel@gmail.com
 */


namespace App\Controllers;


use App\Controller;
use App\Models\Article;

class Index extends Controller
{
    public function __invoke()
    {

        $this->view->articles = Article::findAll();

        echo $this->view->render(__DIR__ . '/../../templates/index.php');
    }

}