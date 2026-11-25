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
            <?php
             
             echo"<li><span class='vert gras'>".$laLoc->dureeLocation." jours : ".$laLoc->sonClient->nomClient."</span></li>";
             echo "<ul>";
             foreach($laLoc->sesMateriaux as $unMat)
                {
                    echo"<li>".$unMat->libelleMateriaux."</li>";
                }
                echo"</ul>";
                
             ?> 
<form action="ajoutmat2" method="POST">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
<input type = "hidden" name = "cboLoc" value = "<?php echo $laLoc->idLocation; ?>" />
<label>Matériaux:</label>

<select name="cboMat">
   <?php
   foreach($lesMateriaux as $unMat)
    {
      echo"<option value='".$unMat->idMateriaux."'>".$unMat->libelleMateriaux."</option>";                  
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

