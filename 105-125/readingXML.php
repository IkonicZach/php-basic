<?php
$xml =<<<START
<code>
    <name>Athu</name>
    <age>20</age>
</code>
START;
    // $x = simplexml_load_file("myData.xml");
    // //print_r($x);

    // foreach($x as $key)
    //     echo $key."<br>";
    
    $x = simplexml_load_string($xml);
    print_r($x);
?>