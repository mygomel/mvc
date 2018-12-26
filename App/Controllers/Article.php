<?php
/**
 * Created by Maus 25.12.2018 7:34 mygomel@gmail.com
 */


namespace App\Controllers;


use App\Controller;

class Article extends Controller
{
    public function __invoke()
    {

        $this->view->article = \App\Models\Article::findById($_GET['id']);

        echo $this->view->render(__DIR__ . '/../../templates/article.php');
    }

}