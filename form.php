<?php
    $name = htmlspecialchars($_POST['name']);

    if (!empty($name)) {
        echo "Hello, " . $name . "!";
    } else {
        echo "Please enter a name.";
    }

