<?php
// Array with names
$a[] = "Daxil";
$a[] = "Dhruvil";
$a[] = "Akshat";
$a[] = "Akash";
$a[] = "Kaushal";
$a[] = "Dhruvik";
$a[] = "Mikita";
$a[] = "Arvind";
$a[] = "Babita";
$a[] = "Deep";
$a[] = "Fahran";
$a[] = "Favad";
$a[] = "Ganesh";
$a[] = "Jignesh";
$a[] = "Hiren";
$a[] = "Krunal";
$a[] = "Henish";
$a[] = "Mrunal";
$a[] = "Naman";
$a[] = "Neal";
$a[] = "Paresh";
$a[] = "Preet";
$a[] = "Suresh";
$a[] = "Meet";
$a[] = "Shraddha";
$a[] = "Tirth";
$a[] = "Viraj";
$a[] = "Shubham";
$a[] = "Disha";
$a[] = "Nandini";
$a[] = "Dhramil";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>