<?php
/**
 * Created by PhpStorm.
 * User: Haakon
 * Date: 05.04.2017
 * Time: 19.14
 */

function getPage() {

    if(isset($_GET['side'])) {
        $page = $_GET['side'];

        if($page == "hovedkvarter") {
            require_once("frontend/pages/hovedkvarter.php");
        }
        elseif($page == "krim") {
            require_once("frontend/pages/kriminalitet.php");
        }
        elseif($page == "biltyveri") {
            require_once("frontend/pages/biltyveri.php");
        }
    }
    else {
        require_once("frontend/pages/hovedkvarter.php");
    }

}