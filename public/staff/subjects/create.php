<?php
require_once('../../../private/initialize.php');

if (is_post_request()) {
    // Handle form values sent by new.php

    $menu_name = $_POST['menu_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Form parameters <br />";
    echo "Menu name: " . $menu_name . "<br />";
    echo "Menu name: " . $position . "<br />";
    echo "Menu name: " . $visible . "<br />";
} else {
    redirect_to(url_for('/staff/subjects/new.php'));
}
