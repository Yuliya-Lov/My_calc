<?php
if ((empty($_GET["first-num"]) && strlen($_GET["first-num"]) == 0) || (empty($_GET["second-num"]) && strlen($_GET["second-num"]) == 0)) {
    return "Fill in both arguments!";
}
if (empty($_GET["first-num"]) && strlen($_GET["first-num"]) == 0) {
    return "Fill in first argument!";
} elseif (empty($_GET["second-num"]) && strlen($_GET["second-num"]) == 0) {
    return "Fill in second argument!";
} else {
    if ($_GET["operartion"]== '+') {
        return ($_GET["first-num"] . ' + ' . $_GET["second-num"] . ' = ' . $_GET["first-num"] + $_GET["second-num"]);
    }
    if ($_GET["operartion"] == '-') {
        return ($_GET["first-num"] . ' - ' . $_GET["second-num"] . ' = ' . $_GET["first-num"] - $_GET["second-num"]);
    }
    if ($_GET["operartion"] == '*') {
        return ($_GET["first-num"] . ' * ' . $_GET["second-num"] . ' = ' . $_GET["first-num"] * $_GET["second-num"]);
    }
    if ($_GET["operartion"] == '/') {
        if ($_GET["second-num"] == 0 && strlen($_GET["second-num"]) > 0) {
            return 'The second argument in the division operation cannot be 0. '; 
        } else {
            return ($_GET["first-num"] . ' / ' . $_GET["second-num"] . ' = ' . $_GET["first-num"] / $_GET["second-num"]);  
        }
    } 
}