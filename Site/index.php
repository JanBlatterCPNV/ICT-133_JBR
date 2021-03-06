<?php
/**
 * 133-Start - index.php
 * User: Jan.BLATTER
 * Date: 16.12.2019
 */

require "controler/controler.php";              /*va sur la page controler.php , la page est requise. */

if (isset($_GET['action'])){            /* Si action est activé , alors va sur une des cases en fonction de l'utilisateur  */
    $action=$_GET['action'];
    switch ($action){                       /* Switch qui permet d'aller vers une page en fonction de l'action */
        case 'home' :
            home();
            break;
            case 'login':
            login(@$_POST);
            break;
        case 'logout':
            logout();
            break;
        case 'register':
            register();
            break;
        case 'products':
            products();
            break;

        default:
            home();
    }
}
else
{
    home();
}