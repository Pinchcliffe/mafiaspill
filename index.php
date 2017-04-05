<?php
/**
 * Created by PhpStorm.
 * User: Haakon
 * Date: 05.04.2017
 * Time: 18.00
 */

require_once("system/config.php");
require_once("system/functions.php");

if ($maintenance == true) {
    echo "Under maintenance";
}elseif($maintenance == false) {

    getPage();

}