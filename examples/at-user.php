<?php

require "../vendor/autoload.php";

use SSD\RegexKit\Factory;


echo Factory::atUser(
    'Hey @JohnDoe, thanks for sorting this out!',
    '/user/',
    [
        'target' => '_blank',
        'title' => 'View user profile'
    ]
);