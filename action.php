<?php

require_once "vendor/autoload.php";

use App\classes\Home;
use App\classes\Calculator;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }
} elseif (isset($_POST['oddBtn']))
{
    $oddEven = new oddEven($_POST);
    $result = $oddEven->index();
   include "pages/odd.php";

}