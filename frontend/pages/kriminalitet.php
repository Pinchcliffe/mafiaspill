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
        <div class="content">
            <h5 class="no-top"><i class="fa fa-home"></i> Kriminalitet</h5>
            <hr class="mafia-hr">
            <img class="content-banner img-responsive" src="frontend/design/images/banners/kriminalitet.png" />
            <hr class="mafia-hr">
            <p class="text-center">Her har du muligheten til å stjele penger. Hvor mye du stjeler varierer, men høyere rank gir deg bedre alternativer og høyere sannsynlighet for suksess.</p>

            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th width="77%">Handling</th>
                        <th width="23%">Sjanse</th>
                    </tr>
                </thead>
                <tbody class="radio-list">
                    <tr class="crimeOption">
                        <td class="Innhold"><input type="radio" name="valgt" id="valgt1" value="7"" /><label for="v7">Ran McDonalds.</label></td>
                        <td align="center" class="Innhold"><label class="hide-selector" for="v7">100 %</label></td>
                    </tr>
                    <tr class="crimeOption">
                        <td class="Innhold"><input type="radio" name="valgt" id="valgt2" value="8" /><label for="v8">Ran Elkjøp.</label></td>
                        <td align="center" class="Innhold"><label class="hide-selector" for="v8">96 %</label></td>
                    </tr>
                    <tr class="crimeOption">
                        <td class="Innhold"><input type="radio" name="valgt" id="valgt3" value="9" /><label for="v9">Ran Rema 1000.</label></td>
                        <td align="center" class="Innhold"><label class="hide-selector" for="v9">86 %</label></td>
                    </tr>
                    <tr class="crimeOption">
                        <td class="Innhold"><input type="radio" name="valgt" id="valgt4" value="10" /><label for="v10">Stjel fra et stort utested.</label></td>
                        <td align="center" class="Innhold"><label class="hide-selector" for="v10">76 %</label></td>
                    </tr>
                    <tr class="crimeOption">
                        <td class="Innhold"><input type="radio" name="valgt" id="valgt5" value="11" /><label for="v11">Stjel fra politiet sitt lager.</label></td>
                        <td align="center" class="Innhold"><label class="hide-selector" for="v11">66 %</label></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php
require_once("frontend/templates/Includes/right.php");
require_once("frontend/templates/Includes/footer.php");
?>