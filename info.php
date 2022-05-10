!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>activité</title>
</head>
<body>
         <?php

        $tabNum = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);
        $tabSuite = array("Carreau", "Trèfle", "Coeur", "Pique");
        for ($k=0; $k < 4 ; $k++) 
        { 
            for ($i=0; $i < 13 ; $i++) 
            { 
            $j = $i+$k*13;
            $tabCarte[$j]= $tabNum[$i] . "-" . $tabSuite[$k];
            }
        }
        for ($i=0; $i < 4 ; $i++) 
        { 
            $j=13*$i;
        }
        $paquet1 = array_slice($tabCarte, 0, 26);
        $paquet2 = array_slice($tabCarte, 26, 26);

        for ($i=0; $i < 2 ; $i++) 
        { 
            $j=13*$i;
        }
        for ($i=0; $i < 2 ; $i++) 
        { 
            $j=13*$i;
        }
        echo"<h3>Brassage des cartes<h3>";
        for ($p=0; $p < 26; $p++) { 
   
            $paquetBrasse[] = $paquet1[$p];
            $paquetBrasse[] = $paquet2[$p]; 
        }

        echo "<table>";
        for ($i=0; $i < 4 ; $i++) 
        { 
            $j=13*$i;
            echo "<tr>";
            echo "<td>$paquetBrasse[$j]</td><td>{$paquetBrasse[$j+1]}</td><td>{$paquetBrasse[$j+2]}</td><td>{$paquetBrasse[$j+3]}</td><td>{$paquetBrasse[$j+4]}</td><td>{$paquetBrasse[$j+5]}</td><td>{$paquetBrasse[$j+6]}</td><td>{$paquetBrasse[$j+7]}</td><td>{$paquetBrasse[$j+8]}</td><td>{$paquetBrasse[$j+9]}</td><td>{$paquetBrasse[$j+10]}</td><td>{$paquetBrasse[$j+11]}</td><td>{$paquetBrasse[$j+12]}</td>";
            echo "</tr>";
        }
        echo "</table>";