<?php
    $salaries = array("Budi" => 2000, "Ani" => 1000, "zara" => 500);
    echo "Salary of Budi is " . $salaries['Budi'] . "<br />";
    echo "Salary of Ani is " . $salaries['Ani'] . "<br />";
    echo "Salary of zara is " . $salaries['zara'] . "<br />";

    $salaries['Budi'] = "High";
    $salaries['Ani'] = "Medium";
    $salaries['zara'] = "Low";

    echo "Salary of Budi is " . $salaries['Budi'] . "<br />";
    echo "Salary of Ani is " . $salaries['Ani'] . "<br />";
    echo "Salary of zara is " . $salaries['zara'] . "<br />";

?>