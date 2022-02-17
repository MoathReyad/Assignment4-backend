<?php
    echo "<h1> Exercise One:</h1>";
    $total = 0;
    for ($i=1; $i <= 30; $i++) { 
        $total += $i;
    }
    echo "The total numbers between 0 and 30 equels<strong> " . $total . "</strong>";

    // first for rows and second for columns
    echo "<h1> Exercise Two:</h1>";
    for ($x=0; $x < 5; $x++) { 
        for ($y=0; $y <= $x; $y++) { 
            echo "<strong>*</strong>" . " ";
        }
        echo "<br>";
    }

    echo "<h1>Exercise Three:</h1>";
    $factorial = 1;
    for ($z=8; $z >= 1; $z--) { 
        $factorial *= $z;
    }
    echo "The factorial of 8 is<strong> " . $factorial . "</strong>";

    echo "<h1>Exercise Four:</h1>";
    echo "<table style='border: 2px solid; border-collapse: collapse;'>";
        for ($r=1; $r <= 6; $r++) { 
            echo "<tr>";
                for ($c=1; $c <= 5; $c++) { 
                    echo "<td style='border: 2px solid;'>";
                        echo $r . " * " . $c . " = " . ($r*$c);
                    echo "</td>";
                }
            echo "</tr>";
        }
    echo "</table>"
?>