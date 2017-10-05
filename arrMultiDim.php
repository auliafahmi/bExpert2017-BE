<?php
    $nilai = array(
        "Budi" => array(
            "physics" => 35,
            "maths" => 30,
            "chemistry" => 39
        ),
        "Ani" => array(
            "physics" => 30,
            "maths" => 32,
            "chemistry" => 29
        ),
        "zara" => array(
            "physics" => 31,
            "maths" => 22,
            "chemistry" => 39
        )
    );

    echo "Marks for Budi in physics : ";
    echo $nilai['Budi']['physics'] . "<br />";
    echo "Marks for Ani in maths : ";
    echo $nilai['Ani']['maths'] . "<br />";
    echo "Marks for zara in chemistry : ";
    echo $nilai['zara']['chemistry'] . "<br />";
?>