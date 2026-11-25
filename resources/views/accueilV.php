<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
        <div id="pagewidth" >
            <div id="header"><h1>Laravel - mon application</h1></div>
            <div id="maincol"><h2>tp3ter contexte Location</h2>
            <?php
             echo "<ul>";
             foreach($locations as $uneLoc)
                {
                    echo"<li><span class='vert gras'>".$uneLoc->dureeLocation." jours : ".$uneLoc->sonClient->nomClient."(  ".$uneLoc->sonClient->villeClient." )</span></li>";
                    echo "<ul>";
                    foreach($uneLoc->sesMateriaux as $unMat)
                    {
                        echo"<li><a href='".url('/materiauxsupprimer/'.$unMat->idMateriaux)."'>".$unMat->libelleMateriaux."</a></li>";
                    }
                    echo"</ul>";
                }
                echo"</ul>";
             ?>
            </div>
            <div id="leftcol"> <h2>Menu</h2>
                <ul>
                    <?php include('menuV.php'); ?>
                </ul>
            </div>
        </div>
    </body>
</html>