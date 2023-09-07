<?php
$r1 = 0;
$r2 = 0;
$d = 0;
for($i = 0; $i <50; $i++){
    $p1 = rand(0, 6);
    $p2 = rand(0, 6);
    if($p1 > $p2)
        $r1++;
    elseif($p1 < $p2)
        $r2++;
    else
        $d++;
    // if($p1 > $p2)
    //     echo "Player 1= $p1<br>Player 2= $p2.\n<h1>PLayer 1 wins.</h1>";
    // elseif($p1 < $p2)
    //     echo "Player 1= $p1<br>Player 2= $p2.\n<h1>PLayer 2 wins.</h1>";
    // else
    //     echo "Player 1= $p1<br>Player 2= $p2.\n<h1>Nobody wins. DRAW</h1>";
}
echo "50 matches played. <br>";
echo "Player 1 won $r1 times. <br>";
echo "Player 2 won $r2 times. <br>";
echo "$d times draw.";
?>