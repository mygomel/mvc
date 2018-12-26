<?php
/**
 * Created by Maus 24.12.2018 7:03 mygomel@gmail.com
 */


namespace App\Models;

use App\Model;


class User extends Model
{
    public const TABLE = 'users';

    public $email, $name;


}