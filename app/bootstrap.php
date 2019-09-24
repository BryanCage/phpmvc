<?php

// Load config.php
require_once 'config/config.php';

// Autoload Core Libraries replacing the need for a list of requires statements
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});
