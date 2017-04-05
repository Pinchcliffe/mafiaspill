<?php
/**
 * Created by PhpStorm.
 * User: Haakon
 * Date: 05.04.2017
 * Time: 19.45
 */

include("system/globals.php");

require_once("frontend/templates/Includes/header.php");
require_once("frontend/templates/Includes/left.php");
?>

    <div class="col-md-8">
        <div class="gradient-border"></div>
        <div id="content">
            <h5 class="no-top"><i class="fa fa-home"></i> Kriminalitet</h5>
            <hr class="mafia-hr">
            <img class="content-banner img-responsive" src="frontend/design/images/banners/kriminalitet.png" />
            <hr class="mafia-hr">
            <h4 class="text-center">Ran butikk</h4>
        </div>
    </div>

<?php
require_once("frontend/templates/Includes/right.php");
require_once("frontend/templates/Includes/footer.php");
?>