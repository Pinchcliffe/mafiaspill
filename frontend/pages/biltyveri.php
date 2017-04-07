<?php
/**
 * Created by PhpStorm.
 * User: Haakon
 * Date: 07.04.2017
 * Time: 20.31
 */

include("system/globals.php");

require_once("frontend/templates/Includes/header.php");
require_once("frontend/templates/Includes/left.php");
?>

    <div class="col-md-8">
        <div class="gradient-border"></div>
        <div class="content">
            <h5 class="no-top">🚗 Biltyveri</h5>
            <hr class="mafia-hr">
            <img class="content-banner img-responsive" src="frontend/design/images/banners/biltyveri.png" />
            <hr class="mafia-hr">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>Handling</th>
                    <th class="text-center">Sjanse</th>
                </tr>
                </thead>
                <tbody class="radio-list">
                <tr class="crimeOption">
                    <td class="Innhold"><input type="radio" name="valgt" id="valgt1" value="7"" /> Stjel en bil på gaten.</label></td>
                    <td align="center" class="Innhold"><label class="hide-selector" for="v7">100 %</label></td>
                </tr>
                <tr class="crimeOption">
                    <td class="Innhold"><input type="radio" name="valgt" id="valgt2" value="8" /> Stjel en bil fra et parkeringshus.</label></td>
                    <td align="center" class="Innhold"><label class="hide-selector" for="v8">96 %</label></td>
                </tr>
                <tr class="crimeOption checked">
                    <td class="Innhold"><input type="radio" name="valgt" id="valgt3" value="9" /> Stjel en bil fra et bilsenter.</label></td>
                    <td align="center" class="Innhold"><label class="hide-selector" for="v9">86 %</label></td>
                </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-gradient btn-block">Utfør</button>
        </div>
    </div>

<?php
require_once("frontend/templates/Includes/right.php");
require_once("frontend/templates/Includes/footer.php");
?>