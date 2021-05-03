<?php
$a[] = "John";
$a[] = "Mike";
$a[] = "Mihir";
$a[] = "Ram";
$a[] = "Raj";
$a[] = "Shyam";

$query = $_REQUEST["q"];

$hint = "";

if ($query !== "") {
    $query = strtolower($query);
    $len = strlen($query);
    foreach ($a as $name) {
        if (stristr($query, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
echo $hint === "" ? "User Doesn't Exist" : $hint;
