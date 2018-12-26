<?php
/**
 * Created by Maus 24.12.2018 7:03 mygomel@gmail.com
 */


namespace App\Models;

use App\Model;


class Article extends Model
{
    public const TABLE = 'news';

    public $title, $content;

}