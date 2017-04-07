<?php
/**
 * Created by PhpStorm.
 * User: Haakon
 * Date: 07.04.2017
 * Time: 20.57
 */

include("system/globals.php");

require_once("frontend/templates/Includes/header.php");
?>

    <div class="container">
        <div class="row">
    <div class="col-md-12">
        <div class="gradient-border"></div>
        <div class="content">
            <h5 class="no-top"><i class="fa fa-key"></i> Registrer deg</h5>
            <hr class="mafia-hr">

            <form>
                <div class="form-group">
                    <label for="username">Ønsket brukernavn</label>
                    <input type="text" class="form-control" id="username" placeholder="Ønsket brukernavn">
                </div>
                <div class="form-group">
                    <label for="password">Ønsket passord</label>
                    <input type="password" class="form-control" id="password" placeholder="Ønsket passord">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Jeg godtar betingelser
                    </label>
                </div>
                <button type="submit" class="btn btn-gradient">Registrer</button>
            </form>

        </div>
    </div>
        </div>
    </div>
<?php
require_once("frontend/templates/Includes/footer.php");
?>