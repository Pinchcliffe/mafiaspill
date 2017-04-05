<?php
/**
 * Created by PhpStorm.
 * User: Haakon
 * Date: 05.04.2017
 * Time: 19.24
 */

include("system/globals.php");

require_once("frontend/templates/Includes/header.php");
require_once("frontend/templates/Includes/left.php");
?>

    <div class="col-md-8">
        <div class="gradient-border"></div>
        <div class="content">
            <h5 class="no-top"><i class="fa fa-home"></i> Hovedkvarter</h5>
            <hr class="mafia-hr">
            <img class="content-banner img-responsive" src="frontend/design/images/banners/hovedkvarter.png" />
            <hr class="mafia-hr">
            <h4 class="text-center">Rankbar</h4>
            <div class="progress">
                <div class="progress-bar mafia-progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                    <span class="text-shadow">50%</span>
                </div>
            </div>
            <hr class="mafia-hr">
            <p class="text-center">
                91 350 av 150 000 exp<br/>
                2 exp i dag</p>
        </div>
    </div>

<?php
require_once("frontend/templates/Includes/right.php");
require_once("frontend/templates/Includes/footer.php");
?>