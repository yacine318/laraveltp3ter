<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
        <div id="pagewidth" >
            <div id="header"><h1>Laravel- mon Applcation</h1></div>
            <div id="maincol"><h2>Tp3ter. Contexte Location </h2>
<form action=ajoutmat method="POST">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
<label>Location:</label>
<select name="cboLoc">
   <?php
   foreach($lesLoc as $uneLoc)
    {
      echo"<option value='".$uneLoc->idLocation."'>".$uneLoc->sonClient->villeClient." ".$uneLoc->dureeLocation." jours "."</option>";                  
    }
      ?>
</select>
<input type="submit" value = "valider">
</form>

 </div>
            <div id="leftcol"> <h2>Menu</h2>
                <ul>
                    <?php include('menuV.php'); ?>
                </ul>
            </div>
        </div>
    </body>
</html>

