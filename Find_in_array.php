<?php
$names = ["Marcus", "James", "Danny", "Samuel"];
print_r($names);
echo '<br> Find "Thomas" <br>';
$find = "Thomas";

if (in_array($find, $names)) {
    echo "$find is in the array.\n";
} else {
    echo "$find is not in the array.\n";
}

echo '<br> Find "Danny" <br>';
$find = "Danny";
if (in_array($find, $names)) {
    echo "$find is in the array.\n";
} else {
    echo "$find is not in the array.\n";
}