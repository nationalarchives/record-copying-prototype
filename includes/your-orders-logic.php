<?php

if (isset($_GET['state']) && (!empty($_GET['state']))) {
    $state = $_GET['state'];
} else {
    $state = "Type not set";
}
?>