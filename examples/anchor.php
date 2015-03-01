<?php

require "../vendor/autoload.php";

use SSD\RegexKit\Factory;


echo Factory::anchor(
    'Visit documentation at http://github.com or for more info use http://google.com',
    [
        'target' => '_blank'
    ]
);