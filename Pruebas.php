<?php
require_once 'vendor/autoload.php';

$user = new \PhpsinLaravel2\Author('juan@hotmail.com', 'otros','AUTOR_DE_PLATZI');
$user->setName('Juan','Gonzalez');
echo $user->getFirstName();
var_dump($user);








/**
 *
 *
 * Created by PhpStorm.
 * User: alopez
 * Date: 18/09/2016
 * Time: 23:24
 */